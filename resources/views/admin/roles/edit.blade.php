@extends('admin.layouts.master')

@section('admin')
<style>
    .role-edit-page .page-title {
        font-size: 1.6rem;
        font-weight: 700;
        color: #2c3e50;
    }

    .role-edit-page .page-subtitle {
        font-size: .95rem;
        color: #6c757d;
    }

    .role-edit-page .card {
        border: 0;
        border-radius: 14px;
        box-shadow: 0 8px 24px rgba(44, 62, 80, 0.08);
        overflow: hidden;
    }

    .role-edit-page .card-header {
        background: linear-gradient(135deg, #ffffff, #f8fbff);
        border-bottom: 1px solid #eef2f7;
    }

    .role-edit-page .btn {
        border-radius: 10px;
        font-weight: 600;
    }

    .role-edit-page .form-control {
        border-radius: 10px;
        height: 44px;
        border: 1px solid #dfe7ef;
    }

    .role-edit-page .form-control:focus {
        border-color: #80bdff;
        box-shadow: 0 0 0 0.1rem rgba(0, 123, 255, 0.10);
    }

    .role-edit-page .input-group-text {
        background: #fff;
        border: 1px solid #dfe7ef;
        border-right: 0;
        border-radius: 10px 0 0 10px;
    }

    .role-edit-page .input-group .form-control {
        border-left: 0;
        border-radius: 0 10px 10px 0;
    }

    .role-edit-page .section-title {
        font-weight: 700;
        color: #2f3e4e;
    }

    .role-edit-page .permission-box {
        border: 1px solid #edf2f7;
        border-radius: 12px;
        padding: 12px;
        transition: .2s;
        background: #fff;
    }

    .role-edit-page .permission-box:hover {
        border-color: #cfe2ff;
        background: #fbfdff;
    }

    .role-edit-page .custom-control-label {
        font-weight: 600;
        cursor: pointer;
    }

    .role-edit-page .permission-toolbar {
        background: #f8fbff;
        border: 1px solid #e9f1f7;
        border-radius: 12px;
        padding: 12px;
        margin-bottom: 15px;
    }

    .role-edit-page .card-footer {
        border-top: 1px solid #eef2f7;
        background: #fff;
    }
</style>

<section class="content role-edit-page">
<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h1 class="page-title mb-1">Edit Role</h1>
            <div class="page-subtitle">
                Update role information and manage assigned permissions.
            </div>
        </div>

        <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.index') }}">
            <i class="fas fa-arrow-left mr-1"></i> Back
        </a>
    </div>

    {{-- Errors --}}
    @if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible fade show shadow-sm">
        <strong><i class="fas fa-exclamation-circle mr-1"></i> Whoops!</strong>
        There were some problems with your input.
        <ul class="mt-2 mb-0 pl-3">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
    </div>
    @endif

    {{-- Card --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title font-weight-bold mb-0">
                <i class="fas fa-user-edit text-primary mr-2"></i>Role Information
            </h3>
        </div>

        <form method="POST" action="{{ route('admin.roles.update', $role->id) }}">
        @csrf
        @method('PUT')

        <div class="card-body">

            {{-- Role Name --}}
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Role Name <span class="text-danger">*</span></label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user-tag"></i>
                                </span>
                            </div>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   value="{{ old('name', $role->name) }}"
                                   placeholder="Enter role name">
                        </div>
                        <small class="text-muted">Example: Admin, Manager, Editor, Support Agent</small>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Factory <span class="required">*</span></label>
                        <div class="input-group">
                            <select name="factory_id" class="form-control">
                                <option value="">TEAM GROUP (All)</option>
                                @foreach(\App\Models\Factory::all() as $factory)
                                    <option value="{{ $factory->id }}" 
                                        {{ $role->factory_id == $factory->id ? 'selected' : '' }}>
                                        {{ $factory->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <small class="text-muted">Select the factory to which this role belongs</small>
                    </div>
                </div>
            </div>

            <hr>

            {{-- Permissions --}}
            <div class="section-title mb-2">Permissions</div>

            <div class="permission-toolbar d-flex justify-content-between">
                <div>
                    <strong>Total:</strong> {{ count($permission) }}
                </div>
                <div>
                    <button type="button" class="btn btn-outline-primary btn-sm mr-2" id="selectAll">
                        Select All
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-sm" id="unselectAll">
                        Unselect All
                    </button>
                </div>
            </div>

            <div class="row">
                @foreach($permission as $value)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="permission-box">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox"
                                   name="permission[{{$value->id}}]"
                                   value="{{$value->id}}"
                                   class="custom-control-input permission-checkbox"
                                   id="perm{{$value->id}}"
                                   {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}>

                            <label class="custom-control-label" for="perm{{$value->id}}">
                                {{ $value->name }}
                            </label>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

        {{-- Footer --}}
        <div class="card-footer d-flex justify-content-between">
            <a href="{{ route('admin.roles.index') }}" class="btn btn-light border">
                <i class="fas fa-times mr-1"></i> Cancel
            </a>

            <button type="submit" class="btn btn-success">
                <i class="fas fa-sync-alt mr-1"></i> Update Role
            </button>
        </div>

        </form>
    </div>

</div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const selectAll = document.getElementById('selectAll');
        const unselectAll = document.getElementById('unselectAll');
        const checkboxes = document.querySelectorAll('.permission-checkbox');

        selectAll.addEventListener('click', function () {
            checkboxes.forEach(cb => cb.checked = true);
        });

        unselectAll.addEventListener('click', function () {
            checkboxes.forEach(cb => cb.checked = false);
        });

    });
</script>
@endsection