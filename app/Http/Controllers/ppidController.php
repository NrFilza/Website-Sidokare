<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\pengajuan_ppid;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class ppidController extends Controller
{
    public function index(){
        $ppid = pengajuan_ppid::all();
        return view('formpengajuan', compact(['ppid']));
    }
    public function create()
    {
        return view('formpengajuan.create');
    }
    public function dashboard()
    {
        return view('ppid.dashboard');
    }
    public function store(Request $request){
        pengajuan_ppid::create($request->except(['_token','submit']));
        return redirect('/ppid');
    }
    public function edit($id){
        $ppid = pengajuan_ppid::find($id);
        return view('edit', compact(['ppid']));
    }
    public function update($id, Request $request)
    {
        $ppid = pengajuan_ppid::find($id);
        $ppid->update($request->except(['_token','submit']));
        return redirect('/formpengajuan');
    }
    public function destroy($id)
    {
        $ppid = pengajuan_ppid::find($id);
        $ppid->delete();
    
        return redirect()->route('/formpengajuan')->with('success', 'Berita deleted successfully.');
    }
    public function search(Request $request){
        if($request->has('search')){
            $ppid = pengajuan_ppid::where('nama_pelapor', 'LIKE', '%'.$request->search.'%')->get();
        }else{
            $ppid = pengajuan_ppid::all();
        }
        return view('formpengajuan',['ppid'=>$ppid]);
    }
    public function filter(Request $request){
        $mulai= "mulai";
        $selesai = "selesai";
        $ppid = pengajuan_ppid::whereDate('created_at', '>=', $mulai)
        ->whereDate('created_at','<=',$selesai)
        ->get();
        return view('formpengajuan', compact('ppid'));
    }
    public function downloadpdf(){
        $ppid = pengajuan_ppid::all();
        $pdf = PDF::loadView('formpengajuan',['ppid'=>$ppid]);
        return $pdf->download('laporan_ppid.pdf');
    }
}

