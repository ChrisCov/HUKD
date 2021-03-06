<?php

defined('SYSPATH') OR die('No direct script access.');

return array(
    'hotukdeals' => array(
        'api_key' => '1234',
        'api_search_url_fmt' => 'http://api.hotukdeals.com/rest_api/v2/?key=%s'
        . '&order=hot&merchant=%s'
        . '&results_per_page=%d&output=json',
        'product_display_page_prefix' => 'http://www.hotukdeals.com/visit?m=5&q=',
        'cache_life' => 60
    ),
    'exchanges' => array(
        'base' => 'USD',
        'symbols' => 'GBP',
        'exchange_rate_api_url_fmt' => 'http://api.fixer.io/latest?base=%s&symbols=%s',
        'cache_life' => 86400
    )
);
