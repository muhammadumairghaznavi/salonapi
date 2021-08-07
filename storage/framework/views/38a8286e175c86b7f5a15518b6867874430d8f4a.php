<?php $__env->startSection('content'); ?>
<section>
	<div class="container-fluid">
		<div class="card">

			<div class="card-body">

                <h5 class="card-title">Cleaning Chart</h5>
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
                                <td>Staff1</td>
                                <td>Staff2</td>
                                <td>Staff3</td>
                                <td>Staff4</td>
                                <td>Staff5</td>
                                <td>Staff6</td>
                                <td>Staff7</td>
                            </tr>
                        </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\salonapi\resources\views/schedules/cleaning.blade.php ENDPATH**/ ?>