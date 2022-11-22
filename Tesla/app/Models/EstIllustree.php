<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstIllustree extends Model
{
    use HasFactory;
    protected $table = "est_illustree";
    protected $primaryKey = "nummoteur";
    public $timestamps = false;
}