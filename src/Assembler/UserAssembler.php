<?php
declare(strict_types=1);

namespace Cyberkonsultant\Assembler;

use Cyberkonsultant\DTO\User;

/**
 * Class UserAssembler
 *
 * @package Cyberkonsultant
 */
class UserAssembler implements DataAssemblerInterface
{
    /**
     * @param User $userDTO
     * @return array
     */
    public function readDTO(User $userDTO): array
    {
        return [
            'id' => $userDTO->getId(),
            'anonymous' => $userDTO->isAnonymous(),
            'username' => $userDTO->getUsername(),
            'email' => $userDTO->getEmail(),
            'first_name' => $userDTO->getFirstName(),
            'last_name' => $userDTO->getLastName(),
            'sex' => $userDTO->getSex(),
            'country' => $userDTO->getCountry(),
            'city' => $userDTO->getCity(),
            'postcode' => $userDTO->getPostcode(),
        ];
    }

    /**
     * @param array $user
     * @return User
     */
    public function writeDTO(array $user): User
    {
        return new User(
            $user['id'],
            $user['anonymous'],
            $user['username'],
            $user['email'],
            $user['first_name'],
            $user['last_name'],
            $user['sex'],
            $user['country'],
            $user['city'],
            $user['postcode']
        );
    }
}