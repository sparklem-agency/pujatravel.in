@extends('layouts.app')

@section('content')
    <img src="{{ image_asset('banners/car-rental.jpg') }}?v=1" class="w-full" alt="">

    <div>
        @include('p.booking-card')
    </div>


    <div class="grid grid-cols-1 items-center gap-5 lg:grid-cols-2 max-width">

        <div class="mt-14 p-5">
            <div class="mx-auto max-w-lg">
                <h1 class="text-5xl">Reliable and Flexible Taxi Services</h1>
                <p class="mt-5">Providing the Northeast with a fleet of over 400 vehicles and round-the-clock professional
                    service to meet all your transportation needs
                </p>
            </div>
        </div>
        <div>
            <div class="mx-auto max-w-md p-3 lg:mt-14">
                @include('p.contact-form')
            </div>

        </div>
    </div>

    <div class="mt-5" data-aos="fade-up">
        @include('p.car-collection')
    </div>

    <div class="mt-5" data-aos="fade-up">
        @include('p.why-choose-us')
    </div>

    <div class="mt-5" data-aos="fade-up">
        @include('p.our-packages')
    </div>

    <div class="mt-5" data-aos="fade-up">
        @include('p.how-to-book')
    </div>
@endsection
