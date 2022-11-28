<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockConf extends Model
{
    use HasFactory;
    protected $table = "stock_conf";
    protected $primaryKey = "numvehicule";
    public $timestamps = false;
}