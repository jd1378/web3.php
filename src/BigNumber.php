<?php
namespace Web3;

use phpseclib\Math\BigInteger;
use JsonSerializable;

class BigNumber extends BigInteger implements JsonSerializable
{
    public function jsonSerialize(): string
    {
        return $this->toString();
    }
}