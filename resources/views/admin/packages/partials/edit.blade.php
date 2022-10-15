<div class="modal fade" id="edit-package-{{ $package->id }}" tabindex="-1" role="dialog" aria-labelledby="edit-package-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="customer">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-package-modal">Edit Package</h5>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close">
          <i class="icofont-close"></i>
        </button>
      </div>
      <form class="edit-package-form" action="javascript:;" method="post" data-action="{{ route('admin.package.add') }}">
          @csrf
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-6">
              <label class="text-muted">Package Name</label>
              <input type="text" name="name" class="form-control name" placeholder="Enter package name">
              <small class="name-error text-danger"></small>
            </div>
            <div class="form-group col-md-6">
              <label class="text-muted">Price (NGN)</label>
              <input type="number" name="price" class="form-control price" placeholder="Enter price">
              <small class="price-error text-danger"></small>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label class="text-muted">Duration (In Days)</label>
              <input type="number" name="duration" class="form-control duration" placeholder="Enter duration" value="30">
              <small class="duration-error text-danger"></small>
            </div>
            <div class="form-group col-md-6">
              <label class="text-muted">Period</label>
              <select class="form-control custom-select period" name="period">
                <option value="">Select Period</option>
                <?php $periods = \App\Models\Package::$periods; ?>
                @if(empty($periods))
                  <option value="">No periods listed</option>
                @else
                  @foreach($periods as $period)
                    <option value="{{ $period }}">
                      {{ ucfirst($period) }}
                    </option>
                  @endforeach
                @endif
              </select>
              <small class="period-error text-danger"></small>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label class="text-muted">Devices (e.g., 2 - 5)</label>
              <input type="text" name="devices" class="form-control devices" placeholder="e.g., 1 - 7">
              <small class="devices-error text-danger"></small>
            </div>
            <div class="form-group col-md-6">
              <label class="text-muted">Speed (mbps)</label>
              <input type="number" name="speed" class="form-control speed" placeholder="Enter bandwidth">
              <small class="speed-error text-danger"></small>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label class="text-muted">Setup Fee</label>
              <input type="number" name="setup_fee" class="form-control setup_fee" placeholder="Enter setup fee">
              <small class="setup_fee-error text-danger"></small>
            </div>
            <div class="form-group col-md-6">
              <label class="text-muted">Price (NGN)</label>
              <input type="number" name="price" class="form-control price" placeholder="Enter price">
              <small class="price-error text-danger"></small>
            </div>
          </div>
          <div class="alert d-none edit-package-message mb-2 text-white"></div>
        </div>
        <div class="modal-footer pb-0">
          <button type="submit" class="btn btn-primary edit-package-button">
            <img src="/images/svgs/spinner.svg" class="me-2 d-none edit-package-spinner mb-1">Edit
          </button>
        </div>
      </form>
    </div>
  </div>
</div>