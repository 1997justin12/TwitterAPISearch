<html>
    <head>
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/bootstrap.min.css')); ?>">
    </head>
    <body>
        <div class="row">
            <div class="col-sm-12 text-center">
                     <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </body>
</html>