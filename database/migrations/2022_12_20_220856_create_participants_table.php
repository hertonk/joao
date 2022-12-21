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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("cpf");
            $table->date("birthday");
            $table->string("whatsapp");
            $table->string("emergency");
            $table->string("address");
            $table->string("registration");
            $table->string("photo");
            $table->string("athletic_id");
            $table->string("type");
            // 1 - Acadêmico 2 - Convidado 3 - Treinador 4 - Egresso 5 - Diretor
            $table->string("accommodation");
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
        Schema::dropIfExists('participants');
    }
};
