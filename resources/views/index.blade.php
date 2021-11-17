<!---->
<!---->
<!--現在関係ないファイルです-->
<!---->
<!---->





<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/user.page.css">
    <title>ユーザーページ</title>
  </head>

  <body>
    <div class="inner_box_wrapper">
      <header class="header_list">
        <h1 class="h1_ttl">○○さんのプロフィール</h1>
        <nav class="header_nav">
          <ul class="nav_list">
            <li class="li"><a href="index.html" class="nav_list_a"><img src="img/icon_112120_256.png" class="img_icon"></a>
            </li>
            <li class="li"><a href="mypage.html" class="nav_list_a"><img src="img/icon_150030_256.png" class="img_icon"></a>
            </li>
          </ul>
        </nav>
      </header>
      <!--メイン-->
      <!--追加機能-->
      <form action="/update" method="post">
        @csrf
        <input type="text" name="name" placeholder="名前">
        <input type="submit" value="更新">
      </form>
      <!--検索スペースここまで-->
      <div class="profile">
        <div class="my_img">
          <img src="" class="my_page_img">
        </div>
        <div class="my_name_ev">
          <!--更新させたい-->
          @foreach ($items as $item)
          <form action="/update" method="get">
            @csrf

            <input class="name_area" type="text" name="name" value="{{$item->name}}">
          </form>
          @endforeach

          <p class="my_ev">評価</p>
          <p>★ ★ ★ ★ ★</p>
        </div>
      </div>
      <form action="/" method="" class="textarea_form">
        <textarea name="name" value="" rows=" 20" cols="100%" placeholder="自己紹介" class="textarea"></textarea>
      </form>
    </div>




  </body>