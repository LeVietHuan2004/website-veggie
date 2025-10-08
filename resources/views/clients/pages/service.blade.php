@extends('layouts.client')

@section('title', 'Dịch vụ')

@section('breadcrumb', 'Dịch vụ')

@section('content')
    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="about-us-img-wrap ltn__img-shape-left about-img-left">
                        <img src="{{ asset('assets/clients/img/service/11.jpg') }}" alt="Hình ảnh">
                    </div>
                </div>
                <div class="col-lg-7 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// DỊCH VỤ ĐÁNG TIN CẬY</h6>
                            <h1 class="section-title">Chúng tôi là đội ngũ <br class="d-none d-md-block"> chuyên nghiệp &
                                giàu kinh nghiệm<span>.</span></h1>
                            <p>Chúng tôi luôn nỗ lực mang đến cho khách hàng những sản phẩm và dịch vụ chất lượng cao, an
                                toàn và đáng tin cậy nhất.</p>
                        </div>
                        <div class="about-us-info-wrap-inner about-us-info-devide">
                            <p>Với nhiều năm kinh nghiệm trong lĩnh vực thực phẩm hữu cơ, chúng tôi tự hào mang đến những
                                sản phẩm sạch, tự nhiên và tốt cho sức khỏe. Mỗi sản phẩm đều được kiểm soát nghiêm ngặt từ
                                khâu chọn nguyên liệu đến tay người tiêu dùng, đảm bảo sự an tâm tuyệt đối.</p>
                            <div class="list-item-with-icon">
                                <ul>
                                    <li><a href="contact.html">Giao hàng tận nơi 24/7 miễn phí</a></li>
                                    <li><a href="team.html">Đội ngũ chuyên gia tận tâm</a></li>
                                    <li><a href="service-details.html">Trang thiết bị hiện đại</a></li>
                                    <li><a href="shop.html">Kho sản phẩm đa dạng</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ABOUT US AREA END -->

    <!-- SERVICE AREA START (Service 1) -->
    <div class="ltn__service-area section-bg-1 pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title white-color---">Dịch Vụ Của Chúng Tôi</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/1.jpg') }}"
                                    alt="Rau củ hữu cơ"></a>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="service-details.html">Rau củ hữu cơ</a></h3>
                            <p>Chúng tôi cung cấp các loại rau củ sạch, tươi ngon, được trồng hoàn toàn tự nhiên, không sử
                                dụng thuốc trừ sâu hay chất bảo quản.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/2.jpg') }}"
                                    alt="Trái cây hữu cơ"></a>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="service-details.html">Trái cây hữu cơ</a></h3>
                            <p>Những loại trái cây tươi ngon, được thu hoạch trực tiếp từ các nông trại hữu cơ, đảm bảo an
                                toàn và giàu dinh dưỡng.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/3.jpg') }}"
                                    alt="Sản phẩm chế biến tự nhiên"></a>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="service-details.html">Sản phẩm chế biến tự nhiên</a></h3>
                            <p>Các sản phẩm chế biến từ nguồn nguyên liệu hữu cơ, mang đến hương vị tự nhiên và tốt cho sức
                                khỏe.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/3.jpg') }}"
                                    alt="Thực phẩm tươi sống"></a>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="service-details.html">Thực phẩm tươi sống</a></h3>
                            <p>Chúng tôi đảm bảo nguồn thực phẩm tươi sống mỗi ngày, mang đến bữa ăn an toàn và bổ dưỡng cho
                                gia đình bạn.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/1.jpg') }}"
                                    alt="Giao hàng tận nơi"></a>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="service-details.html">Giao hàng tận nơi</a></h3>
                            <p>Dịch vụ giao hàng nhanh chóng, tiện lợi và hoàn toàn miễn phí cho mọi đơn hàng trong khu vực
                                nội thành.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/2.jpg') }}"
                                    alt="Tư vấn dinh dưỡng"></a>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="service-details.html">Tư vấn dinh dưỡng</a></h3>
                            <p>Đội ngũ chuyên gia của chúng tôi luôn sẵn sàng hỗ trợ bạn lựa chọn sản phẩm phù hợp với nhu
                                cầu dinh dưỡng của từng cá nhân.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- SERVICE AREA END -->

    <!-- OUR JOURNEY AREA START -->
    <div class="ltn__our-journey-area bg-image bg-overlay-theme-90 pt-280 pb-350 mb-35 plr--9" data-bg="img/bg/8.jpg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__our-journey-wrap ">
                        <ul>
                            <li><span class="ltn__journey-icon">1900</span>
                                <ul>
                                    <li>
                                        <div class="ltn__journey-history-item-info clearfix">
                                            <div class="ltn__journey-history-img">
                                                <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}"
                                                    alt="Bắt đầu hành trình">
                                            </div>
                                            <div class="ltn__journey-history-info">
                                                <h3>Bắt đầu hành trình</h3>
                                                <p>Chúng tôi khởi đầu với niềm đam mê mang đến thực phẩm tươi sạch và tốt
                                                    cho sức khỏe, được trồng trọt bằng tình yêu và sự tôn trọng thiên nhiên.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="active"><span class="ltn__journey-icon">1950</span>
                                <ul>
                                    <li>
                                        <div class="ltn__journey-history-item-info clearfix">
                                            <div class="ltn__journey-history-img">
                                                <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}"
                                                    alt="Phát triển bền vững">
                                            </div>
                                            <div class="ltn__journey-history-info">
                                                <h3>Phát triển bền vững</h3>
                                                <p>Chúng tôi mở rộng quy mô canh tác, áp dụng các phương pháp nông nghiệp
                                                    hữu cơ tiên tiến, đảm bảo chất lượng và bảo vệ môi trường sống.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li><span class="ltn__journey-icon">1994</span>
                                <ul>
                                    <li>
                                        <div class="ltn__journey-history-item-info clearfix">
                                            <div class="ltn__journey-history-img">
                                                <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}"
                                                    alt="Thương hiệu được tin tưởng">
                                            </div>
                                            <div class="ltn__journey-history-info">
                                                <h3>Thương hiệu được tin tưởng</h3>
                                                <p>Thương hiệu của chúng tôi được công nhận là một trong những nhà cung cấp
                                                    thực phẩm hữu cơ uy tín, được khách hàng trên toàn quốc tin dùng.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li><span class="ltn__journey-icon">2010</span>
                                <ul>
                                    <li>
                                        <div class="ltn__journey-history-item-info clearfix">
                                            <div class="ltn__journey-history-img">
                                                <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}"
                                                    alt="Mở rộng ra quốc tế">
                                            </div>
                                            <div class="ltn__journey-history-info">
                                                <h3>Mở rộng ra quốc tế</h3>
                                                <p>Chúng tôi chính thức đưa sản phẩm hữu cơ Việt Nam ra thị trường quốc tế,
                                                    góp phần lan tỏa lối sống xanh và lành mạnh đến mọi người.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li><span class="ltn__journey-icon">2020</span>
                                <ul>
                                    <li>
                                        <div class="ltn__journey-history-item-info clearfix">
                                            <div class="ltn__journey-history-img">
                                                <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}"
                                                    alt="Tiếp tục đổi mới">
                                            </div>
                                            <div class="ltn__journey-history-info">
                                                <h3>Tiếp tục đổi mới</h3>
                                                <p>Chúng tôi không ngừng cải tiến công nghệ sản xuất và phát triển sản phẩm,
                                                    hướng đến tương lai xanh – sạch – bền vững cho thế hệ mai sau.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- OUR JOURNEY AREA END -->

@endsection