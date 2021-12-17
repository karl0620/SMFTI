<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\SuratKeputusanDekan;
use App\Models\User;

class SuratKeputusanDekanController extends Controller
{
    public function submit(Request $request){
        $menimbang = implode(";", $request->get('menimbang'));
        $mengingat = implode(";", $request->get('mengingat'));
        $menetapkan = implode(";", $request->get('menetapkan'));
        SuratKeputusanDekan::create([
            'judul' => $request->judul,
            'menimbang' => $menimbang,
            'mengingat' => $mengingat,
            'menetapkan' => $menetapkan,
        ]);

        return redirect('/Admin/Home/ListSurat/SKDekan');
    }

    public function show(){
        $skdekan = SuratKeputusanDekan::all();
        return view('Admin\ListSurat\listSKDekan', compact('skdekan'));
    }

    public function detail(SuratKeputusanDekan $item){
        $menimbang = explode(";", $item->menimbang);
        $mengingat = explode(";", $item->mengingat);
        $menetapkan = explode(";", $item->menetapkan);
        $pdf = \PDF::loadView('TemplateSurat\SKDekan', compact('item', 'menimbang', 'mengingat', 'menetapkan'));
        return $pdf->download('SKDekan.pdf');
        $skdekan = SuratKeputusanDekan::all();
        return view('Admin\ListSurat\listSKDekan', compact('skdekan'));
    }
}
