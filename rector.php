<?php

use Rector\Config\RectorConfig;
use Rector\Php80\Rector\Class_\ClassPropertyAssignToConstructorPromotionRector;

// PHP sets follow the composer.json PHP floor, so the output stays installable there.
return RectorConfig::configure()
    ->withPaths(['src', 'tests'])
    ->withPhpSets()
    ->withComposerBased(phpunit: true)
    // Promotion renames public constructor parameters, breaking named arguments.
    ->withSkip([ClassPropertyAssignToConstructorPromotionRector::class]);
