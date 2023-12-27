<?php 

namespace ChrisKonnertz\OpenGraph;

use Illuminate\Support\Facades\Facade;

/**
 * Facade for Laravel integration
 */
class OpenGraphFacade extends Facade 
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { 
        return 'opengraph'; 
    }

}
