<?php

namespace PredictionIO\Command;

use Guzzle\Http\Message\RequestInterface;
use Guzzle\Service\Command\AbstractCommand;

/**
 * Add View
 *
 * A user views an item
 *
 * @guzzle uid type="string" required="true"
 * @guzzle iid type="string" required="true"
 * @guzzle t type="string"
 * @guzzle latlng type="string"
 */
class UserViewItem extends UserActionItem
{
  /**
   * Create the request object that will carry out the command. Used internally by Guzzle.
   */
  protected function build()
  {
    $this->request = $this->client->createRequest(RequestInterface::POST, 'actions/u2i/view', null, $this->getAll());
  }
}

?>