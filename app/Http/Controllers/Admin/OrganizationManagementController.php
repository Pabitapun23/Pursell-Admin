<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Organization;

class OrganizationManagementController extends Controller
{
    public function orgData()
    {
        $organizations  = Organization::paginate(5);

        return view('admin.organizationmanagement')->with('organizations', $organizations);
    }

    public function store(Request $request)
    {
        $organizations = new Organization;

        $organizations->name = $request->input('name');
        $organizations->description = $request->input('description');
        $organizations->telephone = $request->input('telephone');
        $organizations->location = $request->input('location');
        $organizations->street = $request->input('street');
        $organizations->email = $request->input('email');
        $organizations->website = $request->input('website');
        //$organizations->image = $request->input('image');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $organizations->image = $filename;
        }

        //dd($organizations);
        $organizations->save();

        return redirect('/organization-management')->with(['status' => 'Data Added of new organization']);
    }

    public function edit($id)
    {
        $organizations = Organization::findOrFail($id);
        return view('admin.organizationmanagement.edit')->with('organizations', $organizations);
    }

    public function update(Request $request, $id)
    {
        $organizations = Organization::findOrFail($id);
        $organizations->name = $request->input('name');
        // $organizations->image = $request->input('image');
        $organizations->description = $request->input('description');
        $organizations->telephone = $request->input('telephone');
        $organizations->location = $request->input('location');
        $organizations->street = $request->input('street');
        $organizations->email = $request->input('email');
        $organizations->website = $request->input('website');
        if ($request->hasfile('image')) {
            $destination = 'images/' . $organizations->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $organizations->image = $filename;
        }

        $organizations->update();

        return redirect('/organization-management')->with(['status' => 'Data updated for the organization']);
    }

    public function delete($id)
    {
        $organizations = Organization::findOrFail($id);
        $organizations->delete();

        return redirect('/organization-management')->with(['status' => 'Datas of the organization are deleted']);
    }
}
