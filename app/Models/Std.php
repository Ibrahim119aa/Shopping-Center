<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Std extends Model
{
    use HasFactory;
    public $table="student";
    public $timestamps=false;
}
