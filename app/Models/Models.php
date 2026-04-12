<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Models extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'brand_id',
        'status',
        'added_by',
        'updated_by',
        'deleted_by',
    ];

    public function addedByser()
    {
        return $this->belongsTo(User::class, 'added_by');
    }

    public function updatedByser()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function deletedByser()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
