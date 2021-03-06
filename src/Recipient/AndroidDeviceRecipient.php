<?php
namespace Genkgo\Push\Recipient;

use Genkgo\Push\RecipientInterface;

/**
 * Class AppleDeviceRecipient
 * @package Genkgo\Push\Recipient
 */
final class AndroidDeviceRecipient implements RecipientInterface
{
    /**
     * @var string
     */
    private $token;

    /**
     * @param string $token
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param $token
     * @return RecipientInterface
     */
    public static function fromString($token)
    {
        return new self($token);
    }
}
