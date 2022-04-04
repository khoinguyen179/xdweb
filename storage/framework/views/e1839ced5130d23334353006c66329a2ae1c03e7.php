
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="page-title-box">
                <h4 class="page-title">Danh sách đơn đặt hàng</h4>
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
                                    <th></th>
                                    <th data-priority="1">Tên người đặt</th>
                                    <th data-priority="1">Địa chỉ</th>
                                    <th data-priority="1">SĐT</th>
                                    <th data-priority="1">Món ăn</th>
                                    <th data-priority="1">SL</th>
                                    <th data-priority="1">Ghi chú</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th><?php echo e($loop->iteration); ?></th>
                                        <td><?php echo e($order->name); ?></td>
                                        <td><?php echo e($order->address); ?></td>
                                        <td><?php echo e($order->phone); ?></td>
                                        <td><?php echo e($order->product); ?></td>
                                        <td><?php echo e($order->quantity); ?></td>
                                        <td><?php echo e($order->note); ?></td>
                                        <td class="text-right">
                                            <form class="float-right" action="<?php echo e(route('admin-orders.destroy', $order->id)); ?>"
                                                  method="POST">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-xs btn-danger"><i class="fas
												fa-trash"></i></button>
                                            </form>





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
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ntnng\Desktop\web\web\resources\views/admin/admin-order/index.blade.php ENDPATH**/ ?>