@include('layouts.header')
    <div class="position-relative">
        @include('frontend.layouts.navbar')
        <section class="position-relative home-banner">
            @include('frontend.home.partials.owl')
        </section>
        <section class="intro-section" style="padding: 120px 0 80px;">
            <div class="container">
                <div class="row mb-4 justify-content-md-center text-md-center">
                    <div class="col-12 col-lg-8">
                        <h1 class="text-darkblue">T-Wireless High <span class="text-primary">Speed</span> Internet</h1>
                        <p class="text-dark">At T-Wireless, we make lives better as we deliver fast and reliable digital connectivity to people, wherever they desire.</p>
                    </div>
                </div>
                <div class="row justify-content-md-center text-md-center">
                    <div class="col-12 col-lg-4 mb-4">
                        <div class="card border-0">
                            <div class="card-body p-0">
                                <div class="text-primary into-icons text-center mb-4 rounded-circle bg-alice">
                                    <i class="icofont-ui-network"></i>
                                </div>
                                <h3 class="text-darkblue">95% Uptime</h3>
                                <p class="text-dark">The service delivery team of T-Wireless and redundant network design exceed our customer’s and regulators minimum uptime expectation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mb-4">
                        <div class="card border-0">
                            <div class="card-body p-0">
                                <div class="text-primary into-icons text-center mb-4 rounded-circle bg-alice">
                                    <i class="icofont-brand-tribenet"></i>
                                </div>
                                <h3 class="text-darkblue">Unlimited Wi-Fi Internet.</h3>
                                <p class="text-dark">We provides a reliable and high speed broadband internet to residences, conferences, businesses, events and deploys public Wi-Fi hotspot at locations across Nigeria.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mb-4">
                        <div class="card border-0">
                            <div class="card-body p-0">
                                <div class="text-primary into-icons text-center mb-4 rounded-circle bg-alice">
                                    <i class="icofont-live-support"></i>
                                </div>
                                <h3 class="text-darkblue">24/7 Technical Support</h3>
                                <p class="text-dark">We provide topnotch 24/7 support service to our clients because their business growth is our concern.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="position-relative bg-alice">
            <div class="" style="padding: 80px 0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-5 mb-4">
                            <h1 class="text-darkblue">T-Wireless <span class="text-primary">Packages</span></h1>
                            <div class="mb-2">
                                <img src="/images/banners/mbps.png" class="img-fluid rounded rounded">
                            </div>
                            <p class="text-dark mb-4">Fast Fibre Optic Network</p>
                            <div class="mb-4">
                                <a href="/request" class="btn btn-lg px-5 bg-primary text-white rounded-pill">Make Request</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 mb-4">
                            <div class="bg-darkblue px-4 py-5 rounded w-100">
                                <h1 class="text-white m-0">"The Most Recommended Internet Service Provider In Nigeria"</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="padding: 120px 0 80px">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 mb-4">
                        <div class="text-primary d-flex flex-wrap">
                            <small class="bg-alice text-romansilver py-2 mb-3 px-4 mr-3 rounded-pill">Consistent</small>
                            <small class="bg-alice text-romansilver py-2 mb-3 mr-3 px-4 rounded-pill">Reliable</small>
                            <small class="bg-alice text-romansilver py-2 mb-3 px-4 rounded-pill">Quality</small>
                        </div>
                        <h1 class="text-darkblue">Connected Everywhere</h1>
                        <p class="text-dark">We pledge to be consistent, reliable and continually uplift our service quality with an aim to satisfying our customers, improving profitability and reducing wastage.</p>
                        <div class="mb-3">
                            <a href="/signup" class="btn btn-lg px-5 bg-darkblue text-white rounded-pill">Get Started</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mb-4">
                        <div class="pattern-dots-md gray-light w-100">
                            <img src="/images/banners/family.jpg" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="benefits-section position-relative">
            <div class="container">
                <h2 class="text-white mb-4">Benefits of <span class="text-primary">T-Wireless</span> Fast Speed Internet.</h2>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card rounded cursor-pointer benefits-card position-relative">
                            <div class="card-body">
                                <div class="mb-4">
                                    <img src="/images/icons/bundle.png" class="img-fluid">
                                </div>
                                <p class="text-white mb-0">Bundle Packages</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card rounded cursor-pointer benefits-card position-relative">
                            <div class="card-body">
                                <div class="mb-4">
                                    <img src="/images/icons/speed.png" class="img-fluid">
                                </div>
                                <p class="text-white mb-0">Super-Fast Speeds</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card rounded cursor-pointer benefits-card position-relative">
                            <div class="card-body">
                                <div class="mb-4">
                                    <img src="/images/icons/wifi.png" class="img-fluid">
                                </div>
                                <p class="text-white mb-0">WIFI Hotspots</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card rounded cursor-pointer benefits-card position-relative">
                            <div class="card-body">
                                <div class="mb-4">
                                    <img src="/images/icons/customize.png" class="img-fluid">
                                </div>
                                <p class="text-white mb-0">Customize Package</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <a href="/request" class="btn btn-lg px-5 bg-primary text-white rounded-pill">Make Request</a>
                </div>
            </div>
        </section>
        <section class="support-section" style="padding: 100px 0 50px">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-5 mb-4">
                        <div class="position-relative">
                            <img src="/images/banners/support.jpg" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="mb-4 text-primary">
                            <span class="bg-alice p-2 rounded mr-3">
                                <i class="icofont-live-support"></i>
                            </span>
                            24/7 Dedicated
                        </div>
                        <h1 class="text-darkblue">Technical Support</h1>
                        <p class="text-romansilver">We provide topnotch 24/7 support service to our clients because their business growth is our concern.</p>
                        <div class="mb-4">
                            <a href="/services" class="btn btn-lg px-5 bg-primary text-white rounded-pill">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.layouts.bottom')
    </div>
@include('layouts.footer')
