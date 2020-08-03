@extends('layouts.index')
@section('content')
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $news['title'] }}</h2>
        <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>
        <p>{!! $news['text'] !!}</p>

    </div><!-- /.blog-post -->
@stop

@push('js')
    <script>
          console.log("some text");
    </script>
@endpush