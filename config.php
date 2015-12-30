<?php

/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
$config = array(
    "name" => "MadeSimple.sk",
    "features" => array(
        "page",
        "email",
        "form"
    ),
    "slots" => array(
        "page" => array(
            "page_title1" => array('type' => 'textarea', 'placeholder' => 'mautic.page.builder.addcontent'),
            "page_title2" => array('type' => 'textarea', 'placeholder' => 'mautic.page.builder.addcontent'),
            "page_title3" => array('type' => 'textarea', 'placeholder' => 'mautic.page.builder.addcontent'),
            "page_button1" => array('type' => 'text', 'placeholder' => 'mautic.page.builder.addcontent'),
            "page_button2" => array('type' => 'text', 'placeholder' => 'mautic.page.builder.addcontent'),
            "page_description1" => array('type' => 'html', 'placeholder' => 'mautic.page.builder.addcontent'),
            "page_description2" => array('type' => 'html', 'placeholder' => 'mautic.page.builder.addcontent'),
            "page_description3" => array('type' => 'html', 'placeholder' => 'mautic.page.builder.addcontent'),
        ),
        "email" => array(
            "picture" => array('type' => 'html', 'placeholder' => 'mautic.page.builder.addcontent'),
            "headline" => array('type' => 'text', 'placeholder' => 'mautic.page.builder.addcontent'),
            "content" => array('type' => 'html', 'placeholder' => 'mautic.page.builder.addcontent'),
        )
    )
);

return $config;
