<?php
namespace App;

class Collections
{
    private $collect;

    public function __construct(array $collect)
    {
        $this->collect = $collect;
    }

    public function filter(callable $callback): Collections
    {
        $collections = [];
        foreach ($this->collect as $key => $value) {
            if ($callback($key, $value)) {
                $collections[] = $value;
            }
        }
        $this->collect = $collections;
        return $this;

    }

    public function map(callable $callback): Collections
    {
        $collections = [];
        foreach ($this->collect as $key => $value) {
            $collections[] = $callback($value, $key);
        }
        $this->collect = $collections;
        return $this;
    }

    public function toJason()
    {
        return json_encode($this->collect);
    }
}
