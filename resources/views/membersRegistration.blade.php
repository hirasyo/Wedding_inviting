<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>登録完了</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <?php 
                                $confirm = $isAttend ? '出席します' : '欠席です';
                            ?>
                            登録されました。<br>
                            氏名：{{$name}}<br>
                            {{$confirm}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

