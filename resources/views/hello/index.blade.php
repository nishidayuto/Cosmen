@extends('layouts.layout')

@section('title','COSMEN')


@section('content')
<!-- 内容を記述 -->
<section class="bg-info login p-5 ">
<div class="container text-center">
        <h1>何でお悩みですか？</h1>
        <button class="btn btn-light btn-lg mt-4 ml-3 text-info font-weight-bold" onclick="location.href='nikibi'">ニキビ<br>ニキビ跡</button>
        <button class="btn btn-light btn-lg mt-4 ml-3 text-info font-weight-bold">ヒゲ</button>
        <button class="btn btn-light btn-lg mt-4 ml-3 text-info font-weight-bold">テカリ<br>脂性肌</button>
        <button class="btn btn-light btn-lg mt-4 ml-3 text-info font-weight-bold">乾燥肌</button>
        <button class="btn btn-light btn-lg mt-4 ml-3 text-info font-weight-bold">混合肌</button>
</div>
</section>
@endsection

@section('footer')
copyright 2019 cosmen
@endsection