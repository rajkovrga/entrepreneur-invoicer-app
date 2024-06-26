<?php

namespace App\Utils;

interface Roles
{
    public const Admin = 'Administrator';
    public const CompanyManager = 'Company Manager';
    public const User = 'User';
    public const All = [
        self::Admin,
        self::CompanyManager,
        self::User
    ];
}
