<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Myプロフィール</title>
        
    </head>
    <body>
        {{-- layouts/profile.blade.phpを読み込む --}}
        @extends('layouts.profile')
        
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    
                    <h2>Myプロフィール</h2>
                </div>
            </div>
        </div>
        
        @endsection
        
    </body>
</html>