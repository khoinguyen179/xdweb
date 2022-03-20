
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-3">
                <div class="card-body shadow-lg bg-white rounded">
                    <form action="<?php echo e(route('categories.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Tên loại món ăn</label>
                            <div class="input-group">
                                <input type="text" id="example-input1-group1" name="name" class="form-control"
                                       value="<?php echo e(old('name')); ?>"
                                       placeholder="Tên loại món ăn muốn thêm">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary px-4 mt-3 mb-3"><i class="mdi
                        mdi-plus-circle-outline mr-2"></i><?php echo e(trans('site.button_add')); ?></button>
                        <a href="<?php echo e(route('categories.index')); ?>"><button type="button" class="btn btn-danger ml-2
                    px-4 mb-3 mt-3"><i class="fas fa-window-close"></i> <?php echo e(trans('site.reset')); ?> </button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\OneDrive\Desktop\web (1)\resources\views/admin/categories/add-category.blade.php ENDPATH**/ ?>