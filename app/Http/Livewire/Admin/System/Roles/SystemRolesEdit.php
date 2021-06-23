<?php

namespace App\Http\Livewire\Admin\System\Roles;

use Livewire\Component;

class SystemRolesEdit extends Component
{
    public function render()
    {
        return view('livewire.admin.system.roles.system-roles-edit')->layout('layouts.dashboard');
    }
}
