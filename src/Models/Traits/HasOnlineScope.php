<?php

namespace Wotz\OnlineScope\Models\Traits;

use Wotz\OnlineScope\Models\Scopes\OnlineScope;

trait HasOnlineScope
{
    public static function bootHasOnlineScope()
    {
        static::addGlobalScope(new OnlineScope);
    }
}
