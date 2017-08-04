<?php
/**
 * This file is part of Railgun package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Serafim\Railgun\Reflection;

use Hoa\Compiler\Llk\TreeNode;
use Serafim\Railgun\Exceptions\IndeterminateBehaviorException;
use Serafim\Railgun\Reflection\Abstraction\EnumTypeInterface;
use Serafim\Railgun\Reflection\Abstraction\EnumValueInterface;
use Serafim\Railgun\Reflection\Common\Directives;
use Serafim\Railgun\Reflection\Common\HasLinkingStageInterface;
use Serafim\Railgun\Reflection\Common\HasName;
use Serafim\Railgun\Reflection\Common\LinkingStage;

/**
 * Class EnumDefinition
 * @package Serafim\Railgun\Reflection
 */
class EnumDefinition extends Definition implements
    EnumTypeInterface,
    HasLinkingStageInterface
{
    use HasName;
    use Directives;
    use LinkingStage;

    public function compile(Document $document, TreeNode $ast): ?TreeNode
    {
        IndeterminateBehaviorException::notImplemented(__METHOD__);
    }

    public function getValues(): iterable
    {
        IndeterminateBehaviorException::notImplemented(__METHOD__);
    }

    public function hasValue(string $name): bool
    {
        IndeterminateBehaviorException::notImplemented(__METHOD__);
    }

    public function getValue(string $name): ?EnumValueInterface
    {
        IndeterminateBehaviorException::notImplemented(__METHOD__);
    }

    /**
     * @return string
     */
    public function getTypeName(): string
    {
        return 'Enum';
    }
}
