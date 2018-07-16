@extends('layouts.template')

@section('content')



<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row el-element-overlay">
    <div class="col-md-12">
        <h4 class="card-title">Fade-in effect</h4>
        <h6 class="card-subtitle m-b-20 text-muted">You can use by default <code>el-overlay</code></h6> </div>
    @foreach($users as $user)
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1"> 
                    <div>
                        @if($user->photo != null)
                            <img src="{{ config('app.url') }}/{{ $user->photo }}" alt="{{ $user->last_name }} {{ $user->name }}" />
                        @else
                            <img src="{{ asset('public/profile_photo/white.jpg') }}" alt="{{ $user->last_name }} {{ $user->name }}" />
                        @endif
                    </div>
                    <div class="el-overlay">
                        <ul class="el-info">
                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="../plugins/images/users/1.jpg"><i class="icon-magnifier"></i></a></li>
                            <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="el-card-content">
                    <h3 class="box-title">{{ $user->last_name }} {{ $user->name }}</h3> <small>Водитель</small>
                    <br/> </div>
            </div>
        </div>
    </div>
    @endforeach
    
</div>


<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->

@endsection

@section('bottom_assets')

<script type="text/javascript">
    
function auto_height(element)
{
    max_height = 0;
    for(i=0;i<element.length;i++)
    {
        if(element[i].clientHeight > max_height)
        {
            max_height = element[i].clientHeight;
        }
    }
    console.log(max_height);
    for(i=0;i<element.length;i++)
    {
        element[i].style.height = max_height + 'px';
    }
    return true;
}

auto_height(document.querySelectorAll('.card .el-card-avatar'));
auto_height(document.querySelectorAll('.card .el-card-content'));
</script>

@endsection