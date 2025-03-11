
<?php $__env->startSection('content'); ?>
    <div
        class="py-16 z-50  max-w-full bg-cover bg-gray-200 bg-center bg-no-repeat flex justify-center items-center  tracking-wide">
        <div class="heading text-center grid gap-14 max-md:gap-10 max-sm:gap-8 max-sm:px-2 px-8 ">
            <h1 data-aos="fade-right" class=" text-6xl max-sm:text-2xl font-poppins max-sm:leading-[40px]">Targeted <span class="text-blue-900">
                    Market Insights
                </span>And <span class="text-blue-900 ">Strategic Advisory</span></h1>

            <h2 data-aos="fade-left" class=" text-3xl max-sm:text-xl space-y-4 max-sm:leading-[35px]">
                Comprehensive coverage with <span
                    class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-pink-500 relative inline-block">
                    <span class="relative text-white">50000+</span>
                </span> reports spanning over 100 industry segments.
            </h2>
            <form action="<?php echo e(url('search')); ?>" method="get">
                <div class="justify-between text-center">
                    <div class="relative max-sm:w-full w-1/2 inline-flex h-16 ">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none ">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 search_svg" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>


                            <svg class="search_spinner hidden" xmlns="http://www.w3.org/2000/svg" width="25"
                                height="25" viewBox="0 0 200 200" fill="none" color="#3f51b5">
                                <defs>
                                    <linearGradient id="spinner-secondHalf">
                                        <stop offset="0%" stop-opacity="0" stop-color="currentColor" />
                                        <stop offset="100%" stop-opacity="0.5" stop-color="currentColor" />
                                    </linearGradient>
                                    <linearGradient id="spinner-firstHalf">
                                        <stop offset="0%" stop-opacity="1" stop-color="currentColor" />
                                        <stop offset="100%" stop-opacity="0.5" stop-color="currentColor" />
                                    </linearGradient>
                                </defs>

                                <g stroke-width="8">
                                    <path stroke="url(#spinner-secondHalf)" d="M 4 100 A 96 96 0 0 1 196 100" />
                                    <path stroke="url(#spinner-firstHalf)" d="M 196 100 A 96 96 0 0 1 4 100" />

                                    <!-- highlight-start -->
                                    <!-- 1deg extra path to have the round end cap -->
                                    <path stroke="currentColor" stroke-linecap="round" d="M 4 100 A 96 96 0 0 1 4 98" />
                                    <!-- highlight-end -->
                                </g>

                                <!-- highlight-start -->
                                <animateTransform from="0 0 0" to="360 0 0" attributeName="transform" type="rotate"
                                    repeatCount="indefinite" dur="1300ms" />
                                <!-- highlight-end -->
                            </svg>



                        </div>
                        <input type="search" id="report_global_search" name="search"
                            class="block  w-full p-4 ps-10 text-sm text-customBlue-600 border border-gray-300  rounded-full bg-white focus:outline-none focus:border-customBlue-500 focus:ring-skbluey-500 focus:ring-1 sm:text-sm"
                            placeholder="Search market name, category..." required />
                        <button type="submit" id="search_btn"
                            class="text-white absolute end-2.5 bottom-2.5 bg-customBlue-600 hover:bg-customBlue-300 focus:ring-4 focus:outline-none focus:ring-customBlue-300 font-medium rounded-full  text-lg px-5 py-2 max-sm:px-2 ">
                            <span class="max-sm:hidden">Search</span>
                            <i class="max-sm:block hidden fa-solid fa-search p-[6px]"></i>
                        </button>

                    </div>
                </div>
            </form>

        </div>
    </div>

    
    <div class=" text-center justify-between pb-8 our_clients bg-white" data-aos="fade-up">
        <h3 class="text-3xl max-sm:text-2xl font-bold  py-8 uppercase">Our clients</h3>
        <!-- Additional required wrapper -->
        <div class="swiper our_client_swiper">
            <div class="swiper-wrapper">
                <!-- Slides -->

                <div class="swiper-slide">
                    <img src="<?php echo e(asset('/website/our_clients/img-2.png')); ?>"
                        class="img-fluid h-20 w-44 max-sm:h-10 max-sm:w-32 max-md:h-12 max-md:w-36  rounded-circle"
                        alt="image1">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo e(asset('/website/our_clients/img-3.png')); ?>"
                        class="img-fluid h-20 w-44 max-sm:h-10 max-sm:w-32 max-md:h-12 max-md:w-36  rounded-circle"
                        alt="image1">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo e(asset('/website/our_clients/img-4.png')); ?>"
                        class="img-fluid h-20 w-44 max-sm:h-10 max-sm:w-32 max-md:h-12 max-md:w-36  rounded-circle"
                        alt="image1">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo e(asset('/website/our_clients/img-5.png')); ?>"
                        class="img-fluid h-20 w-44 max-sm:h-10 max-sm:w-32 max-md:h-12 max-md:w-36  rounded-circle"
                        alt="image1">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo e(asset('/website/our_clients/img-6.png')); ?>"
                        class="img-fluid h-20 w-44 max-sm:h-10 max-sm:w-32 max-md:h-12 max-md:w-36  rounded-circle"
                        alt="image1">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo e(asset('/website/our_clients/img-7.png')); ?>"
                        class="img-fluid  h-20 w-44 max-sm:h-10 max-sm:w-32 max-md:h-12 max-md:w-36 rounded-circle"
                        alt="image1">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo e(asset('/website/our_clients/img-8.png')); ?>"
                        class="img-fluid  h-20 w-44 max-sm:h-24 max-sm:w-32 max-md:h-12 max-md:w-36 rounded-circle"
                        alt="image1">
                </div>

            </div>
        </div>
    </div>

    
    <div class=" text-center justify-between   px-10 max-md:px-8 max-sm:px-4">
        <h2 class=" text-3xl max-md:text-xl text-center justify-between uppercase  text-gray-700 mt-16 "
            data-aos="fade-up">Latest reports</h2>
        <div class="flex justify-center gap-1  " data-aos="fade-up">
            <div class="swiper releted_reports_slider">
                <div class="swiper-wrapper  !my-10">
                    <?php $__currentLoopData = $latest_report; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <?php if (isset($component)) { $__componentOriginal94b5e65693cd630972f375f61f6a986b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal94b5e65693cd630972f375f61f6a986b = $attributes; } ?>
