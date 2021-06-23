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
                <!-- Data table start -->
                <div class="card">
                    <div class="card-header pb-2">
                        <div class="row py-3">
                            <div class="col-12">
                                <a href="{{route('dashboard.roles.create')}}" class="btn btn-md btn-primary btn-round">Create New Role</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="simpletable-length" id="simpletable_length">
                                    <label class="d-flex align-items-center justify-content-sm-start justify-content-center">
                                        Show 
                                        <select name="simpletable_length" aria-controls="simpletable" class="form-control input-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        entries
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div id="simpletable_filter" class="simpletable-filter">
                                    <label class="d-flex align-items-center justify-content-center justify-content-sm-end">
                                        Search:
                                        <input type="search" class="form-control input-sm" placeholder="" aria-controls="simpletable">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive px-2">
                            <table id="simpletable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td class="text-capitalize">{{$role->name}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-mini btn-primary dropdown-toggle" type="button" id="actions_{{$role->id}}" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                                Select
                                                            </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="actions_{{$role->id}}">
                                                        <a class="dropdown-item" href="{{route('dashboard.permissions', ['id'=>$role->id])}}">Permissions</a>
                                                        <a class="dropdown-item" href="{{route('dashboard.roles.view', ['id'=>$role->id])}}">View</a>
                                                        <a class="dropdown-item" href="{{route('dashboard.roles.edit', ['id'=>$role->id])}}">Edit</a>
                                                        <a class="dropdown-item" onclick="confirm('Are you sure? You want to delete user?')|| event.stopImmediatePropagation();" href="#" wire:click.prevent="deleteRole({{$role->id}})">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Data table end -->
            </div>
        </div>
    </div>
    <!-- Page-body end -->
</div>
