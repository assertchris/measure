<div class="flex flex-row w-full mb-2">
    <label class="flex flex-row items-center w-full">
        <span class="flex">
            Please enter your line manager's email:
        </span>
        <input
            type="text"
            class="form-input"
            value="{{ $lineManagerEmail }}"
            wire:change="onChangeEmail($event.target.value)"
        >
    </label>
</div>
