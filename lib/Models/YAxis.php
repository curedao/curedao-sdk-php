<?php

namespace CureDAO\Client\Models;

class YAxis
{
    /**
     * @var float
     */
    public $max;

    /**
     * @var float
     */
    public $min;

    /**
     * @var Title
     */
    public $title;


    /**
     * @return float|null
     */
    public function getMax(): ?float
    {
        return $this->max;
    }

    /**
     * @param float|null $max
     *
     * @return YAxis
     */
    public function setMax(?float $max): YAxis
    {
        $this->max = $max;
        
        return $this;
    }

    /**
     * @return float|null
     */
    public function getMin(): ?float
    {
        return $this->min;
    }

    /**
     * @param float|null $min
     *
     * @return YAxis
     */
    public function setMin(?float $min): YAxis
    {
        $this->min = $min;
        
        return $this;
    }

    /**
     * @return Title|null
     */
    public function getTitle(): ?Title
    {
        return $this->title;
    }

    /**
     * @param Title|null $title
     *
     * @return YAxis
     */
    public function setTitle(?Title $title): YAxis
    {
        $this->title = $title;
        
        return $this;
    }
}

