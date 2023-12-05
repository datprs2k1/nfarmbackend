<?php declare(strict_types=1);

namespace App\Enums\Transaction;

use BenSampo\Enum\Attributes\Description;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class TransactionStatusEnum extends Enum
{
    #[Description('Không thành công')]
    public const ERROR = 0;
    #[Description('Thành công')]
    public const SUCCESS = 1;

}
