@extends('admin.layouts.master')

@section('admin')
<style>
    .user-create-page .page-title {
        font-size: 1.6rem;
        font-weight: 700;
        color: #2c3e50;
    }

    .user-create-page .page-subtitle {
        font-size: .95rem;
        color: #6c757d;
    }

    .user-create-page .card {
        border: 0;
        border-radius: 14px;
        box-shadow: 0 8px 24px rgba(44, 62, 80, 0.08);
        overflow: hidden;
    }

    .user-create-page .card-header {
        background: linear-gradient(135deg, #ffffff, #f8fbff);
        border-bottom: 1px solid #eef2f7;
    }

    .user-create-page .btn {
        border-radius: 10px;
        font-weight: 600;
    }

    .user-create-page .btn-sm {
        padding: .42rem .85rem;
    }

    .user-create-page .form-control {
        border-radius: 10px;
        height: 44px;
        border: 1px solid #dfe7ef;
        box-shadow: none;
    }

    .user-create-page .form-control:focus {
        border-color: #80bdff;
        box-shadow: 0 0 0 0.1rem rgba(0, 123, 255, 0.10);
    }

    .user-create-page .input-group-text {
        background: #fff;
        border: 1px solid #dfe7ef;
        border-right: 0;
        border-radius: 10px 0 0 10px;
    }

    .user-create-page .input-group .form-control {
        border-left: 0;
        border-radius: 0 10px 10px 0;
    }

    .user-create-page .section-title {
        font-size: 1rem;
        font-weight: 700;
        color: #2f3e4e;
        margin-bottom: 4px;
    }

    .user-create-page .section-subtitle {
        font-size: .88rem;
        color: #6c757d;
        margin-bottom: 16px;
    }

    .user-create-page .required {
        color: #dc3545;
    }

    .user-create-page .info-strip {
        background: linear-gradient(135deg, #f8fbff, #ffffff);
        border: 1px solid #e8f0f8;
        border-radius: 12px;
        padding: 12px 15px;
        color: #5c6b77;
        font-size: .9rem;
    }

    .user-create-page .role-box {
        background: #fbfdff;
        border: 1px solid #edf2f7;
        border-radius: 12px;
        padding: 14px;
    }

    .user-create-page .card-footer {
        background: #fff;
        border-top: 1px solid #eef2f7;
    }

    .user-create-page .select2-container--default .select2-selection--multiple {
        border: 1px solid #dfe7ef;
        border-radius: 10px;
        min-height: 44px;
        padding: 4px 8px;
    }

    .user-create-page .select2-container--default.select2-container--focus .select2-selection--multiple {
        border-color: #80bdff;
        box-shadow: 0 0 0 0.1rem rgba(0, 123, 255, 0.10);
    }

    .user-create-page .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background: rgba(0, 123, 255, 0.12);
        border: 0;
        color: #007bff;
        border-radius: 999px;
        padding: 3px 10px;
        font-weight: 600;
    }

    .user-create-page .password-hint {
        font-size: .82rem;
        color: #6c757d;
        margin-top: 6px;
    }

    .custom-checkbox-wrapper {
        display: flex;
        align-items: center;
        gap: 10px;
        background: #f8f9fa;
        padding: 10px 14px;
        border-radius: 8px;
        border: 1px solid #e5e7eb;
        transition: 0.3s;
    }

    .custom-checkbox-wrapper:hover {
        background: #eef2ff;
        border-color: #0d6efd;
    }

    /* Checkbox */
    .custom-checkbox {
        width: 18px;
        height: 18px;
        cursor: pointer;
    }

    /* Label */
    .checkbox-label {
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        margin-bottom: 0;
    }

    /* Helper text */
    .helper-text {
        font-size: 12px;
        color: #6c757d;
    }
</style>

<section class="content user-create-page">
    <div class="container-fluid"> <br>

        {{-- Header --}}
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
            <div class="mb-2">
                <h1 class="page-title mb-1">Create New User</h1>
                <div class="page-subtitle">
                    Add a new user account and assign roles with a clean and premium admin experience.
                </div>
            </div>

            <div class="mb-2">
                <a class="btn btn-primary btn-sm" href="{{ route('admin.users.index') }}">
                    <i class="fas fa-arrow-left mr-1"></i> Back to Users List
                </a>
            </div>
        </div>

        {{-- Error Alert --}}
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
                    <i class="fas fa-user-plus text-primary mr-2"></i>User Information
                </h3>
            </div>

            <form method="POST" action="{{ route('admin.users.store') }}">
                @csrf

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="section-title">Basic Information</div>
                            <div class="section-subtitle">Fill in the user account details below.</div>
                        </div>

                        <div class="col-lg-4 mb-3 mb-lg-0">
                            <div class="info-strip">
                                <i class="fas fa-info-circle text-primary mr-1"></i>
                                Create users with valid role assignments to keep your system organized and secure.
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        {{-- Name --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Employee No <span class="required">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="employee_no" class="form-control" placeholder="Enter employee number" value="{{ old('employee_no') }}">
                                </div>
                                <small class="form-text text-muted">Enter a unique employee number.</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name <span class="required">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="name" class="form-control" placeholder="Enter full name" value="{{ old('name') }}">
                                </div>
                                <small class="form-text text-muted">Enter the user's full name.</small>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email <span class="required">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="Enter email address" value="{{ old('email') }}">
                                </div>
                                <small class="form-text text-muted">Enter a valid email address.</small>
                            </div>
                        </div>

                        {{-- Password --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password <span class="required">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Enter password">
                                </div>
                                <div class="password-hint">Use a strong password for better security.</div>
                            </div>
                        </div>

                        {{-- Confirm Password --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Confirm Password <span class="required">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-shield-alt"></i>
                                        </span>
                                    </div>
                                    <input type="password" name="confirm-password" class="form-control" placeholder="Confirm password">
                                </div>
                                <div class="password-hint">Re-enter the password for confirmation.</div>
                            </div>
                        </div>
                        

                        {{-- Roles --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Factory <span class="required">*</span></label>
                                    <select name="factory_id" class="form-control select2" data-placeholder="Select factory" style="width: 100%; height: 84px!important;">
                                        @foreach (\App\Models\Factory::all() as $value => $label)
                                            <option value="{{  $label->id }}" {{ (collect(old('factory_id'))->contains($label->id)) ? 'selected' : '' }}>
                                                {{ $label->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <small class="text-muted d-block mt-2">
                                        Select the factory to which this user belongs.
                                    </small>
                            </div>
                        </div>


                        {{-- Roles --}}
                        <div class="col-md-8">
                            <div class="form-group mb-0">
                                <label>Assign Role <span class="required">*</span></label>
                                <div class="role-box">
                                    <select name="roles[]" class="form-control select2" multiple="multiple" data-placeholder="Select user roles" style="width: 100%;">
                                        @foreach ($roles as $value => $label)
                                            <option value="{{ $value }}"
                                                {{ (collect(old('roles'))->contains($value)) ? 'selected' : '' }}>
                                                {{ $label }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <small class="text-muted d-block mt-2">
                                        You can assign one or multiple roles to this user.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-0">
                                <label class="form-label fw-semibold">
                                    Multi Company <span class="required text-danger">*</span>
                                </label>

                                <div class="role-box custom-checkbox-wrapper">
                                    <input type="checkbox" 
                                        name="multi_company" 
                                        id="multi_company" 
                                        class="form-check-input custom-checkbox" 
                                        value="1"
                                        {{ old('multi_company') ? 'checked' : '' }}>

                                    <label for="multi_company" class="checkbox-label">
                                        Enable Multi Company Access
                                    </label>
                                </div>

                                <small class="text-muted d-block mt-2 helper-text">
                                    This user can access multiple companies if enabled.
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-between flex-wrap">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-light border mb-2">
                        <i class="fas fa-times mr-1"></i> Cancel
                    </a>

                    <button type="submit" class="btn btn-success mb-2">
                        <i class="fas fa-save mr-1"></i> Create User
                    </button>
                </div>
            </form>
        </div>

    </div>
</section>
@endsection



