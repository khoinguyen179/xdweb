<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Phoenix CMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Admin" name="description" />
        <meta content="Phoenix CMS" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo e(asset('admin/assets/images/logo.png')); ?>">
        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('admin/assets/plugins/morris/morris.css')); ?>">
        <!-- App css -->
        <link href="<?php echo e(asset('admin/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin/assets/css/icons.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin/assets/css/metisMenu.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin/assets/css/style.css?v='.$time)); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin/assets/css/tag-input.css')); ?>" rel="stylesheet" type="text/css" />
        <?php echo toastr_css(); ?>
        <script>var baseURL = '<?php echo e(asset('/')); ?>'</script>
        <?php echo $__env->yieldContent('stylesheet'); ?>
    </head>
<?php /**PATH C:\Users\ADMIN\OneDrive\Desktop\web (1)\resources\views/admin/layouts/header.blade.php ENDPATH**/ ?>