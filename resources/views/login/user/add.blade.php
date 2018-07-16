@extends('layouts.template')

@section('content')


<div class="row">
	<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
		<div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ trans('user/add.new_user') }}</h4>
                    <h6 class="card-subtitle">{{ trans('user/add.new_user_desc') }}</h6>
                    <form enctype="multipart/form-data" class="form-material m-t-40" method="post">
                       {{ csrf_field() }}

                        <div class="form-group">
                            <label>{{ trans('user/add.name') }}</label>
                            <input class="form-control form-control-line" name="name" type="text" autocomplete="off" required=""> 
                        </div>
                        <div class="form-group">
                            <label>{{ trans('user/add.last_name') }}</label>
                            <input class="form-control form-control-line" name="last_name" type="text" autocomplete="off" required=""> 
                        </div>
                        <div class="form-group">
                            <label for="example-email">{{ trans('user/add.email') }}</span></label>
                            <input id="example-email2" name="email" class="form-control" type="email" autocomplete="off" required=""> 
                        </div>
                        <div class="form-group">
                            <label>{{ trans('user/add.password') }}</label>
                            <input class="form-control" name="password" type="password" autocomplete="off" required=""> 
                        </div>
                        <div class="form-group">
                            <label>{{ trans('user/add.password') }}</label>
                            <input class="form-control" name="password_confirmation" type="password" autocomplete="off" required=""> 
                        </div>
                        <div class="form-group">
                            <label>{{ trans('user/add.file') }}</label>
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">{{ trans('user/add.select_file') }}</span> <span class="fileinput-exists">Change</span>
                                <input name="photo" type="file"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                        </div>
                        <div class="form-group">
                            <div class="demo-radio-button">
                                <input name="prof" type="radio" id="radio_1" value="admin">
                                <label for="radio_1">{{ trans('user/add.admin') }}</label>
                                <input name="prof" type="radio" value="driver" id="radio_2">
                                <label for="radio_2">{{ trans('user/add.driver') }}</label>
                                <input name="prof" type="radio" value="manager" id="radio_3">
                                <label for="radio_3">{{ trans('user/add.manager') }}</label>
                            </div>
                        </div>
                        <!-- 
                        <div class="form-group">
	                        <div class="switch">
                                <label>
                                    <input name="premising_crm" checked="" type="checkbox"><span class="lever switch-col-light-blue"></span> {{ trans('user/add.premising_crm') }}</label>
                            </div>  
                            <div class="switch">
	                            <label>
	                                <input name="premising_user" checked="" type="checkbox"><span class="lever switch-col-light-blue"></span> {{ trans('user/add.premising_user') }}</label>
	                        </div>	
                            <div class="switch">
                                <label>
                                    <input name="premising_auto" checked="" type="checkbox"><span class="lever switch-col-light-blue"></span> {{ trans('user/add.premising_auto') }}</label>
                            </div>  
                            <div class="switch">
                                <label>
                                    <input name="premising_task" checked="" type="checkbox"><span class="lever switch-col-light-blue"></span> {{ trans('user/add.premising_task') }}</label>
                            </div> 
                            <div class="switch">
                                <label>
                                    <input name="premising_message" checked="" type="checkbox"><span class="lever switch-col-light-blue"></span> {{ trans('user/add.premising_message') }}</label>
                            </div>   
	                        <div class="switch">
	                            <label>
	                                <input name="premising_setting" checked="" type="checkbox"><span class="lever switch-col-light-blue"></span> {{ trans('user/add.premising_setting') }}</label>
	                        </div>
                        </div>
                        -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">{{ trans('user/add.submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
	</div>
</div>


@endsection