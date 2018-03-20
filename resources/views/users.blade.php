@extends('layouts.app')
@section('content')
    <center>
        <h3>CRUD NEW USERS</h3>
    </center>
    @if(Session::has('success'))
        <h3>{{ Session::get('success') }}</h3>
    @endif
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th width="5">NO</th>
                        <th>姓名</th>
                        <th>性別</th>
                        <th>身分證號碼</th>
                        <th>出生年月日</th>
                        <th>手機號碼</th>
                        <th>電子信箱</th>
                        <th>Address1</th>
                        <th>Address2</th>
                        <th>Address3</th>
                        <th>證照</th>
                        <th>專長</th>
                        <th>經歷與學歷</th>
                        <th>自我介紹</th>
                        <th>
                            <a href="{{ URL('users/create') }}" class="btn btn-success btn-xs">新增</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <td>{{ ($key+1) }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->gender }}</td>
                            <td>{{$user->identitycard}}</td>
                            <td>{{$user->birthday}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{$user->address1}}</td>
                            <td>{{$user->address2}}</td>
                            <td>{{$user->address3}}</td>
                            <td>{{$user->license}}</td>
                            <td>{{$user->speciality}}</td>
                            <td>{{$user->experience}}</td>
                            <td>{{$user->selfintroduction}}</td>
                            <td>
                                <center>
                                    <a href="{{ URL('users/' . $user->id . '/edit') }}" class="btn btn-xs btn-info">修改</a>
                                    <form action="{{ URL('users/' . $user->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE' )}}
                                        <button type="submit" class="btn btn-xs btn-danger">刪除</button>
                                    </form>
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection