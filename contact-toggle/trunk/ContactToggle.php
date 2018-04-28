<?php

/**
 * @name ContactToggle
 * @desc Extension PresstiFy de gestion de boutique ecommerce.
 * @author Jordy Manner <jordy@milkcreation.fr>
 * @package presstiFy
 * @namespace \tiFy\Plugins\ContactToggle
 * @version 0.0.0
 */

namespace tiFy\Plugins\ContactToggle;

use tiFy\App\Plugin;
use tiFy\Core\Partial\Partial;

class ContactToggle extends Plugin
{
    /**
     * CONSTRUCTEUR.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->appAddAction('tify_partial_register');
    }

    /**
     * Déclaration du controleur d'affichage
     *
     * @return void
     */
    final public function tify_partial_register()
    {
        Partial::register(
            'ContactToggle',
            Partial\ContactToggle::class
        );
    }
}