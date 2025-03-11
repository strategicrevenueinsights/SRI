<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="copyright" content="Strategic Revenue Insights">
    <meta name="google-site-verification" content="_dYmsZv1n0kN166GE1XRcM6WpsRADrCz1jxVk_ZMzu0">
    <meta name="language" content="en-US" hreflang="en-US">
    <meta name="author" content="Strategic Revenue Insights">
    <link rel="canonical" href="<?php echo e(url()->current()); ?>" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo e(asset('asset/website/images/favicon1.png')); ?>">
    <?php if(isset($pageindexing) && $pageindexing == 'noindex'): ?>
        <meta name='robots' content='noindex, nofollow' />
    <?php else: ?>
        <meta name='robots' content='index, follow' />
    <?php endif; ?>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HYLLLX3DQZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HYLLLX3DQZ');
    </script>

    <?php if(!empty($meta_data)): ?>
        <title><?php echo e($meta_data['meta_title'] ?? ''); ?></title>
        <meta name="description" content="<?php echo e($meta_data['meta_description'] ?? ''); ?>">
    <?php else: ?>
        <title>Strategic Revenue Insights</title>
    <?php endif; ?>

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    
    <link href="<?php echo e(asset('/asset/website/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/asset/website/css/aos.css')); ?>" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo e(asset('/asset/website/css/swiper-bundle.min.css')); ?>" />
    
    <link rel="stylesheet" href="<?php echo e(asset('/asset/website/css/jquery-ui.css')); ?>" />
    <script src="<?php echo e(asset('/asset/website/js/jquery.min.js')); ?>"></script>

    <?php if(!empty($report_schema)): ?>
        <meta name="description" content="<?php echo e($report_schema['meta_desc']); ?>" />
        <meta property="og:title" content="<?php echo e($report_schema['report_title']); ?>" />
        <meta property="og:type" content="market research" />
        <meta property="og:url" content="<?php echo e(url()->current()); ?>" />
        <meta property="og:description" content="<?php echo e($report_schema['meta_desc']); ?>" />
        <meta property="og:image" content="<?php echo e($report_schema['thumbnail']); ?>" />

        
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "item": {
                            "@id": "https://www.strategicrevenueinsights.com/",
                            "name": "Home"
                        }
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "item": {
                            "@id": "https://www.strategicrevenueinsights.com/industry",
                            "name": "Industry"
                        }
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "item": {
                            "@id": "https://www.strategicrevenueinsights.com/industry",
                            "name": "<?php echo e($report_schema['category_name']); ?>"
                        }
                    },
                    {
                        "@type": "ListItem",
                        "position": 4,
                        "item": {
                            "@id": "https://www.strategicrevenueinsights.com/industry/<?php echo e($report_schema['report_url']); ?>",
                            "name": "<?php echo e($report_schema['report_title']); ?>"
                        }
                    }
                ]
            }
        </script>

        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "WebPage",
                "additionalType": "ResearchOrganization",
                "name": "<?php echo e($report_schema['report_title']); ?>",
                "description": "<?php echo e($report_schema['meta_desc']); ?>",
                "keywords": "<?php echo e($report_schema['report_title']); ?>",
                "url": "https://www.strategicrevenueinsights.com/industry/<?php echo e($report_schema['report_url']); ?>",
                "datePublished": "<?php echo e(date('Y-m-d',strtotime( $report_schema['created_at'] ))); ?>",
                "dateModified": "<?php echo e(date('Y-m-d',strtotime( $report_schema['is_published_date'] ))); ?>",
                "inLanguage": "en-US"
            }
        </script>
        <?php if(!empty($report->faq)): ?>
            <script type="application/ld+json">
                {
                        "@context": "https://schema.org",
                        "@type": "FAQPage",
                        "mainEntity": [                
                    <?php $__currentLoopData = $report_schema['faq']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question => $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                    {
                        "@type": "Question",
                        "name": "<?php echo e($question); ?>",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "<?php echo e($answer); ?>"
                            }
                    }<?php if(!$loop->last): ?>, <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    ]
                }
        </script>
        <?php endif; ?>
    <?php endif; ?>

    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "qeceo86qbx");
    </script>

    
</head>

<body class="tracking-wide no-scrollbar font-poppins bg-customWhite-50 ">

    <!--  Loader -->
    <div class="loader"></div>
    <?php if (isset($component)) { $__componentOriginaleec2d345182fe5da858d01d776a19b53 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleec2d345182fe5da858d01d776a19b53 = $attributes; } ?>
<?php $component = App\View\Components\CommonUserMessageModal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('common-user-message-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CommonUserMessageModal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleec2d345182fe5da858d01d776a19b53)): ?>
<?php $attributes = $__attributesOriginaleec2d345182fe5da858d01d776a19b53; ?>
<?php unset($__attributesOriginaleec2d345182fe5da858d01d776a19b53); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleec2d345182fe5da858d01d776a19b53)): ?>
<?php $component = $__componentOriginaleec2d345182fe5da858d01d776a19b53; ?>
<?php unset($__componentOriginaleec2d345182fe5da858d01d776a19b53); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\sri_website\resources\views/website/layout/header.blade.php ENDPATH**/ ?>