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
        @foreach($deals as $deal)
            <tr>
                <td>{{ $deal->name }}</td>
            <td>{{ $deal->code }}</td>
            <td>{{ $deal->type }}</td>
            <td>{{ $deal->category->name }}</td>
            <td>{{ $deal->unit_id }}</td>
            <td>{{ $deal->price }}</td>
            <td>{{ $deal->promotion }}</td>
            <td>{{ $deal->promotion_price }}</td>
            <td>{{ $deal->starting_date }}</td>
            <td>{{ $deal->last_date }}</td>
            <td>{{ $deal->image }}</td>
            <td>{{ $deal->is_batch }}</td>
            <td>{{ $deal->is_diffPrice }}</td>
            <td>{{ $deal->featured }}</td>
            <td>{{ $deal->is_active }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['deals.destroy', $deal->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('deals.show', [$deal->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="fa fa-eye"></i>
                        </a>
                        {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
