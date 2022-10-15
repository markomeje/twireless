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
          <div class="d-flex alert alert-dark border-0 mb-4 align-items-center">
            <div class="text-white me-3">
              ({{ $packages->total() }}) Packages
            </div>
            <a href="javascript:;" class="text-underline text-white m-0" data-bs-toggle="modal" data-bs-target="#add-package">Add Package</a>
          </div>
          @include('admin.packages.partials.add')
          @if(empty($packages->count()))
            <div class="alert alert-danger text-white">No packages yet</div>
          @else
            <div class="row">
              @foreach($packages as $package)
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                  @include('admin.packages.partials.card')
                </div>
                @include('admin.packages.partials.edit')
              @endforeach
            </div>
            {{ $packages->links('vendor.pagination.default') }}
          @endif
        </div>
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>