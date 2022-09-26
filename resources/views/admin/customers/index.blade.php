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
              <div class="">All Customers ({{ $customers->total() }})</div>
            </div>
            <div class="">
              <a href="javascript:;" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#add-customer">Add customer</a>
            </div>
          </div>
          @include('admin.customers.partials.add')
          @if(empty($customers->count()))
            <div class="alert alert-danger text-white">No customers yet</div>
          @else
            <table class="table table-striped table-hover table-responsive mb-4">
              <thead class="">
                <tr>
                  <th class="thead-th px-2">S/N</th>
                  <th class="thead-th px-2">Contact name</th>
                  <th class="thead-th px-2">Company name</th>
                  <th class="thead-th px-2">State</th>
                  <th class="thead-th px-2">Designation</th>
                  <th class="thead-th px-2">Phone</th>
                  <th class="thead-th px-2">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 0; ?>
                @foreach($customers as $customer)
                  <?php $i++; ?>
                  <tr>
                    <td>{{ $i }}</td>
                    <td>{{ \Str::limit($customer->contact_name, 15) }}</td>
                    <td>{{ \Str::limit($customer->company_name, 12) }}</td>
                    <td>{{ $customer->state->name }}</td>
                    <td>
                      <a href="tel:{{ $customer->user->phone }}">
                        {{ $customer->user->phone }}
                      </a>
                    </td>
                    <td>{{ $customer->designation }}</td>
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