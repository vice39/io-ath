<?php

namespace App\Models;

use App\Http\Controllers\MeetingController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function meeting()
    {
        return $this->belongsTo(Meeting::class);
    }
}
