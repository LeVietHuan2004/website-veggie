@extends('layouts.client')

@section('title', 'Về chúng tôi')

@section('breadcrumb', 'Về chúng tôi')

@section('content')


    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-120--- pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <img src="{{ asset('assets/clients/img/others/6.png') }}" alt="About Us Image">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">Tìm hiểu thêm về cửa hàng</h6>
                            <h1 class="section-title">Cửa hàng thực phẩm hữu cơ<br class="d-none d-md-block"> đáng tin cậy
                            </h1>
                            <p>Chúng tôi cam kết mang đến những sản phẩm hữu cơ chất lượng, an toàn cho sức khỏe
                                và thân thiện với môi trường, giúp bạn và gia đình có một cuộc sống lành mạnh hơn.</p>

                        </div>
                        <p>Chúng tôi kết nối những người bán tận tâm — những người không chỉ kinh doanh mà còn lan tỏa điều
                            tốt đẹp.
                            Nền tảng của chúng tôi là một cộng đồng tin cậy, phát triển bền vững dựa trên chất lượng và sự
                            chân thành.</p>
                        <div class="about-author-info d-flex">
                            <div class="author-name-designation  align-self-center">
                                <h4 class="mb-0">Huan Lee</h4>
                                <small>/ Giám đốc của hàng</small>
                            </div>
                            <div class="author-sign">
                                <img src="{{asset('assets/clients/img/icons/icon-img/author-sign.png')}}" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->

    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area section-bg-1 pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">Đặc điểm</h6>
                        <h1 class="section-title">Tại sao chọn chúng tôi<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <span><img src="{{ asset('assets/clients/img/icons/icon-img/21.png') }}" alt="#"></span>
                            </div>
                            <h3><a href="service-details.html">Tất cả các thương hiệu</a></h3>
                        </div>
                        <div class="ltn__feature-info">
                            <p>Chúng tôi cung cấp đa dạng các thương hiệu thực phẩm hữu cơ uy tín, đáp ứng mọi nhu cầu của
                                khách hàng.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <span><img src="{{ asset('assets/clients/img/icons/icon-img/22.png') }}" alt="#"></span>
                            </div>
                            <h3><a href="service-details.html">Sản phẩm chọn lọc</a></h3>
                        </div>
                        <div class="ltn__feature-info">
                            <p>Các sản phẩm được lựa chọn kỹ lưỡng từ nguồn cung đáng tin cậy, đảm bảo chất lượng và độ an
                                toàn cao nhất.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <span><img src="{{ asset('assets/clients/img/icons/icon-img/23.png') }}" alt="#"></span>
                            </div>
                            <h3><a href="service-details.html">Sản phẩm không thuốc trừ sâu</a></h3>
                        </div>
                        <div class="ltn__feature-info">
                            <p>Tất cả sản phẩm đều được trồng và sản xuất hoàn toàn tự nhiên, không chứa thuốc trừ sâu hay
                                hóa chất độc hại.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- FEATURE AREA END -->

@endsection