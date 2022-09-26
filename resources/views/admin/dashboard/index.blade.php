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
          <div class="col-12 mb-4">
            <div class="card z-index-2 h-100">
              <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="">Payments Overview</h6>
                <p class="text-sm mb-0">
                  NGN{{ number_format(34000) }}
                </p>
              </div>
              <div class="card-body p-3">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                </div>
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