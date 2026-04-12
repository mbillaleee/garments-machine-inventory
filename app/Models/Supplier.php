<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use SoftDeletes, HasFactory;
    
    protected $fillable = [
        'supplier_name',
        'supplier_description',
        'supplier_country',
        'supplier_address',
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
}
