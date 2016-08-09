<?php
namespace Command;

/**
 * Class UpdateUserCommand
 *
 * @method void setName() setName(string $name)
 * @method void setEmail() setEmail(string $email)
 * @method void setPhone() setPhone(string $phone)
 */
class UpdateUserCommand extends Command
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $phone;

    /**
     * UpdateUserCommand constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }
}