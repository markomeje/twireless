<div class="dashboard">
  @include('admin.includes.header')
      <div class="min-height-300 bg-primary position-absolute w-100"></div>
      @include('admin.includes.aside')
      <main class="main-content position-relative border-radius-lg ">
      <!-- Navbar -->
        @include('admin.includes.navbar')
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        <div class="p-4 bg-white border-radius-lg">
          <div class="row">
            @include('admin.dashboard.partials.panels')
          </div>
          <div class="row">
            <div class="col-12 mb-4">
              <div class="mb-5">
                <?php $subscriptions = \App\Models\Subscription::where('expiry_date', '<', now()->subWeek())->where('status', '!=', 'initialized')->take(12)->get(); ?>
                @if(empty($subscriptions->count()))
                  <div class="alert alert-danger text-white">No Expiring Subscriptions</div>
                @else
                  <div class="alert alert-info text-white mb-4 d-flex justify-content-between">
                    <div>Expiring Subscriptions</div>
                    <a href="{{ route('admin.subscriptions') }}" class="text-white">View all</a>
                  </div>
                  <div class="row">
                    @foreach($subscriptions as $subscription)
                      <div class="col-12 col-md-6 col-lg-4 mb-4">
                        @include('admin.subscriptions.partials.card')
                      </div>
                    @endforeach
                  </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>