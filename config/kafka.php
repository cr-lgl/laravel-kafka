<?php

return [
    'producer' => [
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => env('REDIS_QUEUE', 'default'),
        'retry_after' => 90,
        'block_for' => null,

        'queue' => env('KAFKA_PRODUCER_QUEUE', 'default'),

        'consumer_group_id' => env('KAFKA_PRODUCER_CONSUMER_GROUP_ID', 'laravel_queue'),

        'brokers' => env('KAFKA_PRODUCER_BROKERS', 'localhost'),
    ],
];
