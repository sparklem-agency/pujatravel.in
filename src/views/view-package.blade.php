@extends('layouts.app')

@section('title', $package['name'])

@section('content')

    <div class="mx-auto max-w-3xl p-5">

        <img class="mt-10 w-full rounded-lg shadow-lg" src="{{ image_asset('packages/' . $package['data']['thumbnail']) }}"
            alt="">

        <div class="prose-sm mt-10">

            {!! markdown($package['details']) !!}
        </div>



    </div>
    <div class="p-3 max-w-md mx-auto lg:mt-14" data-aos="fade-up">
        @include('p.contact-form', ['current_package' => $package['name']])
    </div>

    <div class="lg:mt-14" data-aos="fade-up">
        @include('p.why-choose-us')
    </div>
@endsection
