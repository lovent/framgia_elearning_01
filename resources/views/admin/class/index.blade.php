@extends('admin.master')
@section('style')
@endsection

@section('content')
    @parent
    <div class="row">
        <section class="content">            
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left"><h3>Danh sách lớp học</h3></div>
                        <div class="pull-right">
                            <div class="btn-group">     
                                <a href="{{class.create}}" class="btn btn-info" >Thêm lớp</a>
                            </div>
                        </div>

                        <div class="table-container">
                            <table id="mytable" class="table table-bordred table-striped">       
                                <thead>
                                       <th>Mã lớp</th>
                                       <th>Tên lớp</th>
                                       <th>Tên gíao viên</th>
                                       <th>Số buổi học</th>
                                       <th>Ngày bắt đầu</th>\
                                       <th>Còn có thể đặt</th>
                                       <th>Trạng thái</th>
                                       <th></th>
                                       <th></th>
                                </thead>
                                <tbody>
                                    @foreach($lophocs as $lophoc)
                                    <tr id='lophoc-{{$lophoc->id}}'>
                                        <td>{{$lophoc->id}}</td>
                                        <td>{{$lophoc->name}}</td>
                                        <td>{{$lophoc->teacher_id}}</td>
                                        <td>{{$lophoc->number_of_lesson}}</td>
                                        <td>{{$lophoc->begin_at}}</td>
                                        <td>{{$lophoc->available_slot}}</td>
                                        <td>{{$lophoc->status}}</td>
                                        <td></td>
                                        <td><a href="{{route('class.edit', ['id'=> $lophoc->id])}}" class="btn btn-sm btn-info">Sửa</a></td>
                                        <td> 
                                            <form action="{{route('class.destroy', ['id' =>$lophoc->id])}}" method="post">{{csrf_field()}}
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
