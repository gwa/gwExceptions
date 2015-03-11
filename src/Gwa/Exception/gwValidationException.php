<?php

namespace Gwa\Exception;

/**
 * @brief A validation exception.
 *
 * @ingroup exceptions
 * @ingroup validation
 */
class gwValidationException extends gwCoreException
{
    /**
     * @var array
     */
    private $_errors;

    const REQUIRED = 'gwValidationException::required';
    const INVALID  = 'gwValidationException::invalid';
    const METHOD_DOES_NOT_EXIST = 'gwValidationException::method_does_not_exist';

    public function __construct($message = 'gwValidationException::invalid', $info = null, $code = 0)
    {
        $this->_errors = [];
        parent::__construct($message, $info, $code);
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->_errors;
    }

    /**
     * @return array
     */
    public function getMessages()
    {
        $ret = [];
        foreach ($this->_errors as $v) {
            $ret[] = $v->message;
        }

        return $ret;
    }

    /**
     * @return array
     */
    public function getMessagesForFieldname($fieldname)
    {
        $ret = [];
        foreach ($this->_errors as $v) {
            if ($v->field == $fieldname) {
                $ret[] = $v->message;
            }
        }

        return $ret;
    }

    /**
     * Add an error to this exception.
     *
     * @param string $fieldname
     * @param string $message
     */
    public function appendError($fieldname, $message)
    {
        $obj = new \stdClass();
        $obj->field = $fieldname;
        $obj->message = $message;
        $this->_errors[] = $obj;
    }

    /**
     * @return boolean
     */
    public function hasErrors()
    {
        return count($this->_errors)>0 ? true : false;
    }
}
