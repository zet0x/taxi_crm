@extends('layouts.template')

@section('content')


<div class="row">

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ trans('crm/wage_driver.wage_driver') }}</h4>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>{{ trans('crm/wage_driver.name') }}</th>
                            <th>{{ trans('crm/wage_driver.amount') }}</th>
                            <th>{{ trans('crm/wage_driver.last') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Админ Админов</td>
                            <td>₽ 35000</td>
                            <td>
                            	<span class="text-danger text-semibold"><i class="fa fa-level-down" aria-hidden="true"></i> 28.76%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Иван Иванов</td>
                            <td>₽ 35600</td>
                            <td>
                            	<span class="text-success text-semibold"><i class="fa fa-level-up" aria-hidden="true"></i> 58.56%</span>
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


@endsection