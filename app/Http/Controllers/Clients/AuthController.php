<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View; // ✅ Thêm dòng này

class AuthController extends Controller // ✅ Viết hoa chữ A đầu (theo chuẩn PSR-4)
{
    public function showRegisterForm(): View
    {
        return view('clients.pages.register');
    }

    public function register(Request $request)
    {
      // dd($request->all());
      $request->validate(vakues: [
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:8|confirmed',
      ], params: [
          'name.required' => 'Vui lòng nhập tên của bạn.',
          'email.required' => 'Vui lòng nhập địa chỉ email.',
          'email.email' => 'Địa chỉ email không hợp lệ.',
          'email.unique' => 'Địa chỉ email đã được sử dụng.',
          'password.required' => 'Vui lòng nhập mật khẩu.',
          'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
          'password.confirmed' => 'Xác nhận mật khẩu không khớp.',
      ]);

      //checl email

      $mai
    }   
}
