<?php
/**
 * This file is part of Railt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Railt\HttpFactory;

use Psr\Http\Message\ServerRequestInterface;
use Railt\Http\RequestInterface;

/**
 * Interface RequestFactoryInterface
 */
interface RequestFactoryInterface
{
    /**
     * @param ServerRequestInterface $request
     * @return RequestInterface|null
     */
    public function fromServerRequest(ServerRequestInterface $request): ?RequestInterface;

    /**
     * @return RequestInterface
     */
    public function empty(): RequestInterface;
}