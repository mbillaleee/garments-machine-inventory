@extends('admin.layouts.master')

@section('admin')
<style>
    .role-create-page .page-title {
        font-size: 1.6rem;
        font-weight: 700;
        color: #2c3e50;
    }

    .role-create-page .page-subtitle {
        font-size: .95rem;
        color: #6c757d;
    }

    .role-create-page .card {
        border: 0;
        border-radius: 14px;
        box-shadow: 0 8px 24px rgba(44, 62, 80, 0.08);
        overflow: hidden;
    }

    .role-create-page .card-header {
        background: linear-gradient(135deg, #ffffff, #f8fbff);
        border-bottom: 1px solid #eef2f7;
    }

    .role-create-page .btn {
        border-radius: 10px;
        font-weight: 600;
    }

    .role-create-page .btn-sm {
        padding: .42rem .85rem;
    }

    .role-create-page .form-control {
        border-radius: 10px;
        height: 44px;
        border: 1px solid #dfe7ef;
        box-shadow: none;
    }

    .role-create-page .form-control:focus {
        border-color: #80bdff;
        box-shadow: 0 0 0 0.1rem rgba(0, 123, 255, 0.10);
    }

    .role-create-page .input-group-text {
        border-radius: 10px 0 0 10px;
        background: #fff;
        border: 1px solid #dfe7ef;
        border-right: 0;
    }

    .role-create-page .input-group .form-control {
        border-left: 0;
        border-radius: 0 10px 10px 0;
    }

    .role-create-page .section-title {
        font-size: 1rem;
        font-weight: 700;
        color: #2f3e4e;
        margin-bottom: 4px;
    }

    .role-create-page .section-subtitle {
        font-size: .88rem;
        color: #6c757d;
        margin-bottom: 16px;
    }

    .role-create-page .permission-toolbar {
        background: #f8fbff;
        border: 1px solid #e9f1f7;
        border-radius: 12px;
        padding: 12px 14px;
        margin-bottom: 18px;
    }

    .role-create-page .permission-box {
        background: #fff;
        border: 1px solid #edf2f7;
        border-radius: 12px;
        padding: 14px 16px;
        transition: all .2s ease;
        height: 100%;
    }

    .role-create-page .permission-box:hover {
        border-color: #cfe2ff;
        box-shadow: 0 6px 16px rgba(0, 123, 255, 0.06);
        background: #fbfdff;
    }

    .role-create-page .custom-control-label {
        font-weight: 600;
        color: #2f3e4e;
        cursor: pointer;
        word-break: break-word;
    }

    .role-create-page .permission-note {
        font-size: .80rem;
        color: #6c757d;
        margin-top: 4px;
    }

    .role-create-page .card-footer {
        background: #fff;
        border-top: 1px solid #eef2f7;
    }

    .role-create-page .info-strip {
        background: linear-gradient(135deg, #f8fbff, #ffffff);
        border: 1px solid #e8f0f8;
        border-radius: 12px;
        padding: 12px 15px;
        color: #5c6b77;
        font-size: .9rem;
    }

    .role-create-page .required {
        color: #dc3545;
    }
</style>

<section class="content role-create-page">
    <div class="container-fluid"> <br>

        {{-- Page Header --}}
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
            <div class="mb-2">
                <h1 class="page-title mb-1">Create New Role</h1>
                <div class="page-subtitle">
                    Create a new role and assign the appropriate permissions with a clean and premium interface.
                </div>
            </div>

            <div class="mb-2">
                <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.index') }}">
                    <i class="fas fa-arrow-left mr-1"></i> Back to Role List
                </a>
            </div>
        </div>

        {{-- Validation Errors --}}
        @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
            <strong><i class="fas fa-exclamation-circle mr-1"></i> Whoops!</strong>
            There were some problems with your input.
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

        {{-- Main Card --}}
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold mb-0">
                    <i class="fas fa-user-shield text-primary mr-2"></i>Role Information
                </h3>
            </div>

            <form method="POST" action="{{ route('admin.roles.store') }}">
                @csrf

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-title">Basic Information</div>
                            <div class="section-subtitle">Enter the role name that will be used in your access control system.</div>

                                <div class="form-group">
                                    <label>Role Name <span class="required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user-tag"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="name" class="form-control" placeholder="Enter role name" value="{{ old('name') }}">
                                    </div>
                                    <small class="text-muted">Example: Admin, Manager, Editor, Support Agent</small>
                                </div>
                            
                        </div>

                        <div class="col-lg-6 mt-3 mt-lg-0">
                            <div class="info-strip">
                                <i class="fas fa-info-circle text-primary mr-1"></i>
                                Assign only the permissions this role really needs. This keeps your system more secure and easier to manage.
                            </div>

                            
                                <div class="form-group">
                                    <label>Factory <span class="required">*</span></label>
                                    <div class="input-group">
                                        <select name="factory_id" class="form-control">
                                            <option value="">TEAM GROUP (All)</option>
                                            @foreach(\App\Models\Factory::all() as $factory)
                                                <option value="{{ $factory->id }}" 
                                                    {{ session('current_factory_id') == $factory->id ? 'selected' : '' }}>
                                                    {{ $factory->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="text-muted">Select the factory to which this role belongs</small>
                                </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="section-title">Assign Permissions</div>
                    <div class="section-subtitle">Choose which permissions will be granted to this role.</div>

                    <div class="permission-toolbar d-flex flex-wrap justify-content-between align-items-center">
                        <div class="mb-2 mb-md-0">
                            <strong><i class="fas fa-key text-warning mr-1"></i> Available Permissions:</strong>
                            {{ count($permission) }}
                        </div>
                        <div>
                            <button type="button" class="btn btn-outline-primary btn-sm mr-2" id="selectAllPermissions">
                                <i class="fas fa-check-square mr-1"></i> Select All
                            </button>
                            <button type="button" class="btn btn-outline-secondary btn-sm" id="unselectAllPermissions">
                                <i class="far fa-square mr-1"></i> Unselect All
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        @foreach($permission as $value)
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-3">
                            <div class="permission-box">
                                <div class="custom-control custom-checkbox">
                                    <input
                                        type="checkbox"
                                        name="permission[{{$value->id}}]"
                                        value="{{$value->id}}"
                                        class="custom-control-input permission-checkbox"
                                        id="perm{{$value->id}}"
                                        {{ old('permission.'.$value->id) ? 'checked' : '' }}
                                    >
                                    <label class="custom-control-label" for="perm{{$value->id}}">
                                        {{ $value->name }}
                                    </label>
                                </div>
                                <div class="permission-note">
                                    System access permission
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-between flex-wrap">
                    <a href="{{ route('admin.roles.index') }}" class="btn btn-light border mb-2">
                        <i class="fas fa-times mr-1"></i> Cancel
                    </a>

                    <button type="submit" class="btn btn-success mb-2">
                        <i class="fas fa-save mr-1"></i> Save Role
                    </button>
                </div>
            </form>
        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selectAllBtn = document.getElementById('selectAllPermissions');
        const unselectAllBtn = document.getElementById('unselectAllPermissions');
        const checkboxes = document.querySelectorAll('.permission-checkbox');

        if (selectAllBtn) {
            selectAllBtn.addEventListener('click', function () {
                checkboxes.forEach(function (checkbox) {
                    checkbox.checked = true;
                });
            });
        }

        if (unselectAllBtn) {
            unselectAllBtn.addEventListener('click', function () {
                checkboxes.forEach(function (checkbox) {
                    checkbox.checked = false;
                });
            });
        }
    });
</script>
@endsection