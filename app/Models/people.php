<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class people extends Model
{
    use HasFactory;
    protected $table='people';
    protected $fillable=['name','email','phone','place','college','description','experience'];
}
