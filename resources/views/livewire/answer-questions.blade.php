<div class="flex flex-col flex-grow w-full items-start" wire:key="{{ $question }}">
    <div class="flex flex-col w-full flex-shrink">
        <h1 class="text-3xl font-semibold">
            @lang("questions.{$question}_title")
        </h1>
        <div class="mb-2">
            @markdownLang("questions.{$question}_description")
        </div>
    </div>
    <div class="flex flex-col flex-grow w-full">
        @for ($i = 0; $i < 3; $i++)
            <label class="flex flex-row items-center w-full mb-2">
                <input
                    type="radio"
                    class="form-radio"
                    value="{{ $i }}"
                    name="answer_{{ $question }}"
                    wire:change="onChange('answer_{{ $question }}', $event.target.value)"
                    @if($answer->{"answer_$question"} === $i)
                        checked="checked"
                    @endif
                >
                <span class="ml-2">
                    {{ $i }}
                </span>
            </label>
        @endfor
        <label class="flex flex-col w-full mb-2">
            <span class="text-gray-700">Comment</span>
            <textarea
                class="form-textarea mt-1 block w-full"
                rows="10"
                name="comment_{{ $question }}"
                wire:change="onChange('comment_{{ $question }}', $event.target.value)"
            >{{ $answer->{"comment_$question"} }}</textarea>
        </label>
    </div>
    <div class="flex flex-row w-full flex-shrink my-8">
        <button type="button" wire:click="onBack" class="bg-gray-400 px-4 py-2 rounded text-white">back</button>
        <button type="button" wire:click="onForward" class="bg-blue-500 px-4 py-2 rounded text-white ml-2">forward</button>
    </div>
</div>
