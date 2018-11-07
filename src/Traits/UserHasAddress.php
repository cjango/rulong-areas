<?php

namespace RuLong\Area\Traits;

use RuLong\Area\Models\UserAddress;

trait UserHasAddress
{

    public function addresses()
    {
        return $this->hasMany(UserAddress::class);
    }

    public function getDefaultAddress()
    {
        return $this->addresses()->orderBy('is_default', 'desc')->firstOrFail();
    }
}
