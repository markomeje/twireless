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
          <?php $plan = $subscription->plan; $customer = $subscription->customer; $price = $plan === 'bundle' ? $subscription->bundle->price : $subscription->package->price ?>
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="alert alert-info border-0 mb-4 d-flex align-items-center justify-content-between">
                <div class="text-white me-2">
                  {{ $customer->company_name ? ucwords($customer->company_name) : '' }} Subscription
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                  <div>
                    @if($plan === 'bundle')
                      {{ $subscription->bundle->size }}Gb Bundle Plan (NGN{{ number_format($price) }})
                    @else
                      {{ ucwords($subscription->package->name) }} (NGN{{ number_format($price) }})
                    @endif
                  </div>
                  <div class="text-dark">
                    <i class="icofont-options"></i>
                  </div>
                </div>
                <div class="card-body">
                  <div class="mb-3 pb-3 border-bottom">
                    {{ number_format($subscription->duration ?? 0) }}Days
                  </div>
                  <?php $payment = $subscription->payment($plan); ?>
                  
                  @if(empty($payment))
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <div class="text-danger">Not Paid</div>
                      <a href="javascript:;" class="text-dark" data-bs-toggle="modal" data-bs-target="#add-payment">Add Payment</a>
                      @include('admin.payments.partials.add')
                    </div>
                  @else
                    <div class="text-dark">
                      {{ ucfirst($payment->status) }}
                    </div>
                  @endif
                  <div class="row">
                    <?php $status = strtolower($subscription->status); ?>
                    @if($status === 'active')
                      <div class="col-12">
                        <a class="btn btn-info w-100">Extend</a>
                      </div>
                    @elseif($status === 'expired')
                      <div class="col-12">
                        <a class="btn btn-info w-100">Renew</a>
                      </div>
                    @elseif($status === 'initialized' || empty($status))
                      <div class="col-12">
                        <a href="javascript:;" class="btn btn-info w-100 activate-subscription" data-url="{{ route('admin.subscription.activate', ['id' => $subscription->id]) }}">
                          <img src="/images/svgs/spinner.svg" class="me-2 d-none activate-subscription-spinner mb-1">
                          <span class="font-weight-bolder">Activate</span>
                        </a>
                      </div>
                    @endif
                  </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <form class="edit-subscription-form" action="javascript:;" method="post" data-action="{{ route('admin.subscription.edit', ['id' => $subscription->id]) }}">
                  @csrf
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
                      <input type="text" name="polewire_length" class="form-control polewire_length" placeholder="Enter Pole wire length" value="{{ $subscription->polewire_length }}">
                      <small class="polewire_length-error text-danger"></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="text-muted">Coordinate</label>
                      <input type="text" name="coordinate" class="form-control coordinate" placeholder="Enter coordinate" value="{{ $subscription->coordinate }}">
                      <small class="coordinate-error text-danger"></small>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-12">
                      <label class="text-muted">Router</label>
                      <input type="text" name="router" class="form-control router" placeholder="Enter Router" value="{{ $subscription->router }}">
                      <small class="router-error text-danger"></small>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label class="text-muted">Concurrent Users</label>
                      <input type="text" name="concurrent_users" class="form-control concurrent_users" placeholder="Enter Pole wire length" value="{{ $subscription->concurrent_users }}">
                      <small class="concurrent_users-error text-danger"></small>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="text-muted">Last Mile</label>
                      <input type="text" name="last_mile" class="form-control last_mile" placeholder="Enter last mile" value="{{ $subscription->last_mile }}">
                      <small class="last_mile-error text-danger"></small>
                    </div>
                  </div>
                  <div class="form-group mb-4">
                    <label class="text-muted">Additional info</label>
                    <textarea class="form-control additional_info" name="additional_info" rows="4" placeholder="Additional info">{{ $subscription->additional_info }}</textarea>
                    <small class="additional_info-error text-danger"></small>
                  </div>
                  <div class="alert d-none add-subscription-message mb-3 text-white"></div>
                  <button type="submit" class="btn btn-primary edit-subscription-button">
                    <img src="/images/svgs/spinner.svg" class="me-2 d-none edit-subscription-spinner mb-1">Save
                  </button>
                </form>
              </div>
            </div>
          </div> 
        @endif
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>