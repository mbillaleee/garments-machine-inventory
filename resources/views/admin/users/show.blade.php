@extends('admin.layouts.master')

@section('admin')
<style>
    .user-show-page .page-title {
        font-size: 1.6rem;
        font-weight: 700;
        color: #2c3e50;
    }

    .user-show-page .page-subtitle {
        font-size: .95rem;
        color: #6c757d;
    }

    .user-show-page .btn {
        border-radius: 10px;
        font-weight: 600;
    }

    .user-show-page .card {
        border: 0;
        border-radius: 14px;
        box-shadow: 0 8px 24px rgba(44, 62, 80, 0.08);
        overflow: hidden;
    }

    .user-show-page .card-header {
        background: linear-gradient(135deg, #ffffff, #f8fbff);
        border-bottom: 1px solid #eef2f7;
    }

    .user-show-page .summary-strip {
        background: linear-gradient(135deg, #f8fbff, #ffffff);
        border: 1px solid #e8f0f8;
        border-radius: 12px;
        padding: 12px 16px;
        color: #5c6b77;
        font-size: .92rem;
    }

    .user-show-page .profile-card {
        background: linear-gradient(135deg, #ffffff, #f8fbff);
        border: 1px solid #e9f1f7;
        border-radius: 16px;
        padding: 24px;
        height: 100%;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.04);
    }

    .user-show-page .profile-avatar {
        width: 72px;
        height: 72px;
        border-radius: 18px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        color: #fff;
        background: linear-gradient(135deg, #007bff, #00bcd4);
        margin-bottom: 16px;
    }

    .user-show-page .profile-name {
        font-size: 1.35rem;
        font-weight: 700;
        color: #2f3e4e;
        margin-bottom: 4px;
    }

    .user-show-page .profile-email {
        color: #6c757d;
        font-size: .95rem;
        word-break: break-word;
    }

    .user-show-page .mini-stat {
        display: inline-flex;
        align-items: center;
        background: #f8fbff;
        border: 1px solid #e9f1f7;
        border-radius: 999px;
        padding: .45rem .85rem;
        font-size: .84rem;
        font-weight: 600;
        color: #3b4b5c;
        margin-top: 14px;
    }

    .user-show-page .mini-stat i {
        margin-right: 6px;
    }

    .user-show-page .info-card {
        border: 1px solid #edf2f7;
        border-radius: 14px;
        background: #fff;
        padding: 20px;
        height: 100%;
    }

    .user-show-page .info-row {
        display: flex;
        flex-wrap: wrap;
        padding: 14px 0;
        border-bottom: 1px solid #f1f4f8;
    }

    .user-show-page .info-row:last-child {
        border-bottom: 0;
        padding-bottom: 0;
    }

    .user-show-page .info-label {
        width: 180px;
        font-size: .82rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .4px;
        color: #6c757d;
        margin-bottom: 6px;
    }

    .user-show-page .info-value {
        flex: 1;
        color: #2f3e4e;
        font-weight: 600;
        word-break: break-word;
    }

    .user-show-page .role-wrap {
        margin-top: 4px;
    }

    .user-show-page .role-badge {
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

    .user-show-page .empty-state {
        text-align: center;
        padding: 28px 20px;
        color: #6c757d;
    }

    .user-show-page .empty-state i {
        font-size: 40px;
        color: #c0c7d1;
        margin-bottom: 10px;
    }
</style>

<section class="content user-show-page">
    <div class="container-fluid"> <br>

        {{-- Header --}}
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
            <div class="mb-2">
                <h1 class="page-title mb-1">Show User</h1>
                <div class="page-subtitle">
                    View user details and assigned roles in a clean and premium interface.
                </div>
            </div>

            <div class="mb-2">
                <a class="btn btn-primary btn-sm" href="{{ route('admin.users.index') }}">
                    <i class="fas fa-arrow-left mr-1"></i> Back
                </a>
            </div>
        </div>

        {{-- Summary --}}
        <div class="summary-strip mb-4">
            <i class="fas fa-info-circle text-primary mr-1"></i>
            This page displays the selected user’s profile information and current role assignments.
        </div>

        <div class="row">
            {{-- User Profile --}}
            <div class="col-lg-4 mb-4">
                <div class="profile-card text-center">
                    <div class="profile-avatar">
                        <i class="fas fa-user"></i>
                    </div>

                    <div class="profile-name">{{ $user->name }}</div>
                    <div class="profile-email">{{ $user->email }}</div>

                    <div class="mini-stat">
                        <i class="fas fa-user-shield text-success"></i>
                        {{ count($user->getRoleNames()) }} Roles Assigned
                    </div>
                </div>
            </div>

            {{-- User Details --}}
            <div class="col-lg-8 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title font-weight-bold mb-0">
                            <i class="fas fa-id-card text-primary mr-2"></i>User Details
                        </h3>
                    </div>

                    <div class="card-body">
                        <div class="info-card">
                            <div class="info-row">
                                <div class="info-label">Employee No</div>
                                <div class="info-value">{{ $user->employee_no }}</div>
                            </div>

                            <div class="info-row">
                                <div class="info-label">Full Name</div>
                                <div class="info-value">{{ $user->name }}</div>
                            </div>

                            <div class="info-row">
                                <div class="info-label">Email Address</div>
                                <div class="info-value">{{ $user->email }}</div>
                            </div>

                            <div class="info-row">
                                    <div class="info-label">Factory</div>
                                    <div class="info-value">{{ $user->factory->name ?? 'N/A' }}</div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">Status</div>
                                <div class="info-value">
                                    @if($user->status == 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-secondary">Inactive</span>
                                    @endif
                                </div>
                            </div>

                             <div class="info-row">
                                <div class="info-label">Multi Company</div>
                                <div class="info-value">
                                    @if($user->multi_company == 1)
                                        <span class="badge badge-info">Yes</span>
                                    @else
                                        <span class="badge badge-secondary">No</span>
                                    @endif
                                </div>
                            </div>


                            <div class="info-row">
                                <div class="info-label">Assigned Roles</div>
                                <div class="info-value">
                                    <div class="role-wrap">
                                        @if(!empty($user->getRoleNames()) && count($user->getRoleNames()) > 0)
                                            @foreach($user->getRoleNames() as $role)
                                                <span class="role-badge">
                                                    <i class="fas fa-check-circle mr-1"></i>{{ $role }}
                                                </span>
                                            @endforeach
                                        @else
                                            <div class="empty-state">
                                                <i class="fas fa-user-slash"></i>
                                                <div class="font-weight-bold">No roles assigned</div>
                                                <small>This user currently does not have any assigned role.</small>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection