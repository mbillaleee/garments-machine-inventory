<?php
 
namespace App\Models;

use App\Models\Brand;
use App\Models\Department;
use App\Models\Factory;
use App\Models\Location;
use App\Models\MachineType;
use App\Models\Models;
use App\Models\NeedleType;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Machine extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'machine_inventory_number',
        'serial_number',
        'purchase_date',
        'service_date',
        'machine_type_id',
        'brand_id',
        'model_id',
        'reason_for_purchase',
        'machine_value',
        'supplier_id',
        'depreciation',
        'service_frequency',
        'guarantee_period',
        'location_id',
        'stitch_formation',
        'department_id',
        'ownership',
        'factory_id',
        'status',
        'added_by',
        'updated_by',
        'deleted_by',
    ];

    protected $casts = [
        'purchase_date' => 'date',
        'service_date' => 'date',
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

    public function factory()
    {
        return $this->belongsTo(Factory::class, 'factory_id');
    }

    public function machineType()
    {
        return $this->belongsTo(MachineType::class, 'machine_type_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function model()
    {
        return $this->belongsTo(Models::class, 'model_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function needleType()
    {
        return $this->belongsTo(NeedleType::class, 'needle_type_id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
