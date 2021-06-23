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
                        <li class="breadcrumb-item"><a href="#!">{{$user->name}}</a>
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
                                <a href="{{route('dashboard.users.edit', ['id'=> $user->id])}}" class="btn btn-mini btn-primary btn-round">Edit</a>
                                <a href="#" onclick="confirm('Are you sure? You want to delete user?') || event.stopImmediatePropagation();" class="btn btn-mini btn-primary btn-round" wire:click.prevent="deleteUser({{$user->id}})">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive px-2">
                            <table id="simpletable" class="table table-striped">
                                <tbody class="overflow-hidden">
                                    <tr class="row m-0 pb-0">
                                        <th class="col-6 col-md-3">User ID :</th>
                                        <td class="col-6 col-md-9">{{$user->id}}</td>
                                    </tr>
                                    <tr class="row m-0 pb-0">
                                        <th class="col-6 col-md-3">First Name :</th>
                                        <td class="col-6 col-md-9">{{$user->name}}</td>
                                    </tr>
                                    <tr class="row m-0 pb-0">
                                        <th class="col-6 col-md-3">Last Name :</th>
                                        <td class="col-6 col-md-9">{{$user->name}}</td>
                                    </tr>
                                    <tr class="row m-0 pb-0">
                                        <th class="col-6 col-md-3">Gender :</th>
                                        <td class="col-6 col-md-9">{{$user->name}}</td>
                                    </tr>
                                    <tr class="row m-0 pb-0">
                                        <th class="col-6 col-md-3">Date of Birth :</th>
                                        <td class="col-6 col-md-9">{{$user->name}}</td>
                                    </tr>
                                    <tr class="row m-0 pb-0">
                                        <th class="col-6 col-md-3">Status :</th>
                                        <td class="col-6 col-md-9">{{$user->name}}</td>
                                    </tr>
                                    <tr class="row m-0 pb-0">
                                        <th class="col-6 col-md-3">Email :</th>
                                        <td class="col-6 col-md-9">{{$user->email}}</td>
                                    </tr>
                                    <tr class="row m-0 pb-0">
                                        <th class="col-6 col-md-3">Role(s) :</th>
                                        <td class="col-6 col-md-9">
                                            <div class="text-capitalize">
                                                <table class="table table-striped">
                                                    @foreach ($user->roles as $role)
                                                        <tr>
                                                            <td>{{$role->name}}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="row m-0 pb-0">
                                        <th class="col-6 col-md-3">Modified By :</th>
                                        <td class="col-6 col-md-9">{{$user->name}}</td>
                                    </tr>
                                    <tr class="row m-0 pb-0">
                                        <th class="col-6 col-md-3">Modified On :</th>
                                        <td class="col-6 col-md-9">{{\Carbon\Carbon::parse($user->updated_at)->format('M d, Y - H:m:s')}}</td>
                                    </tr>
                                    <tr class="row m-0 pb-0">
                                        <th class="col-6 col-md-3">Created By :</th>
                                        <td class="col-6 col-md-9">{{$user->name}}</td>
                                    </tr>
                                    <tr class="row m-0 pb-0">
                                        <th class="col-6 col-md-3">Created On :</th>
                                        <td class="col-6 col-md-9">{{\Carbon\Carbon::parse($user->created_at)->format('M d, Y - H:m:s')}}</td>
                                    </tr>
                                </tbody>
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
