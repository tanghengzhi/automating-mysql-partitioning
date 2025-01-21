<?php

namespace VictorTang\AutomatingMysqlPartitioning\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VictorTang\AutomatingMysqlPartitioning\AutomatingMysqlPartitioning
 */
class AutomatingMysqlPartitioning extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \VictorTang\AutomatingMysqlPartitioning\AutomatingMysqlPartitioning::class;
    }
}
