<div class="dashboard">
  @include('admin.includes.header')
      <div class="min-height-300 bg-primary position-absolute w-100"></div>
      @include('admin.includes.aside')
      <main class="main-content position-relative border-radius-lg ">
      <!-- Navbar -->
        @include('admin.includes.navbar')
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        <div class="alert alert-dark border-0 mb-4 d-flex align-items-center">
            <div class="text-white me-3">
                ({{ $subscriptions->total() }}) Subscriptions Found
            </div>
          <a href="javascript:;" class="text-underline text-white me-3" data-bs-toggle="modal" data-bs-target="#add-subscription">Add Subscription</a>
          <a href="javascript:;" class="text-white" data-bs-toggle="modal" data-bs-target="#search-subscription">Search</a>
        </div>
        @include('admin.subscriptions.partials.add')
        @include('admin.subscriptions.partials.search')
        <div class="">
            @if(empty($subscriptions->count()))
                <div class="alert alert-danger border-0 text-white m-0">No subscriptions found</div>
            @else
                <div class="row">
                    @foreach($subscriptions as $subscription)
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            @include('admin.subscriptions.partials.card')
                        </div>
                    @endforeach
                </div>
                {{ $subscriptions->links('vendor.pagination.default') }}
            @endif
        </div>
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>