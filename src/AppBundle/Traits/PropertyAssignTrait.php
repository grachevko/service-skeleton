<?php

namespace AppBundle\Traits;

/**
 * @author Konstantin Grachev <ko@grachev.io>
 */
trait PropertyAssignTrait
{
    /**
     * @param array $parameters
     */
    public function __construct(array $parameters)
    {
        $this->assign($parameters);
    }

    /**
     * @param array $parameters
     */
    protected function assign(array $parameters)
    {
        foreach ($parameters as $property => $value) {
            if (!property_exists($this, $property)) {
                continue;
            }

            $this->{$property} = $value;
        }
    }
}