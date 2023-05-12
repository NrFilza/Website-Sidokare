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
        return view('ppid.create');
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
        $berita = pengajuan_ppid::findOrFail($id);
        $berita->delete();
    
        return redirect()->route('berita.index')->with('success', 'Berita deleted successfully.');
    }
    // public function destroy($id){
    //     $ppid = pengajuan_ppid::find($id);
    //     $ppid->delete();
    //     return redirect('/formpengajuan');
    // }
    // public function exportPdf($id){
    //     $ppid = pengajuan_ppid::find($id);
    //     $pdf = Pdf::loadview('pdf.export-book', ['ppid'=>$ppid]);
    //     return $pdf->download('pengajuan PPID SIDOKARE-'.Carbon::now()->timestamp);
    // }
}
