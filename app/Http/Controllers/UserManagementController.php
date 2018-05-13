<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use Session;

class UserManagementController extends Controller
{
	protected function index()
	{	
		
		return view('admin.user.create');
	}    
	protected function create()
	{
		return view('admin.user.create');
	}

	public function store(Request $request)
	{
		$data = $request -> all();
		$validasi = Validator::make($data,[
			'name' => 'required',
			'email' =>'required',
			'password' =>'required',
			'user_type' =>'required|in:admin,user,mahasiswa',

		]);

		if($validasi->fails()){
			return redirect('userman/create')
			->withInput()
			->withErros($validasi);
		}

		$data['password'] = bcrypt($data['password']);
		$data['active_status'] = 1;
		User::create($data);
	/*	Session::flash('cek','Data User berhasil disimpan');*/
		return redirect('dashboard/userman')->with('success','Data User berhasil disimpan');

	}

	public function show($id)
	{
		return redirect('dashboard/userman');
	}

	public function edit($id)
	{
		$user = User::findOrFail($id);
		return view('admin.user.edit',compact('user'));
	}

	public function update($id, Request $request)
	{
		$user = User::findOrFail($id);
		$data = $request ->all();

		$validasi = Validator::make($data,[
			'name' => 'required',
			'email' =>'required|email|max:100|unique:users,email,'. $data['id'],
			'password' =>'sometimes|confirmed|min:6',
			'user_type' =>'required|in:admin,user,mahasiswa	'
		]);

	

		if($request->has('password')){
			$data['password'] = bcrypt($data['password']);
		}
		else{
			$data= array_except($data,['password']);
		}

		$user->update($data);
		Session::flash('flash_message','Data User berhasil diupdate');

		return redirect('dashboard/userman');

	}

}

