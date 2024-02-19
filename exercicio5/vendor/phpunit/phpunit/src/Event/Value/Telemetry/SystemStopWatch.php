<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Telemetry;

use function hrtime;
use PHPUnit\Event\InvalidArgumentException;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class SystemStopWatch implements StopWatch
{
    /**
     * @throws InvalidArgumentException
     */
    public function current(): HRTime
    {
        return HRTime::fromSecondsAndNanoseconds(...hrtime());
    }
}
