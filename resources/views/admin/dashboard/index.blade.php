<div class="dashboard">
  @include('admin.includes.header')
      <div class="min-height-300 bg-primary position-absolute w-100"></div>
      @include('admin.includes.aside')
      <main class="main-content position-relative border-radius-lg ">
      <!-- Navbar -->
        @include('admin.includes.navbar')
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        <div class="row">
          @include('admin.dashboard.partials.panels')
        </div>
        <div class="row mt-4">
          <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
              <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="">Payments Overview</h6>
                <p class="text-sm mb-0">
                  <i class="fa fa-arrow-up text-success"></i>
                  <span class="font-weight-bold">4% more</span> in 2021
                </p>
              </div>
              <div class="card-body p-3">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="card card-carousel overflow-hidden h-100 p-0">
              <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                <div class="carousel-inner border-radius-lg h-100">
                  <div class="carousel-item h-100 active" style="background-image: url('/argon/images/1.jpg'); background-size: cover;">
                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                      <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                        <i class="ni ni-camera-compact text-dark opacity-10"></i>
                      </div>
                      <h5 class="text-white mb-1">Get started with Argon</h5>
                      <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.</p>
                    </div>
                  </div>
                  <div class="carousel-item h-100" style="background-image: url('/argon/images/2.jpg'); background-size: cover;">
                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                      <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                        <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                      </div>
                      <h5 class="text-white mb-1">Faster way to create web pages</h5>
                      <p>That’s my skill. I’m not really specifically talented at anything except for the ability to learn.</p>
                    </div>
                  </div>
                  <div class="carousel-item h-100" style="background-image: url('/argon/images/3.jpg'); background-size: cover;">
                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                      <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                        <i class="ni ni-trophy text-dark opacity-10"></i>
                      </div>
                      <h5 class="text-white mb-1">Share with us your design tips!</h5>
                      <p>Don’t be afraid to be wrong because you can’t learn anything from a compliment.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          @if(empty($forms))
            <div class="alert alert-info">No froms available</div>
          @else
            @foreach($forms as $key => $form)
              <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card shadow-lg z-index-2 bg-transparent">
                  <div class="card-body d-flex justify-content-center flex-column border-radius-lg h-100" style="background-image: url('/argon/images/3.jpg'); background-size: cover; background-position: center; height: 280px !important; object-fit: cover;">
                    <a href="" class="text-white mb-4 d-block">
                      {{ $form->name }} {{ empty($form->code) ? '' : '('.$form->code.')'; }}
                    </a>
                    <div class="d-flex align-items-center">
                      <div class="d-flex align-items-center">
                        <div class="bg-danger text-center me-3 rounded-circle" style="width: 42px; height: 42px; line-height: 42px !important; font-size: 12px;">
                          <div class="text-white mt-3">
                            <i class="icofont-trash"></i>
                          </div>
                        </div>
                        <div class="bg-warning text-center me-3 rounded-circle" style="width: 42px; height: 42px; line-height: 42px !important; font-size: 12px;">
                          <div class="text-white mt-3">
                            <i class="icofont-ui-edit"></i>
                          </div>
                        </div>
                      </div>
                       <div class="d-flex align-items-center">
                         <div class="bg-success px-4 text-center rounded-pill" style="height: 42px; font-size: 14px;">
                          <div class="text-white mt-3">
                            <i class="icofont-long-arrow-right"></i>
                          </div>
                        </div>
                       </div> 
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>