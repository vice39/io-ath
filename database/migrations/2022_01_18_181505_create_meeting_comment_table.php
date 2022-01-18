<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_comment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table
                ->foreignId('meeting_id')
                ->constrained('meetings')
                ->cascadeOnDelete();

            $table
                ->foreignId('comment_id')
                ->constrained('comments')
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
        Schema::dropIfExists('meeting_comment');
    }
}
