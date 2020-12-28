<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    
    public function show()
    {
    	$users = User::paginate(10);
        return view('index', compact('users'));
    }

    public function save(Request $request){
    	$user = User::firstWhere('hash', $request->hash);

    	if (!$user){
    		User::create($request->all());
    	} else {
    		$user->update($request->all());
    	}
    	return response("Ok", 200);
    }
}