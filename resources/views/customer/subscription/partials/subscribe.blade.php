<div class="modal fade" id="start-subscription" tabindex="-1" role="dialog" aria-labelledby="start-subscription-modal" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="customer">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="start-subscription-modal">Start Subscription</h5>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close">
          <i class="icofont-close"></i>
        </button>
      </div>
      <form class="start-subscription-form" action="javascript:;" method="post" data-action="{{ route('admin.subscription.add') }}">
          @csrf
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-12">
              <label class="text-muted">Subscription Plan</label>
              <select class="form-control custom-select plan" name="plan">
                  <?php $packages = \App\Models\Package::all(); ?>
                  @if(!empty($packages->count()))
                    @foreach($packages as $package)
                      <option value="{{ $package->id }}">
                          {{ $package->name.' Price(NGN'.number_format($package->price).') Setup Fee(NGN'.number_format($package->setup_fee).') for '.$package->duration.'days'}}
                      </option>
                    @endforeach
                  @endif
              </select>
              <small class="plan-error text-danger"></small>
            </div>
          </div>
          <div class="alert d-none start-subscription-message mb-2 text-white"></div>
        </div>
        <div class="modal-footer pb-0">
          <button type="submit" class="btn btn-primary start-subscription-button">
            <img src="/images/svgs/spinner.svg" class="me-2 d-none start-subscription-spinner mb-1">Continue
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
