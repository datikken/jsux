@extends('layouts.app')

@section('content')
    <div class="tm-sidebar-left">
        @include('components.dashboard.dashboard_menu')
    </div>

    <div class="tm-main">
                @include('components.slider.slider')
                <livewire:articles/>
    </div>
@endsection
