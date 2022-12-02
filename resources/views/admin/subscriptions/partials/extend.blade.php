<div class="modal fade" id="extend-subscription" tabindex="-1" role="dialog" aria-labelledby="extend-subscription-modal" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="customer">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="extend-subscription-modal">Extend Subscription</h5>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close">
          <i class="icofont-close"></i>
        </button>
      </div>
      <form class="extend-subscription-form" action="javascript:;" method="post" data-action="{{ route('admin.subscription.extend', ['id' => $subscription->id]) }}">
        @csrf
        <div class="modal-body">
          <div class="alert alert-info mb-3 text-white">
            Expiry Date ({{ date('F j, Y', strtotime($subscription->expiry_date)) }})
          </div>
          <div class="form-group">
            <label class="text-muted">Add Days</label>
            <input type="number" name="days" class="form-control days" placeholder="Enter days" min="2">
            <small class="days-error text-danger"></small>
          </div>
          <div class="alert d-none extend-subscription-message mb-2 text-white"></div>
        </div>
        <div class="modal-footer pb-0">
          <button type="submit" class="btn btn-primary w-100 extend-subscription-button">
            <img src="/images/svgs/spinner.svg" class="me-2 d-none extend-subscription-spinner mb-1">Save
          </button>
        </div>
      </form>
    </div>
  </div>
</div>