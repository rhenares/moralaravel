<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',150);
            $table->string('image', 150)->nullable();
            $table->tinyInteger('active')->default(1);//Columna TINYINT equivalente.
            $table->double('cost', 8, 2);//DOBLE columna equivalente con precisión (dígitos totales) y escala (dígitos decimales).
            $table->double('profit_margin', 5, 2);
            $table->integer('category_id')->nullable()->unsigned();
            $table->timestamps();//Agrega columnas equivalentes a NULL created_aty updated_atTIMESTAMP.
            $table->string('stock');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
         Schema::dropIfExists('products');
     }
 }
