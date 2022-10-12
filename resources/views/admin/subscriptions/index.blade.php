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
        <div class="bg-white p-4 border-radius-xl">
          @if(empty($subscriptions->count()))
            <div class="alert alert-danger text-white m-0">No subscriptions yet</div>
          @else
            <table class="table table-striped table-hover table-responsive mb-4">
              <thead class="">
                <tr>
                  <th class="thead-th px-2">S/N</th>
                  <th class="thead-th px-2">Customer Name</th>
                  <th class="thead-th px-2">Company name</th>
                  <th class="thead-th px-2">State</th>
                  <th class="thead-th px-2">Designation</th>
                  <th class="thead-th px-2">Phone</th>
                  <th class="thead-th px-2">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 0; ?>
                @foreach($subscriptions as $subscription)
                  <?php $i++; ?>
                  @include('admin.subscriptions.partials.tr')
                @endforeach
              </tbody>
            </table>
            {{ $subscriptions->links('vendor.pagination.default') }}
          @endif
        </div>
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>