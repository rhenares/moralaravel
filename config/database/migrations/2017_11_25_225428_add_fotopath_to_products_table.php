<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFotopathToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('Products', function (Blueprint $table) {
    $table->string('fotoPath')->nullable();
     });  //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('Products', function (Blueprint $table) {
      $table->dropColumn('fotoPath');
      });  //
    }
}
