@extends('layouts.master')

@section('title')
    <title>MyList</title>
@endsection

<style>
        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .sub-title{
            font-size: 22px;
        }

        .sub{
            font-size: 22px;
            margin-bottom: 50px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

</style>

@section('content')
<div class="content-wrapper">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title">MyList</div>
            <div class="sub-title">Jadikan <a style="color:blue;">#dirumahaja</a> Mu menjadi lebih produktif!!!</div>
            <div class="sub">Susun jadwal disini untuk mengatur waktumu!</div>
            <div class="links">
                <a href="dashboard"><button class="btn btn-lg btn-primary">Coba Sekarang</button></a>
            </div>
        </div>
    </div>
</div>
@endsection