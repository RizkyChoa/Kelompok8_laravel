<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('contact');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function categories()
    {
        $data = categories::get();

        return view('categories', compact('data'));
    }

    public function index()
    {

        $data = User::get();

        return view('index', compact('data'));
    }

    public function create()
    {

        return view('create');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => 'required',
            'nim' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails())
            return redirect()->back()->withInput()->withErrors($validator);
        $data['email'] = $request->email;
        $data['name'] = $request->name;
        $data['nim'] = $request->nim;
        $data['password'] = bcrypt($request->password);

        User::create($data);

        return redirect()->route('admin.index');
    }

    public function edit(Request $request, $id)
    {
        $data = User::find($id);

        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'nim' => 'required',
            'password' => 'nullable'
        ]);

        if ($validator->fails())
            return redirect()->back()->withInput()->withErrors($validator);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['nim'] = $request->nim;

        if ($request->passowrd) {
            $data['password'] = bcrypt($request->password);
        }

        User::whereId($id)->update($data);

        return redirect()->route('admin.index');
    }

    public function delete(Request $request, $id)
    {

        $data = User::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('admin.index');

    }
}
