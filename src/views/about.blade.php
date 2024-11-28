@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    <div class="max-width">
        <div class=" mx-auto mt-5">
            <h2 class="heading text-center ">About Us</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mt-10 p-3">
                <div class="grid place-items-center">
                    At Anupama Travels, we bring the wonders of Northeast India closer to you. Based in this breathtaking
                    region, we specialize in crafting personalized journeys through its stunning landscapes, vibrant
                    cultures,
                    and hidden gems.

                    Whether it’s the misty hills of Meghalaya, the serene tea gardens of Assam, or the snowy peaks of
                    Arunachal
                    Pradesh, our expert team ensures every trip is seamless and memorable.

                    Discover the heart of Northeast India with Anupama Travels—your gateway to unforgettable adventures
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
