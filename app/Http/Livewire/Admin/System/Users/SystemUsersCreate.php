<?php

namespace App\Http\Livewire\Admin\System\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class SystemUsersCreate extends Component
{
    public $user_id;
    public $first_name;
    public $last_name;
    public $gender;
    public $date_of_birth;
    public $status;
    public $email;
    public $password;
    public $user_roles = [];

    public function createUser()
    {
        $user = new User();
        $user->name = $this->first_name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->save();

        if ($this->user_roles) {
            $user->assignRole($this->user_roles);
        }

        session()->flash('success_message', 'User has been created successfull');
    }

    public function render()
    {
        $roles = Role::all();
        return view('livewire.admin.system.users.system-users-create', ['roles' => $roles])->layout('layouts.dashboard');
    }
}
