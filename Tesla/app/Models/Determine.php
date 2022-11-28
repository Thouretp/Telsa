<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Determine extends Model
{
    use HasFactory;
    protected $table = "determine";
    protected $primaryKey = "numcommandevehiculeconfigurable";
    public $timestamps = false;
}