@include('layouts.header')
<div class="bg-white min-vh-100">
    @include('admin.layouts.navbar')
    <div class="section-padding">
        <div class="container-fluid">
            @if(empty($properties->count()))
                <div class="alert-warning alert">No properties found</div>
            @else
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="alert alert-info d-flex align-items-center">
                            <small class="mr-2">{{ ucwords($properties[0]->category->name ?? 'Random') }} properties</small>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="alert alert-info d-flex align-items-center">
                            <a class="text-underline" href="javascript:;">
                                <small class="mr-2">
                                    Search
                                </small>
                            </a>
                            <a class="text-underline" href="javascript:;">
                                <small class="">
                                    Date filter
                                </small>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="row">
                        @foreach($properties as $property)
                            <div class="col-12 col-md-3 col-lg-2 mb-4">
                                @include('admin.properties.partials.card')
                            </div>
                        @endforeach
                    </div>
                    {{ $properties->links('vendor.pagination.default') }}
                </div>
            @endif
        </div>
    </div>
</div>
@include('layouts.footer')    