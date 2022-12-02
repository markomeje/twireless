<div class="dashboard">
  @include('admin.includes.header')
      <div class="min-height-300 bg-primary position-absolute w-100"></div>
      @include('admin.includes.aside')
      <main class="main-content position-relative border-radius-lg ">
      <!-- Navbar -->
        @include('admin.includes.navbar')
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        <div class="">
          <div class="d-flex alert alert-dark border-0 mb-4 align-items-center">
            <div class="text-white me-3">
              ({{ $payments->total() }}) Payments
            </div>
            {{-- <a href="javascript:;" class="text-underline text-white m-0" data-bs-toggle="modal" data-bs-target="#record-package">Record Payment</a> --}}
          </div>
          @include('admin.payments.partials.record')
          @if(empty($payments->count()))
            <div class="alert alert-danger border-0 text-white">No payments yet</div>
          @else
            <div class="row">
              @foreach($payments as $payment)
                <div class="col-12 col-md-4 col-xl-3 mb-4">
                  @include('admin.payments.partials.card')
                </div>
              @endforeach
            </div>
            {{ $payments->links('vendor.pagination.default') }}
          @endif
        </div>
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>