<?php

namespace App\Http\Livewire\Admin\System\Users;

use App\Models\User;
use Livewire\Component;

class SystemUsers extends Component
{
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
    }

    public function render()
    {
        $users = User::paginate(8);
        return view('livewire.admin.system.users.system-users', ['users' => $users])->layout('layouts.dashboard');
    }
}
