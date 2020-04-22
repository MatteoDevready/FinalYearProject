<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;//including the users model

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //method for display data
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //method for creating new data
        //returning view under users folder inside views called create
        return view('users.create');//will load create.blade.php view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store method insert data into database
        //validate method ensure that all fields are filled
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required'
         ]);
         //creating a user object
         $users = new Users([
             'first_name' => $request->get('first_name'),
             'last_name' => $request->get('last_name'),
             'email' => $request->get('email')
         ]);
         //below inserting data into Users table 
         //the insert queries will be automatically executed by the save() method
         $users->save();
         return redirect()->route('users.create')->with('success','Data Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show method for display inserted into webpage
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //etod for display edit data under form
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
        //deliting data from table
    }
}
