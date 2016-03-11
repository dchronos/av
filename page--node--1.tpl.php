<?php

/**
 * @file
 * Fusion theme implementation to display a page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation.
 *   At the very least, this will always default to /.
 * - $directory: The directory the template is located in,
 *   e.g. modules/system or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been
 *   disabled in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been
 *   disabled in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the site,
 *   if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links
 *   for the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears
 *   in the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node associated
 *   with the page, and the node ID is the second argument in the page's path
 *   (e.g. node/12345 and node/12345/revisions, but not comment/reply/12345).
 *
 * Regions:
 * - $page['header_top']: Items for the header top region.
 * - $page['header']: Items for the header region.
 * - $page['main_menu']: Main menu placement.
 * - $page['preface_top']: Items for the preface top region.
 * - $page['preface_bottom']: Items for the preface bottom region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['postcript_top']: Items for the postcript top region.
 * - $page['postscript_bottom']: Items for the postscript bottom region.
 * - $page['footer']: Items for the footer region.
 */
?>
<!-- PRELOADER -->
<div class="preloader">
  <div class="loader">
    <div class="circle one"></div>
    <div class="circle two"></div>
    <div class="circle three"></div>
  </div>
  <span class="logo-icon"></span>
</div><!-- end.preloader -->

<!-- FIRST -->
<section class="section-first">

  <h1 class="logo">Resource IT Solutions</h1>
  <h2 class="logo-avaliacao">Avaliação Digital</h2>
  <span class="parallax"></span>

  <div class="small-6 columns past">
    <figure class="ilustra"></figure>
  </div><!-- end.past -->

  <div class="small-6 columns future">
    <figure class="ilustra"></figure>
    <a href="javascript:void(0)" class="start">start</a>
  </div><!-- end.future -->

</section><!-- end.row -->
<!-- END FIRST -->

<!-- MAIN -->
<section class="main questions">

  <article class="main-top">
    <h2>Pergunta <span>01</span></h2>
  </article>

  <div class="main-parallax"></div>

  <div class="stepbox">

    <ul>
      <li>
        <div class="step step1">
          <a href="#" class="play" data-target="1"></a>
          <span class="cloud parallax-1"></span>
        </div>
      </li>

      <li>
        <div class="step step2">
          <a href="#" class="play" data-target="2"></a>
          <span class="cloud parallax-1"></span>
        </div>
      </li>

      <li>
        <div class="step step3">
          <a href="#" class="play" data-target="3"></a>
          <span class="cloud parallax-1"></span>
        </div>
      </li>

      <li>
        <div class="step step4">
          <a href="#" class="play" data-target="4"></a>
          <span class="cloud parallax-1"></span>
        </div>
      </li>

      <li>
        <div class="step step5">
          <a href="#" class="play" data-target="5"></a>
          <span class="cloud parallax-1"></span>
        </div>
      </li>

      <li>
        <div class="step step6">
          <a href="#" class="play" data-target="6"></a>
          <span class="cloud parallax-1"></span>
        </div>
      </li>

      <li>
        <div class="step step7">
          <a href="#" class="play" data-target="7"></a>
          <span class="cloud parallax-1"></span>
        </div>
      </li>

      <li>
        <div class="step step8">
          <a href="#" class="play" data-target="8"></a>
          <span class="future parallax-1"></span>
          <span class="future parallax-2"></span>
        </div>
      </li>
    </ul>

  </div><!-- end.stepbox -->

  <article class="main-bottom">
    <span class="pin"></span>

    <div class="powerbar">

      <label>Power</label>
                <span class="bar">
                    <div class="loader" style="width: 5%;">
                      <span></span>
                    </div>
                </span><!-- end.bar -->

    </div><!-- end.powerbar -->

  </article><!-- end.main-bottom -->

</section>
<!-- END MAIN -->


<!-- MODAL -->
<aside class="modal modal-start">
  <h3>Sua empresa é digital?<br>Você vai descobrir.</h3>

  <form class="modal-form" autocomplete="off">

    <div class="input-group">
      <input class="field player" type="text" name="player" tabindex="1">
      <label><span class="label-content">Player 1</span></label>
    </div><!-- end.input-group -->

    <div class="input-group">
      <input class="field empresa" type="text" name="empresa" tabindex="2">
      <label><span class="label-content">Empresa</span></label>
    </div><!-- end.input-group -->

    <div class="input-group">
      <input class="field whatsapp" type="text" name="whatsapp" tabindex="3">
      <label><span class="label-content">Whatsapp</span></label>
    </div><!-- end.input-group -->

    <div class="input-group">
      <input class="field email" type="text" name="email" tabindex="4">
      <label><span class="label-content">Email</span></label>
    </div><!-- end.input-group -->

    <a href="javascript:void(0)" class="btn-start btn-start-main" tabindex="5">Começar</a>

  </form>
  <?php //print render($page['content']); ?>
