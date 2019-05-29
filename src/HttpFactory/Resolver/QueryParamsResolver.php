<?php
/**
 * This file is part of Railt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Railt\HttpFactory\Resolver;

use Psr\Http\Message\ServerRequestInterface;
use Railt\Http\Request;
use Railt\Http\RequestInterface;
use Railt\HttpFactory\Resolver;

/**
 * Class QueryParamsResolver
 */
class QueryParamsResolver extends Resolver
{
    /**
     * @param ServerRequestInterface $request
     * @return RequestInterface|null
     */
    public function resolve(ServerRequestInterface $request): ?RequestInterface
    {
        $query = $request->getQueryParams();

        if ($this->match($query)) {
            return new Request($this->query($query), $this->variables($query));
        }

        return null;
    }
}
