<?php $panels = [
    'clients' => ['name' => 'All Clients', 'count' => \App\Models\Client::count(), 'text' => '', 'icon' => 'ni-money-coins'],
    'layouts' => ['name' => 'All Layouts', 'count' => rand(45, 209), 'text' => '', 'icon' => 'ni-money-coins'],
    'payments' => ['name' => 'All Payments', 'count' => rand(45, 209), 'text' => '', 'icon' => 'ni-money-coins']
  ]; ?>
  @if(!empty($panels))
    @foreach($panels as $link => $details)
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <a href="{{ route("admin.{$link}") }}">
                      <p class="text-sm mb-0 font-weight-bold">
                        {{ $details['name'] }}
                      </p>
                    </a>
                    <h5 class="font-weight-bolder">
                      {{ $details['count'] }}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni {{ $details['icon'] }} text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    @endforeach
  @endif
      