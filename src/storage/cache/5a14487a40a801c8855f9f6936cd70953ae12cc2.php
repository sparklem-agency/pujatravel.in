<nav class="grid grid-cols-2 gap-2 bg-gray-100 p-5 lg:grid-cols-3" x-data="{
    show: false,
    init() {
        $watch('show', (value) => {
            console.log(value)
        })
    }
}">
    <div class="flex flex-col items-center gap-2 lg:flex-row lg:gap-5">
        <a href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(image_asset('logo.png')); ?>?v=<?php echo e(env('APP_VERSION')); ?>" class="h-10 -ml-5 lg:ml-0" alt="">
        </a>
    </div>

    <!-- desktop menu-->
    <div class="hidden items-center justify-center gap-5 lg:flex">
        <a href="<?php echo e(url('/')); ?>">Home</a>
        <a href="<?php echo e(url('/about')); ?>">About</a>
        <?php
            $packages = all_packages();
            $formatted_list = [];

            foreach ($packages as $package) {
                $formatted_list[] = [
                    'link' => route('view-package', ['slug' => $package['slug']]),
                    'label' => $package['name'],
                ];
            }
        ?>
        <?php echo $__env->make('p.dropdown', [
            'label' => 'Packages',
            'items' => $formatted_list,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <a href="<?php echo e(url('galleries')); ?>">Gallery</a>

        <a href="<?php echo e(url('/contact')); ?>">Contact</a>


    </div>

    <!-- mobile menu -->
    <div class="fixed inset-0 backdrop-blur-lg z-50" @click="show=false" style="display: none" x-show="show"></div>
    <div class="fixed -left-full bottom-0 top-0 min-h-screen w-full max-w-[250px] bg-blue-800 text-white transition-all duration-300 ease-in-out z-50"
        :class="show ? 'left-0' : '-left-full'">
        <div class="px-3">
            <button class="py-5" type="button" @click="show=false">
                <svg class="size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>

            </button>
        </div>
        <div class="space-y-3 " x-data="{
            show: false
        }">
            <a class="block p-3" href="<?php echo e(url('/')); ?>">Home</a>
            <a class="block p-3" href="<?php echo e(url('/about')); ?>">About</a>

            <div class="block px-3">

                <div class="flex items-center gap-5" @click="show=!show">Pakcages

                    <svg class="size-4 ml-auto" :class="show ? 'rotate-0' : 'rotate-180'"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 8L18 14H6L12 8Z"></path>
                    </svg>
                </div>

                <div x-show="show" x-transition style="display: none" class="ml-5 mt-5 space-y-4">
                    <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="block capitalize" href="<?php echo e(route('view-package', ['slug' => $package['slug']])); ?>">
                            <?php echo e($package['name']); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <a class="block p-3" href="<?php echo e(url('galleries')); ?>"> Galleries</a>

            <a class="block p-3" href="<?php echo e(url('/contact')); ?>">Contact</a>



        </div>
    </div>

    <div class="ml-auto flex w-fit items-center gap-2">
        <a class="size-10 focus:opacity-55 ml-auto flex items-center justify-center gap-1 rounded-full border-2 border-black bg-black text-white focus:ring-2"
            href="tel:<?php echo e(env('PHONE_NUMBER')); ?>">
            <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path
                    d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z">
                </path>
            </svg>

        </a>

        <button class="size-10 grid place-items-center rounded-full border-2 lg:hidden" type="button"
            @click="show=true">
            <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"></path>
            </svg>
        </button>
    </div>
</nav>
<?php /**PATH E:\office_work\pujatravel.in\src\views/p/navbar.blade.php ENDPATH**/ ?>