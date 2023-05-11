  @extends('layouts.app')

@section('content')

  {{--$duck--}}

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10">
              <div class="card">
                  <div class="card-header">
                      @foreach($duck as $ducks)

                  @if($ducks->happiness >'69')
                      <img src="/duck-happy.jpg" class="rounded" height="50px">
                          @else
                              <img src="/duck-mad.jpeg" class="rounded" height="50px">
                          @endif
                   ----------
                  My virtual pet duck
                  ----------

<span style="float: right">
                          <form action="{{ route('virtual-pet-duck.destroy', ['duck' => $ducks->id]) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Destroy</button>
                          </form>
</span>


                      @endforeach
                  </div>
                  <span class="card-body">
          @foreach($duck as $ducks)
              <p>My  Name is :<strong>{{ $ducks->name }} </strong>
              </p>
              <p>Hunger level: {{ $ducks->hunger }}   
                          <form method="POST" action="{{ route('virtual-pet-duck.feed', ['duck' => $ducks->id]) }}">
                          @csrf
                          <!-- form inputs -->
                              <button type="submit" class="btn btn-primary">Feed Me </button>
                          </form>


              </p>
              <p>Happy level: {{ $ducks->happiness }}

                          <form method="POST" action="{{ route('virtual-pet-duck.play', ['duck' => $ducks->id]) }}">
                          @csrf
                          <!-- form inputs -->
                              <button type="submit"  class="btn btn-primary">Pet Me</button>
                          </form>


              </p>





          @endforeach
<hr>
              this is me when I am happy level above 70<br>
              <img src="/duck-happy.jpg" class="rounded" height="50px"><br>
              but if my happy drops below 70 then I get mad.. <BR>
              <img src="/duck-mad.jpeg" class="rounded" height="50px"><br>

                  </div>



    </div>
      </div>
  </div>


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
                      setTimeout(function() {
                          location.reload();
                      }, 5000);
                  },
                  error: function(xhr) {
                      console.log(xhr.responseText);
                  }
              });
          }, 10000);
      });
  </script>




@endsection
