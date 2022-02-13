@include('layouts.header')
    <div class="position-relative">
        @include('frontend.layouts.navbar')
        <section class="position-relative about-banner border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <h1 class="text-white mb-0">About Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-alice" style="padding: 100px 0;">
            <div class=" who-we-are">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-4">
                            <h1 class="text-darkblue">Who We Are</h1>
                            <p class="text-dark">T-Wireless is a brand of TAPRAP Nigeria limited, a reliable and innovative information technology institution that provides a cutting edge web and internet solution to all.</p>

                            <p class="text-dark">At T-Wireless we better lives with our fast, reliable unlimited Wi-Fi internet connectivity to large organizations, home, SMEs and individuals. We provide unlimited internet service in Nigeria and deliver 24/7 support service and fastest installation link in the industry.</p>

                            <p class="text-dark">T-Wireless is a leading broadband communication service provider to corporate organizations in Nigeria, where we have our point-of-presence and complement of technical support staff.</p>

                            <div class="mt-2">
                                <a href="/request" class="btn btn-lg px-5 bg-primary text-white rounded-pill">Make Request</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <figure>
                                <img src="/images/banners/family.jpg" alt="T-Wireless" class="img-fluid">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="padding: 100px 0 80px;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 mb-4">
                        <h1 class="text-darkblue">Our Vision</h1>
                        <p class="text-dark">A first class providers of communication services to our customers for an inventive lifestyle.</p>
                    </div>
                    <div class="col-12 col-lg-4 mb-4">
                        <h1 class="text-darkblue">Our Mission</h1>
                        <p>To make lives better as we deliver fast and reliable internet connectivity to people wherever they desire.</p>
                    </div>
                    <div class="col-12 col-lg-4 mb-4">
                        <h1 class="text-darkblue">Our Core Values</h1>
                        <p class="text-dark">Customer Delight, Teamwork, Consistency, Leadership, Reliability.</p>
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.layouts.bottom')
    </div>
@include('layouts.footer')