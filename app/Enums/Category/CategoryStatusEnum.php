<?php declare(strict_types=1);

namespace App\Enums\Category;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CategoryStatusEnum extends Enum
{
    public const DEACTIVE = 0;
    public const ACTIVE = 1;

    public static function getStatus() {
        return [
            self::DEACTIVE => 'Không hoạt động',
            self::ACTIVE => 'Hoạt động',
        ];
    }
}
