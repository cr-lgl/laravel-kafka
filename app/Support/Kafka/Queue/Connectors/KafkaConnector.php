<?php

declare(strict_types=1);

namespace App\Support\Kafka\Queue\Connectors;

use Illuminate\Queue\Connectors\ConnectorInterface;
use Kafka\Producer;

/**
 * Class KafkaConnector
 * @package App\Support\Kafka\Queue\Connectors
 */
class KafkaConnector implements ConnectorInterface
{
    public function connect(array $config)
    {
        new Producer();
    }
}
