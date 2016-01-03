<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
$view->extend(":$template:base.html.php");
$parentVariant = $page->getVariantParent();
$title = (!empty($parentVariant)) ? $parentVariant->getTitle() : $page->getTitle();
$view['slots']->set('public', (isset($public) && $public === true) ? true : false);
$view['slots']->set('pageTitle', $title);
?>
<?php if ($view['slots']->hasContent(array('page_title2', 'page_description2'))): ?>
    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <?php if ($view['slots']->hasContent('page_title2')): ?>
                        <h2 class="section-heading"><?php $view['slots']->output('page_title2'); ?></h2>
                    <?php endif; ?>
                    <?php if ($view['slots']->hasContent('page_description2')): ?>
                        <hr class="light">
                        <div class="text-faded">
                            <?php $view['slots']->output('page_description2'); ?>
                        </div>  
                    <?php endif; ?>
                    <?php if ($view['slots']->hasContent('page_button2')): ?>
                        <a href="#page" class="btn btn-default btn-xl"><?php $view['slots']->output('page_button2'); ?></a>
                    <?php endif; ?>
                    <!--                </div>-->
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($view['slots']->hasContent(array('page_title3', 'page_description3'))): ?>
    <section id="page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <?php if ($view['slots']->hasContent('page_title3')): ?>
                        <h2 class="section-heading"><?php $view['slots']->output('page_title3'); ?></h2>
                    <?php endif; ?>

                    <?php if ($view['slots']->hasContent('page_description3')): ?>
                        <hr class="primary">
                        <?php $view['slots']->output('page_description3'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php $view['slots']->output('builder'); ?>