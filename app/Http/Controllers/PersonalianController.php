<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\Personalian;
use App\Models\User;
use App\Models\TTD;

class PersonalianController extends Controller
{
    public function submit(Request $request){
        $validateData = $request->validate([
            'hal' => 'required',
            'ambilSurat' => 'required',
            'keterangan' => 'required',
        ]);

        Personalian::create($validateData);
        return redirect('/Admin/Home/ListSurat/Personalian');
    }

    public function show(){
        $personalian = Personalian::all();
        return view('Admin\ListSurat\listPersonalian', compact('personalian'));
    }

    public function detail(Personalian $item){
        $pdf = \PDF::loadView('TemplateSurat\personalia', compact('item'));
        return $pdf->download('Personalian.pdf');
        $personalian = Personalian::all();
        return view('Admin\ListSurat\listPersonalian', compact('personalian'));
    }
}
