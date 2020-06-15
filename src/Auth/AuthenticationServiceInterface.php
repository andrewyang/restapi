<?php

namespace Drupal\restapi\Auth;

use Psr\Http\Message\RequestInterface;


/**
 * Interface AuthenticationServiceInterface
 *
 */
interface AuthenticationServiceInterface {

  /**
   * Constructor
   *
   * @param \stdClass $user
   *   A Drupal user object.
   * @param RequestInterface $request
   *   A HTTP Request object.
   *
   */
  public function __construct(\stdClass $user, RequestInterface $request);


  /**
   * Authenticates the request.
   *
   * @return \stdClass|FALSE
   *   If successful, the user the request authenticated for; FALSE otherwise.
   *
   */
  public function authenticate();

}
