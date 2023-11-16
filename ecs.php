<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer;
use PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocLineSpanFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([
        __DIR__ . '/src',
        __DIR__ . '/ecs.php',
    ]);

    $ecsConfig->sets([
        SetList::ARRAY,
        SetList::CLEAN_CODE,
        SetList::COMMENTS,
        SetList::DOCBLOCK,
        SetList::NAMESPACES,
        SetList::PSR_12,
        SetList::SPACES,
    ]);

    $ecsConfig->ruleWithConfiguration(TrailingCommaInMultilineFixer::class, [
        'elements' => ['arguments', 'arrays', 'match', 'parameters'],
    ]);

    $ecsConfig->ruleWithConfiguration(PhpdocLineSpanFixer::class, [
        'const' => 'single',
        'property' => 'single',
        'method' => 'single',
    ]);

    $ecsConfig->skip([
        NotOperatorWithSuccessorSpaceFixer::class,
    ]);
};
