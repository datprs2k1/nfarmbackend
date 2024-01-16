<?php declare(strict_types=1);

namespace App\Enums\VerifyCode;

use BenSampo\Enum\Attributes\Description;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class VerifyCodeStatusEnum extends Enum
{
    #[Description("Chưa xác minh")]
    public const NOT_USE = 0;
    #[Description("Đã xác minh")]
    public const USED = 1;
}
