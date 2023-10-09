<?php declare(strict_types=1);

namespace App\Enums\Category;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CategoryTypeEnum extends Enum
{
    public const POST = 1;
    public const PRODUCT = 2;
    public const PRICE = 3;

    public static function getTypes() {
        return [
            self::POST => 'Bài viết',
            self::PRODUCT => 'Sản phẩm',
            self::PRICE => 'Bảng giá',
        ];
    }
}
