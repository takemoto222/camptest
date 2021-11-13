<!DOCTYPE thml>

<thml>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ ('css/mypage.css')  }}">
    <title>お問い合わせ</title>
  </head>

  <body>


    <header>
      <h1 class="app_title_logo"></h1>
    </header>
    @foreach ($items as $item)
    <form action="/" method="post">
      @csrf
      <input type="text" name="name">
      <input type="submit">
    </form>

    <main class="mypage_main">
      <div class="profile">
        <!--mypage.edit.bladeで行った編集内容を表示させたい-->
        <div class="my_img">
          <img src="{{ asset('camp.html.css/img/camp_6.jpg') }}" class="my_page_img">
        </div>
        <div class="my_name_ev">
          <!--mypage.edit.bladeで行った編集内容を表示させたい-->
          <form action="/index" method="get">
            @csrf


            <input class="name_area" type="text" name="name" value="{{$item->name}}">
          </form>
          <!--編集とは別-->
          <p class="my_ev">評価</p>
          <p>★ ★ ★ ★ ★</p>
        </div>
        <div class="mypage_edit">
          <a href="/mypage_edit" class="mypage_edit_button">マイページ編集</a>
        </div>
      </div>
      <!--メイン-->
      <div class="mypage_menu">
        <ul class="mypage_ul">
          <li class="mypage_li"><a href="/history" class="mypage_a">取引履歴</a></li>
          <li class="mypage_li"><a href="/like" class="mypage_a">いいね！閲覧</a></li>
        </ul>
        <ul class="mypage_ul">
          <li class="mypage_li"><a href="/user_like_list" class="mypage_a">いいねされた商品</a></li>
          <li class="mypage_li"><a href="/listing_item_list" class="mypage_a">出品した商品</a></li>
          <li class="mypage_li"><a href="" class="mypage_a">下書き保存　未</a></li>
          <li class="mypage_li"><a href="/transaction_list" class="mypage_a">取引中・チャット</a></li>
          <li class="mypage_li"><a href="/contact" class="mypage_a">お問い合わせ</a></li>
        </ul>
      </div>
      @endforeach

      <!--ボタン-->
      <div class="buttons">
        <div class="top_button">
          <p><a href="/index" class="top_button_a">TOP</a></p>
        </div>
        <div class="listing_button">
          <p><a href="/listing" class="listing_button_a">出品</a></p>
        </div>
      </div>

      <footer class="mypage_footer"></footer>

  </body>