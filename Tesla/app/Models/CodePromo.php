<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodePromo extends Model
{
    use HasFactory;
    protected $table = "codepromo";
    protected $primaryKey = "numcodepromo";
    public $timestamps = false;
}