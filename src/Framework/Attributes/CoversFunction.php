<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
final class CoversFunction
{
    /**
     * @var string
     */
    private $functionName;

    public function __construct(string $functionName)
    {
        $this->functionName = $functionName;
    }

    public function functionName(): string
    {
        return $this->functionName;
    }
}
