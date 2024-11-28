<div class="mt-10">

    <h1 class="heading">Our Awesome Car Collection</h1>
    <div class="max-width mt-10 grid grid-cols-1 gap-5 p-5 lg:grid-cols-4">

        <?php $__currentLoopData = range(1, 4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('p.car-card', [
                'imageUrl' => image_asset('cars/innova-crysta.jpeg'),
                'seatcount' => '5 seaters',
                'carname' => 'Innova Crysta',
                'cartype' => 'VIP Car',
                'fueltype' => 'Petrol',
                'price' => 2000,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>
<?php /**PATH C:\Projects\anupamatravels.in\src\views/p/car-collection.blade.php ENDPATH**/ ?>