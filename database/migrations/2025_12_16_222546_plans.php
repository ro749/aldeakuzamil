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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('discount', 5, 2);
            $table->integer('final_date')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        DB::table('plans')->insert([
            'title' => 'Delfin',
            'discount' => 20
        ]);
        DB::table('plans')->insert([
            'title' => 'Estrella Marina',
            'discount' => 15,
            'final_date' => 12
        ]);
        DB::table('plans')->insert([
            'title' => 'Cangrejo',
            'discount' => 10,
            'final_date' => 18
        ]);
        DB::table('plans')->insert([
            'title' => 'Golondrina',
            'discount' => 5,
            'final_date' => 24
        ]);
        DB::table('plans')->insert([
            'title' => 'Tortuga',
            'discount' => 0,
            'final_date' => 30
        ]);

        DB::table('planlines')->insert([
            'plan' => 1,
            'description' => 'ENGANCHE',
            'percent' => '100'
        ]);

        DB::table('planlines')->insert([
            'plan' => 2,
            'description' => 'ENGANCHE',
            'percent' => '30'
        ]);
        DB::table('planlines')->insert([
            'plan' => 2,
            'description' => 'PLAZO',
            'percent' => '70',
            'months'=>1,
        ]);

        DB::table('planlines')->insert([
            'plan' => 3,
            'description' => 'ENGANCHE',
            'percent' => '20'
        ]);
        DB::table('planlines')->insert([
            'plan' => 3,
            'description' => 'PLAZO',
            'percent' => '80',
            'months'=>1,
        ]);

        DB::table('planlines')->insert([
            'plan' => 4,
            'description' => 'ENGANCHE',
            'percent' => '20'
        ]);
        DB::table('planlines')->insert([
            'plan' => 4,
            'description' => 'PLAZO',
            'percent' => '80',
            'months'=>1,
        ]);

        DB::table('planlines')->insert([
            'plan' => 5,
            'description' => 'ENGANCHE',
            'percent' => '20'
        ]);
        DB::table('planlines')->insert([
            'plan' => 5,
            'description' => 'PLAZO',
            'percent' => '80',
            'months'=>1,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
