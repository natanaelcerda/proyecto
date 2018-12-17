<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Login;
use Illuminate\Contracts\Encryption\DecryptException;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
       $this->middleware('auth');
     }

    public function index()
    {
            return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('Users.create');   //Mostrar Vista En La Pantalla//
    }
   /**
   * Display para login.
   *
   *
   */
    public function login(Request $request)
    {
    return view('Users.login');

    $request->validate([
    'email'=>'required',
    'password' => 'required'
  ]);

   $credentials = $request->only('email', 'password');



  }




   // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
      'name'=>'required',
      'email'=> 'required',                 //base de datos//
      'password' => 'required'
    ]);
    $user = new User([
      'name' => $request->get('name'),
      'email'=> $request->get('email'),
      'password'=> encrypt($request->get('password'))
    ]);

    $user->save();
    return redirect('/login')->with('success', 'Stock has been added');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
