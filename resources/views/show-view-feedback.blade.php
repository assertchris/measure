@extends('layout')

@section('content')
    <livewire:view-answer :answerId="$answer->id" />
@endsection
