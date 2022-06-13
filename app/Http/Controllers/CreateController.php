<?php

namespace App\Http\Controllers;

use livewire;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create()
    {
        return view('livewire.create');
    }
}
