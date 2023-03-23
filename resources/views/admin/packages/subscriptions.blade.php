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
              ({{ $subscriptions->total() }}) Customer Subscriptions of {{ \App\Models\Package::find($id)->name }}
            </div>
          </div>
          @if(empty($subscriptions->count()))
            <div class="alert alert-danger text-white">No subscriptions yet</div>
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