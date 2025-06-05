<?php

namespace App\Http\Controllers\dash;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Http\Controllers\Controller;

use function Pest\Laravel\delete;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $users = User::all();
    //   return $Users;
        return view("dashboard.admin.view",compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.admin.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminRequest $request)
    {
        User::create($request->toArray());
        return to_route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $admin = User::find($id);
       return view("dashboard.admin.edit",compact("admin"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::where("id",$id)->get();
        return view("dashboard.admin.info",compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->except("_token","_method");
        $data["permission"] = implode(" ",$request->permission);
        User::where("id",$id)->update($data);
        return to_route("admin.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where("id",$id)->delete();
        return to_route("admin.index");
    }
}
