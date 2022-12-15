<div class="modal fade" id="send-notification" tabindex="-1" role="dialog" aria-labelledby="send-notification-modal" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="customer">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="send-notification-modal">Send Notification</h5>
                <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close">
                <i class="icofont-close"></i>
                </button>
            </div>
            <form class="send-notification-form" action="javascript:;" method="post" data-action="{{ route('admin.notification.send', ['customer_id' => $customer->id ?? 0]) }}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-12">
                            <label class="text-muted">Notification Type</label>
                            <select class="form-control type custom-select" name="type">
                                <option value="">Select Type</option>
                                <?php $types = \App\Models\Notification::$types; ?>
                                @if(empty($types))
                                    <option value="">No Types Listed</option>
                                @else
                                    @foreach($types as $type)
                                        <option value="{{ $type }}">
                                            {{ ucfirst($type) }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                            <small class="type-error text-danger"></small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label class="text-muted">Message Body</label>
                            <textarea type="text" name="body" class="form-control body" placeholder="Enter message" rows="4"></textarea>
                            <small class="body-error text-danger"></small>
                        </div>
                    </div>
                    <div class="alert d-none send-notification-message mb-2 text-white"></div>
                </div>
                <div class="modal-footer pb-0">
                    <button type="submit" class="btn btn-primary w-100 send-notification-button">
                        <img src="/images/svgs/spinner.svg" class="me-2 d-none send-notification-spinner mb-1">Send
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>