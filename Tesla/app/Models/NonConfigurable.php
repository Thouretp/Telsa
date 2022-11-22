<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonConfigurable extends Model
{
    use HasFactory;
    protected $table = "nonconfigurable";
    protected $primaryKey = "numvehicule";
    public $timestamps = false;
}