</aside>
<!-- END MODAL -->

<!-- MAIN Result -->
<section class="main result medium"><!-- Adicionando as classes amateur, medium ou hard muda o nivel do ninja -->

  <article class="main-top">
    <div class="score"><h3>Score <span><b class="count">92</b> pts</span></h3></div>

    <div class="figures">
      <figure>Profissional</figure>
    </div><!-- end.figures -->

  </article><!-- end.main-top -->


  <article class="main-bottom">

    <div class="powerbar">

                <span class="bar">
                    <div class="result-loader loader">
                      <span></span>
                    </div>
                </span><!-- end.bar -->

    </div><!-- end.powerbar -->

    <div class="content">
      <p>Você já deu os primeiros passos, conte com a Resource Digital para avançar!</p>
      <a href="#" class="btn-start recomendar" data-scroll="recomendacoes">Recomendações</a>
      <span class="scroll bounce">Down</span>
    </div>

  </article><!-- end.main-bottom -->

</section>
<!-- END MAIN -->

<!-- FINISH SECTION -->
<section class="main finish" data-anchor="recomendacoes">
  <h3>A Resource é<span>Digital</span></h3>
  <p class="sub">Veja como podemos<br>te ajudar</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
  <a href="index.html" class="btn-start">Iniciar Novo</a>
</section>
<!-- FINISH SECTION -->

<?php
/*
 * Perguntas dinamicas conforme webform.
 */
if(isset($node->webform['components'])) {
  $question = 0;
  $form_size = count($node->webform['components']);
//dsm($node->webform['components'], "node");
//dsm($form_size, "Size of form");

  foreach ($node->webform['components'] as $key => $value) {
    if ($question > 3) {
      $level = $question - 3;
      $id_name = str_replace("_", "-", $value['form_key']);
      //dsm($id_name, "IDNAME");
      print '<aside class="modal modal-questions" id="modal-' . $level . '">';
      //print '<aside class="modal modal-questions" id="modal-8">';
      print '  <h3>' . $value['name'] . '</h3>';

      if (isset($value['extra']['description'])) {
        print '<p>' . $value['extra']['description'] . '</p>';
      }

      print '  <form class="modal-form">';


      if ($value['type'] == "select") {
        $item_count = 1;
        $values_of_itens = explode("\n", $value['extra']['items']);
        if ($value['extra']['multiple']) {
          foreach ($values_of_itens as $k => $v) {
            $check_id = "modalfront-" . $id_name . "-" . $item_count;
            print '    <div class="frame">';
            print '      <input id="' . $check_id . '" name="check" type="checkbox">';
            print '      <label class="check" for="' . $check_id . '"><i class="fa"></i></label>';
            print '      <span class="label">' . explode('|', $v)[1] . '</span>';
            print '    </div>';
            $item_count++;
          }

        } else {
          foreach ($values_of_itens as $k => $v) {
            $radio_id = "modalfront-" . $id_name . "-" . $item_count;
            print '    <div class="frame">';
            print '      <input id="' . $radio_id . '" name="radio" type="radio">';
            print '      <label class="radio" for="' . $radio_id . '"><i class="fa fa-times"></i></label>';
            print '      <span class="label">' . explode('|', $v)[1] . '</span>';
            print '    </div>';
            $item_count++;
          }
        }
      }
      print '  </form>';
      $class_btn = "btn-" . $id_name;
      if (($question + 1) == $form_size) {
        //dsm("The last is" . $value['name']);
        print '<a href="javascript:void(0);" class="btn-start ' . $class_btn . '">Finalizar</a>';
      } else {
        print '  <a href="javascript:void(0);" class="btn-start btn-continue ' . $class_btn . '">Continuar</a>';
      }

      print '</aside>';
    }
    $question++;
  }
}
?>

<?php
  $path_args = arg();
    //dsm($path_args, "args");
  $argumentos = count($path_args);
//dsm($argumentos);
if($argumentos == 3){
  $nid = arg(1); // need to hard-code nid if this is a custom page
  $sid = $_GET['sid'];
  $submission = webform_get_submission($nid, $sid);
  //dsm($submission, "Submission");
  $total = 0;
  $count =0;
  foreach ($submission->data as $k => $v) {
    if($count > 3) {
      $valor = explode("_", $v[0]);

      if(count($valor) > 1){
        $total += $valor[1];
      }
      else{
        $total += $valor[0];
      }
      //dsm($valor, "item");
    }
    $count ++;
  }
  //dsm($total,"total");

}
  //dsm($node, "vars");
  //dsm($page, "PAGES");

