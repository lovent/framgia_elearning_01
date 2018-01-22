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
                        <div class="pull-left"><h3>Danh sách giáo viên</h3></div>
                        <div class="pull-right">
                            <div class="btn-group">     
                                <a href="{{route('teacher.create')}}" class="btn btn-info" >Thêm gíao viên</a>
                            </div>
                        </div>

                        <div class="table-container">
                            <table id="mytable" class="table table-bordred table-striped">    
                                <thead>
                                       <th>Mã số</th>
                                       <th>Họ tên giáo viên</th>
                                       <th>Trường công tác</th>
                                       <th>Bộ môn</th>
                                       <th>Giới tính</th>
                                       <th>Kinh nghiệm</th>
                                       <th>Ngày tham gia</th>
                                       <th>Chi tiết</th>
                                       <th></th>
                                       <th></th>
                                </thead>
                                <tbody>
                                    @foreach($teachers as $teacher)
                                    <tr id='teacher-{{$teacher->id}}'>
                                        <td>{{$teacher->id}}</td>
                                        <td>{{$teacher->name}}</td>
                                        <td>{{$teacher->school_id}}</td>
                                        <td>{{$teacher->subject}}</td>
                                        <td>{{$teacher->gender}}</td>
                                        <td>{{$teacher->experience}}</td>
                                        <td>{{$teacher->created_at}}</td>
                                        <td></td>
                                        <td><a href="{{route('teacher.edit', ['id'=> $teacher->id])}}" class="btn btn-sm btn-info">Sửa</a></td>
                                        <td><form action="{{route('teacher.destroy', ['id' =>$teacher->id])}}" method="post">{{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button class="btn btn-sm btn-danger" type="submit">Xóa</button>
                                            </form></td>
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
