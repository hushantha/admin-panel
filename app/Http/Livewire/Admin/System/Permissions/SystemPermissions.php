<?php

namespace App\Http\Livewire\Admin\System\Permissions;

use Livewire\Component;

class SystemPermissions extends Component
{
    public function render()
    {
        return view('livewire.admin.system.permissions.system-permissions')->layout('layouts.dashboard');
    }
}
