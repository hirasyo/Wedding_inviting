@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <?php 
                        $confirm = $isAttend == 'true' ? '出席します' : '欠席です';
                    ?>
                    登録されました。<br>
                    氏名：{{$name}}<br>
                    {{$confirm}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
