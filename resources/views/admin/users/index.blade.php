@extends('admin.layouts.master')

@section('admin')
<style>
    .users-page .page-title {
        font-size: 1.6rem;
        font-weight: 700;
        color: #2c3e50;
    }

    .users-page .page-subtitle {
        font-size: .95rem;
        color: #6c757d;
    }

    .users-page .card {
        border: 0;
        border-radius: 14px;
        box-shadow: 0 8px 24px rgba(44, 62, 80, 0.08);
        overflow: hidden;
    }

    .users-page .card-header {
        background: linear-gradient(135deg, #ffffff, #f8fbff);
        border-bottom: 1px solid #eef2f7;
    }

    .users-page .btn {
        border-radius: 10px;
        font-weight: 600;
    }

    .users-page .btn-sm {
        padding: .38rem .75rem;
    }

    .users-page .stat-box {
        background: linear-gradient(135deg, #ffffff, #f7fbff);
        border: 1px solid #edf2f7;
        border-radius: 16px;
        padding: 18px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.04);
        height: 100%;
    }

    .users-page .stat-box .stat-icon {
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

    .users-page .stat-box .stat-number {
        font-size: 1.6rem;
        font-weight: 700;
        color: #1f2d3d;
        line-height: 1;
    }

    .users-page .stat-box .stat-label {
        font-size: .92rem;
        color: #6c757d;
        margin-top: 6px;
    }

    .users-page .search-box .form-control,
    .users-page .search-box .input-group-text {
        border-radius: 10px;
    }

    .users-page .search-box .input-group-text {
        background: #fff;
        border-right: 0;
    }

    .users-page .search-box .form-control {
        border-left: 0;
    }

    .users-page .table thead th {
        border-top: 0;
        border-bottom: 1px solid #e9ecef;
        font-size: .88rem;
        text-transform: uppercase;
        letter-spacing: .4px;
        color: #495057;
        background-color: #f8fafc;
        white-space: nowrap;
    }

    .users-page .table td {
        vertical-align: middle;
    }

    .users-page .table-hover tbody tr:hover {
        background-color: #f8fbff;
        transition: .2s ease;
    }

    .users-page .user-name {
        font-weight: 600;
        color: #2f3e4e;
    }

    .users-page .user-email {
        color: #6c757d;
        font-size: .9rem;
    }

    .users-page .role-badge {
        display: inline-block;
        background: rgba(40, 167, 69, 0.12);
        color: #28a745;
        border-radius: 999px;
        padding: .42rem .75rem;
        font-size: .78rem;
        font-weight: 600;
        margin-right: 6px;
        margin-bottom: 6px;
    }

    .users-page .action-group .btn {
        margin: 2px;
    }

    .users-page .empty-state {
        padding: 40px 20px;
        text-align: center;
        color: #6c757d;
    }

    .users-page .empty-state i {
        font-size: 42px;
        margin-bottom: 10px;
        color: #c0c7d1;
    }

    .users-page .table-footer-wrap {
        background: #fff;
    }
</style>


<section class="content users-page">
    <div class="container-fluid"> <br>

        {{-- Header --}}
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
            <div class="mb-2">
                <h1 class="page-title mb-1">Users Management</h1>
                <div class="page-subtitle">
                    Manage system users, assigned roles, and account actions in a clean and premium interface.
                </div>
            </div>

            <div class="mb-2">
                <a class="btn btn-success" href="{{ route('admin.users.create') }}">
                    <i class="fas fa-user-plus mr-1"></i> Create New User
                </a>
            </div>
        </div>

        {{-- Success Alert --}}
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
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-number">{{ \App\Models\User::count() }}</div>
                    <div class="stat-label">Total Users</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-3">
                <div class="stat-box">
                    <div class="stat-icon bg-success">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div class="stat-number">{{ $data->count() }}</div>
                    <div class="stat-label">Showing Current Page Items</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 mb-3">
                <div class="stat-box">
                    <div class="stat-icon bg-info">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div class="stat-number">Role Based</div>
                    <div class="stat-label">Access Control System</div>
                </div>
            </div>
        </div>

        {{-- Users List Card --}}
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-2 mb-md-0">
                        <h3 class="card-title font-weight-bold mb-0">
                            <i class="fas fa-list text-primary mr-2"></i>Users List
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
                                <input type="text" id="userSearch" class="form-control" placeholder="Search by name, email or role...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0">
                <div class="table-responsive responsive-table-mobile">
                @if($data->count() > 0)
                <table class="table table-hover mb-0" id="usersTable">
                    <thead>
                        <tr>
                            <th width="80">No</th>
                            <th width="80">Employee No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th width="220" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $user)
                        <tr>
                            <td>
                                <span class="badge badge-light px-3 py-2">
                                    {{  $key + 1 }}
                                </span>
                            </td>
                            <td>{{ $user->employee_no }}</td>
                            <td>
                                <div class="user-name">{{ $user->name }}</div>
                                <small class="text-muted">User account</small>
                            </td>
                            <td>
                                <div class="user-email">{{ $user->email }}</div>
                            </td>
                            <td>
                                @if(!empty($user->getRoleNames()) && count($user->getRoleNames()) > 0)
                                    @foreach($user->getRoleNames() as $v)
                                        <span class="role-badge">{{ $v }}</span>
                                    @endforeach
                                @else
                                    <span class="text-muted">No role assigned</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <div class="action-btn-group">
                                    <a class="btn btn-info btn-sm" href="{{ route('admin.users.show',$user->id) }}">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.users.edit',$user->id) }}"> 
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form method="POST" action="{{ route('admin.users.destroy',$user->id) }}" class="d-inline-block m-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this user?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                        <tr id="noSearchResultRow" style="display:none;">
                            <td colspan="5">
                                <div class="empty-state">
                                    <i class="fas fa-search-minus"></i>
                                    <div class="font-weight-bold">No matching user found</div>
                                    <small>Try searching with another keyword.</small>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                @else
                </div>
                <div class="empty-state">
                    <i class="fas fa-user-slash"></i>
                    <div class="font-weight-bold">No users found</div>
                    <small>You haven’t created any users yet.</small>
                </div>
                @endif
            </div>

            <div class="card-footer clearfix table-footer-wrap">
                <div class="float-right">
                    {!! $data->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('userSearch');
        const table = document.getElementById('usersTable');

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