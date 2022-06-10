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
        Schema::create('threads', function (Blueprint $table) {
            $table->id();
            $table->string('titles');
            $table->string('slug');
            $table->text('content');
            $table->foreignId('user_id')
                ->constraint()
                ->CascadeOnDelete();
            $table->foreignId('channel_id')
                ->constraint()
                ->CascadeOnDelete();
            $table->foreignId('answer_id') // Best Answer ID
                ->constraint()
                ->CascadeOnDelete();

            $table->boolean('flag')->default(1);
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
        Schema::dropIfExists('threads');
    }
};
