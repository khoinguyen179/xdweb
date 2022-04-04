<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?php echo $__env->make('web/layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<head>
    <style>
        @import  url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap');

        * {
            font-family: 'Comfortaa', cursive;
        }
    </style>
</head>
<body>
<div class="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="wrapper clearfix">
    <header id="navbar-spy" class="header header-1 header-transparent header-fixed">
        <?php echo $__env->make('web/layouts/menu/menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
    <!-- Page Title #1
    ============================================= -->
    <section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
        <div class="bg-section">
            <img src="../admin/assets/images/homepage/img1.jpg" alt="Background"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="title title-1 text-center">
                        <div class="title--content">
                            <div class="title--subtitle">June Food</div>
                            <div class="title--heading">
                                <h1>HEALTHY FOOD</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>

    <section id="blog2" class="blog pb-100">
        <form class="container-fluid" action="<?php echo e(route('orders.store')); ?>" method="POST"
              enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="col-lg-12">
                <div class="form-group">
                    <label>Tên người đặt</label>
                    <input type="text" name="name"
                           class="form-control"
                           placeholder="">
                </div>
                <div class="form-group">
                    <label>Địa chỉ nhận hàng</label>
                    <input name="address"
                           class="form-control"
                           placeholder="">
                    </input>
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input name="phone"
                           class="form-control"
                           placeholder="">
                    </input>
                </div>
                <div class="form-group">
                    <label>Ghi chú</label>
                    <input name="note"
                           class="form-control"
                           placeholder="">
                    </input>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Đặt món ăn: </label>
                    <div class="product">
                        <select class="form-control" name="product">
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($product->name); ?>" selected><?php echo e($product->name); ?> - <?php echo e($product->cost); ?>

                                    VNĐ
                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Số lượng: </label>
                    <div class="product">
                        <input name="quantity" type="text" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card-body">
                    <button type="submit" class="btn btn-blue btn-square waves-effect waves-light px-4 mt-3 mb-3">
                        <i class="mdi mdi-check-all mr-2"></i>Đặt hàng
                    </button>
                    <a href="<?php echo e(route('homes')); ?>">
                        <button type="button"
                                class="btn btn-danger ml-2 px-4 mb-3 mt-3"><i class="fas fa-window-close"></i>
                            Hủy bỏ
                        </button>
                    </a>
                </div>
            </div>
        </form>
    </section>
    <!-- #blog end -->
    <?php echo $__env->make('web/layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php echo $__env->make('web/layouts/script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Users\ntnng\Desktop\web\web\resources\views/order/index.blade.php ENDPATH**/ ?>