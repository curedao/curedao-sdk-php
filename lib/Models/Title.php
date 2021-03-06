<?php

namespace CureDAO\Client\Models;

class Title
{
    /**
     * @var string
     */
    public $text;

    /**
     * @var array
     */
    public $style;

    /**
     * @var bool
     */
    public $enabled;


    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string|null $text
     *
     * @return Title
     */
    public function setText(?string $text): Title
    {
        $this->text = $text;
        
        return $this;
    }

    /**
     * @return array|null
     */
    public function getStyle(): ?array
    {
        return $this->style;
    }

    /**
     * @param array|null $style
     *
     * @return Title
     */
    public function setStyle(?array $style): Title
    {
        $this->style = $style;
        
        return $this;
    }

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
     * @return Title
     */
    public function setEnabled(?bool $enabled): Title
    {
        $this->enabled = $enabled;
        
        return $this;
    }
}

