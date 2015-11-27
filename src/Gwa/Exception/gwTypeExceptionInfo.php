<?php

namespace Gwa\Exception;

/**
 * An exception info container for type exceptions.
 */
class gwTypeExceptionInfo extends gwCoreExceptionInfo implements gwiExceptionInfo
{
    /**
     * @var mixed
     */
    protected $value;

    /**
     * @var array
     */
    protected $types;

    /**
     * @var string
     */
    protected $note;

    /**
     * Constructor.
     *
     * @param mixed        $value the actual value that caused the exception
     * @param array|string $types a list of legal types
     * @param string       $note  an optional note
     */
    public function __construct($value, $types, $note = '')
    {
        $this->value = $value;
        $this->types = is_array($types) ? $types : [$types];
        $this->note = $note;
    }

    /**
     * @return string
     */
    public function fetch()
    {
        $value = $this->getAsString($this->value);
        $values = implode(', ', $this->types);
        $output = sprintf('%s MUST BE one of the following types [%s]', $value, $values);
        if ($this->note) {
            $output .= ' ('.$this->note.')';
        }

        return $output;
    }
}
