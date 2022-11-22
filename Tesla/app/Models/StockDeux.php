<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockDeux extends Model
{
    use HasFactory;
    protected $table = "stock2";
    protected $primaryKey = "numvehicule";
    public $timestamps = false;
}