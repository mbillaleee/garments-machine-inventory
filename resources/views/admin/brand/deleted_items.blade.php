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
                    <h1 class="page-title mb-1">Deleted Brand Management</h1>
                    <div class="page-subtitle">
                        Manage deleted application brands with a cleaner and more user-friendly admin experience.
                    </div>
                </div>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Brands</h3>

                <div class="card-tools">
                    <a href="{{ route('admin.brands.index') }}" class="btn btn-tool">
                        <i class="fas fa-list-alt text-success text-lg"></i>
                    </a>

                    <a href="{{ route('admin.brands.deleteditems') }}" class="btn btn-tool">
                        <i class="fas fa-sync-alt text-danger text-lg"></i>
                    </a>

                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus text-primary text-lg"></i>
                    </button>
                </div>
              </div>

                
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover mb-0" id="brandTable">
                        <thead>
                            <tr>
                                <th width="80">#</th>
                                <th>Brand Name</th>
                                <th>Status</th>
                                <th>Added By</th>
                                <th>Updated By</th>
                                <th>Deleted By</th>
                                <th>Deleted At</th>
                                <th width="280" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $key => $item)
                            <tr>
                                <td>
                                    <span class="badge badge-light px-3 py-2">
                                        {{ method_exists($brands, 'firstItem') ? $brands->firstItem() + $key : $key + 1 }}
                                    </span>
                                </td>
                                <td>
                                    <div class="permission-name">{{ $item->name }}</div>
                                </td>
                                <td>
                                    @if($item->status == 1)
                                        <span class="badge badge-primary">Active</span>
                                    @else
                                        <span class="badge badge-secondary">Inactive</span>
                                    @endif
                                </td>

                                <td>
                                    {{ $item->addedByser->name ?? 'N/A' }}
                                </td>
                                <td>
                                    {{ $item->updatedByser->name ?? 'N/A' }}
                                </td>

                                <td>
                                    {{ $item->deletedByser->name ?? 'N/A' }}
                                </td>

                                <td>{{ $item->deleted_at ? $item->deleted_at->format('Y-m-d H:i:s') : 'N/A' }}</td>

                                

                                <td class="text-center action-group">

                                    <form method="POST" action="{{ route('admin.brands.restore', $item->id) }}" class="d-inline">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to restore this brand?')">
                                            <i class="fas fa-undo mr-1"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            <tr id="noSearchResultRow" style="display:none;">
                                <td colspan="4">
                                    <div class="empty-state">
                                        <i class="fas fa-search-minus"></i>
                                        <div class="font-weight-bold">No matching brand found</div>
                                        <small>Try searching with another keyword.</small>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
              @if(method_exists($brands, 'links'))
               <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    {{ $brands->links() }}
                </ul>
              </div>
              @endif
            </div>
            <!-- /.card -->
          </div>
        </div>
        
        


        {{-- Add Permission Modal --}}
        <div class="modal fade mobile-modal" id="addPermissionModal" tabindex="-1" role="dialog" aria-labelledby="addPermissionLabel" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered-" role="document">
                <form method="POST" action="{{ route('admin.brands.store') }}">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold" id="addPermissionLabel">
                                <i class="fas fa-plus-circle text-success mr-2"></i>Add New Brand
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                                <label class="font-weight-semibold">Brand Name <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-tag"></i></span>
                                    </div>
                                    <input type="text" name="name" class="form-control" placeholder="Enter brand name" required>
                                </div>
                                <small class="form-text text-muted">Enter the name of the brand.</small>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold">Status <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-toggle-on"></i></span>
                                    </div>
                                    <select name="status" class="form-control" required>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>

                                </div>
                                <small class="form-text text-muted">Select the status of the brand.</small>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light border" data-dismiss="modal">
                                <i class="fas fa-times mr-1"></i> Cancel
                            </button>
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save mr-1"></i> Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{-- Edit Permission Modals --}}
        @foreach ($brands as $item)
        <div class="modal fade" id="ediModal-{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editLabel-{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered-" role="document">
                <form method="POST" action="{{ route('admin.brands.update', $item->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold" id="editLabel-{{ $item->id }}">
                                <i class="fas fa-edit text-primary mr-2"></i>Update Brand
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                                <label class="font-weight-semibold">Brand Name <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-tag"></i></span>
                                    </div>
                                    <input type="text" name="name" class="form-control" value="{{ $item->name }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold">Status <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-toggle-on"></i></span>
                                    </div>
                                    <select name="status" class="form-control" required>
                                        <option value="1" {{ $item->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $item->status == 0 ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light border" data-dismiss="modal">
                                <i class="fas fa-times mr-1"></i> Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-sync-alt mr-1"></i> Update Brand
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endforeach

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