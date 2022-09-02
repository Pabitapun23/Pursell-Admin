<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class UserManageController extends Controller
{
    public function userData()
    {
        $users  = DB::table('users')->where('role', '0')->paginate(5);

        //$users = User::all();
        return view('admin.usermanage')
            ->with('users', $users);
    }
}
