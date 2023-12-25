<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('controle_atendentes')->insert([
            'indice_atual' => 0,
            'indice_proximo' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('atendentes')->insert([
            'nome' => 'Eduarda',
            'created_at' => now(),
            'updated_at' => now(),
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
