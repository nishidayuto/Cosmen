@extends('layouts.layout')

@section('title','COSMEN')


@section('content')
<!-- 内容を記述 -->
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.slider').bxSlider({
                auto: true,
                pause: 3000,
            });
        });
    </script>

</head>
<!-- 商品表示 -->
<section class="w-50 d-flex justify-content-start mx-auto pt-5">
<div class="pr-4">
<table class="table">
  <tr>
    <td class="table-secondary">商品名</td>
    <td class="bg-light">LIPPS BOY ファンデーション</td>
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

<div class="border border-primary">
<h1 class="bg-info text-center">商品概要</h1>
<p>顔全体のテカリ、きになる毛穴をカバーし、きめ細やかな肌を演出</p>
</div>

<div class="pt-2 float-right">
<button type="button" class="btn btn-warning" onclick="location.href='https://products.lipps.co.jp/product/face-powder/'">商品購入へ！</button>
</div>

</div>




<div class="w-50">
<div class="slider">
<img src="image/fp2_0311-p-500.png" alt="" width="500" height="300">
<img src="image/chanel_fandation.jpg" alt="" width="500" height="300">
</div>
</div>

</section>

<!-- 口コミ表示 -->
<!-- $cosmesの中身が空になってる -->
@if (count($cosmes) > 0)
<section class="d-flex justify-content-center pt-5">
  <table class="border border-primary">
    <thead>
      <th>口コミ一覧</th>
    </thead>
    <tbody>
    @foreach ($cosmes as $cosme)
        <tr>                                
        <td class="table-text">
        <div>{{ $cosme->value }}</div>
        <div>{{ $cosme->name }}</div>
        <div>{{ $cosme->title }}</div>
        <div>{{ $cosme->text }}</div>
        </td>
        </tr>
    @endforeach
   
    </tbody>
  </table>
</section>
@endifs





<!-- 口コミフォーム -->
<section class="d-flex justify-content-center pt-5">
<!-- バリデーションエラーの表示に使用-->
@include('common.errors')
<form method="post" action="{{ url('detail') }}" class="border border-primary w-50">
<h1>口コミ投稿フォーム</h1>
{{ csrf_field() }}

<table class="table">
  <tr>
  <td class="table-secondary" name="value">評価</td>
  <td class="bg-light">
    <div class="evaluation pt-3">
    <input id="star1" type="radio" name="star" value="5" />
    <label for="star1"><span class="text">最高</span>★</label>
    <input id="star2" type="radio" name="star" value="4" />
    <label for="star2"><span class="text">良い</span>★</label>
    <input id="star3" type="radio" name="star" value="3" />
    <label for="star3"><span class="text">普通</span>★</label>
    <input id="star4" type="radio" name="star" value="2" />
    <label for="star4"><span class="text">悪い</span>★</label>
    <input id="star5" type="radio" name="star" value="1" />
    <label for="star5"><span class="text">最悪</span>★</label>
    </div>
  </td>
  </tr>
  <tr>
    <td class="table-secondary" name="name">ハンドルネーム</td>
    <td class="bg-light"><input type="text"></td>
  </tr>
  <tr>
    <td class="table-secondary" name="title">タイトル</td>
    <td class="bg-light"><input type="text"></td>
  </tr>
  <tr>
    <td class="table-secondary" name="text">内容</td>
    <td class="bg-light"><textarea name="" id="" cols="30" rows="10"></textarea></td>
  </tr>
</table>
  
<input type="submit" value="投稿" class="btn btn-success btn-lg mt-4 ml-3 font-weight-bold mx-auto d-flex justify-content-center mt-3 mb-3">
</form>
</section>
@endsection

@section('footer')
copyright 2019 cosmen
@endsection