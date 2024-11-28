<div>
    <?php echo $__env->make('p.heading', [
        'heading' => 'How to book',
        'subheading' => 'Simplified Booking Method',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="mx-auto grid max-w-4xl grid-cols-1 gap-5 p-3 lg:grid-cols-2">
        <div class="w-full">
            <img class="w-full rounded-md" data-aos="flip-up" src="<?php echo e(image_asset('how-to-book-1.png')); ?>" alt="">

            <div class="mt-3 grid grid-cols-2 gap-3">
                <img class="rounded-md" data-aos="flip-right" src="<?php echo e(image_asset('how-to-book-2.png')); ?>" alt="">
                <img class="rounded-md" data-aos="flip-left" src="<?php echo e(image_asset('how-to-book-3.png')); ?>"
                    alt="">
            </div>
        </div>

        <div class="space-y-5">
            <div class="grid grid-cols-[100px_auto] rounded-lg bg-[#FFF0EC] p-5" data-aos="fade-up">
                <div>
                    <img class="h-20" src="<?php echo e(image_asset('find-your-destination.png')); ?>" alt="">
                </div>
                <div>
                    <h2 class="text-2xl">Find Your Destination </h2>
                    <p class="mt-3">Choose your destination based on weather, activities, and budget.
                        Check travel advisories, visa requirements, and safety concerns.</p>
                </div>
            </div>

            <div class="grid grid-cols-[100px_auto] rounded-lg bg-[#E4F9F9] p-5" data-aos="fade-up">
                <div>
                    <img class="h-20" src="<?php echo e(image_asset('book-a-cab.png')); ?>" alt="">
                </div>
                <div>
                    <h2 class="text-2xl">Book a cab </h2>
                    <p class="mt-3">
                        Choose the best car suited to you need . Read reviews and
                        understand cancellation policies.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-[100px_auto] rounded-lg bg-[#E3F0FF] p-5" data-aos="fade-up">
                <div>
                    <img class="h-20" src="<?php echo e(image_asset('pay-and-go.png')); ?>" alt="">
                </div>
                <div>
                    <h2 class="text-2xl">Pay and go </h2>
                    <p class="mt-3">
                        Ensure secure transactions. Save and print confirmation emails.
                        Consider travel insurance for unforeseen events.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH E:\office_work\anupamatravels.in\src\views/p/how-to-book.blade.php ENDPATH**/ ?>