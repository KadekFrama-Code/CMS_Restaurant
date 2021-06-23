<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_menu_list', function (Blueprint $table) {
            $table->id();
            $table->integer('menu_id')->nullable();
            $table->string('nama');
            $table->string('deskripsi');
            $table->text('photo');
            $table->text('gambar_posisi');
            $table->text('gambar_label');
            $table->text('gambar_url');
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
        Schema::dropIfExists('menu_lists');
    }
}
