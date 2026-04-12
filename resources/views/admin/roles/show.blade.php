@extends('admin.layouts.master')

@section('admin')
<style>
    .role-show-page .page-title {
        font-size: 1.6rem;
        font-weight: 700;
        color: #2c3e50;
    }

    .role-show-page .page-subtitle {
        font-size: .95rem;
        color: #6c757d;
    }

    .role-show-page .card {
        border: 0;
        border-radius: 14px;
        box-shadow: 0 8px 24px rgba(44, 62, 80, 0.08);
        overflow: hidden;
    }

    .role-show-page .card-header {
        background: linear-gradient(135deg, #ffffff, #f8fbff);
        border-bottom: 1px solid #eef2f7;
    }

    .role-show-page .btn {
        border-radius: 10px;
        font-weight: 600;
    }

    .role-show-page .info-box-custom {
        background: linear-gradient(135deg, #ffffff, #f8fbff);
        border: 1px solid #e8f0f8;
        border-radius: 14px;
        padding: 20px;
        height: 100%;
    }

    .role-show-page .info-label {
        font-size: .82rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .4px;
        color: #6c757d;
        margin-bottom: 8px;
    }

    .role-show-page .role-name-value {
        font-size: 1.35rem;
        font-weight: 700;
        color: #2f3e4e;
        margin-bottom: 0;
    }

    .role-show-page .permission-wrapper {
        background: #fff;
        border: 1px solid #edf2f7;
        border-radius: 14px;
        padding: 20px;
    }

    .role-show-page .permission-badge {
        display: inline-block;
        background: rgba(40, 167, 69, 0.12);
        color: #28a745;
        border-radius: 999px;
        padding: .5rem .85rem;
        font-size: .82rem;
        font-weight: 600;
        margin-right: 8px;
        margin-bottom: 10px;
    }

    .role-show-page .empty-state {
        text-align: center;
        padding: 30px 20px;
        color: #6c757d;
    }

    .role-show-page .empty-state i {
        font-size: 42px;
        color: #c0c7d1;
        margin-bottom: 10px;
    }

    .role-show-page .summary-strip {
        background: linear-gradient(135deg, #f8fbff, #ffffff);
        border: 1px solid #e9f1f7;
        border-radius: 12px;
        padding: 12px 16px;
        color: #5c6b77;
        font-size: .92rem;
    }

    .role-show-page .mini-stat {
        display: inline-flex;
        align-items: center;
        background: #f8fbff;
        border: 1px solid #e9f1f7;
        border-radius: 999px;
        padding: .45rem .85rem;
        font-size: .85rem;
        font-weight: 600;
        color: #3b4b5c;
    }

    .role-show-page .mini-stat i {
        margin-right: 6px;
    }

    .info-box-custom {
    background: linear-gradient(135deg, #f8f9fa, #ffffff);
    transition: 0.3s ease;
    overflow: hidden;
}

.info-box-custom:hover {
    transform: translateY(-5px);
}

/* Overlay effect */
.bg-overlay {
    position: absolute;
    top: 0;
    right: 0;
    width: 80px;
    height: 80px;
    background: rgba(13, 110, 253, 0.1);
    border-radius: 50%;
}

/* Icon */
.icon-wrapper {
    width: 70px;
    height: 70px;
    margin: auto;
    border-radius: 50%;
    background: rgba(13, 110, 253, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
}

.icon-wrapper i {
    font-size: 28px;
    color: #0d6efd;
}

/* Role name */
.role-name-value {
    font-weight: 700;
    font-size: 20px;
    color: #333;
}

/* Divider */
.divider {
    height: 1px;
    background: #eee;
}

/* Mini stat */
.mini-stat {
    font-size: 14px;
    color: #666;
}

.mini-stat i {
    color: #198754;
    margin-right: 5px;
}

.mini-stat .count {
    font-weight: bold;
    font-size: 18px;
    color: #000;
}
</style>

<section class="content role-show-page">
    <div class="container-fluid"> <br>

        {{-- Header --}}
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
            <div class="mb-2">
                <h1 class="page-title mb-1">Show Role</h1>
                <div class="page-subtitle">
                    View role details and assigned permissions in a clean and premium interface.
                </div>
            </div>

            <div class="mb-2">
                <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.index') }}">
                    <i class="fas fa-arrow-left mr-1"></i> Back
                </a>
            </div>
        </div>

        {{-- Summary --}}
        <div class="summary-strip mb-4">
            <i class="fas fa-info-circle text-primary mr-1"></i>
            This page shows the selected role name and all permissions currently assigned to it.
        </div>

        <div class="row">
            {{-- Role Details --}}
            <div class="col-lg-4 mb-4">
                <div class="info-box-custom shadow-lg rounded-4 p-4 text-center position-relative">

                    <!-- Gradient Background -->
                    <div class="bg-overlay"></div>

                    <!-- Icon -->
                    <div class="icon-wrapper mb-3">
                        <i class="fas fa-user-shield"></i>
                    </div>

                    <!-- Role Name -->
                    <div class="info-label text-uppercase">Role</div>
                    <h4 class="role-name-value">{{ $role->name }}</h4> <br>

                    <div class="info-label text-uppercase">Factory</div>
                    <h4 class="role-name-value">{{ $role->factory->name ?? 'N/A' }}</h4>

                    <!-- Divider -->
                    <div class="divider my-3"></div>

                    <!-- Permission Count -->
                    <div class="mini-stat">
                        <i class="fas fa-key"></i>
                        <span class="count">
                            {{ !empty($rolePermissions) ? count($rolePermissions) : 0 }}
                        </span> &nbsp;
                        <span class="text">Permissions</span>
                    </div>

                </div>
            </div>

            {{-- Permissions --}}
            <div class="col-lg-8 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title font-weight-bold mb-0">
                            <i class="fas fa-shield-alt text-success mr-2"></i>Assigned Permissions
                        </h3>
                    </div>

                    <div class="card-body">
                        <div class="permission-wrapper">
                            @if(!empty($rolePermissions) && count($rolePermissions) > 0)
                                @foreach($rolePermissions as $v)
                                    <span class="permission-badge">
                                        <i class="fas fa-check-circle mr-1"></i>{{ $v->name }}
                                    </span>
                                @endforeach
                            @else
                                <div class="empty-state">
                                    <i class="fas fa-folder-open"></i>
                                    <div class="font-weight-bold">No permissions assigned</div>
                                    <small>This role currently does not have any permissions.</small>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection