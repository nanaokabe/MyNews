<!DOCYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My プロフィール</title>
  </head>
    
@extends('layouts.admin')
{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'プロフィール')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>My プロフィール</h2>
                
                
                 <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                    
                      <ul>
                       @foreach($errors->all() as $e)
                      <li>{{ $e }}</li>
                      @endforeach
                      </ul>
                    @endif
                
                <div class="form-group row">
                    <label class="col-md-1">氏名</label>
                      <input type="text" name="name" value="{{ old('name') }}">
                    </div>
                  
                  <div class="form-group row">
                    <label class="col-md-1">性別</label>
                    <input type="text" name="gender" value="{{ old('gender') }}">
                  </div>
                  
                  <div class="form-group row">
                    <label class="col-md-1">趣味</label>
                    <input type="text" name="hobby" value="{{ old('hobby') }}">
                  </div>
                  
                  <div class="form-group row">
                    <label>自己紹介欄</label>
                    <textarea class="form-control" name="introduction" rows="15">{{ old('introduction') }}</textarea>
                  </div>
                 {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="送信">
                </form>
            </div>
        </div>
    </div>
@endsection


</body>
    
</html>

