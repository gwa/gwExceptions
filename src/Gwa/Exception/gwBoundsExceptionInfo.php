<?php
namespace Gwa\Exception;

/**
 * @brief An exception info container for out of bounds exceptions.
 * @ingroup exceptions
 */
class gwBoundsExceptionInfo extends gwCoreExceptionInfo implements gwiExceptionInfo
{
    /**
     * @var mixed
     */
    protected $_value;

    /**
     * @var array|string
     */
    protected $_values;

    /**
     * @var bool
     */
    protected $_valuesareillegal;

    /**
     * @var string
     */
    protected $_note;

    /**
     * Constructor.
     * @param mixed $value the actual value that caused the exception
     * @param array|string $values a list of legal values (or illegal values if $valuesareillegal is true)
     * @param bool $valuesareillegal $values array contains illegal values
     * @param string $note an optional note
     */
    public function __construct( $value, $values, $valuesareillegal=false, $note='' )
    {
        $this->_value = $value;
        $this->_values = $values;
        $this->_valuesareillegal = $valuesareillegal;
        $this->_note = $note;
    }

    /**
     * @return string
     */
    public function fetch()
    {
        $value = $this->getAsString($this->_value);
        $strvalues = array();
        if (is_array($this->_values)) {
            foreach ($this->_values as $v) {
                $strvalues[] = $this->getAsString($v);
            }
        } else {
            $strvalues[] = $this->getAsString($this->_values);
        }
        $values = implode(', ', $strvalues);
        if (!$this->_valuesareillegal) {
            $output = sprintf('%s MUST BE one of [%s]', $value, $values);
        } else {
            $output = sprintf('%s CANNOT BE one of [%s]', $value, $values);
        }
        if ($this->_note) $output .= ' ('.$this->_note.')';
        return $output;
    }
}
