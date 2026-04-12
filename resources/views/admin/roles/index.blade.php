@extends('admin.layouts.master')

@section('admin')
<style>
    .role-page .page-title {
        font-size: 1.6rem;
        font-weight: 700;
        color: #2c3e50;
    }

    .role-page .page-subtitle {
        font-size: .95rem;
        color: #6c757d;
    }

    .role-page .card {
        border: 0;
        border-radius: 14px;
        box-shadow: 0 8px 24px rgba(44, 62, 80, 0.08);
    }

    .role-page .card-header {
        background: linear-gradient(135deg, #ffffff, #f8fbff);
        border-bottom: 1px solid #eef2f7;
    }

    .role-page .btn {
        border-radius: 10px;
        font-weight: 600;
    }

    .role-page .btn-sm {
        padding: .38rem .75rem;
    }

    .role-page .stat-box {
        background: linear-gradient(135deg, #ffffff, #f7fbff);
        border: 1px solid #edf2f7;
        border-radius: 16px;
        padding: 18px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.04);
        height: 100%;
    }

    .role-page .stat-box .stat-icon {
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

    .role-page .stat-box .stat-number {
        font-size: 1.6rem;
        font-weight: 700;
        color: #1f2d3d;
        line-height: 1;
    }

    .role-page .stat-box .stat-label {
        font-size: .92rem;
        color: #6c757d;
        margin-top: 6px;
    }

    .role-page .table thead th {
        border-top: 0;
        border-bottom: 1px solid #e9ecef;
        font-size: .88rem;
        text-transform: uppercase;
        letter-spacing: .4px;
        color: #495057;
        background-color: #f8fafc;
        white-space: nowrap;
    }

    .role-page .table td {
        vertical-align: middle;
    }

    .role-page .table-hover tbody tr:hover {
        background-color: #f8fbff;
        transition: .2s ease;
    }

    .role-page .role-name {
        font-weight: 600;
        color: #2f3e4e;
    }

    .role-page .badge-soft-success {
        background: rgba(40, 167, 69, 0.12);
        color: #28a745;
        font-size: .78rem;
        padding: .45rem .7rem;
        border-radius: 999px;
        font-weight: 600;
    }

    .role-page .search-box .form-control,
    .role-page .search-box .input-group-text {
        border-radius: 10px;
    }

    .role-page .search-box .form-control {
        border-left: 0;
    }

    .role-page .search-box .input-group-text {
        background: #fff;
        border-right: 0;
    }

    .role-page .action-group .btn {
        margin: 2px;
    }

    .role-page .empty-state {
        padding: 40px 20px;
        text-align: center;
        color: #6c757d;
    }

    .role-page .empty-state i {
        font-size: 42px;
        margin-bottom: 10px;
        color: #c0c7d1;
    }

    .role-page .brand-footer {
        text-align: center;
        color: #3c8dbc;
        font-weight: 600;
        margin-top: 14px;
    }
</style>

<section class="content role-page">
    <div class="container-fluid"> <br>

        {{-- Header --}}
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
            <div class="mb-2">
                <h1 class="page-title mb-1">Role Management</h1>
                <div class="page-subtitle">
                    Manage user roles with a premium, clean and user-friendly admin interface.
                </div>
            </div>

            <div class="mb-2 d-flex flex-wrap">
                <a class="btn btn-primary btn-sm mr-2 mb-2" href="{{ route('admin.roles.create') }}">
                    <i class="fas fa-user-plus mr-1"></i> Create New Role
                </a>

                <a class="btn btn-success btn-sm mb-2" href="{{ route('admin.permissions.index') }}">
                    <i class="fas fa-plus-circle mr-1"></i> Create New Permission
                </a>
            </div>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="fas fa-check-circle mr-1"></i> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        {{-- Stats --}}
        <div class="row mb-4">
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="stat-box">
                    <div class="stat-icon bg-primary">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div class="stat-number">{{ $roles->total() ?? $roles->count() }}</div>
                    <div class="stat-label">Total Roles</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-3">
                <div class="stat-box">
                    <div class="stat-icon bg-success">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <div class="stat-number">{{ $roles->count() }}</div>
                    <div class="stat-label">Showing Current Page Items</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 mb-3">
                <div class="stat-box">
                    <div class="stat-icon bg-info">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="stat-number">Active</div>
                    <div class="stat-label">Role Access Control</div>
                </div>
            </div>
        </div>

        {{-- Roles Table Card --}}
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-2 mb-md-0">
                        <h3 class="card-title font-weight-bold mb-0">
                            <i class="fas fa-users-cog text-primary mr-2"></i>Role List
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
                                <input type="text" id="roleSearch" class="form-control" placeholder="Search role by name...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body p-0">
                @if($roles->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="roleTable">
                        <thead>
                            <tr>
                                <th width="80">#</th>
                                <th>Role Name</th>
                                <th>Factory</th>
                                <th width="150">Status</th>
                                <th width="280" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $key => $role)
                            <tr>
                                <td>
                                    <span class="badge badge-light px-3 py-2">
                                        {{ $i + $key + 1 }}
                                    </span>
                                </td>
                                <td>
                                    <div class="role-name">{{ $role->name }}</div>
                                    <small class="text-muted">Access control role</small>
                                </td>
                                <td>
                                    <i class="fas fa-industry mr-1 text-info"></i>
                                    {{ $role->factory ? $role->factory->name : 'TEAM GROUP (All)' }}
                                </td>

                                <td>
                                    <span class="badge-soft-success">
                                        Active
                                    </span>
                                </td>
                                <td class="text-center action-group">
                                    <a class="btn btn-info btn-sm" href="{{ route('admin.roles.show',$role->id) }}">
                                        <i class="fas fa-eye mr-1"></i>
                                    </a>

                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.edit',$role->id) }}">
                                        <i class="fas fa-edit mr-1"></i>
                                    </a>

                                    <form method="POST" action="{{ route('admin.roles.destroy', $role->id) }}" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this role?')">
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
                                        <div class="font-weight-bold">No matching role found</div>
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
                    <div class="font-weight-bold">No roles found</div>
                    <small>You haven’t created any roles yet.</small>
                </div>
                @endif
            </div>

            <div class="card-footer bg-white clearfix">
                <div class="float-right">
                    {!! $roles->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('roleSearch');
        const table = document.getElementById('roleTable');

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