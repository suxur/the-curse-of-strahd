@extends('_layouts.master')

@section('body')
    <section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
        <div class="mb-10 lg:mb-24">
            <h1>{{ $page->siteName }}</h1>
            <h2>Sessions</h2>
            <ul>
                @foreach ($sessions as $session)
                    <li><a href="{{ $session->getUrl() }}">{{ $session->title }}</a></li>
                @endforeach
            </ul>
            <h2>Locations</h2>
            <ul>
                @foreach ($locations as $location)
                    <li><a href="{{ $location->getUrl() }}">{{ $location->title }}</a></li>
                @endforeach
            </ul>
            <h2>Pages</h2>
            <ul>
                @foreach ($pages as $page)
                    <li><a href="{{ $page->getUrl() }}">{{ $page->title }}</a></li>
                @endforeach
            </ul>
            <h2>Recaps</h2>
            <ul>
                @foreach ($recaps as $recap)
                    <li><a href="{{ $recap->getUrl() }}">{{ $recap->title }}</a></li>
                @endforeach
            </ul>

        </div>
    </section>
@endsection
