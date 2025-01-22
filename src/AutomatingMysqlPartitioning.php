<?php

namespace VictorTang\AutomatingMysqlPartitioning;

class AutomatingMysqlPartitioning {

    public function __construct(public string $table)
    {

    }

    public function addPartition()
    {
        \DB::statement("ALTER TABLE {$this->table} ADD PARTITION (PARTITION p202501 VALUES LESS THAN (2025-02-01 00:00:00);");
    }

    public function dropPartition()
    {
        \DB::statement("ALTER TABLE {$this->table} DROP PARTITION p202501;");
    }
}
