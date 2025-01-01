<?php

namespace App\Providers;

use App\Http\Controllers\VersionController;
use App\Nova\Customer;
use App\Nova\Supplier;
use App\Nova\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Dashboards\Main;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Badge;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use Laravel\Fortify\Features;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::dashboard(Main::class)->icon('chart-bar'),
                MenuSection::make('Ventas', [
                    // Usar el modelo Eloquent para contar los clientes
                    MenuItem::resource(Customer::class)
                        ->withBadge(Badge::make(\App\Models\Customer::count() > 0 ? Customer::count() : 'Sin clientes', 'success')),  // Muestra un mensaje si no hay clientes
                ])->icon('cash')->collapsable(),
                MenuSection::make('Compras', [
                    MenuItem::resource(Supplier::class),
                ])->icon('shopping-bag')->collapsable(),
                MenuSection::make('Almacen', [
                    MenuItem::resource(Customer::class),
                ])->icon('cash')->collapsable(),
                MenuSection::make('Contabilidad', [
                    MenuItem::resource(Customer::class),
                ])->icon('currency-bangladeshi')->collapsable(),
                MenuSection::make('Reportes', [
                    MenuItem::resource(Customer::class),
                ])->icon('document-report')->collapsable(),
                MenuSection::make('RRHH', [
                    MenuItem::resource(Customer::class),
                ])->icon('user-group')->collapsable(),
                MenuSection::make('Configuracion', [
                    MenuItem::resource(Customer::class),
                ])->icon('adjustments')->collapsable(),
                MenuSection::make('Accesos', [
                    MenuItem::resource(User::class),
                ])->icon('cash')->collapsable(),
                MenuSection::make('Version')
                    ->path('/resources/issues/lens/new-issues')
                    ->withBadge(Badge::make(VersionController::getLatestVersionFromChangelog(), 'success'))
                    ->icon('document-text')
            ];
        });

        Nova::withBreadcrumbs();
        Nova::withoutThemeSwitcher();

        Nova::footer(function ($request) {
            return Blade::render('
                @env(\'prod\')
                    This is production!
                @endenv
                 <div class="footer-year" style="text-align: center;">
                    CLINICARE - IZZY &copy; 2024 - ' . date('Y') . ' Copyright: Todos los derechos reservados
                </div>
            ');
        });
    }

     /**
     * Register the configurations for Laravel Fortify.
     */
    protected function fortify(): void
    {
        Nova::fortify()
            ->features([
                Features::updatePasswords(),
                Features::emailVerification(),
                Features::twoFactorAuthentication(['confirm' => true, 'confirmPassword' => true]),
            ])
            ->register();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
            ->withAuthenticationRoutes(default: true)
            ->withPasswordResetRoutes()
            ->withoutEmailVerificationRoutes()
            ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
    }
}
