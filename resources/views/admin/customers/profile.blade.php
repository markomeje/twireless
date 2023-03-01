<div class="dashboard">
  @include('admin.includes.header')
      <div class="min-height-300 bg-primary position-absolute w-100"></div>
      @include('admin.includes.aside')
      <main class="main-content position-relative border-radius-lg ">
      <!-- Navbar -->
        @include('admin.includes.navbar')
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        @if(empty($customer))
          <div class="alert alert-danger d-block mb-4 text-white border-0">Unkwon error. Customer details not found.</div>
        @else
          <div class="">
            <div class="mb-4">
              <h5 class="mb-2 text-white">
                {{ ucwords($customer->contact_name) }} Profile
              </h5>
            </div>
            <div class="row">
              <div class="col-12 col-lg-6 mb-4">
                <div class="alert alert-info border-0 mb-4">Subscriptions</div>
                <div class="">
                  <?php $subscription = $customer->subscription; ?>
                  @if(empty($subscription))
                    <div class="alert alert-danger border-0 text-white mb-0">No Subscription Yet</div>
                  @else
                    <?php $status = strtolower($subscription->status); ?>
                    <div class="card border-0">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <a class="text-dark cursor-pointer" href="{{ route('admin.subscription', ['id' => $subscription->id]) }}">
                            <em>By</em> {{ ucwords(\Str::limit($subscription->customer->contact_name, 12)) }}
                          </a>
                          <a class="text-dark" href="{{ route('admin.subscription', ['id' => $subscription->id]) }}">
                            {{ ucfirst($status) }}
                          </a>
                        </div>
                        <div class="progress mb-3" style="height: 10px;">
                          @if($status === 'active' || $status === 'expired')
                            <?php $timing = \App\Library\Timing::calculate($subscription->expiry_date, $subscription->start_date); ?>
                            <div class="progress-bar m-0 bg-{{ $timing->progress() >= 89 ? 'danger' : 'success' }}"  role="progressbar" style="width: {{ $timing->progress() }}%;" aria-valuenow="{{ $timing->progress() }}" aria-valuemin="0" aria-valuemax="100">
                              <small>{{ $timing->progress() }}%</small>
                            </div>
                          @else
                            <div class="progress-bar m-0"  role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                              <small>0%</small>
                            </div>
                          @endif
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                          <a href="{{ route('admin.subscription', ['id' => $subscription->id]) }}" class="text-dark">{{ $subscription->sector->name }}</a>
                          <a href="{{ route('admin.subscription', ['id' => $subscription->id]) }}" class="text-dark">
                            {{ $subscription->type == 'bundle' ? $subscription->bundle->size : $subscription->package->name }}
                          </a>
                        </div>
                      </div>
                      <div class="card-footer bg-primary d-flex justify-content-between">
                        <div class="text-white">
                          {{ $subscription->created_at->diffForHumans() }}
                        </div>
                      </div>
                    </div>
                  @endif
                </div>  
              </div>
            </div>
          </div>
        @endif
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>