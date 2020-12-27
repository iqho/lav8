<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class Test extends Controller
{
    public function index()
    {
        return 'Test Page Here';
    }
}
