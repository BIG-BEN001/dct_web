<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Website;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Website::all()->toArray();

        return view('dashboard.table', compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = $this->validate(request(), [
            'title' => 'nullable',
            'description'=> 'nullable',
            'description2'=> 'nullable',
            'description3'=> 'nullable'
          ]);

          Website::create($posts);

          return back()->with('success', 'Entry has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Website::find($id);

        return view('dashboard.edit', compact(['posts', 'id']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $posts = Website::find($request->get('id'));
        $this->validate(request(), [
            'title' => 'nullable',
            'description' => 'nullable',
            'description2' => 'nullable',
            'description3' => 'nullable'
        ]);
        $posts->title = $request->get('title');
        $posts->description = $request->get('description');
        $posts->description2 = $request->get('description2');
        $posts->description3 = $request->get('description3');
        $posts->save();
        return redirect()->route('table')->with('success','Entry has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function users()
    {
        $posts = User::all()->toArray();
        return view('dashboard.users', compact('posts'));
    }

    // public function register(){
    //     return view('auth.register');
    // }

    public function reg_user(Request $requests)
    {
       $posts= $this->validate(request(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

         User::create(['name'=>$posts['name'],
                    'email'=>$posts['email'],
                    'password'=> Hash::make($posts['password'])]);

        return redirect('users')->with('success', 'User has been created');
    }

    public function header()
    {
        $posts=  Website::whereIn('id',['1','2','3','4'])->get();
        return view('dashboard.table', compact(['posts']));
    }

    public function slider()
    {
        $posts=  Website::whereIn('id',['5','6','7'])->get();
        return view('dashboard.table', compact(['posts']));
    }

}
