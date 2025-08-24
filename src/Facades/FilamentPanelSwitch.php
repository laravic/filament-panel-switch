<?php

namespace Laravic\FilamentPanelSwitch\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laravic\FilamentPanelSwitch\FilamentPanelSwitch
 */
class FilamentPanelSwitch extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Laravic\FilamentPanelSwitch\FilamentPanelSwitch::class;
    }
}
