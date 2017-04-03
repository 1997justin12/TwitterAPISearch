<html>
    <head>
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/bootstrap.min.css')); ?>">
        <script type="text/javascript" src="<?php echo e(asset('/js/jquery-1.12.1.min.js')); ?>"></script>
        <script type="text/javascript" src ="<?php echo e(asset('/js/twitter-api.js')); ?>"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="col-sm-12" style="padding: 150px">
                     <?php echo $__env->yieldContent('content'); ?>
                </div>      
            </div>
        </div>
    </body>
</html>