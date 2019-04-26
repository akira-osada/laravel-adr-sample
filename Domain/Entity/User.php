<?php

namespace Domain\Entity;


class User
{
    /** @var string */
    private $name;

    /** @var string */
    private $email;

    public function __construct(array $params)
    {
        foreach ($this as $property => $value) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }

    /**
     * @param $key
     * @return mixed
     * @throws \Exception
     */
    public function __get($key)
    {
        if (property_exists($this, $key)) {
            return $this->{$key};
        }
        throw new \Exception('property not found');
    }
}