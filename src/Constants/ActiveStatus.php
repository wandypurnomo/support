<?php


namespace Wandxx\Support\Constants;


use Wandxx\Support\Interfaces\ConstantInterface;
use Wandxx\Support\Traits\HasLabel;

class ActiveStatus implements ConstantInterface
{
    use HasLabel;

    const ACTIVE = 1;
    const INACTIVE = 0;

    public function labels(): array
    {
        return [
            self::ACTIVE => "Active",
            self::INACTIVE => "Inactive"
        ];
    }
}