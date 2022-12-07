<div class="dashboard">
  @include('customer.includes.header')
      <div class="min-height-300 bg-primary position-absolute w-100"></div>
      <main class="main-content position-relative border-radius-lg ">
      <!-- Navbar -->
        @include('customer.includes.navbar')
      <!-- End Navbar -->
      <div class="container py-4">
        <div class="">
          <?php $subscriptions = empty($customer->subscriptions) ? [] : $customer->subscriptions; ?>
          <div class="alert alert-info text-white border-0 mb-4">Hello, Welcome To Your Dashboard</div>
          <div class="row">
            <div class="col-6 mb-4">
              <div class="card border-0">
                <div class="card-header border-bottom">
                  <h6 class="">My Subscriptions</h6>
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
            <div class="col-6 mb-4">
              <div class="card border-0">
                <div class="card-header border-bottom">
                  <h6 class="">My Payments</h6>
                </div>
                <div class="card-body">
                  @if(empty($payments))
                    <div class="alert alert-danger text-white border-0">You have no payments yet.</div>
                  @endif
                  <div class="row">
                    
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