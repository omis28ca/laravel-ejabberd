<?php
/**
 * Created by PhpStorm.
 * User: kibet
 * Date: 7/1/2018
 * Time: 11:00 PM
 */

namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class DestroyRoom implements IEjabberdCommand
{
    private $name;
    private $service;

    public function __construct($name, $service)
    {
        $this->name = $name;
        $this->service = $service;
    }

    public function getCommandName()
    {
        return 'destroy_room';
    }

    public function getCommandData()
    {
        return [
            'name' => $this->name,
            'service' => $this->service
        ];
    }
}