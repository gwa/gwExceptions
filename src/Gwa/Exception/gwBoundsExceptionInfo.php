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
    protected $value;

    /**
     * @var array|string
     */
    protected $values;

    /**
     * @var bool
     */
    protected $valuesareillegal;

    /**
     * @var string
     */
    protected $note;

    /**
     * Constructor.
     *
     * @param mixed        $value            the actual value that caused the exception
     * @param array|string $values           a list of legal values (or illegal values if $valuesareillegal is true)
     * @param bool         $valuesareillegal $values array contains illegal values
     * @param string       $note             an optional note
     */
    public function __construct($value, $values, $valuesareillegal = false, $note = '')
    {
        $this->value = $value;
        $this->values = $values;
        $this->valuesareillegal = $valuesareillegal;
        $this->note = $note;
    }

    /**
     * @return string
     */
    public function fetch()
    {
        $value = $this->getAsString($this->value);
        $strvalues = [];
        if (is_array($this->values)) {
            foreach ($this->values as $v) {
                $strvalues[] = $this->getAsString($v);
            }
        } else {
            $strvalues[] = $this->getAsString($this->values);
        }
        $values = implode(', ', $strvalues);
        if (!$this->valuesareillegal) {
            $output = sprintf('%s MUST BE one of [%s]', $value, $values);
        } else {
            $output = sprintf('%s CANNOT BE one of [%s]', $value, $values);
        }
        if ($this->note) {
            $output .= ' ('.$this->note.')';
        }

        return $output;
    }
}
