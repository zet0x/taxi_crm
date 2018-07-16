@extends('layouts.template')

@section('content')


<div class="row">
	<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12">
		<div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ trans('auto/all.park') }}</h4>
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive">
                    <div class="dt-buttons">
                    	<a class="btn waves-effect waves-light btn-info" tabindex="0" aria-controls="example23" href="#"><span>CSV</span></a>
                    	<a class="btn waves-effect waves-light btn-info" tabindex="0" aria-controls="example23" href="#"><span>{{ trans('auto/all.print') }}</span></a>
                	</div>
                    <div id="example23_filter" class="dataTables_filter"><label>{{ trans('auto/all.search') }}:<input type="search" class="" placeholder="" aria-controls="example23"></label></div>
                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list footable-loaded footable" data-page-size="10" width="100%">
                        <thead>
                            <tr>
                            	<th class="footable-sortable">{{ trans('auto/all.id') }}<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">{{ trans('auto/all.mark') }}<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">{{ trans('auto/all.model') }}<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">{{ trans('auto/all.number') }}<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">{{ trans('auto/all.color') }}<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">{{ trans('auto/all.year') }}<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">{{ trans('auto/all.brand') }}<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable"><i class="mdi mdi-account-settings-variant"></i><span class="footable-sort-indicator"></span></th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($arResult['auto'] as $auto)
                            <tr class="footable-even" style="">
                                <td>
                                    @if($auto->src != null)
                                    <a href="javascript:void(0)"><img height="30px;" src="{{ config('app.url') }}/{{ $auto->src }}" alt="user" width="40" class="img-circle"></a>
                                    @else
                                    <a href="javascript:void(0)"><img height="30px;" src="{{ asset('public/profile_photo/white.jpg') }}" alt="user" width="40" class="img-circle"></a>
                                    @endif
                                </td>
                                <td>{{ $auto->mark }}</td>
                                <td>{{ $auto->model }}</td>
                                <td>{{ $auto->number }}</td>
                                <td>{{ $auto->color }}</td>
                                <td>{{ $auto->year }}</td>
                                <td>
                                	@if($auto->brand == 1)
                                		<span class="label label-info">{{ trans('auto/all.yes') }}</span>
                            		@else
                            			<span class="label label-danger">{{ trans('auto/all.no') }}</span>
                            		@endif
                            	</td>
                                <td width="20% text">
                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="{{ trans('auto/all.edit') }}"><i class="fa fa-link" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">
                                    <a href="{{ route('page.auto.main') }}" class="btn waves-effect waves-light btn-info" style="color:white;">{{ trans('auto/all.add') }}</a>
                                </td>
                                
                                <td colspan="7">
                                    <div class="text-right">
                                        <ul style="float: right;" class="pagination"> <li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page"><a data-page="1" href="#">2</a></li><li class="footable-page-arrow"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow"><a data-page="last" href="#last">»</a></li></ul>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
	</div>
</div>


@endsection