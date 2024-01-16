<?php declare(strict_types=1);

namespace App\Enums\User;

use BenSampo\Enum\Attributes\Description;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserStatusEnum extends Enum
{
    #[Description("Không hoạt động")]
    public const INACTIVE = 0;
    #[Description("Hoạt động")]
    public const ACTIVE = 1;

}
