<?php
namespace Gwa\Exception;

/**
 * @brief An exception info container for type exceptions.
 * @ingroup exceptions
 */
class gwTypeExceptionInfo extends gwCoreExceptionInfo implements gwiExceptionInfo
{
    /**
     * @var mixed
     */
    protected $_value;

    /**
     * @var array
     */
    protected $_types;

    /**
     * @var string
     */
    protected $_note;

    /**
     * Constructor.
     * @param mixed $value the actual value that caused the exception
     * @param array|string $types a list of legal types
     * @param string $note an optional note
     */
    public function __construct( $value, $types, $note='' )
    {
        $this->_value = $value;
        $this->_types = is_array($types) ? $types : array($types);
        $this->_note = $note;
    }

    /**
     * @return string
     */
    public function fetch()
    {
        $value = $this->getAsString($this->_value);
        $values = implode(', ', $this->_types);
        $output = sprintf('%s MUST BE one of the following types [%s]', $value, $values);
        if ($this->_note) $output .= ' ('.$this->_note.')';
        return $output;
    }
}
