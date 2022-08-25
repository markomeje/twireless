<div class="dashboard">
  @include('admin.includes.header')
      <div class="min-height-300 bg-primary position-absolute w-100"></div>
      @include('admin.includes.aside')
      <main class="main-content position-relative border-radius-lg ">
      <!-- Navbar -->
        @include('admin.includes.navbar')
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        @if(empty($client))
          <div class="alert alert-danger d-block mb-4 text-white border-0">Unkwon error. Client details not found.</div>
          @if(!empty($clients))
            <div class="p-4 bg-white border-radius-lg">
              <h5 class="mb-4">Other Clients</h5>
              <div class="row">
                @foreach($clients as $client)
                  <div class="col-lg-3 col-md-4 col-12 mb-4">
                  @include('admin.clients.partials.card')
                </div>
                @endforeach
              </div>
            </div>
          @endif
        @else
          <div class="bg-white p-3 border-radius-xl">
            <div class="mb-4">
              <h5 class="mb-2">{{ ucwords($client->fullname) }} Profile</h5>
              <div>
                
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="card border border-light bg-gray-100 shadow-lg border-raduis-sm">
                  <div class="card-header">
                    <h6 class="m-0">Documents</h6>
                  </div>
                  <div class="card-body"></div>
                  <div class="card-footer"></div>
                </div>
              </div>
              <div class="col-12 col-md-6">
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