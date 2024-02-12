<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{

    function Create1(){
        return view('welcome');
    }

    function Create(Request $request){
        $request->validate([
            'namaKaryawan' => ['required', 'min:5', 'max:20'],
            'umurKaryawan' => ['required','integer', 'min:21'],
            'alamatKaryawan' => ['required', 'min:10', 'max:40'],
            'nomorKaryawan' => ['required', 'min:9', 'max:12'],
        ]);

        Karyawan::create([
            'namaKaryawan' => $request -> namaKaryawan,
            'umurKaryawan' => $request -> umurKaryawan,
            'alamatKaryawan' => $request -> alamatKaryawan,
            'nomorKaryawan' => $request -> nomorKaryawan,
        ]);

        return redirect('/create');
    }

    function viewKaryawan(){
        $karyawans = Karyawan::all();
        return view('viewKaryawan', compact('karyawans'));
    }

    function editKaryawan($id){
        $karyawan = Karyawan::find($id);
        return view('editKaryawan', compact('karyawan'));
    }

    function updateKaryawan(Request $request, $id){

        $request->validate([
            'namaKaryawan' => ['required', 'min:5', 'max:20'],
            'umurKaryawan' => ['required','integer', 'min:21'],
            'alamatKaryawan' => ['required', 'min:10', 'max:40'],
            'nomorKaryawan' => ['required', 'min:9', 'max:12', 'regex:/^08/'],
        ]);

        Karyawan::find($id)->update([
            'namaKaryawan' => $request -> namaKaryawan,
            'umurKaryawan' => $request -> umurKaryawan,
            'alamatKaryawan' => $request -> alamatKaryawan,
            'nomorKaryawan' => $request -> nomorKaryawan,
        ]);
        // echo 'test';

        return redirect('/view-karyawan');
    }

    function deleteKaryawan($id){
        Karyawan::destroy($id);
        return redirect('/view-karyawan');
    }
}
