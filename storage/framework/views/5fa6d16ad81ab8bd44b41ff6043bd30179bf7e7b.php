<nav id="primary-menu" class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
            <ul class="nav navbar-nav nav-pos-right navbar-left">
                <!-- Home Menu -->
                <li class="has-dropdown mega-dropdown active">
                    <a href="<?php echo e(route('homes')); ?>">Trang chủ</a>
                </li>
                <li class="has-dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Danh sách món ăn</a>
                    <ul class="dropdown-menu">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(route('homecategories.show',$category->id)); ?>"><?php echo e($category->name); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
                <!-- li end -->













































                <!-- .module-cart end -->
                <!-- Module Search -->
                <li class="has-dropdown mega-dropdown active">
                    <a href="<?php echo e(route('orders.create')); ?>">Đặt hàng</a>
                </li>
                <div class="module module-search pull-left">
                    <div class="module-icon search-icon">
                        <i class="fa fa-search"></i>
                        <span class="title">search</span>
                    </div>
                    <div class="module-content module-fullscreen module--search-box">
                        <div class="pos-vertical-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                                        <form class="form-search" action="<?php echo e(route('searchs.index')); ?>" method="get">
                                            <input type="text" class="form-control"
                                                   placeholder="Tìm kiếm..." name="name">
                                            <button class="btn" type="button"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="module-cancel" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\ntnng\Desktop\web\web\resources\views/web/layouts/menu/menu.blade.php ENDPATH**/ ?>