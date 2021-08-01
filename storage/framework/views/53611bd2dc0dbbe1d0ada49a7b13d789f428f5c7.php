<!-- Name Field -->
<div class="col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <p><?php echo e($deal->name); ?></p>
</div>

<!-- Code Field -->
<div class="col-sm-6">
    <?php echo Form::label('code', 'Code:'); ?>

    <p><?php echo e($deal->code); ?></p>
</div>

<!-- Type Field -->
<div class="col-sm-6">
    <?php echo Form::label('type', 'Type:'); ?>

    <p><?php echo e($deal->type); ?></p>
</div>


<!-- Category Id Field -->
<div class="col-sm-6">
    <?php echo Form::label('category_id', 'Category Id:'); ?>

    <p><?php echo e($deal->category_id); ?></p>
</div>

<!-- Price Field -->
<div class="col-sm-6">
    <?php echo Form::label('price', 'Price:'); ?>

    <p><?php echo e($deal->price); ?></p>
</div>


<!-- Promotion Field -->
<div class="col-sm-6">
    <?php echo Form::label('promotion', 'Promotion:'); ?>

    <p><?php echo e($deal->promotion); ?></p>
</div>

<!-- Promotion Price Field -->
<div class="col-sm-6">
    <?php echo Form::label('promotion_price', 'Promotion Price:'); ?>

    <p><?php echo e($deal->promotion_price); ?></p>
</div>

<!-- Starting Date Field -->
<div class="col-sm-6">
    <?php echo Form::label('starting_date', 'Starting Date:'); ?>

    <p><?php echo e($deal->starting_date); ?></p>
</div>

<!-- Last Date Field -->
<div class="col-sm-6">
    <?php echo Form::label('last_date', 'Last Date:'); ?>

    <p><?php echo e($deal->last_date); ?></p>
</div>



<!-- Image Field -->
<div class="col-sm-6">
    <?php echo Form::label('image', 'Image:'); ?>

    <p><img src="<?php echo e($deal->image); ?>" alt=""></p>
</div>

<!-- Is Diffprice Field -->
<div class="col-sm-6">
    <?php echo Form::label('is_diffPrice', 'Is Diffprice:'); ?>

    <p><?php echo e($deal->is_diffPrice); ?></p>
</div>

<!-- Featured Field -->
<div class="col-sm-6">
    <?php echo Form::label('featured', 'Featured:'); ?>

    <p><?php echo e($deal->featured); ?></p>
</div>

<!-- Product Details Field -->
<div class="col-sm-6">
    <?php echo Form::label('product_details', 'Product Details:'); ?>

    <p><?php echo $deal->product_details; ?></p>
</div>

<!-- Is Active Field -->
<div class="col-sm-6">
    <?php echo Form::label('is_active', 'Is Active:'); ?>

    <p><?php echo e($deal->is_active); ?></p>
</div>
<div class="col-sm-6">
    <?php echo Form::label('material_used', 'Material Used:'); ?>

    <p><?php echo e($deal->material_used); ?></p>
</div>

<div class="col-sm-12">

    <table class="table">
        <thead>
            <td></td>
            <td>Material Name</td>
            <td>Price</td>
        </thead>
        <tbody>
            <?php if(!empty($dealMaterials)): ?>
                <?php $__currentLoopData = $dealMaterials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <label for="">
                                <?php echo Form::checkbox('dealMaterials', $item->id, ['class' => 'name', 'disabled']); ?>

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
<?php /**PATH D:\xampp\htdocs\salonapi\resources\views/deals/show_fields.blade.php ENDPATH**/ ?>