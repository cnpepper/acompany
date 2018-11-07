<?php
namespace App\Logging;

class CustomizeFormatter{
    public function __invoke($logger){
        foreach ($logger->getHandlers() as $handler) {
            //$handler->setFormatter(...);
        }
    }
}
?>