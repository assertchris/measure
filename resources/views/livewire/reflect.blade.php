<div class="flex flex-col flex-grow w-full">
    @unless($hasAnsweredQuestions)
        @unless($hasSelectedDate)
            <livewire:select-date :date="$date" />
        @else
            <livewire:answer-questions :userId="auth()->user()->id" :date="$date" />
        @endif
    @else
        Good job!
    @endif
</div>
