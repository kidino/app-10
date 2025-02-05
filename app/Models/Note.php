<?php

namespace App\Models;

use App\Models\Scopes\AuthUserScope;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    protected static function booted() {
        static::addGlobalScope( new AuthUserScope);
    }
}
