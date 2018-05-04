@extends('layouts.app')
<html><head><title>看護媒合平台</title></head>
@section('content')
    <center>
        <h3>看護名單</h3>
    </center>
    @if(Session::has('success'))
        <h3>{{ Session::get('success') }}</h3>
    @endif
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th colspan="12"></th>
                    <th colspan="7" class="text-center">服務項目:</th>
                    <th colspan="3"></th>
                </tr>
                    <tr>
                        <th>NO</th>
                        <th>姓名</th>
                        <th>大頭貼</th>
                        <th>性別</th>
                        <th>身分證號碼</th>
                        <th>出生年月日</th>
                        <th>手機號碼</th>
                        <th>電子信箱</th>
                        <th>縣市</th>
                        <th>鄉鎮</th>
                        <th>地區</th>
                        <th>證照</th>
                        <th>行動不便</th>
                        <th>中風</th>
                        <th>植物人</th>
                        <th>失智</th>
                        <th>自閉症</th>
                        <th>智能障礙</th>
                        <th>精神病</th> 
                        <th>經歷與學歷</th>
                        <th>自我介紹</th>
                        <th><a href="{{ url('/searchpatient') }}" class="btn btn-xs btn-info"> 搜尋病患</a></th>
                    {{--<th>
                            <a href="{{ URL('users/create') }}" class="btn btn-success btn-xs">新增</a>
                        </th>--}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <td>{{ ($key+1) }}</td>
                            <td>{{ $user->name }}</td>
                            <td height="130"><img src="{{ asset('storage/'.$user->file) }}" height=100 width=100/></td>
                            <td>{{ $user->gender }}</td>
                            <td>{{ $user->identitycard}}</td>
                            <td>{{ $user->birthday}}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address1}}</td>
                            <td>{{ $user->address2}}</td>
                            <td>{{ $user->address3}}</td>
                            <td>{{ $user->license}}</td>
                            <td>{{ $user->行動不便 == "行動不便" ? 'O' : '' }}</td>
                            <td>{{ $user->中風 == "中風" ? 'O' : '' }}</td>
                            <td>{{ $user->植物人 == "植物人" ? 'O' : '' }}</td>
                            <td>{{ $user->失智 == "失智" ? 'O' : '' }}</td>
                            <td>{{ $user->自閉症 == "自閉症" ? 'O' : '' }}</td>
                            <td>{{ $user->智能障礙 == "智能障礙" ? 'O' : '' }}</td>
                            <td>{{ $user->精神病 == "精神病" ? 'O' : '' }}</td>
                            <td style="word-break:break-all;">{{ $user->experience}}</td>
                            <td style="word-break:break-all;">{{ $user->selfintroduction}}</td>
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
</html>