<?php declare(strict_types=1);

namespace App\Enums\UserInfo;

use BenSampo\Enum\Attributes\Description;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserInfoStatusEnum extends Enum
{
    #[Description("Chưa xác minh")]
    public const NOT_APPROVE = 0;
    #[Description("Đã xác minh")]
    public const APPROVED = 1;
}
