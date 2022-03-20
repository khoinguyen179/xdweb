<div class="topbar">
    <div class="topbar-left">
        <a href="#" class="logo">
            <span>
                Trang quản trị
            </span>
        </a>
    </div>
    <nav class="navbar-custom">
        <ul class="list-unstyled topbar-nav float-right mb-0">
            <li class="hidden-sm">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript: void(0);" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <?php $__currentLoopData = $adminLangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(Config::get('app.locale') == $v->slug): ?>
                            <i class="em em-flag-<?php echo e($v->flag); ?>"></i><i class="mdi mdi-chevron-down"></i>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <?php $__currentLoopData = $adminLangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="dropdown-item" href="<?php echo route('admin.change-language', [$v->slug]); ?>">
                            <i class="em em-flag-<?php echo e($v->flag); ?>"></i>
                            <span><?php echo e($v->name); ?></span>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </li>













































            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">

                    <?php if(Auth::check()): ?>
                        <span class="ml-1 nav-user-name hidden-sm"> <?php echo e(Auth::User()->name); ?> <i class="mdi mdi-chevron-down"></i> </span>
                    <?php endif; ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right">



                    <a class="dropdown-item" href="<?php echo e(route('change_password')); ?>"><i class="dripicons-gear text-muted mr-2"></i>
                        <?php echo e(trans('site.admin.change_pass')); ?></a>
                    <div class="dropdown-divider"></div>
                    <form action="<?php echo e(route('admin.logout')); ?>" method="POST">
                             <?php echo e(csrf_field()); ?>

                        <button type="submit" class='btn btn-block dropdown-item'><i class="dripicons-exit text-muted
                         mr-2"></i> <?php echo e(trans('site.logout')); ?></button>
                    </form>
                </div>
            </li>
        </ul><!--end topbar-nav-->
        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="button-menu-mobile nav-link waves-effect waves-light">
                    <i class="dripicons-menu nav-icon"></i>
                </button>
            </li>
        </ul>
    </nav>
</div>
 <?php /**PATH C:\Users\ADMIN\OneDrive\Desktop\web (1)\resources\views/admin/layouts/topbar.blade.php ENDPATH**/ ?>