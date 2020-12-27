<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Home extends Component
{
    // public function render()
    // {
    // 	$users = User::all();
    //     return view('livewire.home', compact('users'));
    // }
    public $users, $name, $email, $user_id;
    public $updateMode = false;

    public function render()
    {
    	//dd('ok');
        $this->users = User::all();
        //return view('livewire.home');
        return view('livewire.home');
    }

}
