@extends('layouts.template')

@section('content')


<div class="row">
	
	<div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ trans('crm/gibdd.data_from_gibdd') }}</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>{{ trans('crm/gibdd.id') }}</th>
                                <th>{{ trans('crm/gibdd.date') }}</th>
                                <th>{{ trans('crm/gibdd.auto') }}</th>
                                <th>{{ trans('crm/gibdd.user') }}</th>
                                <th>{{ trans('crm/gibdd.status') }}</th>
                                <th>{{ trans('crm/gibdd.link') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Июнь 15, 2018</td>
                                <td>
                                    <a href="javascript:void(0)">hynday М333ММ123</a>
                                </td>
                                
                                <td>
                                    <a href="javascript:void(0)">Тест Тестович</a>
                                </td>
                                <td>
                                	<div class="label label-table label-success">Новый</div>
                                </td>
                                <td>
                                	<a href="#" data-toggle="tooltip" data-original-title="{{ trans('crm/gibdd.link_go') }}"> <i class="fa fa-mail-forward text-success"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Июнь 14, 2018</td>
                                <td>
                                    <a href="javascript:void(0)">hynday М43ММ123</a>
                                </td>
                                
                                <td>
                                    <a href="javascript:void(0)">Тест Тестович</a>
                                </td>
                                <td>
                                	<div class="label label-table label-success">Новый</div>
                                </td>
                                <td>
                                	<a href="#" data-toggle="tooltip" data-original-title="{{ trans('crm/gibdd.link_go') }}"> <i class="fa fa-mail-forward text-success"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Июнь 15, 2018</td>
                                <td>
                                    <a href="javascript:void(0)">hynday М333ММ123</a>
                                </td>
                                
                                <td>
                                    <a href="javascript:void(0)">Тест Тестович</a>
                                </td>
                                <td>
                                	<div class="label label-table label-success">Новый</div>
                                </td>
                                <td>
                                	<a href="#" data-toggle="tooltip" data-original-title="{{ trans('crm/gibdd.link_go') }}"> <i class="fa fa-mail-forward text-success"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Июнь 15, 2018</td>
                                <td>
                                    <a href="javascript:void(0)">hynday М333ММ123</a>
                                </td>
                                
                                <td>
                                    <a href="javascript:void(0)">Тест Тестович</a>
                                </td>
                                <td>
                                	<div class="label label-table label-success">Новый</div>
                                </td>
                                <td>
                                	<a href="#" data-toggle="tooltip" data-original-title="{{ trans('crm/gibdd.link_go') }}"> <i class="fa fa-mail-forward text-success"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Июнь 15, 2018</td>
                                <td>
                                    <a href="javascript:void(0)">hynday М333ММ123</a>
                                </td>
                                
                                <td>
                                    <a href="javascript:void(0)">Тест Тестович</a>
                                </td>
                                <td>
                                	<div class="label label-table label-success">Новый</div>
                                </td>
                                <td>
                                	<a href="#" data-toggle="tooltip" data-original-title="{{ trans('crm/gibdd.link_go') }}"> <i class="fa fa-mail-forward text-success"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Июнь 15, 2018</td>
                                <td>
                                    <a href="javascript:void(0)">hynday М333ММ123</a>
                                </td>
                                
                                <td>
                                    <a href="javascript:void(0)">Тест Тестович</a>
                                </td>
                                <td>
                                	<div class="label label-table label-danger">Старый</div>
                                </td>
                                <td>
                                	<a href="#" data-toggle="tooltip" data-original-title="{{ trans('crm/gibdd.link_go') }}"> <i class="fa fa-mail-forward text-success"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Июнь 1, 2018</td>
                                <td>
                                    <a href="javascript:void(0)">hynday М333ММ123</a>
                                </td>
                                
                                <td>
                                    <a href="javascript:void(0)">Тест Тестович</a>
                                </td>
                                <td>
                                	<div class="label label-table label-danger">Старый</div>
                                </td>
                                <td>
                                	<a href="#" data-toggle="tooltip" data-original-title="{{ trans('crm/gibdd.link_go') }}"> <i class="fa fa-mail-forward text-success"></i> </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-4 m-b-30">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">»</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>


@endsection