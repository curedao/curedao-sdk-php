<?php

namespace CureDAO\Client\Models;

class Animation
{
    /**
     * @var int
     */
    public $duration;


    /**
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * @param int|null $duration
     *
     * @return Animation
     */
    public function setDuration(?int $duration): Animation
    {
        $this->duration = $duration;
        
        return $this;
    }
}

