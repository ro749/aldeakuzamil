<?php

namespace App\Models;

use Ro749\SharedUtils\Models\Model;
use Illuminate\Support\Facades\DB;
class Sale extends Model
{
    protected $fillable = ['unit', 'asesor', 'client', 'final_price', 'sale_date', 'fragments'];
}