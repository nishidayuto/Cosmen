@extends('layouts.layout')

@section('title','COSMEN')


@section('content')
<!-- ここからコンテンツの中身を記述 -->
<head>
<style>
    
</style>
</head>

<section>

<div class="border border-primary d-flex justify-content-start">
<h1 class="pt-5">悩み：</h1>
<h1 class="pt-5 text-warning">ニキビ・ニキビ跡</h1>
</div>






<div class="w-50 text-center mx-auto pb-2 d-flex justify-content-center pt-5 hoge">

<div class="pr-5">
    <img src="image/fp2_0311-p-500.png" alt="" width="100">
</div>

<div>
<table class="table">
  <tr>
    <td class="table-secondary">ブランド名</td>
    <td class="bg-light">LIPPS BOY</td>
  </tr>
  <tr>
    <td class="table-secondary">カテゴリ</td>
    <td class="bg-light">ファンデーション</td>
  </tr>
  <tr>
    <td class="table-secondary">評価</td>
    <td class="bg-light">5</td>
  </tr>
</table>
    <a href="detail"></a>
</div>

</div>

<div class="w-50 text-center mx-auto pb-2 d-flex justify-content-center pt-5">
<div class="pr-5">
    <img src="image/chanel_fandation.jpg" alt="" width="147">
</div>
<div>
<table class="table">
  <tr>
    <td class="table-secondary">ブランド名</td>
    <td class="bg-light">BOY DE CHANEL</td>
  </tr>
  <tr>
    <td class="table-secondary">カテゴリ</td>
    <td class="bg-light">ファンデーション</td>
  </tr>
  <tr>
    <td class="table-secondary">評価</td>
    <td class="bg-light">5</td>
  </tr>
</table>
</div>
</div>

<div class="w-50 text-center mx-auto pb-2 d-flex justify-content-center pt-5">
<div class="pr-5">
    <img src="image/shiseido_lotion.jpg" alt="" width="147">
</div>
<div>
<table class="table">
  <tr>
    <td class="table-secondary">ブランド名</td>
    <td class="bg-light">資生堂　MEN</td>
  </tr>
  <tr>
    <td class="table-secondary">カテゴリ</td>
    <td class="bg-light">ローション</td>
  </tr>
  <tr>
    <td class="table-secondary">評価</td>
    <td class="bg-light">5</td>
  </tr>
</table>
</div>
</div>
</section>
<!-- ここまで -->
@endsection


@section('footer')
copyright 2019 cosmen
@endsection