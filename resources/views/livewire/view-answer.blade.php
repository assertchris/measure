<div class="flex flex-col w-full">
    <h1 class="text-3xl font-semibold">
        {{ $answer->from->name }} <span class="text-base">on {{ $answer->answered_for->format('Y-m-d') }}</span>
    </h1>
    @foreach(static::QUESTIONS as $question)
        @if(empty($answer->{"answer_{$question}"}) and empty($answer->{"comment_{$question}"}))
            @continue
        @endif
        <div class="flex flex-col max-w-xl">
            <div class="opacity-25">
                <h2 class="text-2xl font-semibold">
                    @lang("questions.{$question}_title")
                </h2>
                <div class="mb-2">
                    @markdownLang("questions.{$question}_description")
                </div>
            </div>
            @if($answer->{"answer_{$question}"} !== null)
                <div>
                    @markdownLang('questions.score_' . $answer->{"answer_{$question}"})
                </div>
            @endif
            @if($answer->{"comment_{$question}"} !== null)
                <div>
                    What is going well and what could improve: {{ $answer->{"comment_{$question}"} }}
                </div>
            @endif
        </div>
    @endforeach
</div>
