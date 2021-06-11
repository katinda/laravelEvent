<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Events</title>
</head>
<body>
    <h1>{{ $events->count() }} Events </h1>

    @foreach($events as $event)
    <article >
        <h1>{{ $event->name }}</h1>
        <p>{{ $event->description }}</p>
        <p>{!! $formatPrice($event) !!}</p>
        <p><strike>{{ $event->fake_price }}euros</strike></p>
        <p>Lieu: {{ $event->location }}</p>
        <p>Date: {{ $formatDate($event->starts_at) }}</p>
    </article>
    @if(! $loop->last)
    <hr>
    @endif
   @endforeach 
</body>
</html>