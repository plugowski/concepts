<?php
use Command\UpdateUserCommand;

/**
 * Class UpdateUserCommandTest
 */
class UpdateUserCommandTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldSetSomeDirtyThings()
    {
        $command = new UpdateUserCommand(12);
        $command->setName('Pawel');
        $command->setPhone('700123321');

        self::assertEquals(['name', 'phone'], $command->getDirty());
        self::assertEquals('Pawel', $command->getName());
        self::assertEquals('700123321', $command->getPhone());
    }
}