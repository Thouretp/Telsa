<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ADeux extends Model
{
    use HasFactory;
    protected $table = "a2";
    protected $primaryKey = "numcompte";
    public $timestamps = false;
}
