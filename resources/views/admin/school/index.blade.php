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
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="pull-left"><h3>Danh sách trường học</h3></div>
                <div class="pull-right">
                    <div class="btn-group">     
                        <a href="{{route('school.create')}}" class="btn btn-info" >Thêm trường</a>
                    </div>
                </div>
                <div class="table-container">
                    <table id="mytable" class="table table-bordred table-striped">       
                    <thead>              
                        <th>Mã số</th>
                        <th>Tên trường</th>
                        <th>Thành phố</th>
                        <th>Số gíao viên tham gia</th>
                        <th>Số học viên tham gia</th>
                        <th>Mô tả</th>
                        <th></th>
                        <th></th>
                    </thead>                                
                    <tbody>
                        @foreach($schools as $school)
                        <tr id='school-{{$school->id}}'>
                            <td>{{$school->id}}</td>
                            <td>{{$school->name}}</td>
                            <td>{{$school->city}}</td>
                            <td></td>
                            <td></td>
                            <td>{{$school->description}}</td>
                            <td><a href="{{route('school.edit', ['id'=> $school->id])}}" class="btn btn-sm btn-info">Sửa</a></td>
                            <td> 
                                <form action="{{route('school.destroy', ['id' =>$school->id])}}" method="post">{{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-sm btn-danger" type="submit">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
