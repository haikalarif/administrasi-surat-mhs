<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SuratCont extends Controller
{
    public function __construct()
    {
        $this->Surat = new Surat();
    }

    public function index()
    {
        $user = User::with(['user']);

        return view('surat.index', [
            'surat' => Surat::all(),
            'user' => $user
        ]);
    }

    public function create()
    {
        $user = User::all();

        return view('surat.tambah', [
            'user' => $user,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'noSurat' => 'required',
            'tglSurat' => 'required',
            'tglTerima' => 'required',
            'perihal' => 'required',
            'user_id' => 'required',
            'status' => '',
            'jns_surat' => 'required',
            'file_surat' => 'required',
        ]);

        if($request->file('file_surat')){
            $validatedData['file_surat'] = $request->file('file_surat')->store('surat');
        }

        Surat::create($validatedData);

        return redirect('/surat')->with('success','Surat Telah Berhasil Ditambahkan!!');
    }

    public function detail($id)
    {
        $surat = Surat::with(['user'])->findOrFail($id);

        return view('surat.detail', [
            'surat' => $surat
        ]);
    }

    public function edit($id)
    {
        $user = [
            'user' => User::all()];
        $item = [
            'item' => $this->Surat->detailsurat($id),
        ];
        return view('surat.edit', $item, $user);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'noSurat' => 'required',
            'tglSurat' => 'required',
            'tglTerima' => 'required',
            'perihal' => 'required',
            'status' => '',
            // 'user_id' => 'required',
            'jns_surat' => 'required',
        ]);

        $surat = [
            'noSurat' => Request()->noSurat,
            'tglSurat' => Request()->tglSurat,
            'tglTerima' => Request()->tglTerima,
            'perihal' => Request()->perihal,
            'status' => Request()->status,
            // 'user_id' => Request()->user_id,
            'jns_surat' => Request()->jns_surat,
        ];

        // $item = SuratMasuk::findOrFail($id);

        if($request->file('file_surat')){
            $validatedData['file_surat'] = $request->file('file_surat')->store('surat');
        }

        $this->Surat->updatesurat($id, $surat);
        // $item->update($validatedData);
        return redirect('/surat')->with('success','Surat Telah Berhasil Di Update!!');
    }

    public function delete($id)
    {
        $data = [
            'noSurat' => Request()->noSurat,
            'tglSurat' => Request()->tglSurat,
            'tglTerima' => Request()->tglTerima,
            'perihal' => Request()->perihal,
            'status' => Request()->status,
            // 'user_id' => Request()->user_id,
            'jns_surat' => Request()->jns_surat,
        ];
        $this->Surat->deletedata($id, $data);
        // DB::table('surats')->where('id',$id);
        // Surat::destroy($id);
        return redirect('/surat')->with('success', 'Surat Berhasil Di Hapus!!');
    }

    public function ajuan()
    {
        $user = User::all();

        $surat = DB::table('surats')->get();
        return view('surat.pengajuan', [
            'user' => $user,
            'surat' => $surat
        ]);
    }

    public function pengajuan(Request $request)
    {
        $validatedData = $request->validate([
            'noSurat' => 'required',
            'tglSurat' => 'required',
            'tglTerima' => 'required',
            'perihal' => 'required',
            'user_id' => 'required',
            'status' => '',
            'jns_surat' => 'required',
            'file_surat' => 'required',
        ]);

        if($request->file('file_surat')){
            $validatedData['file_surat'] = $request->file('file_surat')->store('surat');
        }

        Surat::create($validatedData);

        return redirect('/ajuan')->with('success','Surat Anda Telah Diajukan!');
    }
}
