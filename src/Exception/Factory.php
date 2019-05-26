<?php
/**
 * This file is part of Railt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Railt\Exception;

use Phplrt\Position\PositionInterface;
use Railt\Exception\GraphQLExceptionInterface as ExceptionInterface;

/**
 * Class Factory
 */
class Factory
{
    /**
     * @param \Throwable $e
     * @return GraphQLExceptionInterface
     */
    public static function wrap(\Throwable $e): ExceptionInterface
    {
        if ($e instanceof ExceptionInterface) {
            return $e;
        }

        $exception = new GraphQLException($e->getMessage(), $e->getCode(), $e);
        $exception->withColumn($e instanceof PositionInterface ? $e->getColumn() : 0);
        $exception->withLine($e->getLine());
        $exception->withFile($e->getFile());

        return $exception;
    }

    /**
     * @param \Throwable $e
     * @return \Throwable
     */
    public static function first(\Throwable $e): \Throwable
    {
        $exceptions = \iterator_to_array(static::expand($e), false);

        return \end($exceptions);
    }

    /**
     * @param \Throwable $e
     * @return \Traversable|\Throwable[]
     */
    public static function expand(\Throwable $e): \Traversable
    {
        yield $e;

        while ($e->getPrevious()) {
            yield $e = $e->getPrevious();
        }
    }

    /**
     * @param \Throwable $e
     * @return GraphQLExceptionInterface|null
     */
    public static function lastGraphQLException(\Throwable $e): ?ExceptionInterface
    {
        foreach (static::expand($e) as $exception) {
            if ($exception instanceof ExceptionInterface) {
                return $exception;
            }
        }

        return null;
    }

    /**
     * @param \Throwable $e
     * @return GraphQLExceptionInterface|null
     */
    public static function firstGraphQLException(\Throwable $e): ?ExceptionInterface
    {
        $exceptions = \iterator_to_array(static::expand($e), false);

        foreach (\array_reverse($exceptions) as $exception) {
            if ($exception instanceof ExceptionInterface) {
                return $exception;
            }
        }

        return null;
    }

    /**
     * @param string $message
     * @param int $code
     * @param \Throwable|null $prev
     * @return GraphQLExceptionInterface
     */
    public static function public(string $message = '', int $code = 0, \Throwable $prev = null): ExceptionInterface
    {
        return (new GraphQLException($message, $code, $prev))->publish();
    }

    /**
     * @param string $message
     * @param int $code
     * @param \Throwable|null $prev
     * @return GraphQLExceptionInterface
     */
    public static function internal(string $message = '', int $code = 0, \Throwable $prev = null): ExceptionInterface
    {
        return (new GraphQLException($message, $code, $prev))->hide();
    }
}
