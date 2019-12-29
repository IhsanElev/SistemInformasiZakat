<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\berita;
use Alert;
use Dotenv\Regex\Success;

class BeritaController extends Controller
{
    public function berita()
    {
        $berita = DB::table('berita')->paginate(10);
        return view('admin.tableberita', compact('berita'));
    }
    public function tambahberita(Request $request)
    {
        // menyimpan data file yang diupload ke variabel $file

        $file = $request->file('thumbnail');
        $contents = File::get($file);
        $ex = $file->getClientOriginalExtension();
        $namafile = 'gbr' . date('y-m-d') . '.' . $ex;


        Storage::put($namafile, $contents);
        $thumbnail = url("/storage/{$namafile}");

        $berita = new berita();
        $berita->title = $request['title'];
        $berita->isi = $request['isi'];
        $berita->thumbnail = $thumbnail;
        $berita->tanggal = date('y-m-d');
        $berita->status = 'aktif';
        $berita->save();
        alert()->success('data telah ditambahkan', 'Berhasil')->persistent('close');
        return redirect('berita');
    }
    public function tampilberita()
    {
        $berita=DB::table('berita')->paginate(3);
        return view('tampilanpengguna.listberita', compact('berita'));
    }
    public function edit($id)
    {
        $berita = berita::find($id);
        return view('admin.editBerita', compact('berita'));
    }
    public function update($id, Request $request)
    {
        $file = $request->file('thumbnail');
        $contents = File::get($file);


        $ex = $file->getClientOriginalExtension();

        $namafile = 'gbr' . date('y-m-d') . '.' . $ex;
        Storage::put($namafile, $contents);
        $thumbnail = url("/storage/{$namafile}");
        $berita = berita::find($id);
        $berita->title = $request['title'];
        $berita->isi = $request['isi'];
        $berita->thumbnail = $thumbnail;
        $berita->tanggal = date('y-m-d');
        $berita->status = 'aktif';
        $berita->save();
       
        return redirect('berita')->with( alert()->success('data berhasil diubah', 'Berhasil')->persistent('close'));
    }
    public function detailBerita($id, Request $request)
    {
        $berita = berita::find($id);
        $berita = berita::where('id',$id)->get();
        return view('tampilanpengguna.detailberita', compact('berita'));
    }
    public function destroy($id)
    {
        berita::destroy($id);
        return redirect('/berita')->with(alert()->success('data berhasil dihapus','Terhapus')->persistent('close'));
       
    }
    public function previewBerita($id, Request $request)
    {
        $berita = berita::find($id);
        $berita = berita::where('id',$id)->get();
        return view('admin.previewberita', compact('berita'));
    }
   
}
