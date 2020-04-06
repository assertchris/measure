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

    @if(auth()->user()->answersFromOthers()->count())
        <div>
            Recent feedback:
            @foreach(auth()->user()->answersFromOthers as $answer)
                <div>
                    <a href="{{ route('show-view-feedback', $answer) }}" class="text-blue-500 underline">
                        {{ $answer->from->name }} on {{ $answer->answered_for->format('Y-m-d') }}
                    </a>
                </div>
            @endforeach
        </div>
    @endif
@endsection
