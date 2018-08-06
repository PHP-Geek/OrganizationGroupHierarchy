<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot() {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map() {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
        $this->mapSuperadminRoutes();
        $this->mapUserAdminRoutes();
        $this->mapAnalystRoutes();
        $this->mapSessionLeaderRoutes();
        $this->mapReviewerRoutes();
        $this->mapGroupManagerRoutes();
        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes() {
        Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes() {
        Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));
    }

    /**
     * Define the "Superadmin" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapSuperadminRoutes() {
        Route::middleware(['web', 'superadmin'])
                ->namespace($this->namespace)
                ->group(base_path('routes/superadmin.php'));
    }

    /**
     * Define the "user admin" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapUserAdminRoutes() {
        Route::middleware(['web', 'userAdmin'])
                ->namespace($this->namespace)
                ->group(base_path('routes/userAdmin.php'));
    }

    /**
     * Define the "Analyst" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapAnalystRoutes() {
        Route::middleware('analyst')
                ->namespace($this->namespace)
                ->group(base_path('routes/analyst.php'));
    }

    /**
     * Define the "Analyst" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapSessionLeaderRoutes() {
        Route::middleware('sessionLeader')
                ->namespace($this->namespace)
                ->group(base_path('routes/sessionLeader.php'));
    }

    /**
     * Define the "reviewer" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapReviewerRoutes() {
        Route::middleware('reviewer')
                ->namespace($this->namespace)
                ->group(base_path('routes/reviewer.php'));
    }

     /**
     * Define the "group manager" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapGroupManagerRoutes() {
        Route::middleware(['web','groupManager'])
                ->namespace($this->namespace)
                ->group(base_path('routes/groupManager.php'));
    }

}
