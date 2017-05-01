@extends("layout::main")

@section("content")
    @if( sizeof($news) > 0 )
        @foreach( $news as $news_entry )
        <div>
            <p>{{ $news_entry->title }}</p>
        </div>
        @endforeach
    @else
        <div class="alert alert-warning">
            Keine Newseinträge gefunden!
        </div>
    @endif
@stop