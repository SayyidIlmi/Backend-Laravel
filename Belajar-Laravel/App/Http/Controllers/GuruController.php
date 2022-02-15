<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruModel;



class GuruController extends Controller    
{
    public function __construct()
    {
        $this->GuruModel = new GuruModel();
        $this->middleware('auth');
    }

    public function index()
    {


            $data = [
                'guru' => $this->GuruModel->allData(),
                
            ];
        return view('v_guru', $data);
    }

    public function add()
    {
        return view('v_addguru');
    }

    public function detail($id_guru)
    {
        if (!$this->GuruModel->detailData($id_guru)) {
            abort(404);
        }
        $data = [
            'guru' => $this->GuruModel->detailData($id_guru),
        ];
        return view('v_detailguru', $data);
    }

    public function insert()
    {
        Request()->validate([
            'nip' => 'required|unique:tbl_guru,nip|min:10|max:10',
            'nama_guru' => 'required',
            'mapel' => 'required',
        ],[
            'nip.required' =>'NIP Wajib Diisi !!',
            'nip.unique' => 'NIP ini sudah dipakai !!',
            'nip.min' => 'Min 10 Karakter',
            'nip.max' => 'Max 10 Karakter',
            'nama_guru.required' => 'Nama Guru Wajib Diisi !!',
            'mapel.required' => 'Mata Pelajaran Wajib Diisi !!'
            
        ]);
            
    $data = [
        'nip' => Request()->nip,
        'nama_guru' => Request()->nama_guru,
        'mapel' => Request()->mapel,
        ];

    $this->GuruModel->addData($data);
    return redirect()->route('guru')->with('pesan', 'Data berhasil di tambahkan !!!');    
    }

    public function edit($id_guru)
    {
        if (!$this->GuruModel->detailData($id_guru)) {
            abort(404);
        }
        $data = [
            'guru' => $this->GuruModel->detailData($id_guru),
        ];
        return view('v_editguru', $data);
    }

    public function update($id_guru)
    {
        Request()->validate([
            'nip' => 'required|min:10|max:10',
            'nama_guru' => 'required',
            'mapel' => 'required',
        ],[
            'nip.required' =>'NIP Wajib Diisi !!',
            'nip.unique' => 'NIP ini sudah dipakai !!',
            'nip.min' => 'Min 10 Karakter',
            'nip.max' => 'Max 10 Karakter',
            'nama_guru.required' => 'Nama Guru Wajib Diisi !!',
            'mapel.required' => 'Mata Pelajaran Wajib Diisi !!'
            
        ]);
            
    $data = [
        'nip' => Request()->nip,
        'nama_guru' => Request()->nama_guru,
        'mapel' => Request()->mapel,
        ];

    $this->GuruModel->editData($id_guru, $data);
    return redirect()->route('guru')->with('pesan', 'Data berhasil di update !!!');    
    }
    public function delete($id_guru)
    {
        $this->GuruModel->deleteData($id_guru);
        return redirect()->route('guru')->with('pesan', 'Data berhasil di hapus !!!');    
 
   }

}