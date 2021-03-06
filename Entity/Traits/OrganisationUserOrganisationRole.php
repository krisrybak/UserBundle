<?php
namespace RybakDigital\Bundle\UserBundle\Entity\Traits;

use Doctrine\Common\Collections\ArrayCollection;
use RybakDigital\Bundle\UserBundle\Entity\Traits\UserOrganisationRole as UserOrganisationRoleTriat;
use RybakDigital\Bundle\UserBundle\Entity\UserOrganisationRole as Uor;

/**
 * RybakDigital\Bundle\UserBundle\Entity\Traits\OrganisationUserOrganisationRole
 *
 * @author Kris Rybak <kris.rybak@krisrybak.com>
 */
trait OrganisationUserOrganisationRole {
    use UserOrganisationRoleTriat;

    /**
     * @ORM\OneToMany(targetEntity="UserOrganisationRole", mappedBy="organisation", cascade={"persist", "remove"})
     */
    private $uors;

    /**
     * Add uor
     *
     * @param   UserOrganisationRole     $uor
     * @return  User
     */
    public function addUor(Uor $uor)
    {
        $this->uors[] = $uor;

        $uor->setOrganisation($this);

        return $this;
    }
}
