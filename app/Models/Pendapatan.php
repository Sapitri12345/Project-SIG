<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendapatan extends Model
{
    use HasFactory;
    protected $table = 'pendapatan';
    protected $fillable = ['name', 'alt_name', 'latitude', 'longitude', 'rata2_pendapatan', 'type_polygon', 'polygon'];
}
