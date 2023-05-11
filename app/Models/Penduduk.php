<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function dusun()
    {
        return $this->belongsTo(Dusun::class);
    }

    public function bantuan()
    {
        return $this->hasMany(Bantuan::class);
    }

    public function perangkat()
    {
        return $this->hasMany(Perangkat::class);
    }

    public function ktp()
    {
        return $this->hasMany(Ktp::class);
    }

    public function kematian()
    {
        return $this->hasMany(Kematian::class);
    }
}
