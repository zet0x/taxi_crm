@extends('layouts.template')

@section('content')

<div class="row">
	<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12">
		<div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ trans('user/driver_on.active') }}</h4>
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive">
                    <div class="dt-buttons">
                    	<a class="btn waves-effect waves-light btn-info" tabindex="0" aria-controls="example23" href="#"><span>CSV</span></a>
                    	<a class="btn waves-effect waves-light btn-info" tabindex="0" aria-controls="example23" href="#"><span>{{ trans('user/driver_on.print') }}</span></a>
                    	<a class="btn waves-effect waves-light btn-info" tabindex="0" aria-controls="example23" href="#"><span>{{ trans('user/driver_on.link') }}</span></a>
                	</div>
                    <div id="example23_filter" class="dataTables_filter"><label>{{ trans('user/driver_on.search') }}:<input type="search" class="" placeholder="" aria-controls="example23"></label></div>
                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list footable-loaded footable" data-page-size="10" width="100%">
                        <thead>
                            <tr>
                            	<th class="footable-sortable">{{ trans('user/driver_on.id') }}<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">{{ trans('user/driver_on.fio') }}<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">{{ trans('user/driver_on.phone') }}<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">{{ trans('user/driver_on.city') }}<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">{{ trans('user/driver_on.auto') }}<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">{{ trans('user/driver_on.created') }}<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable"><i class="mdi mdi-account-settings-variant"></i><span class="footable-sort-indicator"></span></th>
                            </tr>
                        </thead>


                        <tfoot>
                            <tr>
                                <td colspan="2">
                                    <a href="{{ route('page.user.driver.add') }}" class="btn waves-effect waves-light btn-info" style="color:white;">{{ trans('user/driver_on.add') }}</a>
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