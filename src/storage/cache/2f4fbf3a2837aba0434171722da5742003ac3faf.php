<?php
    $packages = all_packages();
    $whatsappNumber = env('WHATSAPP_NUMBER');

    $c_package = $current_package ?? null;
?>
<form class="border shadow-lg flex w-full flex-col gap-5 rounded-2xl p-5 py-10" data-aos="flip-right"
    x-data="{ name: '', phone: '', package: '<?php echo e($c_package); ?>' }"
    @submit.prevent="
        const message = `Name: ${name}%0APhone: ${phone}%0APackage: ${package}`;
        const whatsappUrl = `https://wa.me/<?php echo e($whatsappNumber); ?>?text=${message}`;
        window.open(whatsappUrl, '_blank');
    ">
    <h2 class="text-2xl capitalize">Book your Trip</h2>

    <!-- Name Field -->
    <div>
        <label for="name" class="block mb-2 text-sm font-medium  ">Name</label>
        <input type="text" id="name" x-model="name"
            class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Enter your name" required />
    </div>

    <!-- Phone Number Field -->
    <div>
        <label for="phone" class="block mb-2 text-sm font-medium  ">Phone Number</label>
        <input type="tel" id="phone" x-model="phone"
            class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Enter your phone number" required />
    </div>

    <!-- Package Selection -->
    <div>
        <label for="package" class="block mb-2 text-sm font-medium  ">Select
            Package</label>
        <select id="package" x-model="package"
            class="bg-gray-50 border capitalize border-gray-300 dark:text-white text-gray-900  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
            required>

            <?php if($c_package): ?>
                <option value="<?php echo e($c_package); ?>" selected><?php echo e($c_package); ?></option>
            <?php else: ?>
                <option value="Select" selected>Select</option>
            <?php endif; ?>

            <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($package['name']); ?>"><?php echo e($package['name']); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <!-- Submit Button -->
    <button
        class="w-full rounded-md bg-blue-700 px-3 py-2 text-white text-sm font-medium hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="submit">
        Submit
    </button>
</form>
<?php /**PATH C:\Projects\pujatravel.in\src\views/p/contact-form.blade.php ENDPATH**/ ?>