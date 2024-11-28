

<?php $__env->startSection('title', $package['name']); ?>

<?php $__env->startSection('content'); ?>

<div class="mx-auto max-w-3xl p-5">

    <img class="mt-10 w-full rounded-lg shadow-lg" src="<?php echo e(image_asset('packages/' . $package['data']['thumbnail'])); ?>"
        alt="">

    <div class="prose-sm mt-10">

        <?php echo markdown($package['details']); ?>

    </div>



</div>
<div class="p-3 max-w-md mx-auto lg:mt-14" data-aos="fade-up">
    <?php echo $__env->make('p.contact-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<div class="lg:mt-14" data-aos="fade-up">
    <?php echo $__env->make('p.why-choose-us', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Projects\anupamatravels.in\src\views/view-package.blade.php ENDPATH**/ ?>