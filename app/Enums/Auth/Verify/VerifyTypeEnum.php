<?php declare(strict_types=1);

namespace App\Enums\Auth\Verify;

use BenSampo\Enum\Attributes\Description;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class VerifyTypeEnum extends Enum
{
    #[Description("Xác minh tài khoản")]
    public const VERIFY = 0;
    #[Description("Quên mật khẩu")]
    public const FORGOT_PASSWORD = 1;
}
