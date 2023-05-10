<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dahboardController extends Controller
{
    public function controll()
    {
        return view('profile.formpengajuan');
    }
}
