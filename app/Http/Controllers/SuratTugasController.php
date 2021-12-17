<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\SuratTugas;
use App\Models\User;
use App\Models\TTD;
use Dompdf\Dompdf;

class SuratTugasController extends Controller
{
    public function submitKelMhs(Request $request){
        $nim = implode(",", $request->get('nim'));
        $name = implode(",", $request->get('name'));
        SuratTugas::create([
            'nim' => $nim,
            'name' => $name,
            'tglTugas' => $request->tglTugas,
            'tugas' => $request->tugas,
            'namaMitra' => $request->namaMitra,
            'alamatMitra' => $request->alamatMitra,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
            'jenis' => $request->jenis,
        ]);

        return redirect('/Mahasiswa/Home/ListSurat');
    }

    public function submitKelDsn(Request $request){
        $nim = implode(",", $request->get('nim'));
        $name = implode(",", $request->get('name'));
        SuratTugas::create([
            'nim' => $nim,
            'name' => $name,
            'tglTugas' => $request->tglTugas,
            'tugas' => $request->tugas,
            'namaMitra' => $request->namaMitra,
            'alamatMitra' => $request->alamatMitra,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
            'jenis' => $request->jenis,
        ]);

        return redirect('/Mahasiswa/Home/ListSurat');
    }

    public function submitKelAdm(Request $request){
        $nim = implode(",", $request->get('nim'));
        $name = implode(",", $request->get('name'));
        SuratTugas::create([
            'nim' => $nim,
            'name' => $name,
            'tglTugas' => $request->tglTugas,
            'tugas' => $request->tugas,
            'namaMitra' => $request->namaMitra,
            'alamatMitra' => $request->alamatMitra,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
            'jenis' => $request->jenis,
        ]);

        return redirect('/Admin/Home/ListPengajuan');
    }

