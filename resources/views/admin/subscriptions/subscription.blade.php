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
            <div class="col-12 col-lg-7">
              <div class="row">
                <div class="col-12">
                  <div class="alert alert-info border-0 mb-4">
                    <div class="text-white me-2">
                      {{ $customer->company_name ? ucwords($customer->company_name) : $customer->contact_name }} Subscription ({{ ucfirst($customer->designation) }})
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="alert alert-info border-0 mb-4 d-flex align-items-center">
                    <a href="tel:{{ $customer->user->phone }}" class="text-white text-underline me-2">Call Here</a>
                    <a href="javascript:;" class="text-white text-underline me-2">Send Sms</a>
                  </div>
                </div>
              </div>
                  
              <div class="card mb-4">
                <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                  <div class="text-dark">
                    @if($plan === 'bundle')
                      {{ $subscription->bundle->size }}Gb Bundle Plan 
                    @else
                      {{ ucwords($subscription->package->name) }} 
                    @endif
                  </div>
                  <?php $status = strtolower($subscription->status); ?>
                  <div class="text-{{ $status === 'active' ? 'success' : ($status === 'initialized' ? 'dark' : 'danger') }}">
                    {{ ucwords($status) }}
                  </div>
                </div>
                <div class="card-body">
                  <?php $payment = $subscription->payment($plan); ?>
                  @if(empty($payment))
                    <a href="javascript:;" class="btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#add-payment">
                      <span class="font-weight-bolder">Add Payment</span>
                    </a>
                    @include('admin.payments.partials.add')
                  @else
                    <div class="alert alert-dark mb-3 d-flex justify-content-between">
                      <div class="text-success">
                        {{ ucfirst($payment->status) }}
                      </div>
                      <div class="text-white">
                        NGN{{ number_format($price) }}
                      </div> 
                    </div>
                    <div class="">
                        @if($status === 'initialized')
                            <a href="javascript:;" class="btn btn-info w-100 activate-subscription" data-url="{{ route('admin.subscription.activate', ['id' => $subscription->id]) }}">
                                <img src="/images/svgs/spinner.svg" class="me-2 d-none activate-subscription-spinner mb-1">
                                <span class="font-weight-bolder">Activate</span>
                            </a>
                        @else
                            <?php $status = strtolower($subscription->status); $timing = \App\Library\Timing::calculate($subscription->expiry_date, $subscription->start_date); ?>
                            <div class="mb-3 d-flex justify-content-between">
                                <small class="text-dark">
                                    Started  {{ date('F j, Y', strtotime($subscription->start_date)) }}
                                </small>
                                <small class="text-dark">
                                    Expiring  {{ date('F j, Y', strtotime($subscription->expiry_date)) }}
                                </small> 
                            </div>
                            <div class="p-2 border mb-3">
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar m-0 bg-{{ $timing->progress() >= 90 ? 'danger' : 'success' }}"  role="progressbar" style="width: {{ $timing->progress() }}%;" aria-valuenow="{{ $timing->progress() }}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3 d-flex justify-content-between">
                                <small class="text-dark">
                                    {{ $timing->daysleft() }} Days Left
                                </small>
                                <small class="text-dark">
                                    {{ $timing->progress() }}% Progress
                                </small>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <a href="javascript:;" class="btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#send-notification">Send Notification</a>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <a class="btn btn-dark d-block w-100" data-bs-toggle="modal" data-bs-target="#extend-subscription">Extend Subscription</a>
                                </div>
                            </div>
                            @include('admin.notifications.partials.notify')
                            @include('admin.subscriptions.partials.extend')
                        @endif
                    </div>
                  @endif
              </div>
            </div>
            <div class="card">
              <div class="card-header border-bottom">Edit Subscription Details</div>
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
                      <input type="text" name="concurrent_users" class="form-control concurrent_users" placeholder="Enter concurrent users" value="{{ $subscription->concurrent_users }}">
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
                  <button type="submit" class="btn btn-primary edit-subscription-button w-100">
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