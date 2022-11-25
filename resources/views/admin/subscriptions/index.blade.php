<div class="dashboard">
  @include('admin.includes.header')
      <div class="min-height-300 bg-primary position-absolute w-100"></div>
      @include('admin.includes.aside')
      <main class="main-content position-relative border-radius-lg ">
      <!-- Navbar -->
        @include('admin.includes.navbar')
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        <div class="alert alert-info border-0 mb-4 d-flex align-items-center">
          <div class="text-white me-2">
            ({{ $subscriptions->total() }}) Subscriptions
          </div>
          <a href="javascript:;" class="text-underline" data-bs-toggle="modal" data-bs-target="#add-subscription">Add subscription</a>
        </div>
        @include('admin.subscriptions.partials.add')
        <div class="">
          @if(empty($subscriptions->count()))
            <div class="alert alert-danger text-white m-0">No subscriptions yet</div>
          @else
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                @foreach($subscriptions as $subscription)
                  @include('admin.subscriptions.partials.card')
                @endforeach
            </div>
            {{ $subscriptions->links('vendor.pagination.default') }}
          @endif
        </div>
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>