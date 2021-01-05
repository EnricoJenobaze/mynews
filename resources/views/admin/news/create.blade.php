
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
                    <form action="{{ action('Admin\NewsController@create') }}" method="post"
                    enctype="multpart/form-data">
                        
                        @if(count($errors) > 0)
                          <ul>
                              @foreach($errors->all() as $e)
                                <il>{{ $e }}</il>
                              @endforeach
                          </ul>
                          
                          @endif
                          <div class="form-group row">
                              <label class="col-md-2">タイトル</label>
                              <div class="col-md-10">
                                  <input type="text" class="form-control" name="title" value="{{
                                  old('title') }}">
                                  
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label class="col-md-2">本文</label>
                              <div class="col-md-10">
                                  <textarea class="form-control" name="body" rows="20">{{ old('body') }}
                                  </textarea>
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label class="col-md-2">画像</label>
                              <div class="col-md-10">
                                  <input type="file" class="form-control-file" name="image">
                              </div>
                          </div>
                          
                          {{ csrf_field() }}
                          <input type="submit" class="btn btn-primary" value="更新">
                    </form>
                </div>
            </div>
        </div>
        
        @endsection