<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Blade::directive('date', function (string $expression) {
            return "<?php echo date('d/m/Y', strtotime($expression)) ?>";
        });

        Blade::directive('datetime', function (string $expression) {
            return "<?php echo date('d/m/Y H:i:s', strtotime($expression)) ?>";
        });

        Blade::directive('currency', function ($expression) {
            return "<?php echo number_format($expression, 2, ',', '.'); ?>";
        });

        Blade::directive('cpfcnpj', function ($expression) {
            return "<?php echo AppHelper::formatCpfCnpj($expression); ?>";
        });

        Blade::directive('phone', function ($expression) {
            return "<?php echo AppHelper::formatPhone($expression); ?>";
        });

    }
}
