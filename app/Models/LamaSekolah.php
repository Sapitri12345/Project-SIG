<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LamaSekolah extends Model
{
    use HasFactory;
    protected $table = 'lama_sekolah';
    protected $fillable = ['name', 'alt_name', 'latitude', 'longitude', 'rata2_lamaSekolah', 'type_polygon', 'polygon'];
}
