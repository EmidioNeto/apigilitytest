<?php
namespace Music\V1\Rpc\Status;

class StatusControllerFactory
{
    public function __invoke($controllers)
    {
        return new StatusController();
    }
}
