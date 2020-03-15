<div>
    <label class="flex flex-col w-full mb-2">
        <span class="text-gray-700">Date</span>
        <input type="date" wire:change="$set('date', $event.target.value)" value="{{ $date }}" class="form-input mt-1 block w-full">
    </label>
    <button type="button" wire:click="onSelectDate" class="bg-blue-500 px-4 py-2 rounded text-white">select</button>
</div>
