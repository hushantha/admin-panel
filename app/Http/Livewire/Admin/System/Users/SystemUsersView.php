<?php

namespace App\Http\Livewire\Admin\System\Users;

use App\Models\User;
use Livewire\Component;

class SystemUsersView extends Component
{
    public $user;

    public function mount($id)
    {
        $user = User::find($id);
        $this->user = $user;
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('testdashboard.users');
    }

    public function render()
    {
        return view('livewire.admin.system.users.system-users-view', ['user' => $this->user])->layout('layouts.dashboard');
    }
}
