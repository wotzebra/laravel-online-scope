<?php

namespace Wotz\OnlineScope\Models\Scopes;

use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Spatie\Translatable\HasTranslations;

class OnlineScope implements Scope
{
    public function apply(Builder $builder, Model $model): void
    {
        if (Filament::isServing()) {
            return;
        }

        if (in_array(HasTranslations::class, class_uses_recursive($model))) {
            $locale = app()->getLocale();
            $builder->where("online->{$locale}", true);
        } else {
            $builder->where('online', true);
        }
    }
}
