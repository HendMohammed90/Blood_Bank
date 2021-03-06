<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reques', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('address', 100);
            $table->string('phone', 20);
            $table->string('AnotherPhone', 20);
            $table->enum('bloodType', ['O+', 'O-' ,'A+' , 'A-','B+','B-' ,'AB+' ,'AB-']);
            $table->enum('timeForCall', ['24 Hours','From 8 AM to 3 PM' , 'From 3 PM to 11 PM']);
            $table->enum('callingWay'  ,['SMS' , 'Phone Call']);
            $table->enum('gender', ['female', 'male']);
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
        Schema::dropIfExists('reques');
    }
}
