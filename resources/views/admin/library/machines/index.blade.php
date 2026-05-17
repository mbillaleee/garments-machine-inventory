@extends('admin.layouts.master')

@section('admin')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<style>
  .dashboard-card {
    background: #fff;
    border-radius: 16px;
    padding: 15px;
    transition: 0.3s;
    position: relative;
    overflow: hidden;
}

.dashboard-card:hover {
    transform: translateY(-6px);
}

/* Title */
.card-title {
    font-size: 13px;
    color: #888;
    margin-bottom: 5px;
}

/* Count */
.card-count {
    font-size: 24px;
    font-weight: 700;
}

/* Icon */
.card-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 18px;
}

/* Footer */
.card-footer {
    display: block;
    padding-top: 10px;
    font-size: 13px;
    text-decoration: none;
    font-weight: 500;
}
</style>

<style>
    #rentFields {
        display: none;
    }
</style> 

<section class="content permission-page"><br>
    <div class="container-fluid">
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
            <div class="mb-2">
                <h1 class="page-title mb-1">Machine Management</h1>
            </div>

            <!-- <div class="mb-2 d-flex flex-wrap">
                <button type="button" class="btn btn-success btn-sm mb-2" data-toggle="modal" data-target="#addBrandModal">
                    <i class="fas fa-plus-circle mr-1"></i> Add Brand
                </button>
            </div> -->
        </div>

        {{-- Alerts --}}
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="fas fa-check-circle mr-1"></i> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
            <strong><i class="fas fa-exclamation-circle mr-1"></i> Please fix the following issues:</strong>
            <ul class="mb-0 mt-2 pl-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif


        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="dashboard-card shadow-sm">

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <!-- Left -->
                            <div>
                                <div class="card-title"></div>
                                <div class="card-count text-primary">
                                    {{ $data->count() ?? 0 }} <small class="text-muted text-sm">Total Machines</small>
                                </div>
                            </div>

                            <!-- Icon -->
                            <div class="card-icon bg-primary">
                                <i class="fas fa-layer-group"></i>
                            </div>

                        </div>
                    </div>
<!-- 
                    <a href="#" class="card-footer text-primary">
                        View Details <i class="fas fa-arrow-right ms-1"></i>
                    </a> -->

                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="dashboard-card shadow-sm">

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <!-- Left -->
                            <div>
                                <div class="card-title"></div>
                                <div class="card-count text-primary">
                                    {{ $data->count() ?? 0 }} <small class="text-muted text-sm">Active Machines</small>
                                    
                                </div>
                            </div>

                            <!-- Icon -->
                            <div class="card-icon bg-primary">
                                <i class="fas fa-layer-group"></i>
                            </div>

                        </div>
                    </div>

                    <!-- <a href="#" class="card-footer text-primary">
                        View Details <i class="fas fa-arrow-right ms-1"></i>
                    </a> -->

                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="dashboard-card shadow-sm">

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <!-- Left -->
                            <div>
                                <div class="card-title"></div>
                                <div class="card-count text-primary">
                                    {{ $data->count() ?? 0 }} <small class="text-muted text-sm">Inactive Machines</small>                                    
                                </div>
                            </div>

                            <!-- Icon -->
                            <div class="card-icon bg-primary">
                                <i class="fas fa-layer-group"></i>
                            </div>

                        </div>
                    </div>
