<!-- Name Field -->
<div class="col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <p><?php echo e($service->name); ?></p>
</div>

<!-- Code Field -->
<div class="col-sm-6">
    <?php echo Form::label('code', 'Code:'); ?>

    <p><?php echo e($service->code); ?></p>
</div>

<!-- Type Field -->
<div class="col-sm-6">
    <?php echo Form::label('type', 'Type:'); ?>

    <p><?php echo e($service->type); ?></p>
</div>


<!-- Category Id Field -->
<div class="col-sm-6">
    <?php echo Form::label('category_id', 'Category Id:'); ?>

    <p><?php echo e($service->category_id); ?></p>
</div>

<!-- Price Field -->
<div class="col-sm-6">
    <?php echo Form::label('price', 'Price:'); ?>

    <p><?php echo e($service->price); ?></p>
</div>


<!-- Promotion Field -->
<div class="col-sm-6">
    <?php echo Form::label('promotion', 'Promotion:'); ?>

    <p><?php echo e($service->promotion); ?></p>
</div>

<!-- Promotion Price Field -->
<div class="col-sm-6">
    <?php echo Form::label('promotion_price', 'Promotion Price:'); ?>

    <p><?php echo e($service->promotion_price); ?></p>
</div>

<!-- Starting Date Field -->
<div class="col-sm-6">
    <?php echo Form::label('starting_date', 'Starting Date:'); ?>

    <p><?php echo e($service->starting_date); ?></p>
</div>

<!-- Last Date Field -->
<div class="col-sm-6">
    <?php echo Form::label('last_date', 'Last Date:'); ?>

    <p><?php echo e($service->last_date); ?></p>
</div>



<!-- Image Field -->
<div class="col-sm-6">
    <?php echo Form::label('image', 'Image:'); ?>

    <p><img src="<?php echo e($service->image); ?>" alt=""></p>
</div>

<!-- Is Diffprice Field -->
<div class="col-sm-6">
    <?php echo Form::label('is_diffPrice', 'Is Diffprice:'); ?>

    <p><?php echo e($service->is_diffPrice); ?></p>
</div>

<!-- Featured Field -->
<div class="col-sm-6">
    <?php echo Form::label('featured', 'Featured:'); ?>

    <p><?php echo e($service->featured); ?></p>
</div>

<!-- Product Details Field -->
<div class="col-sm-6">
    <?php echo Form::label('product_details', 'Product Details:'); ?>

    <p><?php echo $service->product_details; ?></p>
</div>

<!-- Is Active Field -->
<div class="col-sm-6">
    <?php echo Form::label('is_active', 'Is Active:'); ?>

    <p><?php echo e($service->is_active); ?></p>
</div>
<div class="col-sm-6">
    <?php echo Form::label('material_used', 'Material Used:'); ?>

    <p><?php echo e($service->material_used); ?></p>
</div>

<div class="col-sm-12">

    <table class="table">
        <thead>
            <td></td>
            <td>Material Name</td>
            <td>Price</td>
        </thead>
        <tbody>
            <?php if(!empty($serviceMaterials)): ?>
                <?php $__currentLoopData = $serviceMaterials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <label for="">
                                <?php echo Form::checkbox('serviceMaterials', $item->id, ['class' => 'name', 'disabled']); ?>

                            </label>
                        </td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->price); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php /**PATH D:\xampp\htdocs\salonapi\resources\views/services/show_fields.blade.php ENDPATH**/ ?>