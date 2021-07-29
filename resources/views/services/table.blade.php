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
        @foreach($services as $service)
            <tr>
                <td>{{ $service->name }}</td>
            <td>{{ $service->code }}</td>
            <td>{{ $service->type }}</td>
            <td>{{ $service->category->name }}</td>
            <td>{{ $service->unit_id }}</td>
            <td>{{ $service->price }}</td>
            <td>{{ $service->promotion }}</td>
            <td>{{ $service->promotion_price }}</td>
            <td>{{ $service->starting_date }}</td>
            <td>{{ $service->last_date }}</td>
            <td>{{ $service->image }}</td>
            <td>{{ $service->is_batch }}</td>
            <td>{{ $service->is_diffPrice }}</td>
            <td>{{ $service->featured }}</td>
            <td>{{ $service->is_active }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['services.destroy', $service->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('services.show', [$service->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('services.edit', [$service->id]) }}"
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
