<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique()->nullable();
            $table->string('photo')->nullable();
            $table->boolean('is_parent')->default(true);
            $table->mediumText('summary')->nullable();
            $table->unsignedBigInteger('patent_id')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->foreign('patent_id')
                ->references('id')
                ->on('categories')
                ->onDelete('SET NULL');
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
        Schema::dropIfExists('categories');
    }
}
