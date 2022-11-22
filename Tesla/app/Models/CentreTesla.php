<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentreTesla extends Model
{
    use HasFactory;
    protected $table = "centretesla";
    protected $primaryKey = "numcentretesla";
    public $timestamps = false;
}