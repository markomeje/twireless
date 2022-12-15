<div class="modal fade" id="search-subscription" tabindex="-1" role="dialog" aria-labelledby="search-subscription-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="customer">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="search-subscription-modal">Search Subscription</h5>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close">
          <i class="icofont-close"></i>
        </button>
      </div>
      <form class="search-subscription-form" action="{{ route('admin.subscriptions.search') }}" method="get">
        <div class="modal-body">
            <div class="form-group input-group-lg mb-3">
                <input class="form-control query" name="query" placeholder="Enter search term . . ." value="{{ request()->get('query') }}" />
                <small class="query-error text-danger"></small>
            </div>
            <div class="alert d-none search-subscription-message mb-2 text-white"></div>
        </div>
        <div class="modal-footer pb-0">
            <button type="submit" class="btn btn-primary search-subscription-button">
                <img src="/images/svgs/spinner.svg" class="me-2 d-none search-subscription-spinner mb-1 w-100">Search
            </button>
        </div>
      </form>
    </div>
  </div>
</div>