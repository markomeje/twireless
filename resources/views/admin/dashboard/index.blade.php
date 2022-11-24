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
        </div>
      </div>
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>