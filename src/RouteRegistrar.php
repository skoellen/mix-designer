<?php

namespace Skoellen\MixDesigner;

use Skoellen\MixDesigner\View;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\Loader\YamlFileLoader;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

class RouteRegistrar {

    protected $basePath;
    protected $routesFileName;
    protected $requestContext;
    protected $view;

    public function __construct()
    {
        $this->basePath = __DIR__.'/../.';
        $this->routesFileName = 'routes.yaml';

        $this->requestContext = new RequestContext();
        $this->requestContext->fromRequest(Request::createFromGlobals());

        $this->view = new View();
    }

    public function register ()
    {
        $fileLocator = new FileLocator(array($this->basePath));
        $loader = new YamlFileLoader($fileLocator);
        $routes = $loader->load($this->routesFileName);
        $this->urlMatcher($routes, $this->requestContext);
    }

    public function urlMatcher(RouteCollection $routes, RequestContext $context)
    {
        try {
            $matcher = new UrlMatcher($routes, $context);
            $parameters = $matcher->match($context->getPathInfo());
            $this->view->make($parameters);
        } 
        catch (ResourceNotFoundException $e) {
            echo $e->getMessage();
        }
    
    }
}
