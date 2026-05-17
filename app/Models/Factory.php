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

    public function locations()
    {
        return $this->hasMany(Location::class, 'factory_id');
    }

    public function floors()
    {
        return $this->hasMany(Floor::class, 'factory_id');
    }

    public function machines()
    {
        return $this->hasMany(Machine::class, 'factory_id');
    }
    

    // public function machines() { return $this->hasMany(Machine::class); }
}
