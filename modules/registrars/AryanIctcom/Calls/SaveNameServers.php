<?php
namespace AryanIct\DomainsReseller\Registrar\AryanIctcom\Calls;
use AryanIct\DomainsReseller\Registrar\AryanIctcom\Core\Call;

/**
 * Description of SaveNameServers
 *
 * @author Abubakr Sediq <support@x.com.af>
 * @link https://x.com.af
 */
class SaveNameServers extends Call
{
    public $action = "domains/:domain/nameservers";

    public $type = parent::TYPE_POST;
}
