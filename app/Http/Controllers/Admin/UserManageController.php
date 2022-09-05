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

    public function blockUser(Request $request)
    {
        $block_status = User::where('id', $request->input('id'))->get()->pluck('block_status');
        if ($block_status[0] == 1) {
            User::where('id', $request->input('id'))->update(['block_status' => 0]);
            return redirect('/user-manage')->with('status', 'Data Updated');
        } else {
            User::where('id', $request->input('id'))->update(['block_status' => 1]);
            $blockamount = $block_status = User::where('id', $request->input('id'))->get()->pluck('block_amount');
            if ($blockamount[0] == 1) {
                $users = User::findOrFail($request->input('id'));
                $users->delete();
            } else {
                $totalblockamount = $blockamount[0] + 1;
                DB::table('users')->where('id', $request->input('id'))->update(['block_amount' => $totalblockamount]);
            }
            return redirect('/user-manage')->with(['status' => 'Data Updated']);
        }
    }
}
