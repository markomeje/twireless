<div class="modal fade" id="record-payment" tabindex="-1" role="dialog" aria-labelledby="record-payment-modal" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="customer">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="record-payment-modal">Add Payment</h5>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close">
          <i class="icofont-close"></i>
        </button>
      </div>
      <form class="record-payment-form" action="javascript:;" method="post" data-action="{{ route('admin.payment.record') }}">
        @csrf
        <div class="modal-body">
          <input type="hidden" name="customer_id" value="{{ $customer->id ?? 0 }}" />
          <input type="hidden" name="subscription_id" value="{{ $subscription->id ?? 0 }}" />
          <input type="hidden" name="product" value="{{ $plan ?? '' }}" />
          <div class="row">
            <div class="form-group col-12">
              <label class="text-muted">Payment Type</label>
              <select class="form-control type" name="type">
                <option value="">Select Payment Type</option>
                <?php $types = \App\Models\Payment::$types; ?>
                @if(empty($types))
                  <option value="">No Types Listed</option>
                @else
                  @foreach($types as $type)
                    <option value="{{ $type }}">
                      {{ ucwords($type) }}
                    </option>
                  @endforeach
                @endif
              </select>
              <small class="type-error text-danger"></small>
            </div>
          </div>
          <div class="alert d-none record-payment-message mb-2 text-white"></div>
        </div>
        <div class="modal-footer pb-0">
          <button type="submit" class="btn btn-primary w-100 record-payment-button">
            <img src="/images/svgs/spinner.svg" class="me-2 d-none record-payment-spinner mb-1">Add
          </button>
        </div>
      </form>
    </div>
  </div>
</div>