<div class="flex flex-row w-full mb-2">
    <label class="flex flex-row items-center w-full">
        <span class="flex">
            Please enter the email of the user...
        </span>
        <input
            type="text"
            class="form-input"
            value="{{ $forUserEmail }}"
            wire:change="$set('forUserEmail', $event.target.value)"
        >
        <button type="button" wire:click="onClickOk">Ok</button>
    </label>
</div>
