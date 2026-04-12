@extends('admin.layouts.master')

@section('admin')
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

<section class="content permission-page"><br>
    <div class="container-fluid">
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
            <div class="mb-2">
                <h1 class="page-title mb-1">Supplier Management</h1>
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
                                    {{ $suppliers->count() ?? 0 }} <small class="text-muted text-sm">Total Models</small>
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
                                    {{ $suppliers->count() ?? 0 }} <small class="text-muted text-sm">Active Models</small>
                                    
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
                                    {{ $suppliers->count() ?? 0 }} <small class="text-muted text-sm">Inactive Models</small>                                    
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
                                    {{ $suppliers->count() }} <small class="text-muted text-sm">Showing Current Page Items</small> 
                                    
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
                        <i class="fas fa-layer-group text-primary mr-2"></i>Supplier  List
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

                                <a href="{{ route('admin.suppliers.index') }}" class="btn btn-tool">
                                    <i class="fas fa-sync-alt text-success text-lg"></i>
                                </a>

                                <a href="{{ route('admin.suppliers.deleteditems') }}" class="btn btn-tool">
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
                <h3 class="card-title">Supplier </h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool"  data-toggle="modal" data-target="#modal-lg">
                        <i class="fas fa-plus text-primary text-lg"></i>
                    </button>

                    <button class="btn btn-tool" data-toggle="modal">
                        <i class="fas fa-file-excel text-info text-lg"></i>
                    </button>

                    <a href="{{ route('admin.suppliers.index') }}" class="btn btn-tool">
                        <i class="fas fa-sync-alt text-success text-lg"></i>
                    </a>

                    <a href="{{ route('admin.suppliers.deleteditems') }}" class="btn btn-tool">
                        <i class="fas fa-trash-alt text-danger text-lg"></i>
                    </a>

                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus text-primary text-lg"></i>
                    </button>
                </div>
              </div>

                @if($suppliers->count() > 0)
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap" id="infoTable">
                        <thead>
                        <th>ID</th>
                        <th>Supplier Name</th>
                        <th>Supplier Description</th>
                        <th>Supplier Country</th>
                        <th>Supplier Address</th>
                        <th>Status</th>
                        <th>Actions</th>
                        </thead>
                        <tbody>
                        @foreach ($suppliers as $key => $item)
                        <tr>
                            <td>
                                <span class="badge badge-light px-3 py-2">
                                    {{ method_exists($suppliers, 'firstItem') ? $suppliers->firstItem() + $key : $key + 1 }}
                                </span>
                            </td>
                            <td>
                                <div class="permission-name">{{ $item->supplier_name }}</div>
                            </td>
                            <td>
                                {{ $item->supplier_description }}
                            </td>
                            <td>
                                {{ $item->supplier_country }}
                            </td>
                            <td>
                                {{ $item->supplier_address }}
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

                                <form method="POST" action="{{ route('admin.suppliers.destroy', $item->id) }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-tool" onclick="return confirm('Are you sure you want to delete this supplier?')">
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
                                        <i class="fas fa-plus-circle text-success mr-2"></i>Update Supplier
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <!-- Horizontal Form -->
                                    <div class="card card-info">
                                    <!-- form start -->
                                    <form class="form-horizontal" method="POST" action="{{ route('admin.suppliers.update', $item->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Supplier Name</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="Supplier Name" name="supplier_name" required value="{{ $item->supplier_name}}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Supplier Description</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Supplier Description" name="supplier_description" required value="{{ $item->supplier_description}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Supplier Country</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Supplier Country" name="supplier_country" value="{{ $item->supplier_country}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Supplier Address</label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" id="inputEmail3" placeholder="Supplier Address" name="supplier_address">{{ $item->supplier_address }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Status</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="status" required>
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
                            You haven’t created any suppliers yet. Start by adding your first supplier.
                        </p>

                         <button type="button" class="btn btn-tool- btn-primary btn-sm"  data-toggle="modal" data-target="#modal-lg">
                            <i class="fas fa-plus mr-1"></i> Create Supplier
                        </button>

                    </div>
                </div>
                @endif

              @if(method_exists($suppliers, 'links'))
               <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    {{ $suppliers->links() }}
                </ul>
              </div>
              @endif
            </div>
            <!-- /.card -->
          </div>
        </div>
        
        


        {{-- Add Permission Modal --}}
        <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="addPermissionLabel">
                    <i class="fas fa-plus-circle text-success mr-2"></i>Add New Supplier
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <!-- Horizontal Form -->
                <div class="card card-info">
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('admin.suppliers.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Supplier Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Supplier Name" name="supplier_name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Supplier Description</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Supplier Description" name="supplier_description" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Supplier Country</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Supplier Country" name="supplier_country">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Supplier Address</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="inputEmail3" placeholder="Supplier Address" name="supplier_address"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Status</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="status" required>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
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
@endsection