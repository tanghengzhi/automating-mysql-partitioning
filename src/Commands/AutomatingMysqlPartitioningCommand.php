<?php

namespace Victor Tang\AutomatingMysqlPartitioning\Commands;

use Illuminate\Console\Command;

class AutomatingMysqlPartitioningCommand extends Command
{
    public $signature = 'automating-mysql-partitioning';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
