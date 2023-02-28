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
          @if(empty($sector))
            <div class="alert alert-danger">Unknown error. Sector not found.</div>
          @else
            <div class="alert alert-dark border-0 d-flex mb-4 align-items-center">
              <div class="text-white me-3">
                ({{ ucwords($sector->name) }}) Subscriptions
              </div>
              <a href="javascript:;" class="text-white text-underline me-2" data-bs-toggle="modal" data-bs-target="#send-sms">Bulk Sms</a>
            </div>
            <div>
              @if($sector->subscriptions()->exists())
                <?php $subscriptions = $sector->subscriptions()->paginate(24); $phones = []; ?>
                @foreach($sector->subscriptions as $subscription)
                  @if(!empty($subscription->customer))
                    @if(!empty($subscription->customer->user))
                      <?php $user = $subscription->customer->user; ?>
                      @if(!empty($user->phone))
                        <?php $phones[] = str_replace(' ', '', trim($user->phone)); ?>
                      @endif
                    @endif
                  @endif
                @endforeach
                <div class="row">
                  @foreach($subscriptions as $subscription)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                      @include('admin.subscriptions.partials.card')
                    </div>
                  @endforeach
                  <?php $heading = "Sending Sms to about {$subscriptions->total()} Customers under {$sector->name} Sector"; ?>
                </div>
                {{ $subscriptions->links('vendor.pagination.default') }}
              @else
                <div class="alert alert-info">No Subscriptions for this sector</div>
              @endif
            </div>
          @endif
        </div>
        @include('admin.sms.partials.bulk')
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>