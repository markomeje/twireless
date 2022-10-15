<div class="modal fade" id="add-customer" tabindex="-1" role="dialog" aria-labelledby="add-customer-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="customer">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-customer-modal">Add Customer</h5>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close">
          <i class="icofont-close"></i>
        </button>
      </div>
      <form class="add-customer-form" action="javascript:;" method="post" data-action="{{ route('admin.customer.add') }}">
          @csrf
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-6">
              <label class="text-muted">Contact Name</label>
              <input type="text" name="contact_name" class="form-control contact_name" placeholder="Enter customer contact name">
              <small class="contact_name-error text-danger"></small>
            </div>
            <div class="form-group col-md-6">
              <label class="text-muted">Company Name</label>
              <input type="text" name="company_name" class="form-control company_name" placeholder="Enter customer company name">
              <small class="company_name-error text-danger"></small>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label class="text-muted">Email</label>
              <input type="email" name="email" class="form-control email" placeholder="Enter customer email">
              <small class="email-error text-danger"></small>
            </div>
            <div class="form-group col-md-6">
              <label class="text-muted">Phone</label>
              <input type="text" name="phone" class="form-control phone" placeholder="Enter customer phone">
              <small class="phone-error text-danger"></small>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label class="text-muted">State</label>
              <select class="form-control state" name="state">
                <option value="">Select state</option>
                <?php $states = \App\Models\State::all(); ?>
                @if(empty($states))
                  <option value="">No states listed</option>
                @else
                  @foreach($states as $state)
                    <option value="{{ $state->id }}">
                      {{ ucwords($state->name) }}
                    </option>
                  @endforeach
                @endif
              </select>
              <small class="state-error text-danger"></small>
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
          <div class="alert d-none add-customer-message mb-2 text-white"></div>
        </div>
        <div class="modal-footer pb-0">
          <button type="submit" class="btn btn-primary add-customer-button">
            <img src="/images/svgs/spinner.svg" class="me-2 d-none add-customer-spinner mb-1">Add
          </button>
        </div>
      </form>
    </div>
  </div>
</div>