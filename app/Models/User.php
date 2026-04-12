<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'employee_no',
        'first_name',
        'last_name',
        'email',
        'password',
        'factory_id',
        'multi_company',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'multi_company' => 'boolean',
        ];
    }

    public function canAccessFactory($factoryId)
    {
        if ($this->multi_company) return true;           // Group Admin
        return $this->factory_id == $factoryId;
    }

    public function factory()
    {
        return $this->belongsTo(Factory::class, 'factory_id');
    }

    public function scopeForFactory($query, $factoryId)
    {
        if ($factoryId) {
            return $query->where('factory_id', $factoryId);
        }
        return $query; // TEAM GROUP এর জন্য সব দেখাবে (null)

        //return $query->whereNull('factory_id'); // TEAM GROUP এর জন্য শুধু null (global) রোল দেখাবে
    }
}
