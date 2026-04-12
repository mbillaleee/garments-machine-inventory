@extends('admin.layouts.master')

@section('admin')
<style>
    .permission-page .page-title {
        font-size: 1.6rem;
        font-weight: 700;
        color: #2c3e50;
    }

    .permission-page .page-subtitle {
        font-size: .95rem;
        color: #6c757d;
    }

    .permission-page .info-box,
    .permission-page .small-box,
    .permission-page .card {
        border-radius: 14px;
    }

    .permission-page .card {
        border: 0;
        box-shadow: 0 8px 24px rgba(44, 62, 80, 0.08);
    }

    .permission-page .card-header {
        background: linear-gradient(135deg, #ffffff, #f8fbff);
        border-bottom: 1px solid #eef2f7;
    }

    .permission-page .btn {
        border-radius: 10px;
        font-weight: 600;
    }

    .permission-page .btn-sm {
        padding: .38rem .75rem;
    }

    .permission-page .stat-box {
        background: linear-gradient(135deg, #ffffff, #f7fbff);
        border: 1px solid #edf2f7;
        border-radius: 16px;
        padding: 18px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.04);
        height: 100%;
    }

    .permission-page .stat-box .stat-icon {
        width: 52px;
        height: 52px;
        border-radius: 12px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        color: #fff;
        margin-bottom: 12px;
    }

    .permission-page .stat-box .stat-number {
        font-size: 1.6rem;
        font-weight: 700;
        color: #1f2d3d;
        line-height: 1;
    }

    .permission-page .stat-box .stat-label {
        font-size: .92rem;
        color: #6c757d;
        margin-top: 6px;
    }

    .permission-page .table thead th {
        border-top: 0;
        border-bottom: 1px solid #e9ecef;
        font-size: .88rem;
        text-transform: uppercase;
        letter-spacing: .4px;
        color: #495057;
        background-color: #f8fafc;
        white-space: nowrap;
    }

    .permission-page .table td {
        vertical-align: middle;
    }

    .permission-page .permission-name {
        font-weight: 600;
        color: #2f3e4e;
    }

    .permission-page .badge-soft-primary {
        background: rgba(0, 123, 255, 0.12);
        color: #007bff;
        font-size: .78rem;
        padding: .45rem .7rem;
        border-radius: 999px;
        font-weight: 600;
    }

    .permission-page .action-group .btn {
        margin: 2px;
    }

    .permission-page .search-box .form-control,
    .permission-page .search-box .input-group-text {
        border-radius: 10px;
    }

    .permission-page .search-box .form-control {
        border-left: 0;
    }

    .permission-page .search-box .input-group-text {
        background: #fff;
        border-right: 0;
    }

    .permission-page .modal-content {
        border-radius: 16px;
        border: 0;
        box-shadow: 0 10px 30px rgba(0,0,0,.12);
    }

    .permission-page .modal-header {
        background: linear-gradient(135deg, #f8fbff, #ffffff);
        border-bottom: 1px solid #edf2f7;
    }

    .permission-page .modal-footer {
        border-top: 1px solid #edf2f7;
    }

    .permission-page .empty-state {
        padding: 40px 20px;
        text-align: center;
        color: #6c757d;
    }

    .permission-page .empty-state i {
        font-size: 42px;
        margin-bottom: 10px;
        color: #c0c7d1;
    }

    .permission-page .table-hover tbody tr:hover {
        background-color: #f8fbff;
        transition: .2s ease;
    }
</style>

<section class="content permission-page"><br>
    <div class="container-fluid">
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
            <div class="mb-2">
                <h1 class="page-title mb-1">Permission Management</h1>
                <div class="page-subtitle">
                    Manage application permissions with a cleaner and more user-friendly admin experience.
                </div>
            </div>

            <div class="mb-2 d-flex flex-wrap">
                @can('permission-create')
                <a class="btn btn-primary btn-sm mr-2 mb-2" href="{{ route('admin.roles.create') }}">
                    <i class="fas fa-user-shield mr-1"></i> Create New Role
                </a>
                @endcan

                <button type="button" class="btn btn-success btn-sm mb-2" data-toggle="modal" data-target="#addPermissionModal">
                    <i class="fas fa-plus-circle mr-1"></i> Add Permission
                </button>
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

        {{-- Stats Row --}}
        <div class="row mb-4">
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="stat-box">
                    <div class="stat-icon bg-primary">
                        <i class="fas fa-key"></i>
                    </div>
                    <div class="stat-number">{{ $data->total() ?? $data->count() }}</div>
                    <div class="stat-label">Total Permissions</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-3">
                <div class="stat-box">
                    <div class="stat-icon bg-success">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <div class="stat-number">{{ $data->count() }}</div>
                    <div class="stat-label">Showing Current Page Items</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 mb-3">
                <div class="stat-box">
                    <div class="stat-icon bg-info">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <div class="stat-number">Web</div>
                    <div class="stat-label">Default Guard Name</div>
                </div>
            </div>
        </div>

        {{-- Main Card --}}
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-2 mb-md-0">
                        <h3 class="card-title font-weight-bold mb-0">
                            <i class="fas fa-shield-alt text-primary mr-2"></i>Permission List
                        </h3>
                    </div>
                    <div class="col-md-6">
                        <div class="search-box">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-search text-muted"></i>
                                    </span>
                                </div>
                                <input type="text" id="permissionSearch" class="form-control" placeholder="Search permission by name...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body p-0">
                @if($data->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="permissionTable">
                        <thead>
                            <tr>
                                <th width="80">#</th>
                                <th>Permission Name</th>
                                <th width="140">Guard</th>
                                <th width="280" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $permission)
                            <tr>
                                <td>
                                    <span class="badge badge-light px-3 py-2">
                                        {{ method_exists($data, 'firstItem') ? $data->firstItem() + $key : $key + 1 }}
                                    </span>
                                </td>
                                <td>
                                    <div class="permission-name">{{ $permission->name }}</div>
                                    <small class="text-muted">System access permission</small>
                                </td>
                                <td>
                                    <span class="badge-soft-primary">
                                        {{ $permission->guard_name ?? 'web' }}
                                    </span>
                                </td>
                                <td class="text-center action-group">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#editPermissionModal-{{ $permission->id }}">
                                        <i class="fas fa-edit mr-1"></i>
                                    </button>

                                    <form method="POST" action="{{ route('admin.permissions.destroy', $permission->id) }}" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this permission?')">
                                            <i class="fas fa-trash-alt mr-1"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            <tr id="noSearchResultRow" style="display:none;">
                                <td colspan="4">
                                    <div class="empty-state">
                                        <i class="fas fa-search-minus"></i>
                                        <div class="font-weight-bold">No matching permission found</div>
                                        <small>Try searching with another keyword.</small>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @else
                <div class="empty-state">
                    <i class="fas fa-folder-open"></i>
                    <div class="font-weight-bold">No permissions found</div>
                    <small>You haven’t created any permissions yet.</small>
                </div>
                @endif
            </div>

            @if(method_exists($data, 'links'))
            <div class="card-footer bg-white clearfix">
                <div class="float-right">
                    {{ $data->links() }}
                </div>
            </div>
            @endif
        </div>

        {{-- Add Permission Modal --}}
        <div class="modal fade" id="addPermissionModal" tabindex="-1" role="dialog" aria-labelledby="addPermissionLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form method="POST" action="{{ route('admin.permissions.store') }}">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold" id="addPermissionLabel">
                                <i class="fas fa-plus-circle text-success mr-2"></i>Add New Permission
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                                <label class="font-weight-semibold">Permission Name <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="text" name="name" class="form-control" placeholder="Enter permission name" required>
                                </div>
                                <small class="text-muted">Example: product-create, order-list, user-edit</small>
                            </div>

                            <input type="hidden" name="guard_name" value="web">

                            <div class="alert alert-light border mt-3 mb-0">
                                <i class="fas fa-info-circle text-primary mr-1"></i>
                                Guard Name will be set as <strong>web</strong>.
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light border" data-dismiss="modal">
                                <i class="fas fa-times mr-1"></i> Cancel
                            </button>
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save mr-1"></i> Save Permission
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{-- Edit Permission Modals --}}
        @foreach ($data as $permission)
        <div class="modal fade" id="editPermissionModal-{{ $permission->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editPermissionLabel-{{ $permission->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form method="POST" action="{{ route('admin.permissions.update', $permission->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold" id="editPermissionLabel-{{ $permission->id }}">
                                <i class="fas fa-edit text-primary mr-2"></i>Update Permission
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                                <label class="font-weight-semibold">Permission Name <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="text" name="name" class="form-control" value="{{ $permission->name }}" required>
                                </div>
                            </div>

                            <input type="hidden" name="guard_name" value="web">

                            <div class="alert alert-light border mt-3 mb-0">
                                <i class="fas fa-shield-alt text-info mr-1"></i>
                                Guard Name: <strong>web</strong>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light border" data-dismiss="modal">
                                <i class="fas fa-times mr-1"></i> Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-sync-alt mr-1"></i> Update Permission
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
        const searchInput = document.getElementById('permissionSearch');
        const table = document.getElementById('permissionTable');

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