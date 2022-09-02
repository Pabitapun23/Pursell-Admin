<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;

class PostManagementController extends Controller
{
    public function postData()
    {
        $posts = Post::with(['user', 'category'])->paginate(5);

        return view('admin.postmanagement')
            ->with('posts', $posts);
    }
}
