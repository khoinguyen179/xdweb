
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="page-title-box">
                <div class="float-right">
                    <a class="btn btn-primary float-right" href="<?php echo e(route('products.create')); ?>"><?php echo e(trans('site.add')); ?></a>
                </div>
                <h4 class="page-title">Danh sách món ăn</h4>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th data-priority="1">Hình ảnh</th>
                                    <th data-priority="1">Tên món ăn</th>
                                    <th data-priority="1">Chi tiết</th>
                                    <th data-priority="1">Giá</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><img src="<?php echo e(Sanitize::showImage($product->image)); ?>" width="100"/></td>
                                        <td><?php echo e($product->name); ?></td>
                                        <td><?php echo e($product->detail); ?></td>
                                        <td><?php echo e($product->cost); ?></td>
                                        <td class="text-right">
                                            <form class="float-right" action="<?php echo e(route('products.destroy', $product->id)); ?>"
                                                  method="POST">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-xs btn-danger"><i class="fas
												fa-trash"></i></button>
                                            </form>
                                            <div class="float-right">
                                                <a class="btn btn-xs btn-primary mr-3" href="<?php echo e(route('products.edit', $product->id)); ?>">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\OneDrive\Desktop\web (2)\resources\views/admin/products/index.blade.php ENDPATH**/ ?>