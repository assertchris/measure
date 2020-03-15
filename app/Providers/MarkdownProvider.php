<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use League\CommonMark\CommonMarkConverter;

class MarkdownProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(CommonMarkConverter::class, function() {
            return new CommonMarkConverter();
        });

        Blade::directive('markdown', function ($expression) {
            $class = CommonMarkConverter::class;
            return "<?php echo app('$class')->convertToHtml($expression); ?>";
        });

        Blade::directive('markdownLang', function ($expression) {
            $class = CommonMarkConverter::class;
            return "<?php echo app('$class')->convertToHtml(__($expression)); ?>";
        });
    }
}
