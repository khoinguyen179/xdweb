<div class="left-sidenav">
    <ul class="metismenu left-sidenav-menu">







        <li class="<?php echo e((request()->is('admin/categories*')) ? 'mm-active' : ''); ?>">
            <a href="<?php echo e(route('categories.index')); ?>">
                <i class="	fas fa-bars"></i>
                <span>Quản lý loại món ăn</span>
            </a>
        </li>
        <li class="<?php echo e((request()->is('admin/products*')) ? 'mm-active' : ''); ?>">
            <a href="<?php echo e(route('products.index')); ?>">
                <i class="fas fa-hamburger"></i>
                <span>Quản lý món ăn</span>
            </a>
        </li>
                <li class="<?php echo e((request()->is('admin/products*')) ? 'mm-active' : ''); ?>">
                    <a href="<?php echo e(route('admin-orders.index')); ?>">
                        <i class="fa fa-building"></i>
                        <span>Quản lý đơn hàng</span>
                    </a>
                </li>

    </ul>
</div><?php /**PATH C:\Users\ADMIN\OneDrive\Desktop\web (2)\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>