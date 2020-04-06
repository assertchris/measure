<div class="flex flex-col w-full">
    <div class="flex flex-row w-full">
        <div class="flex flex-row flex-grow items-center justify-center">
            <button wire:click="onPreviousMonth" class="m-2 text-blue-500 underline">
                ←
            </button>
            <span class="text-gray-900 text-sm">
                {{ \Carbon\Carbon::parse($useYear . '-' . $useMonth . '-' . $this->day)->format('Y-m-d') }}
            </span>
            <button wire:click="onNextMonth" class="m-2 text-blue-500 underline">
                →
            </button>
        </div>
        <div class="flex flex-row flex-shrink">
            <button wire:click="onToday" class="text-blue-500 underline">
                Today
            </button>
        </div>
    </div>
    <div class="flex flex-col w-full">
        @foreach($calendarMonth as $week)
            <div class="flex flex-row w-full">
                @foreach($week as $day) 
                    <button
                        wire:click="$emit('onSelectedDate', '{{ $day->format('Y-m-d') }}')"
                        class="
                            flex flex-grow h-32 items-center justify-center m-2 bg-gray-100
                            @if($day->format('Y-m-d') == $selectedDate)
                                bg-blue-200
                            @endif
                            @if($dates->contains($day->format('Y-m-d')))
                                bg-green-200
                            @endif
                        "
                    >
                        @if($day->format('Y-m-d') == $selectedDate)
                            Today
                        @else
                            {{ $day->format('d') }}
                        @endif
                    </button>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
