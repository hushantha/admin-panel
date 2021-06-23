<?php

namespace App\Http\Livewire\Admin\System\Users;

use App\Models\User;
use Livewire\Component;

class SystemUsersEdit extends Component
{
    public $user_id;
    public $first_name;
    public $last_name;
    public $gender;
    public $date_of_birth;
    public $status;
    public $email;

    public function mount($id)
    {
        $user = User::find($id);
        $this->user_id = $user->id;
        $this->first_name = $user->name;
        $this->last_name = $user->name;
        $this->gender = $user->name;
        $this->date_of_birth = $user->name;
        $this->status = $user->name;
        $this->email = $user->email;
    }

    public function updated($fields)
    {
        // $this->validateOnly($fields, [
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'gender' => 'required',
        //     'date_of_birth' => 'required',
        //     'status' => 'required',
        //     'email' => 'required',
        // ]);
    }

    public function updateUser()
    {
        // $this->validate( [
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'gender' => 'required',
        //     'date_of_birth' => 'required',
        //     'status' => 'required',
        //     'email' => 'required',
        // ]);

        $user = User::find($this->user_id);
        $user->name = $this->first_name;
        $user->email = $this->email;
        $user->save();

        session()->flash('success_message', 'User has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.system.users.system-users-edit')->layout('layouts.dashboard');
    }
}
