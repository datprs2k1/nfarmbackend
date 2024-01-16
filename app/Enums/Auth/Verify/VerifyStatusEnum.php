<?php declare(strict_types=1);

namespace App\Enums\Auth\Verify;

use BenSampo\Enum\Attributes\Description;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class VerifyStatusEnum extends Enum
{
    #[Description("Chưa dùng")]
    public const NOT_USE = 0;
    #[Description("Đã được dùng")]
    public const USED = 1;
}
