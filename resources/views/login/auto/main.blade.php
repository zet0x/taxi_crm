@extends('layouts.template')

@section('content')

<div class="row">
	<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
		<div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ trans('auto/main.new_autor') }}</h4>
                    <h6 class="card-subtitle">{{ trans('auto/main.new_auto_desc') }}</h6>
                    <form enctype="multipart/form-data" class="form-material m-t-40" method="post">
                       {{ csrf_field() }}
                       <input type="hidden" name="ajax" value="0">
                       <div class="form-group">
                            <label>{{ trans('auto/main.mark') }}</label>
                            <select name="mark_id" id="mark" class="form-control" onChange="go_ajax(this.value)" required>
                                <option disabled selected=""></option>
                                @foreach($arResult['mark'] as $m)
                                	<option value="{{ $m->id }}">{{ $m->mark }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('auto/main.model') }}</label>
                            <select name="model_id" id="model" class="form-control" required>
                                <option disabled selected=""></option>
                                
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>{{ trans('auto/main.number') }}</label>
                            <input name="number" class="form-control form-control-line" name="name" type="text" autocomplete="off" required=""> 
                        </div>
                        <div id="color" class="form-group">
                            <label>{{ trans('auto/main.year') }}</label>
                            <select name="year" id="model" class="form-control" required>
                                <option disabled selected=""></option>
                                @foreach($arResult['year'] as $y)
                                <option value="{{ $y->year }}">{{ $y->year }}</option>
                                @endforeach
							</select>
                        </div>
                        <div id="color" class="form-group">
                            <label>{{ trans('auto/main.color') }}</label>
                            <select name="color" id="model" class="form-control" required>
                                <option disabled selected=""></option>
                                @foreach($arResult['color'] as $c)
                                <option value="{{ $c->color }}">{{ $c->color }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('auto/main.photo') }}</label>
                            <div class="fileinput input-group fileinput-new" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">{{ trans('auto/main.select_file') }}</span> <span class="fileinput-exists">Change</span>
                                <input type="hidden" value="" name="..."><input type="file" name="photo"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                        </div>

                        <div class="form-group">
                            <label>{{ trans('auto/main.city') }}</label>
                            <input name="city" class="form-control form-control-line" name="name" type="text" autocomplete="off" required=""> 
                        </div>
                        <div class="form-group">
                            <label>{{ trans('auto/main.comment') }}</label>
                            <textarea name="comment" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="form-group">
	                        <div class="demo-radio-button">
	                            <input name="brand" type="radio" id="radio_1" value="1" checked="">
	                            <label for="radio_1">{{ trans('auto/main.brend') }}</label>
	                            <input name="brand" type="radio"  value="0" id="radio_2">
	                            <label for="radio_2">{{ trans('auto/main.no_brend') }}</label>
	                        </div>
                        </div>
                        <div class="form-group">
                        	<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">{{ trans('auto/main.submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
	</div>
</div>

@endsection

@section('bottom_assets')

<script type="text/javascript">
	function go_ajax(mark_id)
	{
		$.ajax({
			url: '{{ route('page.auto.main') }}',
			type: "POST",
			data: {mark_id:mark_id,ajax:1},
			headers: {
			'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
			},
			success: function (data) {
				data = JSON.parse(data);
				model = document.querySelector('#model');
				model.innerHTML = "<option disabled selected></option>";
				for(i=0;i<data.length;i++)
				{
					$('#model').append('<option value="'+data[i].id+'">'+data[i].model+'</option>');
				}
			},
			error: function (msg) {
				console.log('error');
			}
		});
	}


    	
</script>

@endsection