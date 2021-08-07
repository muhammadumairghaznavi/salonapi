<!-- Name Field -->
<div class="col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $service->name }}</p>
</div>

<!-- Code Field -->
<div class="col-sm-6">
    {!! Form::label('code', 'Code:') !!}
    <p>{{ $service->code }}</p>
</div>

<!-- Type Field -->
<div class="col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $service->type }}</p>
</div>


<!-- Category Id Field -->
<div class="col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $service->category_id }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $service->price }}</p>
</div>


<!-- Promotion Field -->
<div class="col-sm-6">
    {!! Form::label('promotion', 'Promotion:') !!}
    <p>{{ $service->promotion }}</p>
</div>

<!-- Promotion Price Field -->
<div class="col-sm-6">
    {!! Form::label('promotion_price', 'Promotion Price:') !!}
    <p>{{ $service->promotion_price }}</p>
</div>

<!-- Starting Date Field -->
<div class="col-sm-6">
    {!! Form::label('starting_date', 'Starting Date:') !!}
    <p>{{ $service->starting_date }}</p>
</div>

<!-- Last Date Field -->
<div class="col-sm-6">
    {!! Form::label('last_date', 'Last Date:') !!}
    <p>{{ $service->last_date }}</p>
</div>



<!-- Image Field -->
<div class="col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    <p><img src="{{ $service->image }}" alt=""></p>
</div>

<!-- Is Diffprice Field -->
<div class="col-sm-6">
    {!! Form::label('is_diffPrice', 'Is Diffprice:') !!}
    <p>{{ $service->is_diffPrice }}</p>
</div>

<!-- Featured Field -->
<div class="col-sm-6">
    {!! Form::label('featured', 'Featured:') !!}
    <p>{{ $service->featured }}</p>
</div>

<!-- Product Details Field -->
<div class="col-sm-6">
    {!! Form::label('product_details', 'Product Details:') !!}
    <p>{!! $service->product_details !!}</p>
</div>

<!-- Is Active Field -->
<div class="col-sm-6">
    {!! Form::label('is_active', 'Is Active:') !!}
    <p>{{ $service->is_active }}</p>
</div>
<div class="col-sm-6">
    {!! Form::label('material_used', 'Material Used:') !!}
    <p>{{ $service->material_used }}</p>
</div>

<div class="col-sm-12">

    <table class="table">
        <thead>
            <td></td>
            <td>Material Name</td>
            <td>Price</td>
        </thead>
        <tbody>
            @if (!empty($serviceMaterials))
                @foreach ($serviceMaterials as $item)
                    <tr>
                        <td>
                            <label for="">
                                {!! Form::checkbox('serviceMaterials', $item->id, ['class' => 'name', 'disabled']) !!}
                            </label>
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
