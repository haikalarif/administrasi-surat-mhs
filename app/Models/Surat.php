<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Surat extends Model
{
    use HasFactory;

    protected $fillable = [
        'noSurat',
        'tglSurat',
        'tglTerima',
        'perihal',
        'user_id',
        'jns_surat',
        'file_surat'
    ];

    protected $hidden = [];

    public function detailsurat($id)
    {
        return DB::table('surats')->where('id', $id)->first();
    }
    public function updatesurat($id, $item)
    {
        return DB::table('surats')
        ->where('id', $id)
        ->update($item);
    }

    public function deletedata($id)
    {
        DB::table('surats')
        ->where('id',$id)
        ->delete();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }   
}
