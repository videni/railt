<?php
/**
 * This file is part of Railt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Railt\TypeSystem\Executor\Loader;

use Phplrt\Contracts\Ast\NodeInterface;
use Railt\TypeSystem\Document\MutableDocument;
use Railt\TypeSystem\Exception\TypeErrorException;
use Phplrt\Source\Exception\NotAccessibleException;
use Railt\Parser\Node\Generic\RootDirectiveCollection;

/**
 * Class DirectivesRegistrarVisitor
 */
class DirectivesRegistrarVisitor extends RegistrarVisitor
{
    /**
     * @param NodeInterface $node
     * @return void
     * @throws NotAccessibleException
     * @throws TypeErrorException
     * @throws \RuntimeException
     */
    public function leave(NodeInterface $node): void
    {
        if ($node instanceof RootDirectiveCollection) {
            $this->registerDirective($node);
        }
    }

    /**
     * @param RootDirectiveCollection $directives
     * @return void
     * @throws NotAccessibleException
     * @throws TypeErrorException
     * @throws \RuntimeException
     */
    private function registerDirective(RootDirectiveCollection $directives): void
    {
        $this->mutate(static function (MutableDocument $document) use ($directives) {
            foreach ($directives as $directive) {
                $document->withExecution($directive);
            }
        });
    }
}