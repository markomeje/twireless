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
          <h5 class="mb-4">All Clients</h5>
          @if(empty($clients->count()))
            <div class="alert alert-info">No clients yet</div>
          @else
            <div class="row">
              @foreach($clients as $client)
                <div class="col-xl-3 col-md-4 col-12 mb-4">
                @include('admin.clients.partials.card')
              </div>
              @endforeach
            </div>
            {{ $clients->links('vendor.pagination.default') }}
          @endif
        </div>
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>