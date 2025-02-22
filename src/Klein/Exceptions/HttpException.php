<?php
/**
 * Klein (klein.php) - A fast & flexible router for PHP
 *
 * @author      Chris O'Hara <cohara87@gmail.com>
 * @author      Trevor Suarez (Rican7) (contributor and v2 refactorer)
 * @copyright   (c) Chris O'Hara
 * @link        https://github.com/klein/klein.php
 * @license     MIT
 */

namespace Klein\Exceptions;

use JetBrains\PhpStorm\Pure;
use RuntimeException;

/**
 * HttpException
 *
 * An HTTP error exception
 */
class HttpException extends RuntimeException implements HttpExceptionInterface
{

    /**
     * Methods
     */

    /**
     * Create an HTTP exception from nothing but an HTTP code
     *
     * @param int $code
     * @return HttpException
     */
    #[Pure] public static function createFromCode(int $code): HttpException
    {
        return new static("", (int) $code);
    }
}
