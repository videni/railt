<?php
/**
 * This file is part of Railt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Railt\Reflection\Reflection\Common;

use Hoa\Compiler\Llk\TreeNode;
use Railt\Reflection\Contracts\ArgumentInterface;
use Railt\Reflection\Contracts\Common\HasArgumentsInterface;
use Railt\Reflection\Contracts\DocumentInterface;
use Railt\Reflection\Contracts\NamedDefinitionInterface;
use Railt\Reflection\Reflection\Argument;

/**
 * Trait HasArguments
 * @package Railt\Reflection\Reflection\Common
 * @mixin HasArgumentsInterface
 */
trait Arguments
{
    /**
     * @var array|ArgumentInterface[]
     */
    private $arguments = [];

    /**
     * @return iterable|ArgumentInterface[]
     */
    public function getArguments(): iterable
    {
        return array_values($this->arguments);
    }

    /**
     * @param string $name
     * @return bool
     */
    public function hasArgument(string $name): bool
    {
        return array_key_exists($name, $this->arguments);
    }

    /**
     * @param string $name
     * @return null|ArgumentInterface
     */
    public function getArgument(string $name): ?ArgumentInterface
    {
        return $this->arguments[$name] ?? null;
    }

    /**
     * @param DocumentInterface $document
     * @param TreeNode $ast
     * @throws \LogicException
     */
    protected function compileArguments(DocumentInterface $document, TreeNode $ast): void
    {
        $allowed = $this->isArgument($ast);

        if ($allowed && $this instanceof NamedDefinitionInterface) {
            $argument = new Argument($document, $ast, $this);
            $this->arguments[$argument->getName()] = $argument;
        }
    }

    /**
     * @param TreeNode $ast
     * @return bool
     */
    private function isArgument(TreeNode $ast): bool
    {
        return in_array($ast->getId(), (array)($this->astHasArguments ?? ['#Argument']), true);
    }
}
