<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('fontawesome/css/all.css')); ?>">
        
    </head>

    <body>
        <div class="menu">
            <div class="menu-item"  style="width:40%"><a href="<?php echo e(asset('/')); ?>">THE NOMALANGA TRIBE</a></div>
            <div class="menu-item"><a href="<?php echo e(asset('/')); ?>">HOME</a></div>
            <div class="menu-item"><a href="<?php echo e(asset('heal')); ?>">HEAL</a></div>
            <div class="menu-item"><a href="<?php echo e(asset('thrive')); ?>">THRIVE</a></div>
            <div class="menu-item"><a href="<?php echo e(asset('lab')); ?>">LAB</a></div>
            <div class="menu-item"><a href="<?php echo e(asset('shop')); ?>">SHOP</a></div>
            <div class="menu-item"><a href="<?php echo e(asset('about')); ?>">ABOUT US</a></div>
            <div class="menu-item"><a href="<?php echo e(asset('contact-us')); ?>">CONTACT US</a></div>
        </div>
    </body>

    <?php echo $__env->yieldContent('content'); ?>
</html><?php /**PATH /opt/lampp/htdocs/www/nomalanga/resources/views/layout/header-menu.blade.php ENDPATH**/ ?>