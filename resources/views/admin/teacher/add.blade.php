@extends('admin.master')
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
                    <h3 class="panel-title">Thêm giáo viên mới</h3>
                </div>
                <div class="panel-body">                                
                    <div class="table-container">
                        <form method="POST" action="{{route('teacher.store')}}"  role="form">
                        {{ csrf_field() }}
                            <div>
                                <div class="form-group">
                                    <p>Tên gíao viên *</p>
                                    <input type="text" name="name" required minlength="6" class="form-control input-sm" placeholder="Tên gíao viên">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <p>Địa chỉ email *</p>
                                    <input type="email" name="email" required minlength="6" class="form-control input-sm" placeholder="Email">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <p>Trường công tác *</p>
                                    <select name="school_id" value="" class="form-control">
                                        <option value="">
                                            
                                        </option>
                                    </select>                                   
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <p>Bộ môn *</p>
                                    <select name="subject" class="form-control">
                                        <option value="Toán học">Toán học</option>
                                        <option value="Vật lý">Vật lý</option>
                                        <option value="Hóa học">Hóa học</option>
                                        <option value="Sinh học">Sinh học</option>
                                        <option value="Ngữ Văn">Ngữ Văn</option>
                                        <option value="Lịch sử">Lịch sử</option>
                                        <option value="Địa lý">Địa lý</option>
                                        <option value="Tiếng Anh">Tiếng Anh</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <p>Giới tính</p>
                                    <select name="gender" class="form-control">
                                        <option value="1">Nữ</option>
                                        <option value="2">Nam</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <p>Kinh nghiệm *</p>
                                    <input type="number" min='1' name="experience" class="form-control input-sm" placeholder="Thông tin thêm">
                                </div>
                            </div>
                            <div class="row">                           
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit"  value="Save" class="btn btn-success btn-block">Thêm</button> 
                                </div>  
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="reset" class="btn btn-block">Hủy bỏ</button>
                                </div>      
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection