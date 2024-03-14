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
        Schema::create('content', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('section_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreign('section_id')
                ->references('id')
                ->on('sections');

            $table->text('title')->nullable();
            $table->text('sub_title')->nullable();
            $table->text('body')->nullable();
            $table->text('button')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content');
    }
};
