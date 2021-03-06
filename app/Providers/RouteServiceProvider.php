<?php namespace App\Providers;

use App\Beacon;
use App\Estudiante;
use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function boot( Router $router )
    {
        parent::boot( $router );
        $router->bind( 'beacons', function ( $minor ){
            return Beacon::firstOrNew( [ 'minor' => $minor ] );
        } );
        $router->model( 'estudiantes', 'App\Estudiante' );
        $router->bind( 'estudiantes', function ( $code )
        {
            try
            {
                return Estudiante::firstOrNew( [ 'code' => $code ] );
            } catch ( \Exception $e )
            {
                return new Estudiante( [ 'name' => '' ] );
            }
        } );

    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function map( Router $router )
    {
        $router->group( [ 'namespace' => $this->namespace ], function ( $router )
        {
            require app_path( 'Http/routes.php' );
        } );
    }

}
