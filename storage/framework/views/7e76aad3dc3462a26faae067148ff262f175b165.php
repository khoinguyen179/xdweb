
<?php $__env->startSection('stylesheet'); ?>
    <link href="<?php echo e(asset('admin/assets/plugins/select2/select2.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('admin/assets/scss/_form-advanced.scss')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form class="container-fluid" action="<?php echo e(route('products.store')); ?>" method="POST"
          enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="col-lg-12">
            <div class="card mt-3">
                <div class="card-body">
                    <p class="text-uppercase font-14"><?php echo e(trans('site.main_content')); ?></p>
                    <div class="tab-content detail-list pro-order-box" id="pills-tabContent">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Tên món ăn</label>
                                    <div class="input-group">
                                        <input type="text" name="name"
                                               class="form-control name"
                                               placeholder="<?php echo e(trans('site.blog.category.name')); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Chi tiết món ăn</label>
                                    <div class="input-group">
                                                    <textarea name="detail" rows="7"
                                                              class="form-control"
                                                              placeholder="<?php echo e(trans('site.blog.category.detail')); ?>">
                                                    </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Giá</label>
                                    <div class="input-group">
                                        <input name="cost" rows="7"
                                               class="form-control"
                                               placeholder="Giá món ăn">
                                        </input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Loại món ăn: </label>
                                    <div class="categories">
                                        <select class="form-control" name="category_id" id="category">
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card mt-3">
                <div class="card-body">
                    <p class="text-uppercase font-14"><?php echo e(trans('site.image')); ?></p>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="image" id="image" readonly/>
                                <button type="button" data-avatar="image"
                                        class="btn btn-blue btn-square waves-effect waves-light px-4 mt-3 mb-3 get_image">
                                    <?php echo e(trans('site.button_choose')); ?>

                                </button>
                                <button type="button" data-avatar="image" disabled='disabled'
                                        class="btn btn-danger btn-square waves-effect waves-light px-4 mt-3 mb-3 ml-3 remove_image">
                                    <?php echo e(trans('site.button_remove')); ?>

                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img id="image_avatar" src="<?php echo e(asset('admin/assets/images/no_img.jpg')); ?>"/>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-blue btn-square waves-effect waves-light px-4 mt-3 mb-3">
                        <i class="mdi mdi-check-all mr-2"></i><?php echo e(trans('site.button_add')); ?></button>
                    <a href="<?php echo e(route('products.index')); ?>">
                        <button type="button"
                                class="btn btn-danger ml-2 px-4 mb-3 mt-3"><i class="fas fa-window-close"></i>
                            <?php echo e(trans('site.reset')); ?>

                        </button>
                    </a>
                </div>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('admin/assets/plugins/select2/select2.min.js')); ?>"></script>

    <script src="<?php echo e(asset('admin/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/editor.js')); ?>"></script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ntnng\Desktop\web\web\resources\views/admin/products/add-product.blade.php ENDPATH**/ ?>