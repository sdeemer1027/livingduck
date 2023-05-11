  @extends('layouts.app')

@section('content')

  {{--$duck--}}

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10">
              <div class="card">
                  <div class="card-header">
              <h1>My virtual pet duck</h1>
                  </div>
                  <div class="card-body">
          @foreach($duck as $ducks)
              <p>Name: {{ $ducks->name }}</p>
              <p>Hunger level: {{ $ducks->hunger }}</p>
              <p>Happy level: {{ $ducks->happiness }}</p>
          @endforeach
                  </div>



    </div>
      </div>
  </div>
  <form method="POST" action="{{ route('virtual-pet-duck.feed', ['duck' => $ducks->id]) }}">
  @csrf
  <!-- form inputs -->
      <button type="submit">Feed</button>
  </form>


  <form method="POST" action="{{ route('virtual-pet-duck.play', ['duck' => $ducks->id]) }}">
  @csrf
  <!-- form inputs -->
      <button type="submit">play</button>
  </form>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
      $(document).ready(function() {
          setInterval(function() {
              $.ajax({
                  url: "{{ route('virtual-pet-duck.time-passes', ['duck' => $ducks->id]) }}",
                  method: "POST",
                  data: {
                      _token: "{{ csrf_token() }}"
                  },
                  success: function(response) {
                      // update the virtual pet duck status on the page
                  },
                  error: function(xhr) {
                      console.log(xhr.responseText);
                  }
              });
          }, 10000);
      });
  </script>
@endsection
