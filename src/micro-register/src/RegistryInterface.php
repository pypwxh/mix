<?php

namespace Mix\Micro\Register;

use Mix\Micro\Register\Exception\NotFoundException;

/**
 * Interface RegistryInterface
 * @package Mix\Micro\Register
 */
interface RegistryInterface
{

    /**
     * Get Service
     * @param string $name
     * @return ServiceInterface
     * @throws NotFoundException
     */
    public function service(string $name): ServiceInterface;

    /**
     * Register
     * @param ServiceInterface ...$service
     * @throws \Exception
     */
    public function register(ServiceInterface ...$service);

    /**
     * Un Register
     * @param ServiceInterface ...$service
     * @throws \Exception
     */
    public function unregister(ServiceInterface ...$service);

    /**
     * Close
     * close all monitor
     * unregister all service
     */
    public function close();

}
