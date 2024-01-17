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
        Schema::create('survei', function (Blueprint $table) {
            $table->id('survei_id');
            $table->string('survei_nik', 16);
            $table->string('survei_nama', 50);
            $table->string('survei_telp', 15);
            $table->string('survei_emoney', 20);
            
            $table->string('survei_prov_kode', 50);
            $table->string('survei_kab_kode', 50);
            $table->string('survei_kec_kode', 50);
            $table->string('survei_kel_kode', 50);
            $table->string('survei_alamat', 200);

            $table->string('survei_pilih', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survei');
    }
};
