<?php
/**
 * This file is part of Railt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Railt\Http\Exception\Location;

/**
 * Class Location
 */
class Location implements LocationInterface
{
    /**
     * @var int
     */
    private $line;

    /**
     * @var int
     */
    private $column;

    /**
     * GraphQLExceptionLocation constructor.
     *
     * @param int $line
     * @param int $column
     */
    public function __construct(int $line, int $column = 1)
    {
        $this->line = \max(1, $line);
        $this->column = \max(1, $column);
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            static::LOCATION_LINE_KEY   => $this->getLine(),
            static::LOCATION_COLUMN_KEY => $this->getColumn(),
        ];
    }

    /**
     * @return int
     */
    public function getLine(): int
    {
        return $this->line;
    }

    /**
     * @return int
     */
    public function getColumn(): int
    {
        return $this->column;
    }
}