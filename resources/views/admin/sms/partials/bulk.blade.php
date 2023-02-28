<div class="modal fade" id="send-sms" tabindex="-1" role="dialog" aria-labelledby="send-sms-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="customer">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="send-sms-modal">Send Sms</h5>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close">
          <i class="icofont-close"></i>
        </button>
      </div>
      
      <form class="send-sms-form" action="javascript:;" method="post" data-action="{{ route('admin.sms.send', ['type' => empty($type) ? null : $type]) }}">
          @csrf
        <div class="modal-body">
          @if(!empty($heading))
            <div class="alert alert-info text-white mb-4">
              {{ $heading }}
            </div>
          @endif
          <input type="hidden" name="phones[]" value="{{ empty($phones) ? null : implode('||', $phones) }}" >
          <div class="row">
            <div class="form-group col-12">
              <label class="text-muted">Message</label>
              <textarea name="message" class="form-control message" placeholder="Enter message" rows="4"></textarea>
              <small class="message-error text-danger"></small>
            </div>
          </div>
          <div class="alert d-none send-sms-message mb-2 text-white"></div>
        </div>
        <div class="modal-footer pb-0">
          <button type="submit" class="btn btn-primary send-sms-button">
            <img src="/images/svgs/spinner.svg" class="me-2 d-none send-sms-spinner mb-1">Send
          </button>
        </div>
      </form>
    </div>
  </div>
</div>