<div class="dashboard">
  @include('admin.includes.header')
      <div class="min-height-300 bg-primary position-absolute w-100"></div>
      @include('admin.includes.aside')
      <main class="main-content position-relative border-radius-lg ">
      <!-- Navbar -->
        @include('admin.includes.navbar')
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12 col-md-3 col-lg-2 mb-3">
            <a class="btn w-100 border border-white text-white m-0" href="javascript:;">
              {{ $plots->count() }} Layouts
            </a>
          </div>
          <div class="col-12 col-md-3 col-lg-2">
            <a class="btn w-100 bg-gradient-dark m-0" href="javascript:;" data-bs-toggle="modal" data-bs-target="#add-plot">
              <i class="fas fa-plus"></i>&nbsp;&nbsp;Add Plot
            </a>
              @include('admin.plots.partials.add')
          </div>
        </div>
        @if(empty($plots))
          <div class="alert alert-info mt-4 border-0 text-white">No plots available</div>
        @else
          <div class="row mt-4">
            @foreach($plots as $plot)
              <div class="col-12 col-md-4 col-lg-3 mb-4">
                @include('admin.layouts.partials.card')
              </div>
              @include('admin.layouts.partials.edit')
            @endforeach
          </div>
        @endif
      </div>
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>