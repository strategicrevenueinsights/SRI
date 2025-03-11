<!-- component -->
<header class=" bg-gray-200 sticky top-0 pt-2 z-50">
    <div class="header  flex  bg-white top-0 h-16  rounded-lg mx-2 max-sm:mx-0 border-2 shadow-navbarBoxShadow">
        <div class=" max-sm:w-4/5 max-sm:bg-white flex max-sm:block w-full content-center">
            <!-- logo -->
            <div class=" max-sm:w-full w-3/12  h-full  max-sm:content-center">
                <div class="max-sm:flex">
                    <a href="<?php echo e(url('/')); ?>">
                        <img class="w-full h-16 rounded-md max-sm:h-10" src="<?php echo e(asset('/asset/website/images/company_logo.png')); ?>"
                            alt="Strategic Revenue Insights" title="Strategic Revenue Insights">
                    </a>
                </div>
            </div>

            <!-- navigation -->
            <nav
                class="nav font-semibold text-lg w-full  content-center bg-white  max-sm:h-screen justify-items-center max-sm:hidden navbar">
                <div class="flex items-center gap-5 max-sm:grid max-sm:gap-2">
                    <div class="px-3 py-2 hover:bg-customBlue-500 hover:text-white hover:rounded-md hover:shadow-md">
                        <a class="block" href="<?php echo e(url('/')); ?>">Home</a>
                    </div>
                    <div class="px-3  hover:bg-customBlue-500  hover:rounded-md hover:shadow-md group hover:text-white">
                        
                        <p class="flex justify-between items-center space-2 pt-0">
                            Industry <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1 ml-1"
                                viewBox="0 0 24 24">
                                <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                            </svg>
                        </p>
                        
                        <div
                            class="group-hover:block hidden absolute  duration-300 py-4 hover:block text-gray-900  pt-3 mr-8 ">
                            <div class="shadow-md rounded-md bg-white ">
                                <div class="grid grid-cols-2 gap-1 p-2  max-sm:grid-cols-1">
                                    <?php $__currentLoopData = get_parent_categorys(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div
                                            class=" hover:bg-customBlue-500 hover:text-white px-2 py-1 hover:rounded-md">
                                            <a href="<?php echo e(url('/category/' . $category->category_url)); ?>"
                                                class="parent_category max-sm:block ">
                                                <?php echo e($category->category_name); ?>

                                            </a>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="px-3 py-2 hover:bg-customBlue-500 hover:text-white hover:rounded-md hover:shadow-md">
                        <a class="block" href="<?php echo e(url('/contact_us')); ?>" rel="noindex nofollow">Contact</a>
                    </div>
                    <div class="px-3 py-2 hover:bg-customBlue-500 hover:text-white hover:rounded-md hover:shadow-md">
                        <a class="block" href=" <?php echo e(url('/about_us')); ?>" rel="noindex nofollow">About</a>
                    </div>
                </div>
            </nav>

            <!-- buttons --->
            

        </div>
        <div class="hidden max-sm:block content-center h-16">
            <button class="p-2 toggle_navbar "><i class="h-7 fa-solid fa-bars"></i></button>

        </div>


</header>
<?php /**PATH C:\xampp\htdocs\sri_website\resources\views/website/layout/navbar.blade.php ENDPATH**/ ?>