<?php

return [
    /*
     |----------------------------------------------------------------------
     | iPaymu Configuration
     |----------------------------------------------------------------------
     |
     */
    'key'        => ENV('IPAYMU_KEY'),
    'url_notify' => ENV('IPAYMU_URL_NOTIFY'),
    'url_return' => ENV('IPAYMU_URL_RETURN'),
    'url_cancel' => ENV('IPAYMU_URL_CANCEL'),
];
