<?php

namespace Stir\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
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
		return view('stir::page.dashboard');
	}


	public function getMe()
	{
		return \Auth::user();
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\User  $user
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request)
	{
		$user = \Auth::user();
		foreach (
			$request->only('firstname', 'lastname', 'address', 'postcode', 'phone')
			as $k => $v) {
			$user->$k = $v;
		}
		$user->save();
		return $user;
	}
}
