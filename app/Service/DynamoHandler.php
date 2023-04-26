<?php declare(strict_types=1);

namespace App\Service;

use Bref\Context\Context;
use Bref\Event\DynamoDb\DynamoDbEvent;
use Bref\Event\DynamoDb\DynamoDbHandler;

class DynamoHandler extends DynamoDbHandler
{
    public function handleDynamoDb(DynamoDbEvent $event, Context $context): void
    {
        echo 'Handling DynamoDB event...';
    }
}
