<?php

namespace Skoellen\MixDesigner;

use Jenssegers\Blade\Blade;

class View {

    public function make(array $parameters)
    {
        $blade = new Blade('../resources/views', '../bootstrap/cache');
        echo $blade->make($parameters['view']);
    }

}
