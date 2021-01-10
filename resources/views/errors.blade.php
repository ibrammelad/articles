@if($errors->any())
    <div class="container">
    <div class="notification is-danger">
        @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach

    </div>
    </div>
    @endif





