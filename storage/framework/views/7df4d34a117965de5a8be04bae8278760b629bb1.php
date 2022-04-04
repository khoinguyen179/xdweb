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
            <img src="admin/assets/images/homepage/img1.jpg" alt="Background"/>
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
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-1 mb-50 text--center">
                        <p class="heading--subtitle">June Food</p>
                        <h2 class="heading--title mb-0">Detail</h2>
                    </div>
                </div>

            </div>
            <!-- .row end -->
            <div class="row" >
                <div class="col-lg-12">
                    <div class="blog-entry">
                        <div class="entry--content">
                            <div class="row">
                                <div class="entry--img col-lg-4" >
                                    <a href="#">
                                        <img src="<?php echo e(Sanitize::showImage($product->image)); ?>" width="300"/>
                                    </a>
                                </div>
                                <div>
                                    <h4><a href=""><?php echo e($product->name); ?></a></h4>
                                </div>
                                <div class="entry--bio" style="font-size: 20px">
                                    <?php echo e($product->detail); ?>

                                </div>


                            </div>

                        </div>
                        
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mt-3" style="text-align: center">
                    <div style="font-size: 25px " class="large">
                        Giá:<?php echo e($product->cost); ?>

                    </div>
                    <div class="card-body" >
                        <button type="button" class="btn btn-success" style=" border-radius: 15px">Đặt hàng</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </section>
    <!-- #blog end -->
    <?php echo $__env->make('web/layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php echo $__env->make('web/layouts/script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Users\ADMIN\OneDrive\Desktop\web (2)\resources\views/web/detail.blade.php ENDPATH**/ ?>