<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organization;

class OrganizationManagementController extends Controller
{
    public function orgData()
    {
        $organizations  = Organization::all();

        return view('admin.organizationmanagement')->with('organizations', $organizations);
    }
}
