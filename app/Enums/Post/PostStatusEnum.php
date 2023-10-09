<?php declare(strict_types=1);

namespace App\Enums\Post;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PostStatusEnum extends Enum
{
    public const DEACTIVE = 0;
    public const ACTIVE = 1;

    public static function getStatus() {
        return [
            self::ACTIVE => 'Hoạt động',
            self::DEACTIVE => 'Không hoạt động',
        ];
    }
}
