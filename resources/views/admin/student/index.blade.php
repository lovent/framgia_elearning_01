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
                        <div class="pull-left"><h3>Danh sách học viên</h3></div>

                        <div class="table-container">
                            <table id="mytable" class="table table-bordred table-striped">       
                                <thead>              
                                       <th>Mã số</th>
                                       <th>Tên học viên</th>
                                       <th>Email</th>
                                       <th>Giới tính</th>
                                       <th>Địa chỉ</th>
                                       <th>SĐT</th>
                                       <th></th>
                                       <th></th>
                                </thead>                                
                                <tbody>
                                    @foreach($students as $student)
                                    <tr id='student-{{$student->id}}'>
                                        <td>{{$student->id}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->gender}}</td>
                                        <td>{{$student->address}}</td>
                                        <td>{{$student->phone_number}}</td>
                                        <td>{{$student->description}}</td>
                                        <td><a href="{{route('student.update', ['id'=> $student->id])}}" class="btn btn-sm btn-info">Cấm</a></td>
                                        <td> 
                                            <form action="{{route('student.destroy', ['id' =>$student->id])}}" method="post">{{csrf_field()}}
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

