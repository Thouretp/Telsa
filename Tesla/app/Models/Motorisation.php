<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorisation extends Model
{
    use HasFactory;
    protected $table = "motorisation";
    protected $primaryKey = "nummoteur";
    public $timestamps = false;
}
