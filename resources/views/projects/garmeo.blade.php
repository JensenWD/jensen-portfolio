@extends('layouts.project')

@section('title', 'Garmeo')

@section('description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in rutrum tellus, ut lobortis ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In vel facilisis lorem. Duis convallis sit amet ex et blandit. Nullam eu ipsum augue. Cras volutpat leo iaculis, blandit sem eu, iaculis risus. Sed id porttitor mauris.
Morbi laoreet nunc lacus, in pulvinar metus ultricies vitae. Proin luctus maximus nulla eget volutpat. Aliquam interdum tellus non leo egestas tincidunt. Nunc euismod, nisl eget rhoncus rutrum, justo ipsum feugiat leo, eget dapibus dui nunc ac erat. Curabitur lobortis orci ac sem suscipit aliquet. Sed et mattis ipsum, nec feugiat turpis. Fusce ut venenatis sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in dui justo. Phasellus eget enim quis elit auctor posuere non quis diam. Morbi dictum nisi non pretium varius.')

@section('screenshots')
    <div><img src="{{ asset('img/garmeo/landing.png') }}" alt="" class="img-fluid"></div>
    <div><img src="{{ asset('img/garmeo/edit.png') }}" alt="" class="img-fluid"></div>
    <div><img src="{{ asset('img/garmeo/product-overview.png') }}" alt="" class="img-fluid"></div>
    <div><img src="{{ asset('img/garmeo/patch-swatches.png') }}" alt="" class="img-fluid"></div>
    <div><img src="{{ asset('img/garmeo/share-design.png') }}" alt="" class="img-fluid"></div>
    <div><img src="{{ asset('img/garmeo/swatches.png') }}" alt="" class="img-fluid"></div>
    <div><img src="{{ asset('img/garmeo/dashboard.png') }}" alt="" class="img-fluid"></div>
    <div><img src="{{ asset('img/garmeo/inventory.png') }}" alt="" class="img-fluid"></div>
    <div><img src="{{ asset('img/garmeo/inventory-filter.png') }}" alt="" class="img-fluid"></div>
    <div><img src="{{ asset('img/garmeo/orders1.png') }}" alt="" class="img-fluid"></div>
    <div><img src="{{ asset('img/garmeo/orders2.png') }}" alt="" class="img-fluid"></div>
@endsection

@section('code')
    <div class="col-12 col-md-6">
        <img src="{{ asset('img/garmeo/orders1.png') }}" alt="" class="img-fluid">
    </div>
    <div class="col-12 col-md-6">
        <img src="{{ asset('img/garmeo/orders2.png') }}" alt="" class="img-fluid">
    </div>
@endsection