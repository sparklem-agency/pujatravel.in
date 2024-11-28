

<?php $__env->startSection('title', 'About Us'); ?>

<?php $__env->startSection('content'); ?>

    <div class="max-width">
        <div class=" mx-auto text-center mt-5">
            <h2 class="heading">About Us</h2>

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
                    <div class="max-w-md">
                        <?php echo $__env->make('p.contact-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <?php echo $__env->make('p.booking-card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\office_work\anupamatravels.in\src\views/about.blade.php ENDPATH**/ ?>