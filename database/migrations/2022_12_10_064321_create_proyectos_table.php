<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_proyecto')->nullable()->default('NUEVA INVERSION');
            $table->string('slug');
            $table->text('desc_proyecto')->nullable();
            $table->integer('monto_inversion')->nullable();
            $table->string('inst_inversion');
            $table->integer('plazo');
            $table->string('pago_interes');
            $table->float('taf')->nullable()->default(15.5);
            $table->integer('min_inversion')->nullable();
            $table->float('comision_plataforma')->nullable()->default(1.5);
            $table->integer('valor_garantia');
            $table->float('triae')->nullable()->default(16.5);
            $table->integer('max_inversion')->nullable();
            $table->date('fecha_finalizado');
            $table->float('fsc');
            $table->string('fotografias')->nullable();
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
        Schema::dropIfExists('proyectos');
    }
};
