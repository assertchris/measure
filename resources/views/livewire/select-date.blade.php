<div>
    <input type="date" wire:change="$set('date', $event.target.value)" value="{{ $date }}" />
    <button type="button" wire:click="onSelectDate">select</button>
</div>
