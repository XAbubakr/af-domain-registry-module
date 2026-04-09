<?php
namespace AryanIct\DomainsReseller\Registrar\AryanIctcom\Calls;
use AryanIct\DomainsReseller\Registrar\AryanIctcom\Core\Call;

/**
 * Description of RequestDelete
 *
 * @author Abubakr Sediq <support@x.com.af>
 * @link https://x.com.af
 */
class RequestDelete extends Call
{
    public $action = "domains/:domain/delete";
    
    public $type = parent::TYPE_POST;
}
