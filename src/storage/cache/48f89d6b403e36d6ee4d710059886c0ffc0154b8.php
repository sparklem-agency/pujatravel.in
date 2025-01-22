<?php
// Specify the folder path
$folderPath = $_SERVER['DOCUMENT_ROOT'] . '/public/images/galleries';

// Allowed file extensions for images and videos
$imageExtensions = ['jpg', 'jpeg', 'png', 'gif'];
$videoExtensions = ['mp4', 'webm', 'ogg'];

$scandir = scandir($folderPath);
// Scan the folder
$files = array_diff($scandir ? $scandir : [], ['.', '..']);

?>


<?php $__env->startSection('content'); ?>
    <h2 class="heading text-center mt-5">Gallery</h2>

    <div class="lg:columns-3 space-y-5 columns-1 max-w-6xl mx-auto p-5">
        <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $filePath = $folderPath . '/' . $file;
                $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            ?>

            <?php if(in_array($extension, $imageExtensions)): ?>
                <img src="<?php echo e(image_asset('galleries/' . $file)); ?>" alt="" class="w-full" srcset="">
            <?php endif; ?>

            <?php if(in_array($extension, $videoExtensions)): ?>
                <video width="320" height="240" controls class="w-full">
                    <source src="<?php echo e(image_asset('galleries/' . $file)); ?>">

                    Your browser does not support the video tag.
                </video>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\office_work\pujatravel.in\src\views/galleries.blade.php ENDPATH**/ ?>