<div class="dashboard">
  @include('admin.includes.header')
      <div class="min-height-300 bg-primary position-absolute w-100"></div>
      @include('admin.includes.aside')
      <main class="main-content position-relative border-radius-lg ">
      <!-- Navbar -->
        @include('admin.includes.navbar')
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        <div class="">
          <div class="alert alert-dark border-0 d-flex mb-4 align-items-center">
            <div class="text-white me-3">
              ({{ $sectors->total() }}) Sectors
            </div>
            <div class="">
              <a href="javascript:;" class="text-white text-underline" data-bs-toggle="modal" data-bs-target="#add-sector">Add Sector</a>
            </div>
          </div>
          @if(empty($sectors->count()))
            <div class="alert alert-danger text-white">No sectors yet</div>
          @else
            <div class="row">
              @foreach($sectors as $sector)
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                  @include('admin.sectors.partials.card')
                </div>
              @endforeach
            </div>
            {{ $sectors->links('vendor.pagination.default') }}
          @endif
        </div>
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>