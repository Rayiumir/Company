<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'is_approved',
        'user_id',
        'comment_id',
        'post_id',
    ];

    protected $with = ['approvedReplies'];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function post(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function replies(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function approvedReplies(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->replies()->where('is_approved', true);
    }

    public function getCreatedAtShamsi(): string
    {
        return verta($this->created_at)->format('Y/m/d');
    }

    public function getStatus(): string
    {
        return !! $this->is_approved
            ? 'تایید شده'
            : 'تایید نشده';
    }
}
