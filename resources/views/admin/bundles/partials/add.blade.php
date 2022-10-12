<div class="modal fade" id="add-bundle" tabindex="-1" role="dialog" aria-labelledby="add-bundle-modal" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="customer">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-bundle-modal">Add Bundle</h5>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close">
          <i class="icofont-close"></i>
        </button>
      </div>
      <form class="add-bundle-form" action="javascript:;" method="post" data-action="{{ route('admin.bundle.add') }}">
          @csrf
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-12">
              <label class="text-muted">Data Size (GB)</label>
              <input type="number" name="size" class="form-control size" placeholder="Enter bundle size">
              <small class="size-error text-danger"></small>
            </div>
            <div class="form-group col-12">
              <label class="text-muted">Price (NGN)</label>
              <input type="number" name="price" class="form-control price" placeholder="Enter price">
              <small class="price-error text-danger"></small>
            </div>
            <div class="form-group col-12">
              <label class="text-muted">Duration (In Days)</label>
              <input type="number" name="duration" class="form-control duration" placeholder="Enter duration">
              <small class="duration-error text-danger"></small>
            </div>
          </div>
          <div class="alert d-none add-bundle-message mb-2 text-white"></div>
        </div>
        <div class="modal-footer pb-0">
          <button type="submit" class="btn btn-primary add-bundle-button">
            <img src="/images/svgs/spinner.svg" class="me-2 d-none add-bundle-spinner mb-1">Add
          </button>
        </div>
      </form>
    </div>
  </div>
</div>