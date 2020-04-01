<div class="flex flex-col flex-grow w-full">
    @unless($hasAnsweredQuestions)
        @unless($hasSelectedDate)
            <livewire:select-date :selected="$selected" />
        @else
            <livewire:answer-questions :userId="auth()->user()->id" :selected="$selected" :key="$selected" />
        @endif
    @else
        Good job!
    @endif
</div>