    public function submitIndMhs(Request $request){
        $validateData = $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'tglTugas' => 'required',
            'tugas' => 'required',
            'namaMitra' => 'required',
            'alamatMitra' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
            'jenis' => 'required',
        ]);

        SuratTugas::create($validateData);
        return redirect('/Mahasiswa/Home/ListSurat');
    }

    public function submitIndDsn(Request $request){
        $validateData = $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'tglTugas' => 'required',
            'tugas' => 'required',
            'namaMitra' => 'required',
            'alamatMitra' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
            'jenis' => 'required',
        ]);

        SuratTugas::create($validateData);
        return redirect('/Dosen/Home/ListSurat');
    }

    public function submitIndAdm(Request $request){
        $validateData = $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'tglTugas' => 'required',
            'tugas' => 'required',
            'namaMitra' => 'required',
            'alamatMitra' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
            'jenis' => 'required',
        ]);

        SuratTugas::create($validateData);
        return redirect('/Admin/Home/ListPengajuan');
    }

    public function editMhs(SuratTugas $item){
        $data_user = User::where('nim', $item->nim)->get();
        return view('Mahasiswa\editTugas', compact('item', 'data_user'));
    }

    public function updateMhs(Request $request, SuratTugas $item){
        $validateData = $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'tglTugas' => 'required',
            'tugas' => 'required',
            'namaMitra' => 'required',
            'alamatMitra' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
            'jenis' => 'required',
        ]);
        SuratTugas::where('id', $item->id)->update($validateData);
        return redirect('/Mahasiswa/Home/ListSurat');
    }

    public function editDsn(SuratTugas $item){
        $data_user = User::where('nim', $item->nim)->get();
        return view('Dosen\editTugas', compact('item', 'data_user'));
    }

    public function updateDsn(Request $request, SuratTugas $item){
        $validateData = $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'tglTugas' => 'required',
            'tugas' => 'required',
            'namaMitra' => 'required',
            'alamatMitra' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
            'jenis' => 'required',
        ]);
        SuratTugas::where('id', $item->id)->update($validateData);
        return redirect('/Dosen/Home/ListSurat');
    }

    public function editAdm(SuratTugas $item){
        $data_user = User::where('nim', $item->nim)->get();
        return view('Admin\editTugas', compact('item', 'data_user'));
    }

    public function updateAdm(Request $request, SuratTugas $item){
        $validateData = $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'tglTugas' => 'required',
            'tugas' => 'required',
            'namaMitra' => 'required',
            'alamatMitra' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
            'jenis' => 'required',
        ]);
        SuratTugas::where('id', $item->id)->update($validateData);
        return redirect('/Admin/Home/ListPengajuan');
    }

    public function deleteMhs(SuratTugas $item){
        SuratTugas::destroy($item->id);
        return redirect('Mahasiswa/Home/ListSurat')->with('success', 'Surat Berhasil Dihapus!');
    }

    public function deleteDsn(SuratTugas $item){
        SuratTugas::destroy($item->id);
        return redirect('Dosen/Home/ListSurat')->with('success', 'Surat Berhasil Dihapus!');
    }

    public function deleteAdm(SuratTugas $item){
        SuratTugas::destroy($item->id);
        return redirect('Admin/Home/ListPengajuan')->with('success', 'Surat Berhasil Dihapus!');
    }

    public function detailAdmin(SuratTugas $item){
        $data_user = User::where('nim', $item->nim)->get();
        $nim = explode(",", $item->nim);
        $name = explode(",", $item->name);
        return view('TemplateSurat\detailTugas', compact('item', 'data_user', 'nim', 'name'));
    }

    public function setuju(Request $request, SuratTugas $item){
        $validateData = $request->validate([
            'status' => 'required',
            'ttd' => 'required',
        ]);
        SuratTugas::where('id', $item->id)->update($validateData);
        $suratTugas = SuratTugas::where('status', 'Sedang Diproses')->get();
        return view('Admin\listPengajuan', compact('suratTugas'));
    }

    public function tolak(Request $request, SuratTugas $item){
        $validateData = $request->validate([
            'status' => 'required',
        ]);
        SuratTugas::where('id', $item->id)->update($validateData);
        $suratTugas = SuratTugas::where('status', 'Sedang Diproses')->get();
        return view('Admin\listPengajuan', compact('suratTugas'));
    }

    public function detailMhs(SuratTugas $item){
        $data_user = User::where('nim', $item->nim)->get();
        $ttd = TTD::where('ttd', $item->ttd)->get();
        $nim = explode(",", $item->nim);
        $name = explode(",", $item->name);
        $pdf = \PDF::loadView('TemplateSurat\suratTugas', [
            'item' => $item,
            'data_user'=> $data_user,
            'ttd'=>$ttd,
            'nim'=>$nim,
            'name'=>$name,
        ]);
        return $pdf->download('Surat_Tugas.pdf');
        return redirect('Mahasiswa/Home/ListSurat');
    }

    public function detailDsn(SuratTugas $item, TTD $td){
        $data_user = User::where('nim', $item->nim)->get();
        $ttd = TTD::where('ttd', $item->ttd)->get();
        $nim = explode(",", $item->nim);
        $name = explode(",", $item->name);
        $pdf = \PDF::loadView('TemplateSurat\suratTugas', [
            'item' => $item,
            'data_user'=> $data_user,
            'ttd'=>$ttd,
            'nim'=>$nim,
            'name'=>$name,
        ]);
        return $pdf->download('Surat_Tugas.pdf');
        return redirect('Dosen/Home/ListSurat');
    }

    public function detailAdm(SuratTugas $item, TTD $td){
        $data_user = User::where('nim', $item->nim)->get();
        $ttd = TTD::where('ttd', $item->ttd)->get();
        $nim = explode(",", $item->nim);
        $name = explode(",", $item->name);
        $pdf = \PDF::loadView('TemplateSurat\suratTugas', [
            'item' => $item,
            'data_user'=> $data_user,
            'ttd'=>$ttd,
            'nim'=>$nim,
            'name'=>$name,
        ]);
        return $pdf->download('Surat_Tugas.pdf');
        return redirect('Admin/Home/ListSurat/SuratTugas');
    }

}
