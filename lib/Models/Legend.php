<?php

namespace CureDAO\Client\Models;

class Legend
{
    /**
     * @var bool
     */
    public $enabled;


    /**
     * @return bool|null
     */
    public function isEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * @param bool|null $enabled
     *
     * @return Legend
     */
    public function setEnabled(?bool $enabled): Legend
    {
        $this->enabled = $enabled;
        
        return $this;
    }
}

