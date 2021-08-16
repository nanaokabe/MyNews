<!DOCYPE html>

<html>
  <head>
  <meta chaset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="view-port" content="width=device-width, iniical-scale=1">
  
  <title>My プロフィール</title>
  </head>
    <body>
    
{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'プロフィール')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>My プロフィール</h2>
                
                 <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                
                <div class="form-group row">
                    <label>氏名</label>
                      <input type="text" name="name" value="{{ old('name') }}">
                    </div>
                  
                  <div class="form-group row">
                    <label>性別</label>
                    <input type="text" name="gender" value="{{ old('gender') }}">
                  </div>
                  
                  <div class="form-group row">
                    <label>趣味</label>
                    <input type="text" name="hobby" value="{{ old('hobby') }}">
                  </div>
                  
                  <div class="form-group row">
                    <label>自己紹介欄</label>
                    <textarea class="form-control" name="introduction" rows="15">{{ old('introduction') }}</textarea>
                  </div>
                
                <input type="submit" class="btn btn-primary" value="送信">
                
                
                </form>
            </div>
        </div>
    </div>
@endsection


</body>
    
</html>

