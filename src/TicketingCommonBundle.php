<?php

declare(strict_types=1);

namespace Jasmcoder\TicketingCommonBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TicketingCommonBundle extends Bundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }
}