?>
<div id="page" class="page">
  <div id="page-inner" class="page-inner">
    <?php print render($page['header_top']); ?>

    <!-- header-group region: width = grid_width -->
    <div id="header-group-wrapper" class="header-group-wrapper full-width clearfix">
      <div id="header-group" class="header-group region <?php print $grid_width; ?>">
        <div id="header-group-inner" class="header-group-inner inner clearfix">

          <?php if ($logo || $site_name || $site_slogan): ?>
            <div id="header-site-info" class="header-site-info clearfix">
              <div id="header-site-info-inner" class="header-site-info-inner gutter">
                <?php if ($logo): ?>
                  <div id="logo">
                    <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
                  </div>
                <?php endif; ?>
                <?php if ($site_name || $site_slogan): ?>
                  <div id="site-name-wrapper" class="clearfix">
                    <?php if ($site_name): ?>
                      <?php if ($title): ?>
                        <div id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></div>
                      <?php else: /* Use h1 when the content title is empty */ ?>
                        <h1 id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h1>
                      <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($site_slogan): ?>
                      <span id="slogan"><?php print $site_slogan; ?></span>
                    <?php endif; ?>
                  </div><!-- /site-name-wrapper -->
                <?php endif; ?>
              </div><!-- /header-site-info-inner -->
            </div><!-- /header-site-info -->
          <?php endif; ?>

          <?php print render($page['header']); ?>
          <?php print render($page['main_menu']); ?>
        </div><!-- /header-group-inner -->
      </div><!-- /header-group -->
    </div><!-- /header-group-wrapper -->

    <?php print render($page['preface_top']); ?>

    <!-- main region: width = grid_width -->
    <div id="main-wrapper" class="main-wrapper full-width clearfix">
      <div id="main" class="main region <?php print $grid_width; ?>">
        <div id="main-inner" class="main-inner inner clearfix">
          <?php print render($page['sidebar_first']); ?>

          <!-- main group: width = grid_width - sidebar_first_width -->
          <div id="main-group" class="main-group region nested <?php print $main_group_width; ?>">
            <div id="main-group-inner" class="main-group-inner inner">
              <?php print render($page['preface_bottom']); ?>

              <div id="main-content" class="main-content region nested">
                <div id="main-content-inner" class="main-content-inner inner">
                  <!-- content group: width = grid_width - sidebar_first_width - sidebar_second_width -->
                  <div id="content-group" class="content-group region nested <?php print $content_group_width; ?>">
                    <div id="content-group-inner" class="content-group-inner inner">
                      <?php print theme('grid_block', array('content' => $breadcrumb, 'id' => 'breadcrumbs')); ?>
                      <?php print theme('grid_block', array('content' => $messages, 'id' => 'content-messages')); ?>

                      <div id="content-region" class="content-region region nested">
                        <div id="content-region-inner" class="content-region-inner inner">
                          <a id="main-content-area"></a>
                          <?php print theme('grid_block', array('content' => render($tabs), 'id' => 'content-tabs')); ?>
                          <?php print render($page['help']); ?>
                          <?php print render($title_prefix); ?>
                          <?php if ($title): ?>
                            <h1 class="title gutter"><?php print $title; ?></h1>
                          <?php endif; ?>
                          <?php print render($title_suffix); ?>
                          <?php if ($action_links): ?>
                            <ul class="action-links"><?php print render($action_links); ?></ul>
                          <?php endif; ?>
                          <?php if ($page['content']): ?>
                            <?php print render($page['content']); ?>
                          <?php endif; ?>
                        </div><!-- /content-region-inner -->
                      </div><!-- /content-region -->

                    </div><!-- /content-group-inner -->
                  </div><!-- /content-group -->
                  <?php print render($page['sidebar_second']); ?>
                </div><!-- /main-content-inner -->
              </div><!-- /main-content -->

              <?php print render($page['postscript_top']); ?>
            </div><!-- /main-group-inner -->
          </div><!-- /main-group -->
        </div><!-- /main-inner -->
      </div><!-- /main -->
    </div><!-- /main-wrapper -->

    <?php print render($page['postscript_bottom']); ?>
    <?php print render($page['footer']); ?>
  </div><!-- /page-inner -->
</div><!-- /page -->
<script src="/sites/all/themes/avaliacao_digital/library/js/libs/classie.js"></script>
<script src="/sites/all/themes/avaliacao_digital/library/js/app.js"></script>