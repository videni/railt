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
use Serafim\Railgun\Compiler\Dictionary;
use Serafim\Railgun\Reflection\Abstraction\NamedDefinitionInterface;
use Serafim\Railgun\Reflection\Abstraction\UnionTypeInterface;
use Serafim\Railgun\Reflection\Common\Directives;

/**
 * Class UnionDefinition
 * @package Serafim\Railgun\Reflection
 */
class UnionDefinition extends Definition implements UnionTypeInterface
{
    use Directives;

    protected function compile(TreeNode $ast, Dictionary $dictionary): ?TreeNode
    {
        throw new \LogicException(__METHOD__ . ' not implemented yet');
    }

    public function getTypes(): iterable
    {
        throw new \LogicException(__METHOD__ . ' not implemented yet');
    }

    public function hasType(string $name): bool
    {
        throw new \LogicException(__METHOD__ . ' not implemented yet');
    }

    public function getType(string $name): ?NamedDefinitionInterface
    {
        throw new \LogicException(__METHOD__ . ' not implemented yet');
    }

    /**
     * @return string
     */
    public function getTypeName(): string
    {
        return 'Union';
    }
}