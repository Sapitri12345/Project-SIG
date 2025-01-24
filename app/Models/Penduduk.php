<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $table = 'penduduk';
    protected $fillable = ['name', 'alt_name', 'latitude', 'longitude', 'kepadatan_penduduk', 'type_polygon', 'polygon'];
}
