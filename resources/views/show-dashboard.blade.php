@extends('layout')

@section('content')
    dashboard

    @if(auth()->user()->reports()->count())
        <div>
            You have the following reports:
            @foreach(auth()->user()->reports as $report)
                <div>
                    {{ $report->name }} ({{ $report->email }})
                </div>
            @endforeach
        </div>
    @endif
@endsection
