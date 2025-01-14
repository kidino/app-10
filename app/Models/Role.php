<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function users()
    {
        // defining many-to-many relationship with User model via pivot table role_user
        return $this->belongsToMany(User::class);
    }

}
