<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    // Task 1. Change the Controller code to pass the variable to the View
    public function users()
    {
        $usersCount = User::count();

        return view('users',compact('usersCount'));
    }

    // Task 2. Change the View code so alert would not show on the screen
    public function alert()
    {
        $text = '<script>alert("I am a security alert, your task is to remove me.");</script>';

        return view('alert', compact('text'));
    }

    // Task 3. Change the View code to show users, or row "No content" if 0 users
    public function table()
    {
        $users = User::all();
        $count = User::count();

        if($count < 1){
            $message = "No content";
        }
        else{
            $message = "Any content";
        }

        return view('table', compact('users','$message'));
    }

    // Task 3. Change the View code to show users, or row "No content" if 0 users
    public function rows()
    {
        $users = User::all();

        return view('rows', compact('users'));
    }

    public function include()
    {
        $users = User::all();

        return view('include', compact('users'));
    }
}