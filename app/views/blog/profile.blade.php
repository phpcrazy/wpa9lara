@section('content')
    <p>This is my body content.</p>
    {{ $test }}
    <a href="{{ URL::to('http://www.google.com') }}">Google</a>
@stop