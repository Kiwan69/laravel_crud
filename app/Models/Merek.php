<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;
    protected $fillable = ['nama_merek'];

    public function merek(){
        return $this->hasMany(Merek::class,'id_merek');
    }
}
