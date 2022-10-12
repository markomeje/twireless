<div class="dashboard">
  @include('admin.includes.header')
      <div class="min-height-300 bg-primary position-absolute w-100"></div>
      @include('admin.includes.aside')
      <main class="main-content position-relative border-radius-lg ">
      <!-- Navbar -->
        @include('admin.includes.navbar')
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        @if(empty($customer))
          <div class="alert alert-danger d-block mb-4 text-white border-0">Unkwon error. Customer details not found.</div>
        @else
          <div class="">
            <div class="mb-4">
              <h5 class="mb-2 text-white">
                {{ ucwords($customer->contact_name) }} Profile
              </h5>
            </div>
            <div class="row">
              <div class="col-12 mb-4">
                <div class="card border border-light bg-gray-100 shadow-lg border-raduis-sm">
                  <div class="card-header d-flex justify-content-between">
                    <div class="m-0">Subscriptions</div>
                    <div class="" data-bg-toggle="model" data-bs-target="#add-subscription">Subscribe</div>
                  </div>
                  <div class="card-body"></div>
                  <div class="card-footer"></div>
                </div>
              </div>
              <div class="col-12 mb-4">
                <div class="card border border-light bg-gray-100 shadow-lg border-raduis-sm">
                  <div class="card-header">
                    <h6 class="m-0">Payments</h6>
                  </div>
                  <div class="card-body"></div>
                  <div class="card-footer"></div>
                </div>
              </div>
            </div>
          </div>
        @endif
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>