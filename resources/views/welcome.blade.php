@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    関口峰樹です。PHPの実務経験は、ほぼありませんがLaravelで開発をしてみたいです。
                    面接の機会を何卒よろしくお願いいたします。					
                </div>
            </div>
        </div>
    </div> -->
<style type="text/css">
body {
    width: 100%;
    display: table;
    font-weight: 100;
    font-family: 'Lato';
}

/*.container {
    text-align: center;
    display: table-cell;
    vertical-align: middle;
}

.content {
    text-align: center;
    display: inline-block;
}*/

.title {
    font-size: 72px;
}
</style>
    <div class="container">
        <div class="content">
            <div class="title">PHPの実務経験は、ほぼほぼ<br>
            ありませんがLaravelで開発をしてみたいです。<br>
            面接の機会を何卒<br>よろしくお願い致します。 
            </div>
        </div>
    </div>
</div>
@endsection
