<?php
namespace QrCode\Exception;
class QrCodeException extends \Exception
{
    public function __construct($message, $code = 0)
    {
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        parent::__toString(); // TODO: Change the autogenerated stub
    }
}