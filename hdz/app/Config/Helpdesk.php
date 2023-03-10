<?php
/**
 * @package EvolutionScript
 * @author: EvolutionScript S.A.C.
 * @Copyright (c) 2010 - 2020, EvolutionScript.com
 * @link http://www.evolutionscript.com
 */

namespace Config;


use CodeIgniter\Config\BaseConfig;

class Helpdesk extends BaseConfig
{
    #Database host
    const DB_HOST = 'helpdesk-db';

    #Database username
    const DB_USER = 'helpdesk';

    #Database password
    const DB_PASSWORD = 'helpdesk';

    #Database name
    const DB_NAME = 'helpdesk';

    #Database table prefix
    const DB_PREFIX = 'hd_';

    #Database port, do not change it if you are not sure
    const DB_PORT = 3306;

    #URL of your helpdesk
    const SITE_URL = 'http://localhost';

    #Upload path for images used in HTML editor and logo
    const UPLOAD_PATH = FCPATH.'upload';

    #Default helpdesk language
    const DEFAULT_LANG = 'en';

    #URI name to access to staff panel. Ex: staff / then you can access in http://helpdesk.com/staff
    const STAFF_URI = 'staff';
}