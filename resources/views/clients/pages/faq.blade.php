@extends('layouts.client')

@section('title', 'FAQ')

@section('breadcrumb', 'Những câu hỏi thường gặp')

@section('content')

    <!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
    <div class="ltn__faq-area mb-100">
        <div class="container">
            <div class="row">
                <!-- LEFT: FAQ -->
                <div class="col-lg-8">
                    <div class="ltn__faq-inner ltn__faq-inner-2">
                        <div id="accordion_2">

                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                    data-bs-target="#faq-item-2-1" aria-expanded="false">
                                    Làm thế nào để mua sản phẩm?
                                </h6>
                                <div id="faq-item-2-1" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Bạn có thể mua sản phẩm bằng cách nhấn <strong>“Thêm vào giỏ hàng”</strong>,
                                            sau đó tiến hành thanh toán. Chúng tôi hỗ trợ thanh toán qua thẻ ngân hàng, ví
                                            điện tử và COD (nhận hàng thanh toán).
                                            Sau khi đặt hàng thành công, hệ thống sẽ gửi email xác nhận cho bạn.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- card -->
                            <div class="card">
                                <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2"
                                    aria-expanded="true">
                                    Làm thế nào để hoàn tiền khi gặp sự cố?
                                </h6>
                                <div id="faq-item-2-2" class="collapse show" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Nếu bạn gặp vấn đề với sản phẩm, vui lòng liên hệ bộ phận hỗ trợ qua mục
                                            <a href="contact.html">Liên hệ</a> trong vòng <strong>7 ngày</strong> kể từ khi
                                            nhận hàng.
                                            Chúng tôi sẽ xử lý hoàn tiền hoặc đổi trả tùy theo trường hợp, đảm bảo quyền lợi
                                            tốt nhất cho bạn.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                    data-bs-target="#faq-item-2-3" aria-expanded="false">
                                    Tôi là người mới, bắt đầu như thế nào?
                                </h6>
                                <div id="faq-item-2-3" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Rất đơn giản! Bạn chỉ cần tạo tài khoản miễn phí bằng email hoặc đăng nhập bằng
                                            Google/Facebook.
                                            Sau đó có thể duyệt qua các danh mục sản phẩm, thêm sản phẩm yêu thích vào giỏ
                                            và thanh toán.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                    data-bs-target="#faq-item-2-4" aria-expanded="false">
                                    Chính sách đổi trả và hoàn tiền
                                </h6>
                                <div id="faq-item-2-4" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Chúng tôi hỗ trợ đổi trả sản phẩm trong vòng <strong>7 ngày</strong> nếu sản phẩm
                                            bị lỗi,
                                            hư hại trong quá trình vận chuyển hoặc không đúng mô tả.
                                            Vui lòng giữ lại bao bì và hóa đơn gốc khi gửi yêu cầu đổi trả.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                    data-bs-target="#faq-item-2-5" aria-expanded="false">
                                    Thông tin cá nhân của tôi có được bảo mật không?
                                </h6>
                                <div id="faq-item-2-5" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Hoàn toàn có! Chúng tôi tuân thủ chính sách bảo mật nghiêm ngặt.
                                            Dữ liệu của bạn được mã hóa và chỉ sử dụng cho mục đích giao dịch,
                                            không chia sẻ với bất kỳ bên thứ ba nào.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                    data-bs-target="#faq-item-2-6" aria-expanded="false">
                                    Mã giảm giá không hoạt động?
                                </h6>
                                <div id="faq-item-2-6" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Vui lòng kiểm tra xem mã giảm giá có còn hiệu lực hay không,
                                            hoặc có áp dụng cho loại sản phẩm bạn chọn không.
                                            Nếu vẫn không dùng được, hãy liên hệ bộ phận hỗ trợ để được cấp lại mã mới.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                    data-bs-target="#faq-item-2-7" aria-expanded="false">
                                    Làm sao để thanh toán bằng thẻ tín dụng?
                                </h6>
                                <div id="faq-item-2-7" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Chúng tôi hỗ trợ thanh toán bằng thẻ Visa, MasterCard và thẻ nội địa.
                                            Khi thanh toán, hãy chọn phương thức “Thẻ tín dụng/ghi nợ” và nhập thông tin
                                            thẻ.
                                            Giao dịch của bạn được xử lý an toàn với hệ thống bảo mật đạt chuẩn PCI DSS.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SUPPORT SECTION -->
                        <div class="need-support text-center mt-100">
                            <h2>Cần thêm trợ giúp? Liên hệ với chúng tôi 24/7:</h2>
                            <div class="btn-wrapper mb-30">
                                <a href="{{ url('contact') }}" class="theme-btn-1 btn">Liên hệ ngay</a>
                            </div>
                            <h3><i class="fas fa-phone"></i> +84 123 456 789</h3>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: SIDEBAR -->
                <div class="col-lg-4">
                    <aside class="sidebar-area ltn__right-sidebar">
                        <!-- Newsletter Widget -->
                        <div class="widget ltn__search-widget ltn__newsletter-widget">
                            <h6 class="ltn__widget-sub-title">// đăng ký</h6>
                            <h4 class="ltn__widget-title">Nhận thông tin mới nhất</h4>
                            <form action="#">
                                <input type="email" name="email" placeholder="Nhập email của bạn">
                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                            </form>
                            <div class="ltn__newsletter-bg-icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                        </div>

                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget">
                            <a href="{{ url('shop') }}">
                                <img src="{{ asset('assets/clients/img/banner/banner-1.jpg') }}" alt="Hỗ trợ khách hàng">
                            </a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ AREA START -->

    <!-- COUNTER UP AREA START -->
    <div class="ltn__counterup-area bg-image bg-overlay-theme-black-80 pt-115 pb-70" data-bg="{{ asset('img/bg/5.jpg') }}">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item-3 text-color-white text-center">
                        <div class="counter-icon">
                            <img src="{{ asset('assets/clients/img/icons/icon-img/2.png') }}" alt="#">
                        </div>
                        <h1><span class="counter">733</span><span class="counterUp-icon">+</span></h1>
                        <h6>Active Clients</h6>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item-3 text-color-white text-center">
                        <div class="counter-icon">
                            <img src="{{ asset('assets/clients/img/icons/icon-img/3.png') }}" alt="#">
                        </div>
                        <h1><span class="counter">33</span><span class="counterUp-letter">K</span><span
                                class="counterUp-icon">+</span></h1>
                        <h6>Cup Of Coffee</h6>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item-3 text-color-white text-center">
                        <div class="counter-icon">
                            <img src="{{ asset('assets/clients/img/icons/icon-img/4.png') }}" alt="#">
                        </div>
                        <h1><span class="counter">100</span><span class="counterUp-icon">+</span></h1>
                        <h6>Get Rewards</h6>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item-3 text-color-white text-center">
                        <div class="counter-icon">
                            <img src="{{ asset('assets/clients/img/icons/icon-img/5.png') }}" alt="#">
                        </div>
                        <h1><span class="counter">21</span><span class="counterUp-icon">+</span></h1>
                        <h6>Country Cover</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- COUNTER UP AREA END -->

@endsection