<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstStocke extends Model
{
    use HasFactory;
    protected $table = "est_stocke";
    protected $primaryKey = "numstock";
    public $timestamps = false;
}
