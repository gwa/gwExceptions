<?php
namespace Gwa\Exception;

/**
 * @brief An authentication exception class.
 * @ingroup exceptions
 * @ingroup auth
 */
class gwAuthException extends gwCoreException
{
    /**
     * @var string
     */
    const ERR_USER_NOT_EXIST = 'gwAuthException::user_not_exist';

    /**
     * @var string
     * @deprecated
     * @see ERR_INVALID_CREDENTIALS
     */
    const ERR_WRONG_PASSWORD = 'gwAuthException::invalid_credentials';

    /**
     * To be thrown when a login attempt fails.
     * @var string
     */
    const ERR_INVALID_CREDENTIALS = 'gwAuthException::invalid_credentials';

    /**
     * @var string
     * @deprecated
     * @see ERR_AUTHENTICATION_REQUIRED
     */
    const ERR_LOG_IN_REQUIRED = 'gwAuthException::authentication_required';

    /**
     * To be thrown when an action requires authentication.
     * @var string
     */
    const ERR_AUTHENTICATION_REQUIRED = 'gwAuthException::authentication_required';

    /**
     * To be thrown when a valid authentication has expired.
     * @var string
     */
    const ERR_AUTHENTICATION_EXPIRED = 'gwAuthException::authentication_expired';

    /**
     * To be thrown when authentication is attempted when already authenicated.
     * @var string
     */
    const ERR_ALREADY_AUTHENTICATED = 'gwAuthException::already_authenticated';
}
