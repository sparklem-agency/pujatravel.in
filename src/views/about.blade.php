@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    <div class="max-width">
        <div class=" mx-auto mt-5 s">
            <h2 class="heading text-center ">About Us</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mt-10 p-3">
                <div class="grid place-items-center">

                    <div class="bg-white border-4 border-slate-400 overflow-hidden rounded-full">
                        <img class="border-2 -mb-2" src="{{ image_asset('profile.png') }}?v={{ env('APP_VERSION') }}"
                            alt="" srcset="">
                    </div>
                    Experience the magic of Northeast India like never before. Based in this captivating region, we
                    specialize in designing personalized journeys that showcase its awe-inspiring landscapes, rich cultures,
                    and hidden treasures.

                    From the misty hills of Meghalaya to the tranquil tea gardens of Assam and the majestic snow-capped
                    peaks of Arunachal Pradesh, our dedicated team ensures every journey is smooth and unforgettable.

                    Explore the essence of Northeast India with {{ env('APP_NAME') }}—your doorway to extraordinary
                    adventures.
                </div>
                <div class="grid place-items-center">
                    <div class="max-w-md w-full">
                        @include('p.contact-form')
                    </div>
                </div>
            </div>
        </div>
        <div>
            @include('p.booking-card')
        </div>
    </div>

@endsection
