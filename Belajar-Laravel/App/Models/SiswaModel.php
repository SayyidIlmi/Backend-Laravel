<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiswaModel extends Model
{
    public $sortguru_id = 'guru_id';
    public $sortDirection = 'asc';

    public function sortBy($guru_id)
    {
        $this->sortDirection = 'asc';
        $this->sortguru_id = $guru_id;
    }
    public function allData()
    {
        return DB::table('tbl_siswa')
            ->orderBy($this->sortguru_id, $this->sortDirection)
            ->leftJoin('tbl_guru','tbl_guru.id_guru','=','tbl_siswa.guru_id')
            ->paginate(15);
    }

public function detailData($id)
    {
        return DB::table('tbl_siswa')
        ->leftJoin('tbl_guru','tbl_guru.id_guru','=','tbl_siswa.guru_id')
        ->get()
        ->where('id', $id)
        ->first();       
    }

public function addData($data)
    {
        DB::table('tbl_siswa')
            ->insert($data);
    }
    public function editData($id, $data)
    {
        DB::table('tbl_siswa')
            ->where('id',$id)
            ->update($data);
    }
    public function deleteData($id)
    
    {
        DB::table('tbl_siswa')
             ->where('id',$id)
             ->delete(); 
    }
    
}

