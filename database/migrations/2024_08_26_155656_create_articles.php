<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('subtitle', 255);
            $table->integer('views', false, true);
            $table->boolean('favorite')->default(0);
            $table->string('image', 255);
            $table->text('info');
            $table->timestamps();
        });
        $this->export();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }

    private function export(){
        // DB::table("articles")->insert([
        //     [
        //         "title" => 'статья',
        //         "subtitle" =>
        //     ]
        // ]);
    }
};
