<?php

namespace App\Http\Livewire\Admin\System\Roles;

use Livewire\Component;

class SystemRoles extends Component
{
    public function render()
    {
        return view('livewire.admin.system.roles.system-roles')->layout('layouts.dashboard');
    }
}
