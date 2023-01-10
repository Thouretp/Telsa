<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fait_une extends Model
{
    use HasFactory;
    protected $table = "fait_une";
    protected $primaryKey = "id";
    public $timestamps = false;
}
