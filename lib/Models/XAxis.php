<?php

namespace CureDAO\Client\Models;

class XAxis
{
    /**
     * @var Title
     */
    public $title;

    /**
     * @var array
     */
    public $categories;


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
     * @return XAxis
     */
    public function setTitle(?Title $title): XAxis
    {
        $this->title = $title;
        
        return $this;
    }

    /**
     * @return array|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * @param array|null $categories
     *
     * @return XAxis
     */
    public function setCategories(?array $categories): XAxis
    {
        $this->categories = $categories;
        
        return $this;
    }
}

