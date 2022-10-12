<div class="dashboard">
  @include('admin.includes.header')
      <div class="min-height-300 bg-primary position-absolute w-100"></div>
      @include('admin.includes.aside')
      <main class="main-content position-relative border-radius-lg ">
      <!-- Navbar -->
        @include('admin.includes.navbar')
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        <div class="bg-white p-4 border-radius-xl">
          <div class="d-flex mb-4 align-items-center">
            <div class="me-2">
              ({{ $plans->total() }}) All Plans
            </div>
            <a href="javascript:;" class="text-underline me-2" data-bs-toggle="modal" data-bs-target="#add-package">Add Package</a>
            <a href="javascript:;" class="text-underline m-0" data-bs-toggle="modal" data-bs-target="#add-bundle">Add Bundle</a>
          </div>
          @include('admin.plans.partials.add')
          @include('admin.bundles.partials.add')
          @if(empty($plans->count()))
            <div class="alert alert-danger text-white">No plans yet</div>
          @else
            <div>
              @foreach($plans as $plan)
                <div class="col-12 col-md-4 col-lg-3">
                  @include('admin.plans.partials.card')
                </div>
              @endforeach
            </div>
            {{ $plans->links('vendor.pagination.default') }}
          @endif
        </div>
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>