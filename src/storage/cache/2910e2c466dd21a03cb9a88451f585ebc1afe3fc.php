<div class="mt-10">

    <h1 class="heading">Our Awesome Car Collection</h1>
    <div class="max-width mt-10 grid grid-cols-1 gap-5 p-5 lg:grid-cols-4">

        <?php echo $__env->make('p.car-card', [
            'imageUrl' => image_asset('cars/innova-crytsa.png'),
            'seatcount' => '7 seaters',
            'carname' => 'Innova Crysta',
            'cartype' => 'VIP Car',
            'fueltype' => 'Diesel',
            'price' => 2000,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('p.car-card', [
            'imageUrl' => image_asset('cars/Maruti-Suzuki-Ertiga.png'),
            'seatcount' => '5 seaters',
            'carname' => 'Maruti Suzuki Ertiga',
            'cartype' => 'SEDAN CAR',
            'fueltype' => 'Petrol',
            'price' => 2000,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('p.car-card', [
            'imageUrl' => image_asset('cars/Maruti-Suzuki-Dezire.png'),
            'seatcount' => '5 seaters',
            'carname' => 'Maruti Suzuki Dezire',
            'cartype' => 'SEDAN CAR',
            'fueltype' => 'Petrol',
            'price' => 2000,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('p.car-card', [
            'imageUrl' => image_asset('cars/traveller-force-26-car.png'),
            'seatcount' => '5 seaters',
            'carname' => 'traveller-force-26-car',
            'cartype' => 'VAN/ BUS',
            'fueltype' => 'Diesel',
            'price' => 2000,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>
<?php /**PATH E:\office_work\anupamatravels.in\src\views/p/car-collection.blade.php ENDPATH**/ ?>