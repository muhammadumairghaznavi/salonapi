<div class="table-responsive">
    <table class="table" id="service-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Code</th>
        <th>Type</th>
        <th>Category</th>
        <th>Unit</th>
        <th>Price</th>
        <th>Promotion</th>
        <th>Promotion Price</th>
        <th>Starting Date</th>
        <th>Last Date</th>
        <th>Image</th>
        <th>Is Batch</th>
        <th>Is Diffprice</th>
        <th>Featured</th>
        <th>Is Active</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($service->name); ?></td>
            <td><?php echo e($service->code); ?></td>
            <td><?php echo e($service->type); ?></td>
            <td><?php echo e($service->category->name); ?></td>
            <td><?php echo e($service->unit_id); ?></td>
            <td><?php echo e($service->price); ?></td>
            <td><?php echo e($service->promotion); ?></td>
            <td><?php echo e($service->promotion_price); ?></td>
            <td><?php echo e($service->starting_date); ?></td>
            <td><?php echo e($service->last_date); ?></td>
            <td><?php echo e($service->image); ?></td>
            <td><?php echo e($service->is_batch); ?></td>
            <td><?php echo e($service->is_diffPrice); ?></td>
            <td><?php echo e($service->featured); ?></td>
            <td><?php echo e($service->is_active); ?></td>
                <td width="120">
                    <?php echo Form::open(['route' => ['services.destroy', $service->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('services.show', [$service->id])); ?>"
                           class='btn btn-default btn-xs'>
                            <i class="fa fa-eye"></i>
                        </a>

                        <?php echo Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH D:\xampp\htdocs\salonapi\resources\views/services/table.blade.php ENDPATH**/ ?>