<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessoire extends Model
{
    use HasFactory;
    protected $table = "typeaccessoire";
    protected $primaryKey = "numaccessoire";
    public $timestamps = false;
}
