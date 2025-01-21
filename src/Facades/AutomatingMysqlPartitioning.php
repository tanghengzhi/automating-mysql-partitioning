<?php

namespace Victor Tang\AutomatingMysqlPartitioning\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Victor Tang\AutomatingMysqlPartitioning\AutomatingMysqlPartitioning
 */
class AutomatingMysqlPartitioning extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Victor Tang\AutomatingMysqlPartitioning\AutomatingMysqlPartitioning::class;
    }
}
