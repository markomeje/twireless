<div class="dashboard">
  @include('admin.includes.header')
      <div class="min-height-300 bg-primary position-absolute w-100"></div>
      @include('admin.includes.aside')
      <main class="main-content position-relative border-radius-lg ">
      <!-- Navbar -->
        @include('admin.includes.navbar')
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        <div class="bg-white p-4 border-radius-xl">
          <div class="d-flex justify-content-between mb-4 align-items-center">
            <div>
              <div>({{ $sectors->total() }}) sectors</div>
            </div>
            <div class="">
              <a href="javascript:;" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#add-sector">Add Sector</a>
            </div>
          </div>
          @if(empty($sectors->count()))
            <div class="alert alert-danger text-white">No sectors yet</div>
          @else
            <table class="table table-striped table-hover table-responsive mb-4">
              <thead class="">
                <tr>
                  <th class="thead-th px-2">S/N</th>
                  <th class="thead-th px-2">Name</th>                  
                  <th class="thead-th px-2">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 0; ?>
                @foreach($sectors as $sector)
                  <?php $i++; ?>
                  <tr>
                    <td>{{ $i }}</td>
                    <td>{{ \Str::limit($sector->name, 15) }}</td>
                    <td>
                      <a href="" class="text-danger">
                        <small>
                          <i class="icofont-trash"></i>
                        </small>
                      </a>
                      <a href="" class="text-warning">
                        <small>
                          <i class="icofont-edit"></i>
                        </small>
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $customers->links('vendor.pagination.default') }}
          @endif
        </div>
    </main>
    @include('admin.includes.rightbar')
  @include('admin.includes.footer')
</div>