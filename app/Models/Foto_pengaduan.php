<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto_pengaduan extends Model
{
    use HasFactory;
    protected $table = 'foto_pengaduans';
    protected $fillable= [
        'pengaduan_id',
        'foto'
    ];
    public function pengaduan(){
        return $this->belongsTo('App\Models\Pengaduan','pengaduan_id');
    }
    public function Foto_pengaduan(){
        return $this->hasMany('App\Models\Pengaduan');
    }
}
