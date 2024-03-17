<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    public function dashboard(): RedirectResponse
    {
        return redirect()->route("admin.users.index");
    }
}
