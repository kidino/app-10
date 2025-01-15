<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;
    
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
