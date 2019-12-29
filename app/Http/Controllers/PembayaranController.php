<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\pembayaran;
use Alert;


class PembayaranController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function pembayaran()
    {
        return view('tampilanpengguna.pembayaran');
    }
    public function store(Request $request)
    {
        $id = DB::table('pembayaran')->insertGetId([
            'nama_lengkap' => $request['nama_lengkap'],
            'id_users'=>Auth::user()->id,
            'atas_nama' => $request['atas_nama'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'handphone' => $request['handphone'],
            'nominal' => $request['nominal'],
            'akad_donasi' => $request['akad_donasi'],
            'bank' => $request['bank']
        ]);
        return redirect('/unggahbukti'.'/'.$id);
    }
    public function edit($id)
    {
        $pembayaran = pembayaran::find($id);
        return view('admin.editPembayaran', compact('pembayaran'));
    }

    public function unggah($id){
            $pembayaran = DB::table('pembayaran')->find($id);
            return view('tampilanpengguna.unggahbukti', compact('pembayaran'));
    }
    public function updateunggah($id, Request $request){
        $file = $request->file('unggah_bukti');
        $contents = File::get($file);
        $ex = $file->getClientOriginalExtension();
        $namafile = 'gbr' . date('y-m-d') . '.' . $ex;
        Storage::put($namafile, $contents);
        $unggah_bukti = url("/storage/{$namafile}");
        $pembayaran = pembayaran::find($id);
        $pembayaran->unggah_bukti = $unggah_bukti;
        $pembayaran->status="Menunggu";
        $pembayaran->save();
        alert()->success('data akan ditinjau', 'Berhasil')->persistent('close');
        return redirect('/tbpembayaran');
    }
    public function tablezakatuser()
    {
        $iduser=Auth::user()->id;
        $pembayaran = pembayaran::where('id_users',$iduser)->get();
        return view('tampilanpengguna.tablepembayaran', compact('pembayaran'));
    }
    public function verifikasibelumbayar()
    {  
        $pembayaran = pembayaran::where('status','Menunggu')->get();
        return view('admin.verifikasibelumbayar', compact('pembayaran'));
    }
    public function terkonfirmasi()
    {  
        $pembayaran = pembayaran::where('status','Lunas')->get();
        return view('admin.terkonfirmasi', compact('pembayaran'));
    }
    public function tangkapverifikasi($id){
        $pembayaran=pembayaran::find($id);
        $pembayaran->status="Lunas";
        $pembayaran->save();
        return redirect('terkonfirmasi');
    }   
    public function Pembayaranterverifikasi($id){
        $pembayaran=pembayaran::find($id);
        $pembayaran->status="Lunas";
        $pembayaran->save();
        return redirect('tbpembayaran');
    }   
    public function ditolak()
    {  
        $pembayaran = pembayaran::where('status','Ditolak')->get();
        return view('admin.ditolak', compact('pembayaran'));
    }   
        public function verifikasiditolak($id){
        $pembayaran=pembayaran::find($id);
        $pembayaran->status="Ditolak";
        $pembayaran->save();
        return redirect('ditolak');
    } 
    public function belumbayar()
    {  
        $pembayaran = pembayaran::where('status','belum bayar')->get();
        return view('admin.belumbayar', compact('pembayaran'));
    }
}
