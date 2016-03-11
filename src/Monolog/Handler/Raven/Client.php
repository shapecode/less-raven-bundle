<?php

namespace Shapecode\Bundle\LessRavenBundle\Monolog\Handler\Raven;

/**
 * Class Client
 * @package Shapecode\Bundle\LessRavenBundle\Monolog\Handler\Raven
 * @author Nikita Loges
 */
class Client extends \Raven_Client
{

    /**
     * @inheritdoc
     */
    protected function get_http_data()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    protected function get_user_data()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function get_default_data()
    {
        return [];
    }
}