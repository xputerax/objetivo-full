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
        Schema::create('goal_mentors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Goal::class)->index();
            $table->foreignId('mentor_id')->nullable()->references('id')->on('users')->nullOnDelete();
            $table->timestamps();
            $table->index('mentor_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goal_mentors');
    }
};
