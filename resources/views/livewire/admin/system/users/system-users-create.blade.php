<div>
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>User Manager</h4>
                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title d-flex">
                        <li class="breadcrumb-item">
                            <a href="{{route('dashboard')}}"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Users</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Create</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

    <!-- Page-body start -->
    <style>
        .simpletable-filter input,
        .simpletable-length select {
            width:auto;
            margin: 0 5px;
        }

    </style>
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                @if (Session::has('success_message'))
                <div class="alert alert-success background-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="feather icon-x-circle text-light"></i>
                    </button>
                    <strong>Success!</strong> {{Session::get('success_message')}}
                </div>
                @endif
                <div class="card">
                    <div class="card-header pb-2">
                        <div class="row">
                            <div class="col-12">
                                <h3>Create New User</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <form wire:submit.prevent="createUser()">
                            <div class="form-group">
                                <label>User ID</label>
                                <div class="">
                                    <input type="text" class="form-control" placeholder="" wire:model="user_id" disabled>
                                    @error('user_id')
                                        <span class="form-txt-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <div class="">
                                    <input type="text" class="form-control" placeholder="" wire:model="first_name">
                                    @error('first_name')
                                        <span class="form-txt-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <div class="">
                                    <input type="text" class="form-control" placeholder="" wire:model="last_name">
                                    @error('last_name')
                                        <span class="form-txt-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <div class="">
                                    <select class="form-control"  wire:model="gender">
                                        <option value="">--Select--</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                    @error('gender')
                                        <span class="form-txt-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <div class="">
                                    <input type="date" class="form-control" placeholder="" wire:model="date_of_birth">
                                    @error('date_of_birth')
                                        <span class="form-txt-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <div class="">
                                    <select class="form-control"  wire:model="status">
                                        <option value="">--Select--</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                    @error('status')
                                        <span class="form-txt-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <div class="">
                                    <input type="text" class="form-control" placeholder="" wire:model="email">
                                    @error('email')
                                        <span class="form-txt-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="">
                                    <input type="text" class="form-control" placeholder="" wire:model="password">
                                    @error('password')
                                        <span class="form-txt-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <div class="">
                                    <input type="text" class="form-control" placeholder="" wire:model="password_confirmation">
                                    @error('password_confirmation')
                                        <span class="form-txt-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Asign Roles</label>
                                <div class="">
                                    <select class="form-control" wire:model="user_roles" multiple>
                                        <option value="">--Select--</option>
                                        @foreach ($roles as $role)
                                            <option value="{{$role->name}}" class="text-capitalize">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('user_roles')
                                        <span class="form-txt-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn form-bg-primary" value="Create">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Data table end -->
            </div>
        </div>
    </div>
    <!-- Page-body end -->
</div>
