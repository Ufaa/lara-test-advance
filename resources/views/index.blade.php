<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravelテスト応用編</title>
</head>

<body>
  <div class="faq-box">
    <form action="/" method="POST">
      @csrf
      <p>トップページ</p>
      <p>氏名</p>
      <input type="text" name="name" class="" placeholder="" style="width: 200px;">
      <p>メールアドレス</p>
      <input type="text" name="address" class="" placeholder="" style="width: 200px;">
      <br>
      <button type="submit" class="btn btn-primary">送信する</button>
    </form>
  </div>


</body>

</html>