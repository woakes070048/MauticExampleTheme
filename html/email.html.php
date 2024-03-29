<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php $view['assets']->outputHeadDeclarations(); ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Simples-Minimalistic Responsive Template</title>

        <style type="text/css">
            /* Client-specific Styles */
            #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
            body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
            /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
            .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing.*/
            #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
            img {outline:none; text-decoration:none;border:none; -ms-interpolation-mode: bicubic;}
            a img {border:none;}
            .image_fix {display:block;}
            p {margin: 0px 0px !important;}
            table td {border-collapse: collapse;}
            table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
            a {color: #0a8cce;text-decoration: none;text-decoration:none!important;}
            /*STYLES*/
            table[class=full] { width: 100%; clear: both; }
            /*IPAD STYLES*/
            @media only screen and (max-width: 640px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #0a8cce; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }
                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #0a8cce !important;
                    pointer-events: auto;
                    cursor: default;
                }
                table[class=devicewidth] {width: 440px!important;text-align:center!important;}
                table[class=devicewidthinner] {width: 420px!important;text-align:center!important;}
                img[class=banner] {width: 440px!important;height:220px!important;}
                img[class=colimg2] {width: 440px!important;height:220px!important;}


            }
            /*IPHONE STYLES*/
            @media only screen and (max-width: 480px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #0a8cce; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }
                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #0a8cce !important; 
                    pointer-events: auto;
                    cursor: default;
                }
                table[class=devicewidth] {width: 280px!important;text-align:center!important;}
                table[class=devicewidthinner] {width: 260px!important;text-align:center!important;}
                img[class=banner] {width: 280px!important;height:140px!important;}
                img[class=colimg2] {width: 280px!important;height:140px!important;}
                td[class=mobile-hide]{display:none!important;}
                td[class="padding-bottom25"]{padding-bottom:25px!important;}

            }
        </style>
    </head>
    <body>
        <!-- Start of preheader -->
        <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="preheader" >
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="10"></td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td>
                                                        <table width="100" align="left" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td align="left" valign="middle" style="font-family: Helvetica, arial, sans-serif; font-size: 14px;color: #666666" st-content="viewonline" class="mobile-hide">
                                                                        <a href="{unsubscribe_url}" style="text-decoration: none; color: #666666">View Onlines</a> 
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <table width="100" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="30" height="30" align="right">
                                                                        <div class="imgpop">

                                                                            <a target="_blank" href="">
                                                                                <img src="<?php echo $view['assets']->getUrl('themes/MauticExampleTheme/img/facebook.png'); ?>" alt="" border="0" width="30" height="30" style="display:block; border:none; outline:none; text-decoration:none;">
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                    <td align="left" width="20" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                                                    <td width="30" height="30" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="#">
                                                                                <img src="<?php echo $view['assets']->getUrl('themes/MauticExampleTheme/img/twitter.png'); ?>" alt="" border="0" width="30" height="30" style="display:block; border:none; outline:none; text-decoration:none;">
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                    <td align="left" width="20" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                                                    <td width="30" height="30" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="#">
                                                                                <img src="<?php echo $view['assets']->getUrl('themes/MauticExampleTheme/img/linkedin.png'); ?>" alt="" border="0" width="30" height="30" style="display:block; border:none; outline:none; text-decoration:none;">
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="10"></td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of preheader -->       
        <!-- Start of header -->
        <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="header">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td>
                                                        <!-- logo -->
                                                        <table width="140" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="169" height="45" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="#">
                                                                                <img src="<?php echo $view['assets']->getUrl('themes/MauticExampleTheme/img/logo.png'); ?>" alt="" border="0" width="169" height="45" style="display:block; border:none; outline:none; text-decoration:none;">
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of logo -->
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Header -->
        <?php if ($view['slots']->get('picture')): ?>
            <!-- Start of main-banner -->
            <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="banner">
                <tbody>
                    <tr>
                        <td>
                            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                <tbody>
                                    <tr>
                                        <td width="100%">
                                            <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                                                <tbody>
                                                    <tr>
                                                        <!-- start of image -->
                                                        <td align="center" st-image="banner-image">
                                                            <div class="imgpop">
                                                                <?php $view['slots']->output('picture'); ?>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- end of image -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- End of main-banner --> 
        <?php endif; ?>
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="20" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->   
        <?php if ($view['slots']->get('headline') || $view['slots']->get('content')): ?>
        <!-- Start Full Text -->
        <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="full-text">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td>
                                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                                            <tbody>
                                                                <!-- Title -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 30px; color: #333333; text-align:center; line-height: 30px;" st-title="fulltext-heading">
                                                                        <?php $view['slots']->output('headline'); ?>
                                                                    </td>
                                                                </tr>
                                                                <!-- End of Title -->
                                                                <!-- spacing -->
                                                                <tr>
                                                                    <td width="100%" height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- End of spacing -->
                                                                <!-- content -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 16px; color: #666666; text-align:center; line-height: 30px;" st-content="fulltext-content">s
                                                                        <?php $view['slots']->output('content'); ?>
                                                                    </td>
                                                                </tr>
                                                                <!-- End of content -->
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- end of full text -->
            <?php endif; ?>
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td width="550" align="center" height="1" bgcolor="#d1d1d1" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->   
        <!-- 3 Start of Columns -->
        <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <!-- col 1 -->
                                                        <table width="186" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <!-- image 2 -->
                                                                <tr>
                                                                    <td width="100%" align="center" class="devicewidth">
                                                                        <img src="<?php echo $view['assets']->getUrl('themes/MauticExampleTheme/img/icon1.png'); ?>" alt="" border="0" width="50" height="50" style="display:block; border:none; outline:none; text-decoration:none;">
                                                                    </td>
                                                                </tr>
                                                                <!-- end of image2 -->
                                                                <tr>
                                                                    <td>
                                                                        <!-- start of text content table -->  
                                                                        <table width="186" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                                            <tbody>
                                                                                <!-- Spacing -->
                                                                                <tr>
                                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                </tr>
                                                                                <!-- Spacing -->
                                                                                <!-- title2 -->
                                                                                <tr>
                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #666666; text-align:center; line-height: 24px;" st-title="3col-title1">
                                                                                        Heading
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- end of title2 -->
                                                                                <!-- Spacing -->
                                                                                <tr>
                                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                </tr>
                                                                                <!-- Spacing -->
                                                                                <!-- content2 -->
                                                                                <tr>
                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:center; line-height: 24px;" st-content="3col-content1">
                                                                                        Two lines of Locvrem Ipsum
                                                                                        will just fit in here. 
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- end of content2 -->
                                                                                <!-- Spacing -->
                                                                                <tr>
                                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                </tr>
                                                                                <!-- Spacing -->
                                                                                <!-- read more -->
                                                                                <tr>
                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #0a8cd8;  text-align:center; line-height: 20px;" st-title="3col-readmore1" class="padding-bottom25">
                                                                                        <a href="#" style="text-decoration:none; color: #0a8cd8; ">Read More</a>
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- end of read more -->
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- end of text content table -->
                                                            </tbody>
                                                        </table>
                                                        <!-- spacing -->
                                                        <table width="20" align="left" border="0" cellpadding="0" cellspacing="0" class="removeMobile">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of spacing -->
                                                        <!-- col 2 -->
                                                        <table width="186" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <!-- image 2 -->
                                                                <tr>
                                                                    <td width="100%" align="center" class="devicewidth">
                                                                        <img src="<?php echo $view['assets']->getUrl('themes/MauticExampleTheme/img/icon1.png'); ?>" alt="" border="0" width="50" height="50" style="display:block; border:none; outline:none; text-decoration:none;">
                                                                    </td>
                                                                </tr>
                                                                <!-- end of image2 -->
                                                                <tr>
                                                                    <td>
                                                                        <!-- start of text content table -->  
                                                                        <table width="186" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                                            <tbody>
                                                                                <!-- Spacing -->
                                                                                <tr>
                                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                </tr>
                                                                                <!-- Spacing -->
                                                                                <!-- title2 -->
                                                                                <tr>
                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #666666; text-align:center; line-height: 24px;" st-title="3col-title2">
                                                                                        Heading
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- end of title2 -->
                                                                                <!-- Spacing -->
                                                                                <tr>
                                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                </tr>
                                                                                <!-- Spacing -->
                                                                                <!-- content2 -->
                                                                                <tr>
                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:center; line-height: 24px;" st-content="3col-content2">
                                                                                        Two lines of Locvrem Ipsum
                                                                                        will just fit in here. 
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- end of content2 -->
                                                                                <!-- Spacing -->
                                                                                <tr>
                                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                </tr>
                                                                                <!-- /Spacing -->
                                                                                <!-- read more -->
                                                                                <tr>
                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #0a8cd8;  text-align:center; line-height: 20px;" st-title="3col-readmore2" class="padding-bottom25">
                                                                                        <a href="#" style="text-decoration:none; color: #0a8cd8; ">Read More</a>
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- end of read more -->
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- end of text content table -->
                                                            </tbody>
                                                        </table>
                                                        <!-- end of col 2 -->
                                                        <!-- spacing -->
                                                        <table width="1" align="left" border="0" cellpadding="0" cellspacing="0" class="removeMobile">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of spacing -->
                                                        <!-- col 3 -->
                                                        <table width="186" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <!-- image3 -->
                                                                <tr>
                                                                    <td width="100%" align="center" class="devicewidth">
                                                                        <img src="<?php echo $view['assets']->getUrl('themes/MauticExampleTheme/img/icon1.png'); ?>" alt="" border="0" width="50" height="50" style="display:block; border:none; outline:none; text-decoration:none;">
                                                                    </td>
                                                                </tr>
                                                                <!-- end of image3 -->
                                                                <tr>
                                                                    <td>
                                                                        <!-- start of text content table -->  
                                                                        <table width="186" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                                            <tbody>
                                                                                <!-- Spacing -->
                                                                                <tr>
                                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                </tr>
                                                                                <!-- Spacing -->
                                                                                <!-- title -->
                                                                                <tr>
                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #666666; text-align:center; line-height: 24px;" st-title="3col-title3">
                                                                                        Heading
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- end of title -->
                                                                                <!-- Spacing -->
                                                                                <tr>
                                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                </tr>
                                                                                <!-- Spacing -->
                                                                                <!-- content -->
                                                                                <tr>
                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:center; line-height: 24px;" st-content="3col-content3">
                                                                                        Two lines of Locvrem Ipsum
                                                                                        will just fit in here. 
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- end of content -->
                                                                                <!-- Spacing -->
                                                                                <tr>
                                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                </tr>
                                                                                <!-- Spacing -->
                                                                                <!-- read more -->
                                                                                <tr>
                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #0a8cce;  text-align:center; line-height: 20px;" st-title="3col-readmore3">
                                                                                        <a href="#" style="text-decoration:none; color: #0a8cce; ">Read More</a>
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- end of read more -->
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- end of text content table -->
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <!-- spacing -->
                                                    <!-- end of spacing -->
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- end of 3 Columns -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td width="550" align="center" height="1" bgcolor="#d1d1d1" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator --> 
        <!-- 2columns -->
        <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="2columns">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <!-- start of left column -->
                                                        <table width="290" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <!-- Spacing -->
                                                                <tr>
                                                                    <td width="100%" height="20"></td>
                                                                </tr>
                                                                <!-- Spacing -->
                                                                <tr>
                                                                    <td>
                                                                        <!-- start of text content table -->
                                                                        <table width="290" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                                            <tbody>
                                                                                <!-- image -->
                                                                                <tr>
                                                                                    <td width="290" height="160" align="center" class="devicewidth">
                                                                                        <img src="<?php echo $view['assets']->getUrl('themes/MauticExampleTheme/img/ipad.png'); ?>" alt="" border="0" width="290" height="160" style="display:block; border:none; outline:none; text-decoration:none;" class="colimg2">
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- Content -->
                                                                                <tr>
                                                                                    <td>
                                                                                        <table width="270" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td width="100%" height="20"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #333333; line-height:24px;text-align:center;" st-title="2coltitle1">
                                                                                                        2 Columns Heading
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td width="100%" height="20"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; line-height:24px; color: #666666; text-align:center;" st-conteent="2colcontent1">
                                                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius modtempor incididunt ut labore et dolore. 
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td width="100%" height="20"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #0a8cce; text-align:center;" st-title="2colreadmore1">
                                                                                                        <a href="#" style="text-decoration:none; color:#0a8cce;">Read More</a>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- end of Content -->
                                                                                <!-- end of content -->
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- end of text content table -->
                                                            </tbody>
                                                        </table>
                                                        <!-- end of left column -->
                                                        <!-- start of right column -->
                                                        <table width="290" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <!-- Spacing -->
                                                                <tr>
                                                                    <td width="100%" height="20"></td>
                                                                </tr>
                                                                <!-- Spacing -->
                                                                <tr>
                                                                    <td>
                                                                        <!-- start of text content table -->
                                                                        <table width="290" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                                            <tbody>
                                                                                <!-- image -->
                                                                                <tr>
                                                                                    <td width="290" height="160" align="center" class="devicewidth">
                                                                                        <img src="<?php echo $view['assets']->getUrl('themes/MauticExampleTheme/img/ipad.png'); ?>" alt="" border="0" width="290" height="160" style="display:block; border:none; outline:none; text-decoration:none;" class="colimg2">
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- Content -->
                                                                                <tr>
                                                                                    <td>
                                                                                        <table width="270" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td width="100%" height="20"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #333333;line-height:24px; text-align:center;" st-title="2coltitle2">
                                                                                                        2 Columns Heading
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td width="100%" height="20"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; line-height:24px; color: #666666; text-align:center;" st-content="2colcontent2">
                                                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius modtempor incididunt ut labore et dolore. 
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td width="100%" height="20"></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #0a8cce; text-align:center;" st-title="2colreadmore2">
                                                                                                        <a href="#" style="text-decoration:none; color:#0a8cce;">Read More</a>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- end of Content -->
                                                                                <!-- end of content -->
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- end of text content table -->
                                                            </tbody>
                                                        </table>
                                                        <!-- end of right column -->
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="10"></td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- end of 2 columns -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td width="550" align="center" height="1" bgcolor="#d1d1d1" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->   
        <!-- Start Full Text -->
        <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="full-text">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td>
                                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                                            <tbody>
                                                                <!-- Title -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 30px; color: #333333; text-align:center; line-height: 30px;" st-title="fulltext-title">
                                                                        Your Awesome Heading
                                                                    </td>
                                                                </tr>
                                                                <!-- End of Title -->
                                                                <!-- spacing -->
                                                                <tr>
                                                                    <td width="100%" height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- End of spacing -->
                                                                <!-- content -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 16px; color: #666666; text-align:center; line-height: 30px;" st-content="fulltext-content">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                                    </td>
                                                                </tr>
                                                                <!-- End of content -->
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- end of full text -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td width="550" align="center" height="1" bgcolor="#d1d1d1" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->  
        <!-- Start of Postfooter -->
        <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="postfooter" >
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <td align="center" valign="middle" style="font-family: Helvetica, arial, sans-serif; font-size: 14px;color: #666666" st-content="postfooter">
                                                        Click here to <a href="#" style="text-decoration: none; color: #0a8cce">Unsubscribe</a> 
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="20"></td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of postfooter -->
        <?php $view['slots']->output('builder'); ?>
    </body>
</html>