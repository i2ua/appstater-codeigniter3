<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Pagination
| -------------------------------------------------------------------------
| This file lets you define Pagination settings
| Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/libraries/pagination.html
|
*/

$config = array(
    'base_url' => '',
    'full_tag_open' => '<ul class="pagination justify-content-center">',
    'full_tag_close' => '</ul>',
    'num_tag_open' => '<li class="page-item">',
    'num_tag_close' => '</li>',
    'cur_tag_open' => '<li class="page-item active" aria-current="page"><span class="page-link">',
    'cur_tag_close' => '</span></li>',
    'attributes' => array('class' => 'page-link'),
    'enable_query_strings' => true,
    'page_query_string' => true,
    'use_page_numbers' => true,
    'query_string_segment' => 'page',
    'per_page' => 10,
    'total_rows' => 100
);
