@extends('layouts.client')

@section('title', 'Đăng ký')

@section('breadcrumb', 'Đăng ký')

@section('content')
<div class="ltn__login-area pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title">Đăng ký <br>Tài khoản của bạn</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                        Hãy tham gia cùng chúng tôi ngay hôm nay.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="account-login-inner">
                    <form action="#" class="ltn__form-box contact-form-box" method ="POST" id="register-form">
                        @csrf

                        
                        <input type="text" name="name" placeholder="Họ Và Tên" required>

                        <input type="email" name="email" placeholder="Email*" required>

                        <input type="password" name="password" placeholder="Mật khẩu*" required>

                        <input type="password" name="confirmPassword" placeholder="Xác nhận mật khẩu*" required>

                        <label class="checkbox-inline">
                            <input type="checkbox" name="checkbox1" value="" required>
                            Tôi đồng ý cho Herboil xử lý dữ liệu cá nhân của tôi để gửi thông tin tiếp thị cá nhân hóa 
                            theo mẫu chấp thuận và chính sách bảo mật.
                        </label>


                        <label class="checkbox-inline">
                            <input type="checkbox" name="checkbox2" value="" required>
                            Bằng cách nhấp vào “Tạo tài khoản”, tôi đồng ý với chính sách bảo mật.
                        </label>


                        <div class="btn-wrapper">
                            <button class="theme-btn-1 btn reverse-color btn-block" type="submit">
                                TẠO TÀI KHOẢN
                            </button>
                        </div>
                    </form>
                    <div class="by-agree text-center">
                        <p>Khi tạo tài khoản, bạn đồng ý với:</p>
                        <p><a href="#">ĐIỀU KHOẢN SỬ DỤNG &nbsp; &nbsp; | &nbsp; &nbsp; CHÍNH SÁCH BẢO MẬT</a></p>
                        <div class="go-to-btn mt-50">
                            <a href="login.html">ĐÃ CÓ TÀI KHOẢN?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
