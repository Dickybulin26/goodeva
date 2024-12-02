<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Data;
use Validator;
use Hash;
use Session;

class DataController extends Controller
{
    //
    public function index(Request $request)
    {
        $data = Data::paginate(5);
		
		return view('backend.data_user.data-user', ['data' => $data]);
    }
	
	public function showFormcreate()
	{
		return view('backend.data_user.add-user');
	}
	
	public function create(Request $request)
    {
      $rules = [
        'name' => 'required|min:3|max:35',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed'
      ];

      $messages = [
        'name.required' => 'Nama lengkap wajib diisi',
        'name.min' => 'Nama lengkap minimal 3 karakter',
        'name.max' => 'Nama lengkap maksimal 35 karakter',
        'email.required' => 'Email wajib diisi',
        'email.email' => 'Email tidak valid',
        'email.unique' => 'Email sudah terdaftar',
        'password.required' => 'Password wajib diisi',
        'password.confirmed' => 'Password tidak sama dengan konfirmasi password'
      ];

      $validator = Validator::make($request->all(), $rules, $messages);
      if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput($request->all);
      }

      $data = new Data;
      $data->name = ucwords(strtolower($request->name));
      $data->email = strtolower($request->email);
      $data->password = Hash::make($request->password);
      $data->email_verified_at = \Carbon\Carbon::now();
      $simpan = $data->save();



      if ($simpan) {
        Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
        return redirect('data-user');
      }else {
        Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
        return redirect('add-user');
      }
    }
	
	public function edit($id)
	{
		
		$data = Data::where('id', $id)->get();
		
		return view('backend.data_user.edit-user', ['data' => $data]);
	}
	
	public function update(Request $request)
	{
		
		if($request->password == ''){
			
		}else{
			Data::where('id', $request->id)->update([
			'password' => Hash::make($request->password)]);
		}
		
		$data = Data::where('id', $request->id)->update([
			'name' => $request->name,
			'email' => $request->email,
			
		]);
		
		
		return redirect('data-user');
	}
	
	public function hapus($id)
	{
		Data::where('id', $id)->delete();
		return redirect('data-user');
	}
}
