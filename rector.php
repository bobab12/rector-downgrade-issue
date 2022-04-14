<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Set\ValueObject\DowngradeSetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(DowngradeSetList::PHP_81);
    $containerConfigurator->import(DowngradeSetList::PHP_80);
    $containerConfigurator->import(DowngradeSetList::PHP_74);
    $containerConfigurator->import(DowngradeSetList::PHP_73);
    $containerConfigurator->import(DowngradeSetList::PHP_72);
    $containerConfigurator->import(DowngradeSetList::PHP_71);

    $parameters = $containerConfigurator->parameters();
    $parameters
        ->set(Option::PATHS, [
            __DIR__ . '/app'
        ])
        ->set(Option::SKIP, [
            __DIR__ . '/app/vendor/phpstan/*',
            __DIR__ . '/app/vendor/rector/*',
        ])
        // ->set(Option::PARALLEL, true)
    ;
};
