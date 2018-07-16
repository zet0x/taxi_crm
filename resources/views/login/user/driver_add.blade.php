@extends('layouts.template')

@section('content')

<div class="row">
	<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
		<form enctype="multipart/form-data" class="form-material m-t-40" method="post">
        {{ csrf_field() }}
			<div class="card">
                <div class="card-body">
	                <h4 class="card-title">{{ trans('user/driver_add.information') }}</h4>
	                <div class="row">
		                <div class="form-group col-md-6 m-t-20">
		                    <input type="text" class="form-control form-control-line" name="name" placeholder="{{ trans('user/driver_add.name') }}"> 
		                </div>
		                <div class="form-group col-md-6 m-t-20">
		                    <input type="text" class="form-control form-control-line" name="phone" placeholder="{{ trans('user/driver_add.phone') }}"> 
		                </div>	
		                <div class="clearfix"></div>

		                <div class="form-group col-md-6 m-t-20">
		                    <input type="text" class="form-control form-control-line" name="email" placeholder="{{ trans('user/driver_add.email') }}"> 
		                </div>
		                <div class="form-group col-md-6 m-t-20">
		                    <input type="text" class="form-control form-control-line" name="city" placeholder="{{ trans('user/driver_add.city') }}"> 
		                </div>	
		                <div class="clearfix"></div>
	                </div>
	                <div class="form-group">
                        <label>{{ trans('user/add.file') }}</label>
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">{{ trans('user/add.select_file') }}</span> <span class="fileinput-exists">Change</span>
                            <input name="photo" type="file"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                <h4 class="card-title">{{ trans('user/driver_add.pasport') }}</h4>
                <div class="row">
                	<div class="form-group col-md-6 m-t-20">
	                    <input type="text" class="form-control form-control-line" name="name" placeholder="{{ trans('user/driver_add.seria_p') }}"> 
	                </div>
	                <div class="form-group col-md-6 m-t-20">
	                    <input type="text" class="form-control form-control-line" name="phone" placeholder="{{ trans('user/driver_add.number_p') }}"> 
	                </div>	
	                <div class="clearfix"></div>

	                <div class="form-group col-md-6 m-t-20">
	                    <input type="text" class="form-control form-control-line" name="name" placeholder="{{ trans('user/driver_add.ssued_p') }}"> 
	                </div>
	                <div class="form-group col-md-6 m-t-20">
	                    <input type="text" class="form-control form-control-line" name="phone" placeholder="{{ trans('user/driver_add.date_p') }}"> 
	                </div>	
	                <div class="clearfix"></div>

                </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                <h4 class="card-title">{{ trans('user/driver_add.propiska') }}</h4>
                <div class="row">
                	<div class="form-group col-md-6 m-t-20">
	                    <input type="text" class="form-control form-control-line" name="name" placeholder="{{ trans('user/driver_add.city') }}"> 
	                </div>
	                <div class="form-group col-md-6 m-t-20">
	                    <input type="text" class="form-control form-control-line" name="phone" placeholder="{{ trans('user/driver_add.street') }}"> 
	                </div>	
	                <div class="clearfix"></div>

	                <div class="form-group col-md-4 m-t-20">
	                    <input type="text" class="form-control form-control-line" name="name" placeholder="{{ trans('user/driver_add.house') }}"> 
	                </div>
	                <div class="form-group col-md-4 m-t-20">
	                    <input type="text" class="form-control form-control-line" name="phone" placeholder="{{ trans('user/driver_add.housing') }}"> 
	                </div>
	                <div class="form-group col-md-4 m-t-20">
	                    <input type="text" class="form-control form-control-line" name="phone" placeholder="{{ trans('user/driver_add.apartment') }}"> 
	                </div>	
	                <div class="clearfix"></div>

                </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                <h4 class="card-title">{{ trans('user/driver_add.license') }}</h4>
                <div class="row">
                	<div class="form-group col-md-6 m-t-20">
	                    <input type="text" class="form-control form-control-line" name="name" placeholder="{{ trans('user/driver_add.seria_l') }}"> 
	                </div>
	                <div class="form-group col-md-6 m-t-20">
	                    <input type="text" class="form-control form-control-line" name="phone" placeholder="{{ trans('user/driver_add.number_l') }}"> 
	                </div>	
	                <div class="clearfix"></div>

	                <div class="form-group col-md-6 m-t-20">
	                    <input type="text" class="form-control form-control-line" name="name" placeholder="{{ trans('user/driver_add.date_l') }}"> 
	                </div>
	                <div class="form-group col-md-6 m-t-20">
	                    <input type="text" class="form-control form-control-line" name="phone" placeholder="{{ trans('user/driver_add.current_l') }}"> 
	                </div>	
	                <div class="clearfix"></div>

                </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                <h4 class="card-title">{{ trans('user/driver_add.license_taxi') }}</h4>
                <div class="row">
                	<div class="form-group" style="margin-top: 25px;padding: 0 15px;">
                        <div class="demo-radio-button">
                            <input name="brand" type="radio" id="radio_1" value="1" checked="">
                            <label for="radio_1">{{ trans('user/driver_add.yes') }}</label>
                            <input name="brand" type="radio" value="0" id="radio_2">
                            <label for="radio_2">{{ trans('user/driver_add.no') }}</label>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection