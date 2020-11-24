<?php

declare(strict_types=1);

namespace App\Support\Kafka;

use Illuminate\Support\ServiceProvider;
use Kafka\Producer;

/**
 * Class KafkaServiceProvider
 * @package App\Support\Kafka
 */
class KafkaServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton();
    }
}
