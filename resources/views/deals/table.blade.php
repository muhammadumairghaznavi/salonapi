<div class="table-responsive">
    <table class="table" id="deals-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Code</th>
        <th>Type</th>
        <th>Barcode Symbology</th>
        <th>Brand Id</th>
        <th>Category Id</th>
        <th>Unit Id</th>
        <th>Purchase Unit Id</th>
        <th>Sale Unit Id</th>
        <th>Cost</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Alert Quantity</th>
        <th>Promotion</th>
        <th>Promotion Price</th>
        <th>Starting Date</th>
        <th>Last Date</th>
        <th>Tax Id</th>
        <th>Tax Method</th>
        <th>Image</th>
        <th>File</th>
        <th>Is Variant</th>
        <th>Is Batch</th>
        <th>Is Diffprice</th>
        <th>Featured</th>
        <th>Product List</th>
        <th>Qty List</th>
        <th>Price List</th>
        <th>Product Details</th>
        <th>Is Active</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($deals as $deal)
            <tr>
                <td>{{ $deal->name }}</td>
            <td>{{ $deal->code }}</td>
            <td>{{ $deal->type }}</td>
            <td>{{ $deal->barcode_symbology }}</td>
            <td>{{ $deal->brand_id }}</td>
            <td>{{ $deal->category_id }}</td>
            <td>{{ $deal->unit_id }}</td>
            <td>{{ $deal->purchase_unit_id }}</td>
            <td>{{ $deal->sale_unit_id }}</td>
            <td>{{ $deal->cost }}</td>
            <td>{{ $deal->price }}</td>
            <td>{{ $deal->qty }}</td>
            <td>{{ $deal->alert_quantity }}</td>
            <td>{{ $deal->promotion }}</td>
            <td>{{ $deal->promotion_price }}</td>
            <td>{{ $deal->starting_date }}</td>
            <td>{{ $deal->last_date }}</td>
            <td>{{ $deal->tax_id }}</td>
            <td>{{ $deal->tax_method }}</td>
            <td>{{ $deal->image }}</td>
            <td>{{ $deal->file }}</td>
            <td>{{ $deal->is_variant }}</td>
            <td>{{ $deal->is_batch }}</td>
            <td>{{ $deal->is_diffPrice }}</td>
            <td>{{ $deal->featured }}</td>
            <td>{{ $deal->product_list }}</td>
            <td>{{ $deal->qty_list }}</td>
            <td>{{ $deal->price_list }}</td>
            <td>{{ $deal->product_details }}</td>
            <td>{{ $deal->is_active }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['deals.destroy', $deal->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('deals.show', [$deal->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('deals.edit', [$deal->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
