@extends ('layout/layout')

@section ('content')
<h2>Let's write some reviews!</h2>

<form action="/action_page.php">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" value="Jane"><br>
  <label for="comment">Comment:</label><br>
  <textarea name="comment" rows="10" cols="30"></textarea><br>
  <input type="submit" value="Submit">
</form>

@endsection

@section ('reviews')
<div class="review">
  <ul>
    @foreach ($reviews as $review)
    <li>
      <p>{{ $review->name}}</p>
      <p>{{ $review->rating}}</p>
      <p>{{ $review->comment}}</p>
    </li>
    @endforeach
  </ul>
</div>

@endsection