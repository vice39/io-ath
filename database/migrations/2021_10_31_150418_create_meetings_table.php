<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();

            $table->string('title');
            $table->text('description');
            $table->text('short_description');

            $table->string('image_url');

            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('is_closed')->default(false);

            $table->string('location_description');
            $table->decimal('lat');
            $table->decimal('lng');

            $table
                ->foreignId('author_id')
                ->constrained('users')
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
        Schema::dropIfExists('meetings');
    }
}
