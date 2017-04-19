<?php

namespace Magium\McmM2Bridge\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magium\Configuration\Config\Repository\ConfigInterface;

class Config implements ConfigInterface
{
    protected $config;

    public function __construct(
        ScopeConfigInterface $config
    )
    {
        $this->config = $config;
    }

    public function getValue($path)
    {
        return $this->xpath($path);
    }

    public function hasValue($path)
    {
        return $this->xpath($path) !== null;
    }

    public function getValueFlag($path)
    {
        return $this->config->isSetFlag($path);
    }

    public function xpath($xpath)
    {
        return $this->config->getValue($xpath);
    }


}
