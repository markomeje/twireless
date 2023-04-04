<div class="dashboard">
  @include('customer.includes.header')
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <main class="main-content position-relative border-radius-lg ">
      <!-- Navbar -->
        @include('customer.includes.navbar')
      <!-- End Navbar -->
      <div class="container py-4">
        <div class="">
            <div class="row">
                <div class="col-12 mb-4">

                  <div class="row">
                    <div class="col-12 col-md-8 col-lg-7 mb-4">
                        <div class="alert alert-info text-white border-0 mb-0">Hello, Welcome.</div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-7 mb-4">
                        <?php $subscriptions = empty($customer->subscriptions) ? [] : $customer->subscriptions; ?>
                      <div class="card border-0">
                        <div class="card-header border-bottom d-flex justify-content-between">
                          <div class="">My Subscriptions</div>
                          @if(empty($subscriptions))
                            <a href="javascript:;" class="text-main-dark" data-bs-toggle="modal" data-bs-target="#start-subscription">Subscribe</a>
                            @include('customer.subscription.partials.subscribe')
                          @endif
                        </div>
                        <div class="card-body">
                          @if(empty($subscriptions))
                            <div class="alert alert-danger text-white border-0">You have no subscriptions yet.</div>
                          @endif
                          <div class="row">

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-7 mb-4">
                        <?php $payments = $customer->payments; ?>
                      <div class="card border-0">
                        <div class="card-header border-bottom d-flex justify-content-between">
                          <div class="">My Payments</div>
                          <div>Total NGN{{ empty($payments->count()) ? 0 : number_format($payments->sum('amount')) }}</div>
                        </div>
                        <div class="card-body">
                          @if(empty($payments->count()))
                            <div class="alert alert-danger text-white border-0">You have no payments yet.</div>
                          @endif
                          <div class="row">
                            {{-- {{ dd($payments) }} --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
    </main>
  @include('customer.includes.footer')
</div>
