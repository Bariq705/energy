<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class energy extends Model
{
    use HasFactory;

    protected $table = "bensin";
    protected $primaryKey = "id_bbm";
    protected $fillable = 
    [
    'name','harga_bbm','jenis_bbm'
    ];
}
