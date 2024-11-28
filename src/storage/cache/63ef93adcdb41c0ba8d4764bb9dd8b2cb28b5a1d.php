<div class="relative" x-data="{ show: false }" @click.away="show = false">
    <button class="flex items-center gap-2" type="button" @click="show=!show"><?php echo e($label); ?>


        <svg class="size-5" :class="show ? 'rotate-180' : 'rotate-0'" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 16L6 10H18L12 16Z"></path>
        </svg>
    </button>

    <div class="absolute top-full mt-2 w-full max-w-md divide-y rounded-md bg-white shadow-sm" style="display: none"
        x-show="show" x-transition>
        <?php if(isset($items)): ?>
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="block p-3" href="<?php echo e($item['link']); ?>"><?php echo e($item['label']); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\Projects\anupamatravels.in\src\views/p/dropdown.blade.php ENDPATH**/ ?>