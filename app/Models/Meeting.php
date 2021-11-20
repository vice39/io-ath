<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Meeting extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function participants()
    {
        return $this->belongsToMany(User::class, relatedPivotKey: 'participant_id');
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

}
