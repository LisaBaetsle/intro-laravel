<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=McLaren&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="styles/navigation.css">
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/footer.css">


  <title>Home</title>
</head>

<body>
  <nav>
    <ul>
      <li><img src="https://www.flaticon.com/svg/static/icons/svg/2909/2909894.svg" alt="tomato"></li>
      <li class="logo-name">HAKUNA TOMATATA</li>
      <li id="right" class="{{Request::path() === '/' ? 'current_page_item' : ''}}"><a href="/" accesskey="1">HOME</a></li>
      <li class="{{ Request::path() === 'reviews' ? 'current_page_item' : '' }}"><a href="/reviews" accesskey="2">REVIEWS</a></li>
    </ul>
  </nav>

  @yield ('header')


  <main>
    @yield ('content')
  </main>

  <footer>
    <p class="footer">author: Lisa Baetsle</p>
  </footer>
</body>

</html>