
        {{-- layouts/plofile.blade.phpを読み込む --}}
        @extends('layouts.plofile' )
        
        
        {{--plofile.blade.phpの@yield('title')に'Myプロフィール'を埋め込む --}}
        @section('title', 'Myプロフィール' )
        
        {{--profile.blade.phpの@yield('contents')に以下のタグを埋め込む --}}
        @section('contents' )
        
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    
                    <h2>Myプロフィール</h2>
                </div>
            </div>
        </div>
        
        @endsection
        