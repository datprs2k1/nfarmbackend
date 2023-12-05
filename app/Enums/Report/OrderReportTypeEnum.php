<?php declare(strict_types=1);

namespace App\Enums\Report;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class OrderReportTypeEnum extends Enum
{

    public const TODAY = 0;
    public const YESTERDAY = 1;
    public const LASTWEEK = 1;
    public const LASTMONTH = 1;
}
