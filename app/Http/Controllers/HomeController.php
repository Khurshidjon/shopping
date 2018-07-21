<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = \Auth::id();
        $user = User::find($userId);
        if($user->isAdmin == 1){
            return view('admin.admin');
        }
        return redirect()->route('product.index');
    }
    public function addItems()
    {
        $categories = Category::all();
        return view('admin.addProduct', compact('categories'));
    }
}
