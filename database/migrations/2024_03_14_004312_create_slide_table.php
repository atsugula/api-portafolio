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
        Schema::create('slides', function (Blueprint $table) {
            // Parte para el corrusel
            $table->char('slide')->default(0);
            $table->text('slide_url')->nullable();
            $table->text('slide_class')->nullable();
            $table->text('slide_title')->nullable();
            $table->text('slide_description')->nullable();

            $table->unsignedBigInteger('content_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreign('content_id')
                ->references('id')
                ->on('content');

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
        Schema::table('slides', function (Blueprint $table) {
            Schema::dropIfExists('slides');
        });
    }
};
