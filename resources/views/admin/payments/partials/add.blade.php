<div class="modal fade" id="add-payment" tabindex="-1" role="dialog" aria-labelledby="add-payment-modal" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="customer">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-payment-modal">Add Payment</h5>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close">
          <i class="icofont-close"></i>
        </button>
      </div>
      <form class="add-payment-form" action="javascript:;" method="post" data-action="{{ route('admin.payment.add') }}">
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
            <div class="form-group col-12">
              <label class="text-muted">Amount Paid</label>
              <select class="form-control amount" name="amount">
                <option value="{{ $price }}">
                  NGN{{ number_format($price) }}
                </option>
              </select>
              <small class="amount-error text-danger"></small>
            </div>
          </div>
          <div class="alert d-none add-payment-message mb-2 text-white"></div>
        </div>
        <div class="modal-footer pb-0">
          <button type="submit" class="btn btn-primary w-100 add-payment-button">
            <img src="/images/svgs/spinner.svg" class="me-2 d-none add-payment-spinner mb-1">Add
          </button>
        </div>
      </form>
    </div>
  </div>
</div>