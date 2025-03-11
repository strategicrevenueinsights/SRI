<div class="max-w-sm !max-h-[600px] rounded overflow-hidden shadow-xl  hover:shadow-2xl mb-4 bg-white">
    <a href="<?php echo e($reportUrl); ?>">
        <img class="lazy !h-36 w-full object-cover transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-105"
            src="<?php echo e($reportImageUrl); ?>" alt="<?php echo e($imageAlt); ?>"  loading="lazy" />
        <div class="px-4 ">
            <h2 class="text-blue-500 line-clamp-2 text-lg max-sm:text-base"><?php echo e($title); ?></h2>
            <p class="line-clamp-5 text-gray-700  max-sm:text-left">
                 <?php echo e(str_replace(['&amp;', ','], ['&', ', '], $sortDescription)); ?>

            </p>
        </div>
    </a>
    <div class=" max-sm:px-1 flex justify-center">
        <span
            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> 
              <i class="fa-solid fa-calendar-days"></i> <?php echo e(date('M-Y',strtotime($date))); ?> </span>
        <a href="<?php echo e($reportUrl); ?>"><span
            class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Read More...</span></a>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\sri_website\resources\views/components/releted-reports-card.blade.php ENDPATH**/ ?>