<?php


namespace App\Models;

/**
 * Class UserRoles
 *
 * The various roles that users can have
 *
 * @package App\Models
 */
abstract class UserRoles
{
    const CUSTOMER = "CUSTOMER";
    const ADMIN_STAFF = "ADMIN_STAFF";
    const ADMIN_ACCOUNTANT = "ADMIN_ACCOUNTANT";
    const ADMIN_MANAGER = "ADMIN_MANAGER";
    const SUPER_ADMIN = "SUPER_ADMIN";
}
