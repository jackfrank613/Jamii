<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jamii_professionaluser', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',20);
            $table->string('f_name',20);
            $table->string('email',40)->unique();
            $table->string('password',50);
            $table->string('com_name',20);
            $table->string('siret',40);
            $table->string('heading',20);
            $table->string('address',100);
            $table->string('zip',20);
            $table->string('phone',20);
            $table->string('type',20);
            $table->string('status',20);
            $table->string('civility',20);
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
        Schema::dropIfExists('professional_user');
    }
}
