<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->


    @if (session()->has('success'))
       {{session()->get('success')}}
       @elseif ($errors->any())
          @foreach ($errors->all() as $message )
              {{$message}}

          @endforeach

    @endif
</div>
