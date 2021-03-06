<?php

declare(strict_types = 1);

namespace Avtocod\B2BApi\Tests\Unit\Exceptions;

use RuntimeException;
use Avtocod\B2BApi\Tests\AbstractTestCase;
use Avtocod\B2BApi\Exceptions\TokenParserException;
use Avtocod\B2BApi\Exceptions\B2BApiExceptionInterface;

/**
 * @covers \Avtocod\B2BApi\Exceptions\TokenParserException
 */
class TokenParserExceptionTest extends AbstractTestCase
{
    /**
     * @return void
     */
    public function testInstance(): void
    {
        $this->assertInstanceOf(RuntimeException::class, new TokenParserException);
        $this->assertInstanceOf(B2BApiExceptionInterface::class, new TokenParserException);
    }

    /**
     * @return void
     */
    public function testFabrics(): void
    {
        $this->assertRegExp('~not.*parse.*token~i', TokenParserException::cannotParseToken()->getMessage());
    }
}