<!-- 
                    <a href="#" class="card-footer text-primary">
                        View Details <i class="fas fa-arrow-right ms-1"></i>
                    </a> -->

                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="dashboard-card shadow-sm">

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <!-- Left -->
                            <div>
                                <div class="card-title"></div>
                                <div class="card-count text-primary">
                                    {{ $data->count() }} <small class="text-muted text-sm">Showing Current Page Items</small> 
                                    
                                </div>
                            </div>

                            <!-- Icon -->
                            <div class="card-icon bg-primary">
                                <i class="fas fa-layer-group"></i>
                            </div>

                        </div>
                    </div>
                    <!-- 
                    <a href="#" class="card-footer text-primary">
                        View Details <i class="fas fa-arrow-right ms-1"></i>
                    </a> -->

                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card">

            <div class="card-header d-none d-lg-block">
                <div class="row align-items-center">
                    <div class="col-md-4 mb-2 mb-md-0">
                        <h3 class="card-title font-weight-bold mb-0">
                        <i class="fas fa-layer-group text-primary mr-2"></i>Machine  List
                        </h3>
                    </div>
                    <div class="col-md-8 d-flex justify-content-end align-items-center mb-2 mb-md-0">
                        <div class="d-flex align-items-center w-100">
                            {{-- Search Box --}}
                            <div class="search-box mr-2 d-none d-md-block" style="flex: 1;">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-search text-muted"></i>
                                        </span>
                                    </div>
                                    <input type="text" id="brandSearch" class="form-control" placeholder="Search brand by name...">
                                </div>
                            </div>

                            {{-- Page Size Select --}}
                            <form method="GET" id="perPageForm" class="mr-2 mb-2 d-none d-md-block">
                                <select name="per_page" class="form-control form-control"
                                    onchange="document.getElementById('perPageForm').submit()">
                                    <option value="10" {{ request('per_page')==10?'selected':'' }}>10</option>
                                    <option value="50" {{ request('per_page')==50?'selected':'' }}>50</option>
                                    <option value="100" {{ request('per_page')==100?'selected':'' }}>100</option>
                                    <option value="500" {{ request('per_page')==500?'selected':'' }}>500</option>
                                </select>
                            </form>


                            <div class="card-tools">
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                                    <i class="fas fa-plus text-primary text-lg"></i>
                                </button>

                                <button class="btn btn-tool" data-toggle="modal">
                                    <i class="fas fa-file-excel text-info text-lg"></i>
                                </button>

                                <a href="{{ route('admin.departments.index') }}" class="btn btn-tool">
                                    <i class="fas fa-sync-alt text-success text-lg"></i>
                                </a>

                                <a href="{{ route('admin.departments.deleteditems') }}" class="btn btn-tool">
                                    <i class="fas fa-trash-alt text-danger text-lg"></i>
                                </a>

                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus text-primary text-lg"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

              <div class="card-header d-block d-lg-none">
                <h3 class="card-title">Location </h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool"  data-toggle="modal" data-target="#modal-lg">
                        <i class="fas fa-plus text-primary text-lg"></i>
                    </button>

                    <button class="btn btn-tool" data-toggle="modal">
                        <i class="fas fa-file-excel text-info text-lg"></i>
                    </button>

                    <a href="{{ route('admin.departments.index') }}" class="btn btn-tool">
                        <i class="fas fa-sync-alt text-success text-lg"></i>
                    </a>

                    <a href="{{ route('admin.departments.deleteditems') }}" class="btn btn-tool">
                        <i class="fas fa-trash-alt text-danger text-lg"></i>
                    </a>

                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus text-primary text-lg"></i>
                    </button>
                </div>
              </div>

                @if($data->count() > 0)
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap" id="infoTable">
                        <thead>
                            <th>ID</th>
                            <th>Department</th>
                            <th>Institution</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                        @foreach ($data as $key => $item)
                        <tr>
                            <td>
                                <span class="badge badge-light px-3 py-2">
                                    {{ method_exists($data, 'firstItem') ? $data->firstItem() + $key : $key + 1 }}
                                </span>
                            </td>

                            <td>
                                <div class="permission-name">{{ $item->department_name }}</div>
                            </td>


                            <td>
                                {{ $item->factory->name ?? 'N/A' }}
                            </td>
                            
                            <td> 
                            @if($item->status == 1)
                                <span class="badge badge-primary">Active</span>
                            @else
                                <span class="badge badge-secondary">Inactive</span>
                            @endif</td>
                            <td>
                                <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modal-lg-{{ $item->id }}">
                                    <i class="fas fa-edit text-primary text-lg"></i>
                                </button>

                                <form method="POST" action="{{ route('admin.departments.destroy', $item->id) }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-tool" onclick="return confirm('Are you sure you want to delete this department?')">
                                        <i class="fas fa-trash-alt text-danger text-lg"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <div class="modal fade" id="modal-lg-{{ $item->id }}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title font-weight-bold" id="addPermissionLabel">
                                        <i class="fas fa-plus-circle text-success mr-2"></i>Update Department
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <!-- Horizontal Form -->
                                    <div class="card card-info">
                                    <!-- form start -->
                                    <form class="form-horizontal" method="POST" action="{{ route('admin.departments.update', $item->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Department Name</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="Department Name" name="department_name" required value="{{ $item->department_name}}">
                                                </div>
                                            </div>
                                            


                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Factory</label>
                                                <div class="col-sm-8">
                                                    <select name="factory_id" id="factoryId" class="form-control select2" required>
                                                        <option value="">Select Factory</option>
                                                        @foreach($factories as $factory)
                                                            <option value="{{ $factory->id }}" {{ $item->factory_id == $factory->id ? 'selected' : '' }}>
                                                                {{ $factory->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Status</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control select2" name="status" required>
                                                        <option value="1" {{ $item->status == 1 ? 'selected' : '' }}>Active</option>
                                                        <option value="0" {{ $item->status == 0 ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center py-5">

                        <!-- Icon -->
                        <div class="mb-3">
                            <i class="fas fa-folder-open fa-4x text-secondary opacity-75"></i>
                        </div>

                        <!-- Title -->
                        <h4 class="font-weight-bold text-dark mb-2">
                            No Data Found
                        </h4>

                        <!-- Description -->
                        <p class="text-muted mb-4">
                            You haven’t created any departments  yet. Start by adding your first department.
                        </p>

                         <button type="button" class="btn btn-tool- btn-primary btn-sm"  data-toggle="modal" data-target="#modal-lg">
                            <i class="fas fa-plus mr-1"></i> Create New
                        </button>

                    </div>
                </div>
                @endif

              @if(method_exists($data, 'links'))
               <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    {{ $data->links() }}
                </ul>
              </div>
              @endif
            </div>
            <!-- /.card -->
          </div>
        </div>
        
        


        {{-- Add Permission Modal --}}
        <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="addPermissionLabel">
                    <i class="fas fa-plus-circle text-success mr-2"></i>Add New
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <!-- Horizontal Form -->
                <div class="card card-info">
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('admin.departments.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="row">

                            <!-- Left Column -->
                            <div class="col-md-6">

                                <div class="form-group mb-3">
                                    <label>Machine Inventory Number</label>
                                    <input type="text" name="inventory_no" class="form-control" placeholder="Enter Machine Inventory Number">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Serial Number</label>
                                    <input type="text" name="serial_no" class="form-control" placeholder="Enter Serial Number No">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Service Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">
                                                <i class="fas fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" id="serviceDate" name="purchase_date" class="form-control serviceDate" placeholder="Select Service Date">
                                    </div>
                                </div>

                                 <div class="form-group mb-3">
                                    <label>Service Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">
                                                <i class="fas fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" id="serviceDate" name="service_date" class="form-control serviceDate" placeholder="Select Service Date">
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Machine Type</label>
                                    <select name="machine_type" class="form-control select2">
                                        <option value="">Select Machine Type</option>
                                        @foreach($machineTypes as $type)
                                            <option value="{{ $type->id }}">{{ $type->type_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Brand</label>
                                    <select name="brand_id" class="form-control select2">
                                        <option value="">Select Brand</option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Model</label>
                                    <select name="model_id" class="form-control select2">
                                        <option value="">Select Model</option>
                                        @foreach($models as $model)
                                            <option value="{{ $model->id }}">{{ $model->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Reason For Purchase</label>
                                    <textarea name="reason" class="form-control"></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Machine Value ($)</label>
                                    <input type="number" name="machine_value" class="form-control" placeholder="Enter Machine Value">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Supplier</label>
                                    <select name="supplier_id" class="form-control select2">
                                        <option value="">Select Supplier</option>
                                        @foreach($suppliers as $supplier)
                                            <option value="{{ $supplier->id }}">{{ $supplier->supplier_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">

                                <div class="form-group mb-3">
                                    <label>Needle Type</label>
                                    <select name="needle_type" class="form-control select2">
                                        <option value="">Select Needle Type</option>
                                        @foreach($needleTypes as $needle)
                                            <option value="{{ $needle->id }}">{{ $needle->type_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Depreciation (Years)</label>
                                    <input type="number" name="depreciation" class="form-control" placeholder="Enter Depreciation">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Service Frequency (Days)</label>
                                    <input type="number" name="service_frequency" class="form-control" placeholder="Enter Service Frequency">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Guarantee Period (Year)</label>
                                    <input type="number" name="guarantee_period" class="form-control" placeholder="Enter Guarantee Period">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Location</label>
                                    <select name="location_id" class="form-control select2">
                                        <option value="">Select Location</option>
                                        @foreach($locations as $location)
                                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Stitch Formation</label>
                                    <input type="text" name="stitch_formation" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Department</label>
                                    <select name="department_id" class="form-control select2">
                                        <option value="">Select Department</option>
                                        @foreach($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Ownership</label>
                                    <select name="ownership" id="ownership" class="form-control">
                                        <option value="Company">Factory</option>
                                        <option value="rent">Rent</option>
                                    </select>
                                </div>

                                <div id="rentFields">
                                    <div class="form-group mb-3">
                                        <label>Service Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary text-white">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" id="serviceDate" name="rent_start_date" class="form-control serviceDate" placeholder="Select Service Date">
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Service Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary text-white">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" id="serviceDate" name="rent_end_date" class="form-control serviceDate" placeholder="Select Service Date">
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group mb-3">
                                    <label>Factory</label>
                                    <select name="factory_id" class="form-control select2" required>
                                        <option value="">Select Factory</option>
                                        @foreach($factories as $factory)
                                            <option value="{{ $factory->id }}">{{ $factory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
            <!-- /.modal-content -->
            </div>
        </div>
 

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('brandSearch');
        const table = document.getElementById('infoTable');

        if (searchInput && table) {
            searchInput.addEventListener('keyup', function () {
                const filter = this.value.toLowerCase();
                const rows = table.querySelectorAll('tbody tr');
                let visibleCount = 0;

                rows.forEach(row => {
                    if (row.id === 'noSearchResultRow') return;

                    const text = row.innerText.toLowerCase();
                    const match = text.includes(filter);
                    row.style.display = match ? '' : 'none';

                    if (match) visibleCount++;
                });

                const noResultRow = document.getElementById('noSearchResultRow');
                if (noResultRow) {
                    noResultRow.style.display = visibleCount === 0 ? '' : 'none';
                }
            });
        }

        setTimeout(function () {
            $('.alert').alert('close');
        }, 3500);
    });

    
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ownership = document.getElementById('ownership');
        const rentFields = document.getElementById('rentFields');

        function toggleRentFields() {
            if (ownership.value === 'rent') {
                rentFields.style.display = 'block';
            } else {
                rentFields.style.display = 'none';
            }
        }

        // On change
        ownership.addEventListener('change', toggleRentFields);

        // On load (important for edit mode)
        toggleRentFields();
    });
</script>

<script>
    flatpickr(".serviceDate", {
        dateFormat: "Y-m-d",
        altInput: true,
        altFormat: "F j, Y", // সুন্দর format (April 30, 2026)
        allowInput: true
    });
</script>
@endsection