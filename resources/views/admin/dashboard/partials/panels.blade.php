<div class="col-xl-3 col-12 col-md-4 mb-4">
    <div class="card border">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <a href="{{ route('admin.customers') }}">
                <p class="text-sm mb-0 font-weight-bold m-0">All Customers</p>
              </a>
              <h5 class="font-weight-bolder">
                {{ \App\Models\Customer::count() }}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="col-xl-3 col-12 col-md-4 mb-4">
    <div class="card border">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <a href="{{ route('admin.sectors') }}">
                <p class="text-sm mb-0 font-weight-bold m-0">All Sectors</p>
              </a>
              <h5 class="font-weight-bolder">
                {{ \App\Models\Sector::count() }}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="col-xl-3 col-12 col-md-4 mb-4">
    <div class="card border">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <a href="{{ route('admin.bundles') }}">
                <p class="text-sm mb-0 font-weight-bold m-0">Bundles</p>
              </a>
              <h5 class="font-weight-bolder">
                {{ \App\Models\Bundle::count() }}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="col-xl-3 col-12 col-md-4 mb-4">
    <div class="card border">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <a href="{{ route('admin.subscriptions') }}">
                <p class="text-sm mb-0 font-weight-bold m-0">Subscriptions</p>
              </a>
              <h5 class="font-weight-bolder">
                {{ \App\Models\Subscription::count() }}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="col-xl-3 col-12 col-md-4 mb-4">
    <div class="card border">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <a href="{{ route('admin.packages') }}">
                <p class="text-sm mb-0 font-weight-bold m-0">Packages</p>
              </a>
              <h5 class="font-weight-bolder">
                {{ \App\Models\Package::count() }}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
      