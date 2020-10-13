<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <style>
    *,
    body {
      margin: 0;
      padding: 0;
    }

    header {
      background-image: url("https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2767&q=80");
      min-height: 700px;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .overlay {
      min-height: 700px;
      background-color: rgb(0, 0, 0, 0.7);
    }

    h1 {
      color: white;
      font-size: 68px;
      text-align: center;
      margin: auto;
      padding-top: 180px;
    }

    p {
      color: white;
      font-size: 32px;
      text-align: center;
      margin: auto;
      padding-top: 30px;
    }

    span {
      text-shadow: 1px 1px 2px black, 3px 3px 3px red, 5px 5px 6px green;
    }

    .tomatoes {
      display: flex;
      justify-content: center;
    }

    .tomatoes img {
      height: 80px;
      padding: 50px 20px;
    }

    footer {
      background-color: black;
      color: white;
    }

    .footer {
      font-size: 16px;
      padding-bottom: 20px;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: black;
      display: flex;
      justify-content: flex-end;
      padding-right: 120px;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 30px;
      text-decoration: none;
      font-size: 20px;
    }

    /* Change the link color to #111 (black) on hover */
    li a:hover {
      background-color: #111;
    }

    .title {
      color: black;
      font-size: 24px;
      padding-top: 20px;
    }

    .meals {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      grid-column-gap: 50px;
      justify-content: center;
      padding: 60px 120px;
    }

    .image-container {
      text-align: center;
    }

    .meal img {
      width: 250px;
      height: 250px;
      object-fit: cover;
    }

    h2 {
      text-align: center;
      padding-top: 40px;
      font-size: 40px;
    }

    .description {
      color: black;
      font-size: 18px;
      padding: 16px 24px;
      font-style: italic;
    }
  </style>
</head>

<body>
  <nav>
    <ul>
      <li><a href="/" accesskey="1">HOME</a></li>
      <li><a href="/reviews" accesskey="2">REVIEWS</a></li>
    </ul>
  </nav>

  @yield ('header')


  <main>
    @yield ('meals')
    @yield ('content')
  </main>

  <footer>
    <p class="footer">author: Lisa Baetsle</p>
  </footer>
</body>

</html>