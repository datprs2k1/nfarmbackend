<?php declare(strict_types=1);

namespace App\Enums\User;

use BenSampo\Enum\Attributes\Description;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class VerifyEmailEnum extends Enum
{
    #[Description("Chưa xác minh")]
    public const NOT_VERIFY = 0;
    #[Description("Đã xác minh")]
    public const VERIFIED = 1;
}
