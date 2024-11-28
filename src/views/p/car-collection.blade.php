<div class="mt-10 bg-orange-300 py-16">

    <h1 class="heading">Our Car Collection</h1>
    <div class="max-width mt-10 grid grid-cols-1 gap-5 p-5 lg:grid-cols-4">

        @include('p.car-card', [
            'imageUrl' => image_asset('cars/innova-crytsa.png'),
            'seatcount' => '7 seaters',
            'carname' => 'Innova Crysta',
            'cartype' => 'VIP Car',
            'fueltype' => 'Diesel',
            'price' => 2000,
        ])

        @include('p.car-card', [
            'imageUrl' => image_asset('cars/Maruti-Suzuki-Ertiga.png'),
            'seatcount' => '5 seaters',
            'carname' => 'Maruti Suzuki Ertiga',
            'cartype' => 'SEDAN CAR',
            'fueltype' => 'Petrol',
            'price' => 2000,
        ])

        @include('p.car-card', [
            'imageUrl' => image_asset('cars/Maruti-Suzuki-Dezire.png'),
            'seatcount' => '5 seaters',
            'carname' => 'Maruti Suzuki Dezire',
            'cartype' => 'SEDAN CAR',
            'fueltype' => 'Petrol',
            'price' => 2000,
        ])

        @include('p.car-card', [
            'imageUrl' => image_asset('cars/traveller-force-26-car.png'),
            'seatcount' => '5 seaters',
            'carname' => 'traveller-force-26-car',
            'cartype' => 'VAN/ BUS',
            'fueltype' => 'Diesel',
            'price' => 2000,
        ])
    </div>

</div>
