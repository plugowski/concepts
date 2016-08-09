<?php
namespace Command;

/**
 * Class Command
 */
class Command
{
    /**
     * @var array
     */
    private $dirty = [];
    /**
     * pattern do wykrywania setterow
     */
    const SETTER_REGEX = '/^set/i';

    /**
     * Magic setters for Command
     * @param string $method
     * @param array $arguments
     * @throws \Exception
     */
    public function __call($method, $arguments)
    {
        $property = lcfirst(preg_replace(self::SETTER_REGEX, '', $method));
        if (preg_match(self::SETTER_REGEX, $method) && in_array($property, array_keys(get_object_vars($this)))) {
            $this->addDirty($property);
            $this->$property = $arguments[0];
        } else {
            throw new \Exception('Method not found!');
        }
    }

    /**
     * @return array
     */
    public function getDirty()
    {
        return $this->dirty;
    }

    /**
     * @param string $name
     */
    private function addDirty($name)
    {
        $this->dirty[] = $name;
    }
}