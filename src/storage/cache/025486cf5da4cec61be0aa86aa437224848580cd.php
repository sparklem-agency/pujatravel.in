

<?php $__env->startSection('content'); ?>
    <img src="<?php echo e(image_asset('banners/car-rental.jpg')); ?>?v=1" class="w-full" alt="">
    <div class="grid grid-cols-1 items-center gap-5 lg:grid-cols-2 max-width">

        <div class="mt-14 p-5">
            <div class="mx-auto max-w-lg">
                <h1 class="text-5xl"> Dependable & Versatile Taxi Services</h1>
                <p class="mt-5">Serving the Northeast with a fleet of over 400 vehicles and professional 24/7 service for
                    all
                    your
                    transportation needs.
                </p>
            </div>
        </div>
        <div>
            <div class="mx-auto max-w-md p-3 lg:mt-14">
                <?php echo $__env->make('p.contact-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

        </div>
    </div>
    <div>
        <?php echo $__env->make('p.booking-card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="mt-5" data-aos="fade-up">
        <?php echo $__env->make('p.car-collection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="mt-5" data-aos="fade-up">
        <?php echo $__env->make('p.why-choose-us', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="mt-5" data-aos="fade-up">
        <?php echo $__env->make('p.our-packages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="mt-5" data-aos="fade-up">
        <?php echo $__env->make('p.how-to-book', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\office_work\anupamatravels.in\src\views/index.blade.php ENDPATH**/ ?>