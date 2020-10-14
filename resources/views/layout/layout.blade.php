<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="styles/navigation.css">
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/footer.css">

  <title>Home</title>
</head>

<body>
  <nav>
    <ul>
      <li><img src="https://www.flaticon.com/svg/static/icons/svg/2909/2909894.svg" alt="tomato">Hakuna Tomatata</li>
      <li id="right" class="{{Request::path() === '/' ? 'current_page_item' : ''}}"><a href="/" accesskey="1">HOME</a></li>
      <li class="{{ Request::path() === 'reviews' ? 'current_page_item' : '' }}"><a href="/reviews" accesskey="2">REVIEWS</a></li>
    </ul>
  </nav>

  @yield ('header')


  <main>
    @yield ('meals')
    @yield ('content')
    @yield ('reviews')
  </main>

  <footer>
    <p class="footer">author: Lisa Baetsle</p>
  </footer>
</body>

</html>