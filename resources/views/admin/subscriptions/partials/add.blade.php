<div class="modal fade" id="add-subscription" tabindex="-1" role="dialog" aria-labelledby="add-subscription-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="customer">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-subscription-modal">Add Customer</h5>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close">
          <i class="icofont-close"></i>
        </button>
      </div>

      <form class="add-subscription-form" action="javascript:;" method="post" data-action="{{ route('admin.subscription.add') }}">
        @csrf
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-6">
              <label class="text-muted">Customer</label>
              <select class="form-control customer" name="customer">
                <option value="">Select Customer</option>
                <?php $customers = \App\Models\Customer::latest('created_at')->get(); ?>
                @if(empty($customers->count()))
                  <option value="">No customers listed</option>
                @else
                  @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">
                      {{ ucwords($customer->contact_name) }}
                    </option>
                  @endforeach
                @endif
              </select>
              <small class="customer-error text-danger"></small>
            </div>
            <div class="form-group col-md-6">
              <label class="text-muted">Antenna</label>
              <input type="text" name="antenna" class="form-control antenna" placeholder="Enter antenna">
              <small class="antenna-error text-danger"></small>
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
                      {{ ucwords($bundle->size) }}Gb
                    </option>
                  @endforeach
                @endif

                <?php $packages = \App\Models\Package::all(); ?>
                @if(!empty($packages->count()))
                  @foreach($packages as $package)
                    <option value="package_{{ $package->id }}">
                      {{ ucwords($package->name) }}
                    </option>
                  @endforeach
                @endif
              </select>
              <small class="package-error text-danger"></small>
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
          <div class="alert d-none add-subscription-message mb-2 text-white"></div>
        </div>
        <div class="modal-footer pb-0">
          <button type="submit" class="btn btn-primary add-subscription-button">
            <img src="/images/svgs/spinner.svg" class="me-2 d-none add-subscription-spinner mb-1">Add
          </button>
        </div>
      </form>
    </div>
  </div>
</div>