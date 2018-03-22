@extends('layouts.app')


@section('content')
     <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('care.create') }}"> Create New Article</a>
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
            <th>縣市</th>
            <th>鄉鎮</th>
            <th>郵遞區號</th>
            <th>出生年月日</th>
            <th>連絡電話</th>
            <th>專長</th>
            <th>學歷</th>
            <th>身份證字號</th>            
            <th width="280px">Action</th>
        </tr>
    @foreach ($articles as $article)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $article->name}}</td>
        <td>{{ $article->twzipcode}}</td>
        <td>{{ $article->twzipcode2}}</td>
        <td>{{ $article->twzipcode3}}</td>
        <td>{{ $article->birthday}}</td>
        <td>{{ $article->phone}}</td>
        <td>{{ $article->speciality}}</td>
        <td>{{ $article->experience}}</td>
        <td>{{ $article->identitycard}}</td>
        <td>{{ $article->email}}</td>

        <td>
            <a class="btn btn-info" href="{{ route('care.show',$article->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('care.edit',$article->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['care.destroy', $article->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
   

    {!! $articles->links() !!}
@endsection 
    