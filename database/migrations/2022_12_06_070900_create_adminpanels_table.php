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
        Schema::create('adminpanels', function (Blueprint $table) {
            $table->id()->unique();
            $table->string(column: 'name', length: 30);
            $table->string(column: 'mobile', length: 10);
            $table->string(column: 'age', length: 3);
            $table->string(column: 'sex', length: 3);
            $table->string(column: 'password', length: 3);

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
        Schema::dropIfExists('adminpanels');
    }
};
