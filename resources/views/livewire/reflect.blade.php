<div class="flex flex-col flex-grow w-full">
    @unless($hasAnsweredQuestions)
        @unless($hasSelectedDate)
            <livewire:select-date :selectedDate="$selectedDate" />
        @else
            <livewire:answer-questions :selectedUserId="auth()->user()->id" :selectedDate="$selectedDate" :key="$selectedDate" />
        @endif
    @else
        Good job!
    @endunless
</div>
