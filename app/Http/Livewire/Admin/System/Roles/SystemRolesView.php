<?php

namespace App\Http\Livewire\Admin\System\Roles;

use Livewire\Component;

class SystemRolesView extends Component
{
    public function render()
    {
        return view('livewire.admin.system.roles.system-roles-view')->layout('layouts.dashboard');
    }
}
