<?php
namespace Domain\Entity;

use Domain\ValueObject\Identity;
use Domain\ValueObject\Email;
use Domain\ValueObject\HashedPassword;

/**
 * UserInterface
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 */
interface UserInterface
{
    /**
     * @return \Domain\ValueObject\Identity
     */
    public function getId();

    /**
     * @return \Domain\ValueObject\Email
     */
    public function getEmail();

    /**
     * @param \Domain\ValueObject\HashedPassword
     */
    public function setPassword(HashedPassword $hash);

    /**
     * @return \Domain\ValueObject\HashedPassword
     */
    public function getPassword();
}
