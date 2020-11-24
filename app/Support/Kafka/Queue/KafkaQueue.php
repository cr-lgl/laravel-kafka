<?php

declare(strict_types=1);

namespace App\Support\Kafka\Queue;

use Illuminate\Contracts\Queue\Queue as QueueContract;
use Illuminate\Queue\Queue;
use Kafka\Consumer;
use Kafka\Producer;

/**
 * Class KafkaQueue
 * @package App\Support\Kafka\Queue
 */
class KafkaQueue extends Queue implements QueueContract
{
    /**
     * @var Producer
     */
    private Producer $producer;

    /**
     * @var Consumer
     */
    private Consumer $consumer;

    public function __construct(Producer $producer, Consumer $consumer)
    {
        $this->producer = $producer;
        $this->consumer = $consumer;
    }

    /**
     * Since Kafka is an infinite queue we can't count the size of the queue.
     *
     * {@inheritDoc}
     */
    public function size($queue = null): int
    {
        return 1;
    }

    /**
     * {@inheritDoc}
     */
    public function push($job, $data = '', $queue = null)
    {
        return $this->pushRaw($this->createPayload($job, $queue, $data), $queue, []);
    }

    /**
     * {@inheritDoc}
     */
    public function pushRaw($payload, $queue = null, array $options = [])
    {


        $this->producer->send([
            $payload,
        ]);
    }

    public function later($delay, $job, $data = '', $queue = null)
    {
        // TODO: Implement later() method.
    }

    public function pop($queue = null)
    {
        // TODO: Implement pop() method.
    }
}
