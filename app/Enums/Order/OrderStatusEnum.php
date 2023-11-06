<?php

declare(strict_types=1);

namespace App\Enums\Order;

use BenSampo\Enum\Attributes\Description;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class OrderStatusEnum extends Enum
{
    #[Description('Chờ thanh toán')]
    public const PENDING = 0;
    #[Description('Đã thanh toán')]
    public const PAYED = 1;
}
