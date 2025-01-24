<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kemiskinan extends Model
{
    use HasFactory;
    protected $table = 'kemiskinan';
    protected $fillable = ['name', 'alt_name', 'latitude', 'longitude', 'tingkat_kemiskinan', 'type_polygon', 'polygon'];
}
