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
        $users  = User::withCount('report_user as report_count')->where('role', '0')->orderBy('id', 'desc')->get();
        //$user_id = $users->id;

        //dd($user_id);

        //$report_user = ReportUser::where('user_id', $users->id)->get();

        //$users = User::all();

        // $users = DB::table('users')
        //     ->join('report_users', 'users.id', '=', 'report_users.user_id')
        //     ->select('users.name', 'report_users.user_id', DB::raw('count(report_users.user_id) as total'))
        //     ->groupBy('report_users.user_id')->get();


        // $users = DB::table('report_users')
        //     ->select('users.*', DB::raw('count(report_users.user_id) as totalcount'))
        //     ->join('users', 'users.id', '=', 'report_users.user_id')
        //     ->groupBy('report_users.user_id')
        //     ->get();


        //dd($report_user);
        return view('admin.usermanage', ['users' => $users]);
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
