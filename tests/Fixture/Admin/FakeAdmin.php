<?php

declare(strict_types=1);

namespace SilasJoisten\Sonata\MultiUploadBundle\Tests\Fixture\Admin;

use SilasJoisten\Sonata\MultiUploadBundle\Tests\Fixture\Entity\Fake;
use Sonata\AdminBundle\Admin\AbstractAdmin;

/**
 * @internal
 */
final class FakeAdmin extends AbstractAdmin
{

    public function __construct()
    {
        $this->setCode(self::class);
        $this->setModelClass(Fake::class);
        $this->setBaseControllerName('');
    }
}
