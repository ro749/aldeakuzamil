<?php

namespace App\Models;

use Ro749\SharedUtils\Models\Model;
use Illuminate\Support\Facades\DB;
class Unit extends Model
{
    static function get(string $column, string $id)
    {
        return DB::table('units')->where($column, $id)->first();
    }
    protected $fillable = ['unit', 'status', 'fragments', 'm2', 'price'];
}