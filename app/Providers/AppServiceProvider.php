<?php

namespace App\Providers;

use App\Models\Test;
use App\Observers\TestObserve;
use Illuminate\View\View as MyView;
use Illuminate\Support\Facades\View;
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
        Test::observe(new TestObserve);
        Blade::directive('convUnix', function ($unix) {
            return "<?php echo date('m/d/Y H:i',$unix); ?>";
        });

        Blade::if('checkVal', function ($val) {
            return '100' == $val;
        });

        View::composer('*', function(MyView $view){
            return $view->with(['MyVar' => "Message From Composer"]);
        });
    }
}
