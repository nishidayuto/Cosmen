<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    .hoge {
    position: relative;
    z-index: 1;
    }
    .hoge a {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    text-indent:-999px;
    z-index: 2;
    }
    .hoge:hover {
    filter:alpha(opacity=70);
    -ms-filter: "alpha(opacity=70)";
    -moz-opacity:0.7;
    -khtml-opacity: 0.7;
    opacity:0.7;
    zoom:1;
    }
    


/* 星のスタイル
.rating-star{
  color: #f5bc55;
  font-size: 1.2em;
}
/*数字のスタイル*/
/* .rating-number{
  color: #333;
  font-size: 0.9em;
  margin-left: 0.4em;
} */ 



/* フォームタグ星のcss */
.evaluation{
  display: flex;
  flex-direction: row-reverse;
  justify-content: center;
}
.evaluation input[type='radio']{
  display: none;
}
.evaluation label{
  position: relative;
  padding: 10px 10px 0;
  color: gray;
  cursor: pointer;
  font-size: 50px;
}
.evaluation label .text{
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  text-align: center;
  font-size: 12px;
  color: gray;
}
.evaluation label:hover,
.evaluation label:hover ~ label,
.evaluation input[type='radio']:checked ~ label{
  color: #ffcc00;
}
    </style>
   
</head>
<body>
    <h1 class="text-center">@yield('title')</h1>
    <div>
    @yield('content')
    </div>
    <div class="text-right">
    @yield('footer')
    </div>
</body>
</html>