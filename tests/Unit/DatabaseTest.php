<?php

namespace Tests\Unit;

use App\Models\Meeting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_meeting_user_relations()
    {
        /** @var Meeting $meeting */

        $author = User::factory()->create();
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();

        $meeting = Meeting::factory()->create([
            'author_id' => $author
        ]);

        $meeting->participants()->attach($user1);
        $meeting->participants()->attach($user2);

        $ids = $meeting->participants()->pluck('users.id');

        self::assertContains($user1->id, $ids);
        self::assertContains($user2->id, $ids);

        self::assertNotContains($author->id, $ids);
        self::assertEquals($author->id, $meeting->author->id);
        self::assertEquals($author->createdMeetings->first()->id, $meeting->id);
    }

    public function test_db_should_contains_required_tables() {
        self::assertTrue(Schema::hasTable('users'), 'users not found');
        self::assertTrue(Schema::hasTable('categories'), 'categories not found');
        self::assertTrue(Schema::hasTable('category_meeting'), 'category_meeting not found');
        self::assertTrue(Schema::hasTable('comments'), 'comments not found');
        self::assertTrue(Schema::hasTable('meetings'), 'meetings not found');
        self::assertTrue(Schema::hasTable('meeting_comment'), 'meeting_comment not found');
        self::assertTrue(Schema::hasTable('meeting_user'), 'meeting user not found');
    }
}
