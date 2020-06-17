<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hosting;

class HostingController extends Controller
{
    public function all()
    {
        return Hosting::all();
    }

    public function show($id)
    {
        return Hosting::find($id);
    }

    public function store(Request $request)
    {
        return Hosting::create($request->all());
    }

    public function update($id, Request $request)
    {
        $hosting = Hosting::find($id);
        $hosting->update($request->all());
        return $hosting;
    }

    public function delete($id)
    {
        $hosting = Hosting::find($id);
        $hosting->delete($id);
        return 'Data deleted';
    }
}
