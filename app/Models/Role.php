<?php

namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    protected $fillable = [
        'name',
        'guard_name',
        'factory_id',      // ← যোগ করুন
    ];

    // Relationship with Factory
    public function factory()
    {
        return $this->belongsTo(Factory::class);
    }

    // Scope: শুধু নির্দিষ্ট ফ্যাক্টরির রোল দেখাবে
    public function scopeForFactory($query, $factoryId)
    {
        if ($factoryId) {
            return $query->where('factory_id', $factoryId);
        }
        //return $query; // TEAM GROUP এর জন্য সব দেখাবে (null)

        return $query->whereNull('factory_id'); // TEAM GROUP এর জন্য শুধু null (global) রোল দেখাবে
    }
}