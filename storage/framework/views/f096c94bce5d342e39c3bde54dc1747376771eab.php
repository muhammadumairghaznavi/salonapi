<div class="table-responsive">
    <table class="table" id="deals-table">
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
        <?php $__currentLoopData = $deals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($deal->name); ?></td>
            <td><?php echo e($deal->code); ?></td>
            <td><?php echo e($deal->type); ?></td>
            <td><?php echo e($deal->category->name); ?></td>
            <td><?php echo e($deal->unit_id); ?></td>
            <td><?php echo e($deal->price); ?></td>
            <td><?php echo e($deal->promotion); ?></td>
            <td><?php echo e($deal->promotion_price); ?></td>
            <td><?php echo e($deal->starting_date); ?></td>
            <td><?php echo e($deal->last_date); ?></td>
            <td><?php echo e($deal->image); ?></td>
            <td><?php echo e($deal->is_batch); ?></td>
            <td><?php echo e($deal->is_diffPrice); ?></td>
            <td><?php echo e($deal->featured); ?></td>
            <td><?php echo e($deal->is_active); ?></td>
                <td width="120">
                    <?php echo Form::open(['route' => ['deals.destroy', $deal->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('deals.show', [$deal->id])); ?>"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="<?php echo e(route('deals.edit', [$deal->id])); ?>"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH D:\xampp\htdocs\salonapi\resources\views/deals/table.blade.php ENDPATH**/ ?>