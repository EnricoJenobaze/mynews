<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyNews</title>
        
    </head>
    <body>
        {{-- layouts/admin.blade.phpを読み込む --}}
        @extends('layouts.admin')
        
        
        {{--admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
        @section('title', 'ニュースの新規作成' )
        
        {{--admin.blade.phpの@yield('contents')に以下のタグを埋め込む --}}
        @section('contents')
        
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    
                    <h2>Myニュース作成画面</h2>
                </div>
            </div>
        </div>
        
        @endsection
        
    </body>
</html>