@extends('layout.main')
@section('content')
<section>
	<div class="container-fluid">
		<div class="card">

			<div class="card-body">

                <h5 class="card-title">Lunch Chart</h5>
				<div class="table-responsive mt-4">
					<table class="table table-bordered" style="border-top: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6;" id="my-table">

					    <thead>
						    <tr>
							    <th><strong>Sunday</strong></th>
							    <th><strong>Monday</strong></th>
							    <th><strong>Tuesday</strong></th>
							    <th><strong>Wednesday</strong></th>
							    <th><strong>Thrusday</strong></th>
							    <th><strong>Friday</strong></th>
							    <th><strong>Saturday</strong></th>
						    </tr>

					    </thead>
                        <tbody>
                            <tr>
                                <td>Dish1</td>
                                <td>Dish2</td>
                                <td>Dish3</td>
                                <td>Dish4</td>
                                <td>Dish5</td>
                                <td>Dish6</td>
                                <td>Dish7</td>
                            </tr>
                        </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection
