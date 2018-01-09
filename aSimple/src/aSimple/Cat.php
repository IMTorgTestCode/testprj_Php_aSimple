<?php

/**
 * Cat Class
 *
 * @package   Test
 * @license   http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright 2013 Amy Stephen. All rights reserved.
 */
namespace Animal;

/**
 * Cat Class
 *
 * @author    Amy Stephen
 * @license   http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright 2013 Amy Stephen. All rights reserved.
 * @since     1.0
 */
class Cat
{
    /**
     * Make the Cat Speak
     *
     * @return  $this
     * @since   1.0
     */
    public function speak()
    {
        echo 'Meow!';

        return $this;
    }
}
