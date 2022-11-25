<div class="dashboard">
  @include('admin.includes.header')
      <div class="min-height-300 bg-primary position-absolute w-100"></div>
      @include('admin.includes.aside')
      <main class="main-content position-relative border-radius-lg ">
      <!-- Navbar -->
        @include('admin.includes.navbar')
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        @if(empty($subscription))
          <div class="alert alert-danger border-0 mb-4">Subscription not found.</div>
        @else
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="alert alert-info border-0 mb-4 d-flex align-items-center">
                <div class="text-white me-2">
                  Subscriptions
                </div>
              </div>
              <div class="card">
                <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                  {{ ucwords($subscription->customer->company_name) }} Subscription
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label class="text-muted">Antenna</label>
                      <input type="text" name="antenna" class="form-control antenna" placeholder="Enter antenna" value="{{ $subscription->antenna }}">
                      <small class="antenna-error text-danger"></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="text-muted">Sector</label>
                      <select class="form-control sector" name="sector">
                        <option value="">Select sectors</option>
                        <?php $sectors = \App\Models\Sector::all(); ?>
                        @if(empty($sectors->count()))
                          <option value="">No sectors listed</option>
                        @else
                          @foreach($sectors as $sector)
                            <option value="{{ $sector->id }}" {{ $subscription->sector_id == $sector->id ? 'selected' : '' }}>
                              {{ ucwords($sector->name) }}
                            </option>
                          @endforeach
                        @endif
                      </select>
                      <small class="sector-error text-danger"></small>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label class="text-muted">Pole Wire Length</label>
                      <input type="text" name="polewire_length" class="form-control polewire_length" placeholder="Enter Pole wire length">
                      <small class="polewire_length-error text-danger"></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="text-muted">Coordinate</label>
                      <input type="text" name="coordinate" class="form-control coordinate" placeholder="Enter coordinate">
                      <small class="coordinate-error text-danger"></small>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label class="text-muted">Plan</label>
                      <select class="form-control plan" name="plan">
                        <option value="">Select Plan</option>
                        <?php $bundles = \App\Models\Bundle::all(); ?>
                        @if(!empty($bundles->count()))
                          @foreach($bundles as $bundle)
                            <option value="bundle_{{ $bundle->id }}">
                              {{ ucwords($bundle->size) }}Gb Bundle for NGN{{ number_format($bundle->price) }}
                            </option>
                          @endforeach
                        @endif
                        <?php $packages = \App\Models\Package::all(); ?>
                        @if(!empty($packages->count()))
                          @foreach($packages as $package)
                            <option value="package_{{ $package->id }}">
                              {{ ucwords($package->name) }} for NGN{{ number_format($package->price) }}
                            </option>
                          @endforeach
                        @endif
                      </select>
                      <small class="package-error text-danger"></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="text-muted">Router</label>
                      <input type="text" name="router" class="form-control router" placeholder="Enter Router">
                      <small class="router-error text-danger"></small>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label class="text-muted">Concurrent Users</label>
                      <input type="text" name="concurrent_users" class="form-control concurrent_users" placeholder="Enter Pole wire length">
                      <small class="concurrent_users-error text-danger"></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="text-muted">Last Mile</label>
                      <input type="text" name="last_mile" class="form-control last_mile" placeholder="Enter last mile">
                      <small class="last_mile-error text-danger"></small>
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <label class="text-muted">Additional info</label>
                    <textarea class="form-control additional_info" name="additional_info" rows="4" placeholder="Additional info"></textarea>
                    <small class="additional_info-error text-danger"></small>
                  </div>

                  <div class="pb-3 mb-3 border-bottom">
                    @if($subscription->plan == 'bundle')
                      {{ $subscription->bundle->size }}Gb Bundle Plan
                    @else
                      {{ ucwords($subscription->package->name) }}
                    @endif
                  </div>
                  <div class="mb-3 pb-3 border-bottom">
                    {{ number_format($subscription->duration ?? 0) }}Days
                  </div>
                  <?php $payment = $subscription->payment($subscription->plan); ?>
                  @if(empty($payment))
                    <div class="text-danger mb-3 pb-3 border-bottom">Not Paid</div>
                  @else
                    <div class="text-dark mb-3 pb-3 border-bottom">
                      {{ ucfirst($payment->status) }}
                    </div>
                  @endif
                  <div class="mb-3 pb-3 border-bottom">
                    Pole Wire Length {{ $subscription->polewire_length }}
                  </div>
                  <div class="mb-3 pb-3 border-bottom">
                    Concurrent Users {{ $subscription->concurrent_users }}
                  </div>
                  <div class="mb-3 pb-3 border-bottom">
                    Pole Wire Length {{ $subscription->polewire_length }}
                  </div>
                  <div class="mb-3 pb-3 border-bottom">
                    Antenna {{ $subscription->antenna }}
                  </div>
                  <div class="mb-3 pb-3 border-bottom">
                    Additional Info {{ $subscription->additional_info }}
                  </div>
                  <div class="mb-3 pb-3 border-bottom">
                    Last Mile Connection {{ $subscription->last_mile }}
                  </div>
                  <div class="mb-3 pb-3 border-bottom">
                    Coordinate {{ $subscription->coordinate }}
                  </div>
                  <div class="row">
                    @if($subscription->status == 'active')
                      <div class="col-12 col-md-6">
                        <a class="btn btn-info"></a>
                      </div>
                    @else

                    @endif
                    <div class="col-12 col-md-6">
                      <a class="btn btn-info"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        @endif
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>