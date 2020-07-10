<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hamablo</title>
    <link rel="stylesheet" href="my_page.css">
</head>
<body>
    <header>
<div class="header-logo">

    <h1>はまぶろ</h1>
    <p>このブログは、僕の家族や友人に向けて書くIT知識向上プログラムです。
    </p>
</div>
<div class="header-list">
    <ul>
        <li><a href="home.html">HOME</a></li>
        <li><a href="kiji.html">記事一覧</a></li>
        <li><a href="prof.html">プロフィール</a></li>

    </ul>
    
</div>

    </header>
<div class="title">
<h3><!--ブログのタイトル-->
php　連想配列とは

</h3>
</div>
<div class="naiyou">
    <pre>
<p><!--本文-->

簡単にいうと配列に名前をつけてあげる感じです。
例えば
＄menu＝[’ラーメン’、’カツ丼’、’唐揚げ定食’];

これが配列ね？

んで、こーする
＄menu＝['menrui'=>'ラーメン’,'donmono'=>'カツ丼','teisyoku'=>'唐揚げ定食'];
そーすると、取り出すときにわかりやすくなるってこと
echo $menu['menrui'];
これでラーメンと出ます。

簡単すぎましたね。。。

短いですが今日はこの辺にしときます。
ちょっとphpで遊びたいので。。。

ではまた！
<?php

echo 'ありがとう！';
?>






</p></pre>


</div>

    <footer>
        <div class="orei">
            <p>最後まで読んでいただきまして <br> 
                
            本当にありがとうございます。</p>
            <p>またよろしくお願いします。</p>
        </div>
        <div class="copy-light">
        <span>©︎ ハマブロ.inc</span>  

        </div>



    </footer>



    
</body>
</html>