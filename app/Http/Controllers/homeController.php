<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Portofolio;
use App\Models\Project;
use App\Models\Service;
use App\Traits\Uploadable;

class homeController extends Controller
{
    use Uploadable;

    public function home()
    {
        return view('home', 
        [
            'namaDepan' => Home::pluck('namaDepan')->first(),
            'namaBelakang' => Home::pluck('namaBelakang')->first(),
            'instagram' => Home::pluck('instagram')->first(),
            'sosmed' => Home::pluck('instagram', 'linkedin', 'github')->first(),
            'linkedin' => Home::pluck('linkedin')->first(),
            'github' => Home::pluck('github')->first(),
            'glints' => Home::pluck('glints')->first(),
            'linkedin' => Home::pluck('linkedin')->first(),
            'judulIntroduction' => Home::pluck('judulIntroduction')->first(),
            'introduction' => Home::pluck('introduction')->first(),
            'foto' => Home::pluck('image')->first(),
            'service' => Home::pluck('service')->first(),
            'services' => Service::all(),
            'project' => Home::pluck('project')->first(),
            'kategori' => Project::all(),
        ]);
    }

    public function portofolio()
    {
        return view('portofolio', [
            'portofolio' => Home::pluck('portofolio')->first(),
            'dataPortofolio' => Portofolio::all()
        ]);
    }

    public function admin()
    {
        return view('admin');
    }

    public function formAdmin()
    {
        // Form HOME
        $judulKolom = [
            ['label' => 'First Name', 'name' => 'namaDepan'],
            ['label' => 'Last Name', 'name' => 'namaBelakang'],
            ['label' => 'Profession', 'name' => 'judulIntroduction'],
            ['label' => 'About Me', 'name' => 'introduction'],
            ['label' => 'Link Instagram', 'name' => 'instagram'],
            ['label' => 'Link Linkedin', 'name' => 'linkedin'],
            ['label' => 'Link Github', 'name' => 'github'],
            ['label' => 'Link Glints', 'name' => 'glints']
        ];
        $judulKolomText = [
            ['label' => 'Deskripsi Service', 'name' => 'service'],
            ['label' => 'Deskripsi Project', 'name' => 'project'],
            ['label' => 'Deskripsi Portofolio', 'name' => 'portofolio']
        ];

        // Form SERVICE & PROJECT
        $judulKolomService = [
            ['label' => 'UI/UX Design'],
            ['label' => 'Front End'],
            ['label' => 'Full Stack'],
            ['label' => 'Graphic Design'],
            ['label' => 'Networking'],
            ['label' => 'Hardware']
        ];

        $judulKolomProject = [
            ['label' => 'UI/UX Design'],
            ['label' => 'Front End'],
            ['label' => 'Back End'],
            ['label' => 'Graphic Design'],
            ['label' => 'Multimedia'],
            ['label' => 'Networking'],
            ['label' => 'Hardware']
        ];

        // Form PORTOFOLIO
        $judulKolomPortofolioPerusahaan = [
            ['label' => 'Nama Perusahaan', 'name' => 'namaPerusahaan'],
            ['label' => 'Jabatan', 'name' => 'jabatan'],
            ['label' => 'Status Pegawai', 'name' => 'statusPegawai']
        ];

        $judulKolomPortofolioOrganisasi = [
            ['label' => 'Nama Organisasi', 'name' => 'namaOrganisasi'],
            ['label' => 'Level Organisasi', 'name' => 'levelOrganisasi'],
            ['label' => 'Jabatan', 'name' => 'posisi'],
            ['label' => 'Tanggal Awal Menjabat', 'name' => 'tanggalAwalMenjabat'],
            ['label' => 'Tanggal Akhir Menjabat', 'name' => 'tanggalAkhirMenjabat']
        ];

        $judulKolomPortofolioPelatihan = [
            ['label' => 'Nama Pelatihan', 'name' => 'namaPelatihan'],
            ['label' => 'Penyelenggara', 'name' => 'penyelenggara'],
            ['label' => 'Tahun Sertifikasi', 'name' => 'tahunSertifikasi'],
            ['label' => 'Tahun Akhir', 'name' => 'tahunAkhir']
        ];

        $judulKolomPortofolioPrestasi = [
            ['label' => 'Nama Prestasi', 'name' => 'namaPrestasi'],
            ['label' => 'Level', 'name' => 'level'],
            ['label' => 'Tahun', 'name' => 'tahun'],
            ['label' => 'Pencapaian', 'name' => 'pencapaian']
        ];

        return view('formAdmin',[
            'judulKolom' => $judulKolom,
            'judulKolomText' => $judulKolomText,
            'judulKolomService' => $judulKolomService,
            'judulKolomProject' => $judulKolomProject,
            'judulKolomPortofolioPerusahaan' => $judulKolomPortofolioPerusahaan,
            'judulKolomPortofolioOrganisasi' => $judulKolomPortofolioOrganisasi,
            'judulKolomPortofolioPelatihan' => $judulKolomPortofolioPelatihan,
            'judulKolomPortofolioPrestasi' => $judulKolomPortofolioPrestasi
            ]);
        
    }

