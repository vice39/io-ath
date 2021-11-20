<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryMeetingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_meeting', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table
                ->foreignId('category_id')
                ->constrained('categories')
                ->cascadeOnDelete();

            $table
                ->foreignId('meeting_id')
                ->constrained('meetings')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_meeting');
    }
}
