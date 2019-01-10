@extends('layouts.project')

@section('title', 'Ricoma')

@section('description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in rutrum tellus, ut lobortis ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In vel facilisis lorem. Duis convallis sit amet ex et blandit. Nullam eu ipsum augue. Cras volutpat leo iaculis, blandit sem eu, iaculis risus. Sed id porttitor mauris.
Morbi laoreet nunc lacus, in pulvinar metus ultricies vitae. Proin luctus maximus nulla eget volutpat. Aliquam interdum tellus non leo egestas tincidunt. Nunc euismod, nisl eget rhoncus rutrum, justo ipsum feugiat leo, eget dapibus dui nunc ac erat. Curabitur lobortis orci ac sem suscipit aliquet. Sed et mattis ipsum, nec feugiat turpis. Fusce ut venenatis sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in dui justo. Phasellus eget enim quis elit auctor posuere non quis diam. Morbi dictum nisi non pretium varius.')

@section('screenshots')
    <div><img src="{{ asset('img/ricoma/landing.png') }}" alt="" class="img-fluid"></div>
    <div><img src="{{ asset('img/ricoma/homepage.png') }}" alt="" class="img-fluid"></div>
    <div><img src="{{ asset('img/ricoma/shop.png') }}" alt="" class="img-fluid"></div>
    <div><img src="{{ asset('img/ricoma/machine.png') }}" alt="" class="img-fluid"></div>
    <div><img src="{{ asset('img/ricoma/light-menu.png') }}" alt="" class="img-fluid"></div>
    <div><img src="{{ asset('img/ricoma/dark-menu.png') }}" alt="" class="img-fluid"></div>
    <div><img src="{{ asset('img/ricoma/fullscreen.png') }}" alt="" class="img-fluid"></div>
    <div><img src="{{ asset('img/ricoma/map.png') }}" alt="" class="img-fluid"></div>
    <div><img src="{{ asset('img/ricoma/contact.png') }}" alt="" class="img-fluid"></div>
@endsection