    // Proses Insert Data Home
    public function create(Request $request)
    {
        Home::create($request->except(['_token']));
        return redirect()->route('FormAdmin')->with('success', 'Data berhasil ditambahkan.');
    }

    // Proses Insert Data Service
    public function createService(Request $request)
    {
        foreach ($request->skill as $skills) {
            Service::create(['skill' => $skills]);
        }
        return redirect()->route('FormAdmin')->with('success', 'Data berhasil ditambahkan.');
    }

    // Proses Insert Data Project
    public function createProject(Request $request)
    {
        $req = $request->all();
        $images = $req['image'];
        $imageName = [];
        foreach($images as $image){
            $name = $this->uploadFile($image,  'uploads/project/', null);
            $imageName[] = $name;
        }
        $req['image'] = implode(', ', $imageName);

        Project::create($req);
        return redirect()->route('FormAdmin')->with('success', 'Data berhasil ditambahkan.');
    }

    // Detail Project
    public function project(Request $request,$id)
    {
        $res = Project::find($id);

        return response()->json([
            'status' => true,
            'data' => $res
        ]);
    }

    // Proses Insert Data Portofolio
    public function createPortofolio(Request $request)
    {
        $req = $request->all();

        // Cek apakah ada data foto perusahaan atau organisasi
        $hasPerusahaan = isset($req['fotoPerusahaan']) && !empty($req['fotoPerusahaan']);
        $hasOrganisasi = isset($req['fotoOrganisasi']) && !empty($req['fotoOrganisasi']);

        // Cek apakah salah satu dari perusahaan atau organisasi memiliki data
        if ($hasPerusahaan || $hasOrganisasi) {
            // Proses untuk data perusahaan
            if ($hasPerusahaan) {
                $images = $req['fotoPerusahaan'];
                $imageName = [];
                foreach ($images as $image) {
                    $name = $this->uploadFile($image,  'uploads/perusahaan', null);
                    $imageName[] = $name;
                }
                $req['fotoPerusahaan'] = implode(', ', $imageName);
            }

            // Proses untuk data organisasi
            if ($hasOrganisasi) {
                $imagesOrganisasi = $req['fotoOrganisasi'];
                $imageNameOrganisasi = [];
                foreach ($imagesOrganisasi as $image) {
                    $name = $this->uploadFile($image,  'uploads/organisasi', null);
                    $imageNameOrganisasi[] = $name;
                }
                $req['fotoOrganisasi'] = implode(', ', $imageNameOrganisasi);
            }
            // Buat entri Portofolio
            Portofolio::create($req);
            return redirect()->route('FormAdmin')->with('success', 'Data berhasil ditambahkan.');
        }
        // Buat entri Portofolio
        Portofolio::create($req);
        return redirect()->route('FormAdmin')->with('success', 'Data berhasil ditambahkan.');
    }
}