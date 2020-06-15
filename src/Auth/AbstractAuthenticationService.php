<?php

namespace Drupal\restapi\Auth;

use Psr\Http\Message\RequestInterface;


/**
 * Abstract class for authentication implementations.
 *
 */
abstract class AbstractAuthenticationService implements AuthenticationServiceInterface {

  /**
   * A HTTP Request object.
   *
   * @var RequestInterface
   */
  protected $request = NULL;


  /**
   * A Drupal user object.
   *
   * @var \stdClass
   *
   */
  protected $user = NULL;


  /**
   * {@inheritdoc}
   *
   */
  public function __construct(\stdClass $user, RequestInterface $request) {
    $this->user = $user;
    $this->request = $request;
  }


  /**
   * {@inheritdoc}
   *
   */
  abstract public function authenticate();


  /**
   * Retrieves the Drupal user.
   *
   * @return \stdClass
   *
   */
  protected function getUser() {
    return $this->user;
  }


  /**
   * Returns the current request.
   *
   * @return RequestInterface
   *
   */
  protected function getRequest() {
    return $this->request;
  }

}
