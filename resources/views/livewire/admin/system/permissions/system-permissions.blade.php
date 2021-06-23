<div>
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Permission Manager</h4>
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
                        <li class="breadcrumb-item"><a href="#!">Permissions</a>
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
                            <form wire:submit.prevent="createOrUpdatePermission">
                                <div class="form-group">
                                    <label>Role Name</label>
                                    <div class="">
                                        <input type="text" class="form-control text-capitalize" wire:model="name"  disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Permissions</label>
                                       
                                        <table id="simpletable" class="table table-striped table-bordered border-checkbox-section">
                                            <thead>
                                            <tr>
                                                <th>
                                                    <div class="border-checkbox-group border-checkbox-group-success">
                                                        <input class="border-checkbox" type="checkbox" id="checkPermissionAll" data-checked="{{$this->roleHasPermission($all_permissions) ? 'true' : 'false'}}">
                                                        <label class="border-checkbox-label" for="checkPermissionAll">All</label>
                                                    </div>
                                                </th>
                                                <th>View</th>
                                                <th>Create</th>
                                                <th>Edit</th>
                                                <th>Delate</th>
                                                <th>All</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i=1;
                                                @endphp
                                                @foreach ($permission_groups as $group)
                                                @php
                                                            $permissions = DB::table('permissions')->where('group_name', $group->name)->get();
                                                            $j = 1;
                                                        @endphp
                                                    <tr>
                                                        <td class="text-capitalize">
                                                            <div class="border-checkbox-group border-checkbox-group-success">
                                                                <input class="border-checkbox group-pms" type="checkbox" name="permissions[]" id="check_{{$group->name}}" onclick="checkPermissionByGroup('role-{{$i}}-management-checkbox', this, {{count($all_permissions) + count($permission_groups)}})" data-checked="{{$this->roleHasPermission($permissions) ? 'true' : 'false'}}">
                                                                <label class="border-checkbox-label" for="check_{{$group->name}}">{{$group->name}}
                                                                </label>
                                                            </div>
                                                        </td>
                                                        
                                                        @foreach ($permissions as $permission)
                                                        <td>
                                                            {{$get_role->hasPermissionTo($permission->name) ? 'checked' : 'non checked'}}
                                                            <div class="role-{{$i}}-management-checkbox">
                                                                <div class="border-checkbox-group border-checkbox-group-success">
                                                                    <input class="border-checkbox chk-pms" type="checkbox" name="permissions[]"  id="check_{{$permission->id}}" value="{{$permission->name}}" wire:model="permissions_list" 
                                                                    onclick="checkSinglePermission('role-{{$i}}-management-checkbox', 'check_{{$group->name}}', {{count($permissions)}}, {{count($all_permissions) + count($permission_groups)}})" data-checked="{{$get_role->hasPermissionTo($permission->name) ? 'true' : 'false'}}">
                                                                    <label class="border-checkbox-label" for="check_{{$permission->id}}">{{$permission->name}}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            </td>
                                                        @php
                                                            $j++;
                                                        @endphp
                                                        @endforeach
                                                        <td ></td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    @php
                                                        $i++;
                                                    @endphp
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
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Data table end -->
            </div>
        </div>
    </div>
    <!-- Page-body end -->
</div>
@push('scripts')
    <script>
        $('#checkPermissionAll').click(function() {
            if ($(this).is(':checked')) {
                $('input[type=checkbox]').prop('checked', true);
            } else {
                $('input[type=checkbox]').prop('checked', false);
            }
            var data = [];
            $('input.chk-pms:checkbox:checked').each(function () {
                data.push($(this).val());
            });
            @this.set('permissions_list', data);
        });

        $(document).ready(function() {
            $('input.chk-pms:checkbox').each(function () {
                // console.log($(this).data('checked'));
                if($(this).data('checked') == true) {
                    $(this).prop('checked', true);
                } else {
                    $(this).prop('checked', false);
                }
            });

            var data = [];
            $('input.chk-pms:checkbox:checked').each(function () {
                data.push($(this).val());
            });
            @this.set('permissions_list', data);

            $('input.group-pms:checkbox').each(function () {
                // console.log($(this).data('checked'));
                if($(this).data('checked') == true) {
                    $(this).prop('checked', true);
                } else {
                    $(this).prop('checked', false);
                }
            });
            if ($('input#checkPermissionAll:checkbox').data('checked') == true) {
                $('input#checkPermissionAll:checkbox').prop('checked', true);
            } else {
                $('input#checkPermissionAll:checkbox').prop('checked', false);
            }
        });

        function checkPermissionByGroup(className, checkThis, allPermissionsWithGroups) {
            const groupIdName = $('#'+checkThis.id);
            const classCheckBox = $('.'+className+' div input');
            // console.log('.'+className+' input');

            if(groupIdName.is(':checked')) {
                classCheckBox.prop('checked', true);
            } else {
                classCheckBox.prop('checked', false);
            }
            var data = [];
            $('input.chk-pms:checkbox:checked').each(function () {
                data.push($(this).val());
            });
            @this.set('permissions_list', data);
            checkAllPermissions(allPermissionsWithGroups);
        }

        function checkSinglePermission(groupClassName, groupId, totalPermissionCount, allPermissionsWithGroups) {
            const classCheckBox = $('.'+groupClassName+' div input');
            const groupIdCheckbox = $('#'+groupId);

            // if there is any occurance where somthing is not selected then make selected = false
            if($('.'+groupClassName+' div input:checked').length == totalPermissionCount) {
                groupIdCheckbox.prop('checked', true);
            } else {
                groupIdCheckbox.prop('checked', false);
            }
            checkAllPermissions(allPermissionsWithGroups);
        }

        function checkAllPermissions(allPermissionsWithGroups) {
            console.log($('input[type="checkbox"]:checked').length);
            if($('div input[type="checkbox"]:checked').length >= allPermissionsWithGroups) {
                $('#checkPermissionAll').prop('checked',true);
            } else {
                $('#checkPermissionAll').prop('checked',false);
            }
        }
    </script>
@endpush