@extends ('layout/layout')

@section ('content')
<div class="container-reviews">
  <div class="write-review">
    <h2>You can leave a review:</h2>

    <form action="/action_page.php">
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name" value="Jane"><br>
      <p class="star-label">Rating:</p>
      <div class="star-widget">
        <input type="radio" name="rate" id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1">
        <label for="rate-1" class="fas fa-star"></label> <br>
      </div>
      <label for="comment">Comment:</label><br>
      <textarea name="comment" rows="10" cols="30"></textarea><br>
      <input type="submit" value="Submit">
    </form>
  </div>
  @endsection

  @section ('reviews')
  <div class="reviews">
    <h2>Reviews from our guests</h2>
    <ul>
      @foreach ($reviews as $review)
      <li>
        <p class="writer">Writer: {{ $review->name}}</p>
        <p class="rating">{{ $review->rating}}</p>
        <p class="comment">{{ $review->comment}}</p>
      </li>
      @endforeach
    </ul>
  </div>

  @endsection