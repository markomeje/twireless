<div class="modal fade" id="add-layout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="layout">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Layout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="add-layout-form" action="javascript:;" method="post" data-action="{{ route('admin.layout.add') }}">
          @csrf
        <div class="modal-body">
          <div class="">
            <div class="form-group">
              <label class="text-muted">Layout Name</label>
              <input type="text" name="name" class="form-control name" placeholder="Enter layout name">
              <small class="name-error text-danger"></small>
            </div>
          <div class="form-group">
            <label class="text-muted">Description (optional)</label>
            <textarea class="form-control description" name="description" rows="4" placeholder="Layout description"></textarea>
            <small class="description-error text-danger"></small>
          </div>
        </div>
        <div class="alert d-none add-layout-message m-0 text-white"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-dark text-white me-3" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary add-layout-button">
            <img src="/images/spinner.svg" class="me-2 d-none add-layout-spinner mb-1">Add
          </button>
        </div>
      </form>
    </div>
  </div>
</div>