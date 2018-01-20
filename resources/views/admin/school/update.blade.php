@extends('admin.master')
@section('title')
@endsection
@section('style')
@endsection

@section('content')
    @parent
    <div class="row">
        <section class="content">
            <div class="col-md-12 col-md-offset-0">
                @if (count($errors))
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(Session::has('success'))
                    <div class="alert alert-info">
                        {{Session::get('success')}}
                    </div>
                @endif

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Cập nhật thay đổi</h3>
                </div>
                <div class="panel-body">                                
                    <div class="table-container">
                        <form method="POST" action={{route('school.update', $school->id)}}  role="form"> {{ method_field('PUT') }} {!! csrf_field() !!}
                            <div>
                                <div class="form-group">
                                    <p>Tên trường</p>
                                    <input type="text" name="name" required minlength="6" class="form-control input-sm" placeholder="Tên trường" value="{{$school->name}}">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <p>Thành phố</p>
                                    <input type="text" name="city" class="form-control input-sm" placeholder="Thành phố sở tại" value="{{$school->city}}">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <p>Mô tả thêm</p>
                                    <input type="text-area" name="description" class="form-control input-sm" placeholder="Thông tin thêm">
                                </div>
                            </div>
                            <div class="row">                           
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="submit" class="btn btn-success btn-block" value="Cập nhật">
                                </div>  
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="reset" class="btn btn-block">
                                        <a href="">Hủy bỏ</a>
                                    </button>
                                </div>                                      
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </section>
@endsection
