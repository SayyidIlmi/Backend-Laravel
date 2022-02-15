<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaModel;


class SiswaController extends Controller
{
    
  
    public function __construct()
    {
        $this->SiswaModel = new SiswaModel();
        $this->middleware('auth');
    }



    public function index()
    {
        $data = [
            'siswa' => $this->SiswaModel->allData(),

            ];
        return view('v_siswa', $data);
    }

    public function add()
    {
        return view('v_addsiswa');
    }

    public function detail($id)
    {
        if (!$this->SiswaModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'siswa' => $this->SiswaModel->detailData($id),
        ];
        return view('v_detailsiswa', $data);
    }

    public function insert()
    {
        Request()->validate([
            'nisn' => 'required|unique:tbl_siswa,nisn|min:10|max:10',
            'nama_siswa' => 'required',
            'guru_id' => 'required',
        ],[
            'nisn.required' =>'NISN Wajib Diisi !!',
            'nisn.unique' => 'NISN ini sudah dipakai !!',
            'nisn.min' => 'NISN 10 Karakter',
            'nisn.max' => 'NISN 10 Karakter',
            'nama_siswa.required' => 'Nama siswa Wajib Diisi !!',
            'guru_id.required' => 'Wali Kelas Wajib Diisi !!'
            
        ]);
            
    $data = [
        'nisn' => Request()->nisn,
        'nama_siswa' => Request()->nama_siswa,
        'guru_id' => Request()->guru_id,
        ];

    $this->SiswaModel->addData($data);
    return redirect()->route('siswa')->with('pesan', 'Data berhasil di tambahkan !!!');    
    }

    public function edit($id)
    {
        if (!$this->SiswaModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'siswa' => $this->SiswaModel->detailData($id),
        ];
        return view('v_editsiswa', $data);
    }

    public function update($id)
    {
        Request()->validate([
            'nisn' => 'required|min:10|max:10',
            'nama_siswa' => 'required',
            'guru_id' => 'required',
        ],[
            'nisn.required' =>'NISN Wajib Diisi !!',
            'nisn.unique' => 'NISN ini sudah dipakai !!',
            'nisn.min' => 'Min 10 Karakter',
            'nisn.max' => 'Max 10 Karakter',
            'nama_siswa.required' => 'Nama siswa Wajib Diisi !!',
            'guru_id.required' => 'Wali Kelas Wajib Diisi !!'
            
        ]);
            
    $data = [
        'nisn' => Request()->nisn,
        'nama_siswa' => Request()->nama_siswa,
        'guru_id' => Request()->guru_id,
        ];

    $this->SiswaModel->editData($id, $data);
    return redirect()->route('siswa')->with('pesan', 'Data berhasil di update !!!');    
    }
    public function delete($id)
    {
        $this->SiswaModel->deleteData($id);
        return redirect()->route('siswa')->with('pesan', 'Data berhasil di hapus !!!');    
 
   }


}
