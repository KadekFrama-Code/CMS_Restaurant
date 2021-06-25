<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuListsTableNew extends Migration
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
            $table->bigInteger('users')->unsigned();
            $table->string('nama');
            $table->string('deskripsi');
            $table->text('photo');
            $table->text('gambar_posisi');
            $table->text('gambar_label');
            $table->text('gambar_url');
            $table->timestamps();

            $table->foreign('users')->references('id')->on('users')->onDelete('restrict');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_lists_table_new');
    }
}
