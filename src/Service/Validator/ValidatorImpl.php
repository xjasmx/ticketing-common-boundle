<?php

declare(strict_types = 1);

namespace Jasmcoder\TicketingCommonBundle\Service\Validator;

use Symfony\Component\Validator\Validator\ValidatorInterface;
use Jasmcoder\TicketingCommonBundle\Service\Validator\ValidatorInterface as Validator;

class ValidatorImpl implements Validator
{
    private ValidatorInterface $validator;

    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    public function validate(object $object): void
    {
        $errors = $this->validator->validate($object);

        if (count($errors) > 0) {
            throw new \InvalidArgumentException((string)$errors);
        }
    }
}