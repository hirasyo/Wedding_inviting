<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @else
                        <a href="{{ route('login') }}">管理者用ログイン</a>

                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    出欠確認
                </div>
                
                <form action="{{ route('membersRegistration') }}" method="post"  class="form-group row">
                    @csrf
                    <label for="register_name" class="col-md-4 col-form-label text-md-right">{{ __('氏名') }}</label>
                    <div class="col-md-6">
                        <input id="register_name" type="text" class="form-control" name="register_name" >
                        @if($errors->has('register_name')) <br><span class="text-danger">{{ $errors->first('register_name') }}</span> @endif
                    </div>

                    <label for="register_attend" class="col-md-4 col-form-label text-md-right">{{ __('出席or欠席') }}</label>
                    <div class="col-md-6">
                        <input id="register_attend" type="radio" class="form-control" name="register_attend" value=true checked>
                        <input id="register_attend" type="radio" class="form-control" name="register_attend" value=false>
                    </div>
                    <br>

                    <input type="submit" value="送信する">
                </form>
            </div>
        </div>
    </body>
</html>
