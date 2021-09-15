@extends('layout.main') @section('content')

<section class="forms">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header mt-2">
                <h4 class="text-center">{{trans('file.Due Report')}}</h4>
            </div>
            {!! Form::open(['route' => 'report.dueByDate', 'method' => 'post']) !!}
            <div class="col-md-6 offset-md-3 mt-4 mb-3">
                <div class="form-group row">
                    <label class="d-tc mt-2"><strong>{{trans('file.Choose Your Date')}}</strong> &nbsp;</label>
                    <div class="d-tc">
                        <div class="input-group">
                            <input type="text" class="daterangepicker-field form-control"/>

                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">{{trans('file.submit')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="table-responsive mb-4">
        <table id="report-table" class="table table-hover">
            <thead>
                <tr>
                    <th class="not-exported"></th>
                    <th>{{trans('file.Date')}}</th>
                    <th>{{trans('file.reference')}}</th>
                    <th>{{trans('file.Customer Details')}}</th>
                    <th>{{trans('file.Paid')}}</th>
                    <th>{{trans('file.Due')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lims_sale_data as $key=>$sale_data)
                <tr>
                    <td>{{$key}}</td>
                    <td>{{date($general_setting->date_format, strtotime($sale_data->created_at->toDateString())) . ' '. $sale_data->created_at->toTimeString()}}</td>
                    <td>{{$sale_data->reference_no}}</td>
                    <?php
                        $customer = DB::table('customers')->find($sale_data->customer_id);
                    ?>
                    <td>{{$customer->name .' (' .$customer->phone_number . ')'}}</td>
                    @if($sale_data->paid_amount)
                    <td>{{number_format((float)$sale_data->paid_amount, 2, '.', '')}}</td>
                    @else
                    <td>0.00</td>
                    @endif
                    <td>{{number_format((float)($sale_data->grand_total - $sale_data->paid_amount), 2, '.', '')}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot class="tfoot active">
                <th></th>
                <th>{{trans('file.Total')}}:</th>
                <th></th>
                <th></th>
                <th>0.00</th>
                <th>0.00</th>
            </tfoot>
        </table>
    </div>
</section>
