<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //creating the index function
    public function index(){
        //The variable contacts will get all value from the contacts table
        //App/Contacts is giving reference to the model class Contacts.php
        $contacts = \App\Contacts::all();
        //The line below will return the view called index,
        //compact contacts will pass devices variable in index.blade.php file
        return view('contacts.index',compact('contacts'));
    }
}
