<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->integer('nik');
            $table->string('nama');
            $table->integer('umur');
            $table->enum('jenis_kelamin', ['laki', 'perempuan']);
            $table->text('alamat');
            $table->dateTime('odp_date')->nullable();
            $table->dateTime('pdp_date')->nullable();
            $table->dateTime('positif_date')->nullable();
            $table->dateTime('meninggal_date')->nullable();
            $table->dateTime('sembuh_date')->nullable();
            $table->integer('status')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasiens');
    }
}
