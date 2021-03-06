<?php
/**
 * @package Guzzle PHP <http://www.guzzlephp.org>
 * @license See the LICENSE file that was distributed with this source code.
 */

namespace Guzzle\Common\Event;

/**
 * Guzzle subject interface
 *
 * @author Michael Dowling <michael@guzzlephp.org>
 */
interface Subject
{
    /**
     * Get the subject mediator associated with the subject
     *
     * @return EventManager
     */
    function getEventManager();
}