<div class="modal fade" id="add-plan" tabindex="-1" role="dialog" aria-labelledby="add-plan-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="customer">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-plan-modal">Add Customer</h5>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close">
          <i class="icofont-close"></i>
        </button>
      </div>
      <form class="add-plan-form" action="javascript:;" method="post" data-action="{{ route('admin.customer.add') }}">
          @csrf
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-6">
              <label class="text-muted">Plan Name</label>
              <input type="text" name="name" class="form-control name" placeholder="Enter plan name">
              <small class="name-error text-danger"></small>
            </div>
            <div class="form-group col-md-6">
              <label class="text-muted">Price</label>
              <input type="text" name="price" class="form-control price" placeholder="Enter price">
              <small class="price-error text-danger"></small>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label class="text-muted">Speed</label>
              <input type="number" name="speed" class="form-control speed" placeholder="Enter speed">
              <small class="speed-error text-danger"></small>
            </div>
            <div class="form-group col-md-6">
              <label class="text-muted">Phone</label>
              <input type="number" name="connections" class="form-control connections" placeholder="Enter connections">
              <small class="connections-error text-danger"></small>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label class="text-muted">Package</label>
              <select class="form-control package" name="package">
                <option value="">Select package</option>
                <?php $packages = \App\Models\Package::all(); ?>
                @if(empty($packages->count()))
                  <option value="">No packages listed</option>
                @else
                  @foreach($packages as $package)
                    <option value="{{ $package->id }}">
                      {{ ucwords($package->name) }}
                    </option>
                  @endforeach
                @endif
              </select>
              <small class="package-error text-danger"></small>
            </div>
            <div class="form-group col-md-6">
              <label class="text-muted">Designation</label>
              <select class="form-control designation" name="designation">
                <option value="">Select designation</option>
                <?php $designations = \App\Models\Customer::$designations; ?>
                @if(empty($designations))
                  <option value="">No designations listed</option>
                @else
                  @foreach($designations as $designation)
                    <option value="{{ $designation }}">
                      {{ ucwords($designation) }}
                    </option>
                  @endforeach
                @endif
              </select>
              <small class="designation-error text-danger"></small>
            </div>
          </div>
          <div class="form-group mb-3">
            <label class="text-muted">Address</label>
            <textarea class="form-control address" name="address" rows="4" placeholder="Layout address"></textarea>
            <small class="address-error text-danger"></small>
          </div>
          <div class="alert d-none add-plan-message mb-2 text-white"></div>
        </div>
        <div class="modal-footer pb-0">
          <button type="submit" class="btn btn-primary add-plan-button">
            <img src="/images/svgs/spinner.svg" class="me-2 d-none add-plan-spinner mb-1">Add
          </button>
        </div>
      </form>
    </div>
  </div>
</div>