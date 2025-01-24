<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    use HasFactory;
    protected $table = 'kematian';
    protected $fillable = ['name', 'alt_name', 'latitude', 'longitude', 'rata2_kematian', 'type_polygon', 'polygon'];
}
