<div>
    @unless($hasSelectedDate)
        <livewire:select-date :date="$date" />
    @endif
    {{ $date }}
</div>
