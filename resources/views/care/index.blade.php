@extends('layouts.app')


@section('content')
     <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>被看護列表</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('care.create') }}"> 新增成員</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>姓名</th>
            <th>E-Mail</th>
            <th>照片</th>
            <th>縣市</th>
            <th>鄉鎮</th>            
            <th>出生年月日</th>
            <th>連絡電話</th>              
            <th>高血壓</th>
            <th>中風</th>
            <th>植物人</th>
            <th>失智</th>
            <th>自閉症</th>
            <th>智能障礙</th>
            <th>精神病</th>            
            <th>學歷</th>       
            <th>身分證</th>                          
            <th width="280px">Action</th>
        </tr>
    @foreach ($articles as $article)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $article->name}}</td>        
        <td>{{ $article->email}}</td>
        <td><img src="{{ asset('storage/'.$article->file) }}" height=100 /></td>
        <td>{{ $article->city}}</td>                
        <td>{{ $article->region}}</td>        
        <td>{{ $article->birthday}}</td>
        <td>{{ $article->phone}}</td>          
        <td>{{ $article->高血壓 == 1 ? 'O' : '' }}</td>
        <td>{{ $article->中風 == 1 ? 'O' : '' }}</td>
        <td>{{ $article->植物人 == 1 ? 'O' : '' }}</td>
        <td>{{ $article->失智 == 1 ? 'O' : '' }}</td>
        <td>{{ $article->自閉症 == 1 ? 'O' : '' }}</td>
        <td>{{ $article->智能障礙 == 1 ? 'O' : '' }}</td>
        <td>{{ $article->精神病 == 1 ? 'O' : '' }}</td>
        <td>{{ $article->experience}}</td>
        <td>{{ $article->identitycard}}</td>      
        

        <td>
         
            {!! Form::open(['method' => 'DELETE','route' => ['care.destroy', $article->id],'style'=>'display:inline']) !!}
            {!! Form::submit('刪除', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
   

    {!! $articles->links() !!}
@endsection 
    