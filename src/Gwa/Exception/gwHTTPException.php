<?php
namespace Gwa\Exception;

/**
 * @brief A HTTP status exception
 *
 * Generally thrown in a controller action.
 *
 * @ingroup exceptions
 * @ingroup mvc
 */
class gwHTTPException extends gwCoreException
{
    /**
     * Resource has been permanently moved
     * Pass new URI as $info parameter
     * @var string
     */
    const HTTP_301_MOVED_PERMANENTLY = 'gwCoreException::http_301_moved_permantently';

    /**
     * See other
     * Pass URI as $info parameter
     * @link http://en.wikipedia.org/wiki/HTTP_303
     * @var string
     */
    const HTTP_303_SEE_OTHER = 'gwCoreException::http_303_see_other';

    /**
     * @var string
     */
    const HTTP_403_FORBIDDEN = 'gwCoreException::http_403_forbidden';

    /**
     * @var string
     */
    const HTTP_404_NOT_FOUND = 'gwCoreException::http_404_not_found';

    /**
     * @var string
     */
    const HTTP_405_METHOD_NOT_ALLOWED = 'gwCoreException::http_405_method_not_allowed';

    /**
     * @var string
     */
    const HTTP_500_INTERNAL_SERVER_ERROR = 'gwCoreException::http_500_internal_server_error';

    /**
     * The server either does not recognise the request method, or it lacks the
     * ability to fulfill the request.
     * @var string
     */
    const HTTP_501_NOT_IMPLEMENTED = 'gwCoreException::http_501_not_implemented';

    /**
     * The server was acting as a gateway or proxy and received an invalid
     * response from the upstream server.
     * @var string
     */
    const HTTP_502_BAD_GATEWAY = 'gwCoreException::http_502_bad_gateway';

    /**
     * The server is currently unavailable (because it is overloaded or down
     * for maintenance). Generally, this is a temporary state.
     * @var string
     */
    const HTTP_503_SERVICE_UNAVAILABLE = 'gwCoreException::http_503_service_unavailable';
}
