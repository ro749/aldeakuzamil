<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
DB::table('units')->insert([
'unit' => '1',
'fragments' => '5',
'price' => '80000',
'm2' => '101',
]);
DB::table('units')->insert([
'unit' => '2',
'fragments' => '5',
'price' => '80000',
'm2' => '102',
]);
DB::table('units')->insert([
'unit' => '3',
'fragments' => '5',
'price' => '80000',
'm2' => '103',
]);
DB::table('units')->insert([
'unit' => '4',
'fragments' => '5',
'price' => '80000',
'm2' => '104',
]);
DB::table('units')->insert([
'unit' => '5',
'fragments' => '5',
'price' => '80000',
'm2' => '105',
]);
DB::table('units')->insert([
'unit' => '6',
'fragments' => '5',
'price' => '80000',
'm2' => '106',
]);
DB::table('units')->insert([
'unit' => '7',
'fragments' => '5',
'price' => '80000',
'm2' => '107',
]);
DB::table('units')->insert([
'unit' => '8',
'fragments' => '5',
'price' => '80000',
'm2' => '108',
]);
DB::table('units')->insert([
'unit' => '9',
'fragments' => '5',
'price' => '80000',
'm2' => '109',
]);
DB::table('units')->insert([
'unit' => '10',
'fragments' => '5',
'price' => '80000',
'm2' => '110',
]);
DB::table('units')->insert([
'unit' => '11',
'fragments' => '5',
'price' => '80000',
'm2' => '111',
]);
DB::table('units')->insert([
'unit' => '12',
'fragments' => '5',
'price' => '80000',
'm2' => '112',
]);

    }
};