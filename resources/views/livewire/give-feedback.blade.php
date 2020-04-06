<div class="flex flex-col flex-grow w-full">
    @unless($hasAnsweredQuestions)
        @if(!$hasSelectedUser)
            <livewire:select-user />
        @elseif(!$hasSelectedDate)
            <livewire:select-date :selectedDate="$selectedDate" />
        @else
            <livewire:answer-questions :selectedUserId="$selectedUser->id" :selectedDate="$selectedDate" :key="$selectedDate.$selectedUser->id" />
        @endif
    @else
        Good job!
    @endunless
</div>
