<div class="fixed-top navigation-fixed-top">
    <div class="bg-white topmost-bar">
        <div class="container">
            <div class="py-2 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <a href="tel:+2349070133000" class="text-dark mr-3">
                        <small><i class="fa fa-fw fa-phone"></i> 
                        +2349070133000</small>
                    </a>
                    <a href="mailto:{{ env('SUPPORT_EMAIL') }}" class="text-dark">
                        <small><i class="fa fa-fw fa-envelope-o"></i> {{ env('SUPPORT_EMAIL') }}</small>
                    </a>
                </div>
                <div class="d-flex">
                    <a href="javascript:;" class="text-dark ml-3">
                        <i class="icofont-facebook"></i>
                    </a>
                    <a href="javascript:;" class="text-dark ml-3">
                        <i class="icofont-instagram"></i>
                    </a>
                    <a href="javascript:;" class="text-dark ml-3">
                        <i class="icofont-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-darkblue">
        <div class="container">
            <div class="navbar py-3 px-0 d-flex align-items-center justify-content-between">
                <a href="/" class="logo-wrapper">
                    <img src="/images/logos/small.png" class="img-fluid object-fit-cover">
                </a>
                <div class="navbar-links d-flex align-items-center">
                    <ul class="d-flex align-items-center navbar-links-list">
                        <li class="ml-4">
                            <a href="{{ route('home') }}" class="text-white">Home</a>
                        </li>
                        <li class="ml-4">
                            <a href="/about" class="text-white">About</a>
                        </li>
                        <li class="ml-4">
                            <a href="{{ route('services') }}" class="text-white">Services</a>
                        </li>
                        <li class="ml-4">
                            <a href="{{ route('pricing') }}" class="text-white">Pricing</a>
                        </li>
                        <li class="ml-4">
                            <a href="{{ route('contact') }}" class="text-white">Contact</a>
                        </li>
                        @if(auth()->check())
                            <?php if(auth()->user()->role === 'admin'): ?>
                                <li class="ml-4">
                                    <a href="{{ env('ADMIN_URL') }}" class="text-white" target="_blank">Admin</a>
                                </li>
                            <?php elseif(strtolower(auth()->user()->role) === 'customer'): ?>
                                <li class="ml-4">
                                    <a href="{{ env('CUSTOMER_URL') }}" class="text-white">Customer</a>
                                </li>
                            <?php endif; ?>
                        @else
                            <li class="ml-4">
                                <a href="{{ route('signup') }}" class="btn btn-sm border-white text-white rounded-pill px-4">Signup</a>
                            </li>
                            <li class="ml-4">
                                <a href="{{ route('login') }}" class="btn btn-sm bg-primary text-white rounded-pill px-4">Login</a>
                            </li>
                       @endif
                    </ul>
                    <ul class="d-flex align-items-center">
                        <?php if(auth()->check()): ?>
                            <li>
                                <div class="dropdown cursor-pointer d-block ml-3 text-decoration-none text-center rounded-circle" style="width: 20px; height: 20px; line-height: 20px;">
                                    <img src="/images/profiles/<?= empty($user) || empty($user->picture) ? 'default.png' : $user->picture; ?>" class="img-fluid border rounded-circle w-100 h-100" id="user-profile-menu" data-toggle="dropdown">
                                    <div class="dropdown-menu dropdown-menu-right border-0 shadow" aria-labelledby="user-profile-menu">
                                        <a class="dropdown-item text-dark" href="{{ route('logout') }}">Logout</a>
                                    </div>
                                </div>
                            </li>
                        <?php endif; ?>
                        <li>
                            <div class="hanburger-icon ml-3 position-relative p-md-0 d-flex justify-content-end align-items-center cursor-pointer">
                                <div class="icon-lines"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="navbar-menu shadow no-gutters bg-white position-fixed">
    <div class="menu-content min-vh-100 px-4 mb-4">
        <div class="mb-4">
            <a href="{{ route('home') }}" class="px-4 rounded bg-alice text-pink py-3 m-0 d-block text-dark">Home</a>
        </div>
        <div class="mb-4">
            <a href="{{ route('about') }}" class="px-4 rounded bg-alice text-pink py-3  m-0 d-block text-dark">About</a>
        </div>
        <div class="mb-4">
            <a href="{{ route('services') }}" class="px-4 rounded bg-alice text-pink py-3  m-0 d-block text-dark">Services</a>
        </div>
        <div class="mb-4">
            <a href="{{ route('pricing') }}" class="px-4 rounded bg-alice text-pink py-3  m-0 d-block text-dark">Pricing</a>
        </div>
        <div class="mb-4">
            <a href="{{ route('contact') }}" class="px-4 rounded bg-alice text-pink py-3  m-0 d-block text-dark">Contact</a>
        </div>
        @if(auth()->check())
            <?php if(strtolower(auth()->user()->role) === 'admin'): ?>
                <div class="mb-4">
                    <a href="{{ env('ADMIN_URL') }}" class="px-4 rounded bg-alice text-pink py-3  m-0 d-block text-dark" target="_blank">Admin</a>
                </div>
            <?php elseif(strtolower(auth()->user()->role) === 'customer'): ?>
                <div class="mb-4">
                    <a href="{{ env('CUSTOMER_URL') }}" class="px-4 rounded bg-alice text-pink py-3  m-0 d-block text-dark">Customer</a>
                </div>
            <?php endif; ?>
        @else
            <div class="mb-4">
                <a href="{{ route('login') }}" class="px-4 rounded bg-alice text-pink py-3  m-0 d-block text-dark">Login</a>
            </div>
            <div class="mb-4">
                <a href="{{ route('signup') }}" class="px-4 rounded bg-alice text-pink py-3  m-0 d-block text-dark">Signup</a>
            </div>
        @endif
    </div>
</div>