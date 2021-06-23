<div>
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Role Manager</h4>
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
                        <li class="breadcrumb-item"><a href="#!">Roles</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Edit</a>
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
                                <h3>Edit Role</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <form wire:submit.prevent="updateRole()">
                            <div class="form-group">
                                <label>Role Name</label>
                                <div class="">
                                    <input type="text" class="form-control" placeholder="Enter Role Name" wire:model="name">
                                    @error('name')
                                        <span class="form-txt-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn form-bg-primary" value="Update">
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
