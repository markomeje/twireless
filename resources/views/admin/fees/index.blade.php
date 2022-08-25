<div class="dashboard">
  @include('admin.includes.header')
      <div class="min-height-300 bg-primary position-absolute w-100"></div>
      @include('admin.includes.aside')
      <main class="main-content position-relative border-radius-lg">
      <!-- Navbar -->
        @include('admin.includes.navbar')
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center">
          <div class="">
            <a class="text-white" href="javascript:;">
              Payable Fees</a>
          </div>
        </div>
        @if(empty($fees))
          <div class="alert alert-danger mt-4 border-0 text-white">No fees available</div>
        @else
          <div class="row mt-4">
            @foreach($fees as $fee)
              <div class="col-12 col-md-4 col-lg-3 mb-4">
                @include('admin.fees.partials.card')
              </div>
              @include('admin.fees.partials.edit')
            @endforeach
          </div>
        @endif
      </div>
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>