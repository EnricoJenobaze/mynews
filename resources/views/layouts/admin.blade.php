<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        {{-- 後の章で説明します--}}
        <meta name="csfr-token" content="{{ csrf_token }}">
        
        {{--　各ページごとにtitleタグを入れるために@yieleで開けておきます --}}
        <title>@yield('title')</title>
        
        {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{ secure_asset('js/app.js') }}" defer></script>
        
        <link rel="dns-prefetch" href="https://fonts.gstatic.com"> 
        <link hrel="https://fonts.googleapis.com/css?family=Raleway:300,400,600" 
        rel="stylesheet" type="text/css">
        
        {{-- Laravel標準で用意されているcssを読み込みます --}}
        <link hrel="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するcssを読み込みます --}}
        <link hrel="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
        
    </head>
    
    <body>
        <div id="app">
            {{--　画面上部に表示するナビゲーションバーです --}}
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data toggle="collapse" data-target="#navbarSupportedContents" 
                    area-controls="navbarSupportedContents" aria-expanded="false" aria-laravel="Toggle navigation">
                        <span class="navbar-togger-icon"></span>
                    </button>
                    
                    <div class="collapse navbar collapse" id="navbarSupportedContents">
                        
                        <ul class="navbar-nav mr-auto">
                            
                        </ul>
                    </div>
                </div>
            </nav>
            {{--　ここまでナビゲーションバー --}}
            
            <main class="py-4">
                {{-- コンテンツをここに入れるため@yieldで開けておきます --}}
                @yiele ('contents')
                
            </main>
        </div>
    </body>
</html>