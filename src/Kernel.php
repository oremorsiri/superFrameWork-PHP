<?php
namespace App;

use Kint;
use App\routing\Web;
use \DI\Container;
use \DI\ContainerBuilder;

class Kernel //4. es el core y arranca los servicios de nuestros servicios. Cargamos el objeto mediante el constructor 
{
    private $container;
    private $logger;

    public function __construct(){
        $this->container = $this->createContainer();
        $this->logger = $this->container->get(LogManager::class);
    }

    public function init(){
        $this->logger->info("Arrancamos el Server");
        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $routeManager = $this->container->get(RouterManager::class);
        $routeManager->dispatch($httpMethod, $uri, Web::getDispatcher());
    }

    public function createContainer(): Container {
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->useAutowiring(true);
        return $containerBuilder->build();

    }
}
