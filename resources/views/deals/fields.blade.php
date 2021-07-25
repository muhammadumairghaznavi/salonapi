<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code', 'Code:') !!}
    {!! Form::text('code', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Barcode Symbology Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barcode_symbology', 'Barcode Symbology:') !!}
    {!! Form::text('barcode_symbology', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Brand Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brand_id', 'Brand Id:') !!}
    {!! Form::number('brand_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Unit Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unit_id', 'Unit Id:') !!}
    {!! Form::number('unit_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Purchase Unit Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('purchase_unit_id', 'Purchase Unit Id:') !!}
    {!! Form::number('purchase_unit_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Sale Unit Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sale_unit_id', 'Sale Unit Id:') !!}
    {!! Form::number('sale_unit_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cost', 'Cost:') !!}
    {!! Form::text('cost', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Qty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qty', 'Qty:') !!}
    {!! Form::number('qty', null, ['class' => 'form-control']) !!}
</div>

<!-- Alert Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alert_quantity', 'Alert Quantity:') !!}
    {!! Form::number('alert_quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Promotion Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('promotion', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('promotion', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('promotion', 'Promotion', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Promotion Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('promotion_price', 'Promotion Price:') !!}
    {!! Form::text('promotion_price', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Starting Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('starting_date', 'Starting Date:') !!}
    {!! Form::text('starting_date', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>

<!-- Last Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_date', 'Last Date:') !!}
    {!! Form::text('last_date', null, ['class' => 'form-control','id'=>'last_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#last_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Tax Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tax_id', 'Tax Id:') !!}
    {!! Form::number('tax_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tax Method Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tax_method', 'Tax Method:') !!}
    {!! Form::number('tax_method', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::textarea('image', null, ['class' => 'form-control']) !!}
</div>

<!-- File Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file', 'File:') !!}
    {!! Form::text('file', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Is Variant Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('is_variant', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('is_variant', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('is_variant', 'Is Variant', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Is Batch Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('is_batch', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('is_batch', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('is_batch', 'Is Batch', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Is Diffprice Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('is_diffPrice', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('is_diffPrice', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('is_diffPrice', 'Is Diffprice', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Featured Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('featured', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('featured', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('featured', 'Featured', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Product List Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_list', 'Product List:') !!}
    {!! Form::text('product_list', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Qty List Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qty_list', 'Qty List:') !!}
    {!! Form::text('qty_list', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Price List Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price_list', 'Price List:') !!}
    {!! Form::text('price_list', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Product Details Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('product_details', 'Product Details:') !!}
    {!! Form::textarea('product_details', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Active Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('is_active', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('is_active', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('is_active', 'Is Active', ['class' => 'form-check-label']) !!}
    </div>
</div>
