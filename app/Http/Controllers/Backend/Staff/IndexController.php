<?php

namespace App\Http\Controllers\Backend\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show()
    {
        return view('backend.staff.show');
    }

    public function edit()
    {
        return view('backend.staff.edit');
    }
}
