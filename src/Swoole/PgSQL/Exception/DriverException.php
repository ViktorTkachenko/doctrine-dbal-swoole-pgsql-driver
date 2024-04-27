<?php

declare(strict_types=1);

namespace OpsWay\Doctrine\DBAL\Swoole\PgSQL\Exception;

use Doctrine\DBAL\Driver\Exception as DBALDriverException;
use Doctrine\DBAL\Exception;
use Throwable;

/** @psalm-immutable */
class DriverException implements Exception, DBALDriverException
{
    use ExceptionFromConnectionTrait;

    public function __construct(
        private string $message = '',
        private ?string $errorCode = null,
        private ?string $sqlState = null,
        private int $code = 0,
        private ?Throwable $previous = null
    ) {
    }

    public function getErrorCode() : ?string
    {
        return $this->errorCode;
    }

    public function getSQLState() : ?string
    {
        return $this->sqlState;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getCode() : int
    {
        return $this->code;
    }

    public function getFile(): string
    {
        return '';
    }

    public function getLine(): int
    {
        return 0;
    }

    public function getTrace(): array
    {
        return [];
    }

    public function getTraceAsString(): string
    {
        return '';
    }

    public function getPrevious() : ?Throwable
    {
        return $this->previous;
    }

    public function __toString() : string
    {
        return '';
    }
}
