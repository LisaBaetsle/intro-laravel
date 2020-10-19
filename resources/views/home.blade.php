@extends ('layout/layout')

@section ('header')

<header>
  <div class="overlay">
    <h1>Welcome to <br> <span>Hakuna Tomatata!</span></h1>
    <p>Order your favorite vegan tomato-dish below</p>
    <div class="tomatoes">
      <img src="https://www.flaticon.com/svg/static/icons/svg/2909/2909894.svg" alt="tomato">
      <img src="https://www.flaticon.com/svg/static/icons/svg/2909/2909894.svg" alt="tomato">
      <img src="https://www.flaticon.com/svg/static/icons/svg/2909/2909894.svg" alt="tomato">
    </div>
  </div>
</header>

@endsection

@section ('content')
<h2>Choose your favorite dish</h2>
<div class="meals">
  <div class="first-meal meal">
    <div class="image-container">
      <img src="https://images.unsplash.com/photo-1510693206972-df098062cb71?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1202&q=80" alt="image of vegan lasagna">
    </div>
    <div class="text">
      <p class="title">Nala's vegan Lasagna</p>
      <p class="description"> Nala's favorite dish! This vegan lasagna is layered with a tofu-cashew ricotta, red lentil marinara and loads of fresh spinach.</p>
    </div>
  </div>

  <div class="second-meal meal">
    <div class="image-container">
      <img src="https://images.unsplash.com/photo-1578020190125-f4f7c18bc9cb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="image of Tomato soup">
    </div>
    <div class="text">
      <p class="title">Tomato & Pumba's soup</p>
      <p class="description"> Just kidding! It's Timon & Pumba off course! And they are really found of this vegan soup! It's silky smooth and gets creaminess from light coconut milk. It's topped of with croutons and basil from the garden.</p>
    </div>
  </div>

  <div class="third-meal meal">
    <div class="image-container">
      <img src="https://images.unsplash.com/photo-1522666257812-173fdc2d11fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1536&q=80" alt="Image of Tomato basil pasta">
    </div>
    <div class="text">
      <p class="title">Zazou's tomato basil pasta</p>
      <p class="description"> This vegan creamy tomato basil pasta will not only blow Zazou's mind, it will also blow your mind! It’s made with a vegan creamy cashew pasta sauce, roasted veggies, and fresh basil.</p>
    </div>
  </div>
</div>

@endsection