<?php $component = App\View\Components\ReletedReportsCard::resolve(['reportImageUrl' => ''.e(url('/' . $report->thumbnail)).'','reportUrl' => ''.e(url('industry/' . $report->report_url)).'','title' => ''.e($report->report_title).'','sortDescription' => ''.e($report->h1_long_title).'','imageAlt' => ''.e($report->thumbnail_alt).'','date' => ''.e($report->is_published_date).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('releted-reports-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ReletedReportsCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal94b5e65693cd630972f375f61f6a986b)): ?>
<?php $attributes = $__attributesOriginal94b5e65693cd630972f375f61f6a986b; ?>
<?php unset($__attributesOriginal94b5e65693cd630972f375f61f6a986b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal94b5e65693cd630972f375f61f6a986b)): ?>
<?php $component = $__componentOriginal94b5e65693cd630972f375f61f6a986b; ?>
<?php unset($__componentOriginal94b5e65693cd630972f375f61f6a986b); ?>
<?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </div>

    <div class="w-full text-center py-5">
        <a href="<?php echo e(url('/latest_reports')); ?>" type="button" rel="noindex nofollow"
            class="px-5 py-2 bg-customBlue-600 text-white rounded-md shadow-md hover:bg-customBlue-400 justify-self-center text-xl font-semibold">
            Browse Latest Reports</a>
    </div>

    
    <div class="w-full py-16 my-5 max-md:py-8 bg-gradient-to-r from-customBlue-400 to-customBlue-200  ">
        <div class="container justify-self-center">
            <div class="grid grid-cols-2 gap-5 justify-around max-md:grid-cols-1">
                <div>
                    <h2 class="ppercase text-center text-white">Why us? The SRI Advantage</h2>
                    <div class="text-white  text-base font-medium max-sm:text-center">
                        <p>
                            Strategic Revenue Insights ensures precise insights, actionable strategies, and timely delivery
                            to
                            keep your business ahead. Partner with us for results you can rely on.</p>
                        <p>
                            With Strategic Revenue Insights, receive expert market analysis and customized strategies,
                            delivered on time to empower your critical decisions.</p>
                        <p>
                            At Strategic Revenue Insights, we promise comprehensive insights and impactful strategies,
                            delivered seamlessly to help you navigate and lead in your market.</p>
                    </div>

                </div>
                <div class=" text-white content-center">
                    <div class="swiper why_choose_us_slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="p-3 max-w-sm rounded-md bg-no-repeat bg-cover object-fill  "
                                    style="background-image: url(<?php echo e(url('/asset/website/images/card_bg-1.png')); ?>)">
                                    <h2 class="py-4 text-lg font-semibold text-white">Flash Delivery </h2>
                                    <p class="text-justify">With our vast database of market intelligence and an
                                        ever-growing
                                        network of
                                        experts across the
                                        value chain, we make sure you get top-notch solutions with swift turnarounds that
                                        suit
                                        your
                                        deadlines.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-3  max-w-sm rounded-md bg-no-repeat bg-cover object-fill"
                                    style="background-image: url(<?php echo e(url('/asset/website/images/card_bg-1.png')); ?>)">
                                    <h2 class="py-4 text-lg font-semibold text-white">Strategic Location </h2>
                                    <p class="text-justify">We believe our location in India is of strategic advantage to
                                        you.
                                        Without the
                                        overheads of other
                                        firms, we can get you intelligence at the level of accuracy you deserve, at a
                                        significantly
                                        lower cost to your organization. </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-3  max-w-sm rounded-md bg-no-repeat bg-cover object-fill"
                                    style="background-image: url(<?php echo e(url('/asset/website/images/card_bg-1.png')); ?>)">
                                    <h2 class="py-4 text-lg font-semibold text-white">Distributed Expertise </h2>
                                    <p class="text-justify">No organization can seemingly hire all the necessary expertise
                                        to
                                        answer every
                                        business problem.
                                        We
                                        realize this challenge and turn it into our advantage by using a distributed
                                        expertise
                                        model.
                                    </p>
                                </div>
                            </div>
                            </divv>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class=" text-center justify-between  px-10 max-md:px-8 max-sm:px-4">
        <h2 class=" text-3xl max-md:text-xl text-center justify-between uppercase  text-gray-700 mt-16 "
            data-aos="fade-up">Top Industry reports
        </h2>
        <div class="flex justify-center gap-3  " data-aos="fade-up">
            <div class="swiper releted_reports_slider">
                <div class="swiper-wrapper  !mt-10">
                    <?php $__currentLoopData = $top_industry_reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <?php if (isset($component)) { $__componentOriginal94b5e65693cd630972f375f61f6a986b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal94b5e65693cd630972f375f61f6a986b = $attributes; } ?>
<?php $component = App\View\Components\ReletedReportsCard::resolve(['reportImageUrl' => ''.e(url('/' . $report->thumbnail)).'','reportUrl' => ''.e(url('industry/' . $report->report_url)).'','title' => ''.e($report->report_title).'','sortDescription' => ''.e($report->h1_long_title).'','imageAlt' => ''.e($report->thumbnail_alt).'','date' => ''.e($report->is_published_date).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('releted-reports-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ReletedReportsCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal94b5e65693cd630972f375f61f6a986b)): ?>
<?php $attributes = $__attributesOriginal94b5e65693cd630972f375f61f6a986b; ?>
<?php unset($__attributesOriginal94b5e65693cd630972f375f61f6a986b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal94b5e65693cd630972f375f61f6a986b)): ?>
<?php $component = $__componentOriginal94b5e65693cd630972f375f61f6a986b; ?>
<?php unset($__componentOriginal94b5e65693cd630972f375f61f6a986b); ?>
<?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="w-full text-center py-5">
        <a href="<?php echo e(url('/top_industry_reports')); ?>" type="button" rel="noindex nofollow"
            class="px-5 text-xl max-sm:text-lg max-sm:px-1 py-2 bg-customBlue-600 text-white rounded-md shadow-md hover:bg-customBlue-400 justify-self-center  font-semibold">
            Browse More Top Industry Reports</a>
    </div>

    <script src="<?php echo e(asset('asset/website/js/jquery-ui.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $("#report_global_search").autocomplete({
                source: function(request, response) {
                    $.ajax({
                        type: 'POST',
                        url: "<?php echo e(url('/global_search_autocomplete')); ?>",
                        dataType: "json",
                        data: {
                            search_keyword: request.term,
                            _token: "<?php echo e(csrf_token()); ?>"
                        },
                        beforeSend: function() {
                            $('.search_svg').hide();
                            $('.search_spinner').show();
                        },
                        success: function(resp) {
                            if (resp.status) {
                                let keywords = resp.data.data.map(item => ({
                                    label: `<a href="<?php echo e(url('/')); ?>/industry/${encodeURIComponent(item.report_url)}">${item.keyword}</a>`,
                                    value: item.keyword,
                                    url: `<?php echo e(url('/industry/')); ?>/${encodeURIComponent(item.report_url)}` // Custom URL for redirection
                                }));
                                response(keywords);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                            $('.search_svg').show();
                            $('.search_spinner').hide();
                        },
                        complete: function() {
                            $('.search_svg').show();
                            $('.search_spinner').hide();
                        }
                    });
                },
                minLength: 2,
                focus: function(event, ui) {
                    event.preventDefault(); // Prevent value from updating on focus
                },
                select: function(event, ui) {
                    window.open(ui.item.url, "_blank"); // Open in a new tab
                    return false;
                }
            }).autocomplete("instance")._renderItem = function(ul, item) {
                return $("<li>")
                    .append(`<div>${item.value}</div>`)
                    .appendTo(ul);
            };

        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website/layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sri_website\resources\views/website/home.blade.php ENDPATH**/ ?>