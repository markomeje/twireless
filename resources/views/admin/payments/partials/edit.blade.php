<?php $customer = $payment->customer; ?>
<div class="modal fade" id="edit-payment-{{ $payment->id }}" tabindex="-1" role="dialog" aria-labelledby="edit-payment-modal" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="customer">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-payment-modal">Edit Payment</h5>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close">
          <i class="icofont-close"></i>
        </button>
      </div>
      <form class="edit-payment-form" action="javascript:;" method="post" data-action="{{ route('admin.payment.edit', ['id' => $payment->id]) }}">
        @csrf
        <div class="modal-body">
          <div class="alert alert-info mb-4 text-white">
            By {{ ucwords($customer->contact_name) }}
          </div>
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
                    <option value="{{ $type }}" {{ $payment->type == $type ? 'selected' : '' }}>
                      {{ ucwords($type) }}
                    </option>
                  @endforeach
                @endif
              </select>
              <small class="type-error text-danger"></small>
            </div>
            <div class="form-group col-12">
              <label class="text-muted">Amount Paid (NGN{{ number_format($payment->amount) }})</label>
              <input class="form-control amount" name="amount" value="{{ $payment->amount }}">
              <small class="amount-error text-danger"></small>
            </div>
          </div>
          <div class="alert d-none edit-payment-message mb-2 text-white"></div>
        </div>
        <div class="modal-footer pb-0">
          <button type="submit" class="btn btn-primary w-100 edit-payment-button">
            <img src="/images/svgs/spinner.svg" class="me-2 d-none edit-payment-spinner mb-1">Save
          </button>
        </div>
      </form>
    </div>
  </div>
</div>