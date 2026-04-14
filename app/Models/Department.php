<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use SoftDeletes, HasFactory;

    protected $guarded = [];

    public function factory()
    {
        return $this->belongsTo(Factory::class, 'factory_id');
    }

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
}
