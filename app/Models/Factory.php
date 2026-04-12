<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    protected $fillable = [
        'name',
        'short_name',
        'location',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function roles()
    {
        return $this->hasMany(Role::class);
    }

    // public function machines() { return $this->hasMany(Machine::class); }
}
