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
</div><!-- end.preloader

<!-- FIRST -->
<section class="section-first">

  <h1 class="logo">Resource IT Solutions</h1>
  <h2 class="logo-avaliacao">Avaliação Digital</h2>
  <span class="parallax"></span>
  <a href="javascript:void(0);" class="start go">start</a>
  <svg class="go" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 284 103">
    <path stroke-width="1" d="M816.988,958.822V902.915l19.7-19.764H844.1l18.107-18.16H1070.83l12.08,12.107v30.268l18.1,18.161-42.33,42.464H999.741l-12.072-12.107H880.536l-7.631,7.656H821.689Z" transform="translate(-817 -865)"/>
  </svg>

  <div class="small-6 columns past">
    <figure class="ilustra"></figure>
    <div class="elements">
      <div class="parallax-1"></div>
      <div class="parallax-2"></div>
      <div class="parallax-3"></div>
      <div class="parallax-4"></div>
      <div class="parallax-5"></div>
      <div class="parallax-6"></div>
      <div class="last-parallax"></div>
      <canvas id="aguia" width="550" height="400"></canvas>
    </div>
    <figure class="ilustra"></figure>
  </div><!-- end.past -->

  <div class="small-6 columns future">
    <div class="elements">
      <div class="parallax-1"></div>
      <div class="parallax-2"></div>
      <div class="parallax-3"></div>
      <div class="parallax-4"></div>
      <div class="parallax-5"></div>
      <div class="parallax-6"></div>
      <div class="parallax-7"></div>
      <div class="parallax-8"></div>
    </div>
    <figure class="ilustra"></figure>
  </div><!-- end.future -->

</section><!-- end.row -->
<!-- END FIRST -->

<!-- MAIN -->
<section class="main levels">

  <article class="main-top">
    <h2> <span></span></h2>
  </article>

  <div class="main-parallax"></div>

  <div class="stepbox">

    <span class="pin-animate">
                <canvas id="ninja" width="663" height="483"></canvas>
            </span>

    <ul>
      <li class="select" id="level-1">
        <a href="#" class="play" data-target="1"></a>
        <div class="step step1">
          <span class="cloud parallax-1"></span>
        </div>
      </li>

      <li id="level-2">
        <a href="#" class="play" data-target="2"></a>
        <div class="step step2">
          <span class="cloud parallax-1"></span>
        </div>
      </li>

      <li id="level-3">
        <a href="#" class="play" data-target="3"></a>
        <div class="step step3">
          <span class="cloud parallax-1"></span>
        </div>
      </li>

      <li id="level-4">
        <a href="#" class="play" data-target="4"></a>
        <div class="step step4">
          <span class="cloud parallax-1"></span>
        </div>
      </li>

      <li id="level-5">
        <a href="#" class="play" data-target="5"></a>
        <div class="step step5">
          <span class="cloud parallax-1"></span>
        </div>
      </li>

      <li id="level-6">
        <a href="#" class="play" data-target="6"></a>
        <div class="step step6">
          <span class="cloud parallax-1"></span>
        </div>
      </li>

      <li id="level-7">
        <a href="#" class="play" data-target="7"></a>
        <div class="step step7">
          <span class="cloud parallax-1"></span>
        </div>
      </li>

      <li id="level-8">
        <a href="#" class="play" data-target="8"></a>
        <div class="step step8">
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
                    <div class="loader loaderbar" style="width: 5%;">
                      <span></span>
                    </div>
                </span><!-- end.bar -->

    </div><!-- end.powerbar -->

  </article><!-- end.main-bottom -->

</section>
<!-- END MAIN -->


<!-- MODAL START -->
<aside class="modal modal-start">

  <form class="modal-form" id="cadastroForm" autocomplete="off">

    <h3>Sua empresa é digital?<br>Você vai descobrir.</h3>

    <div class="input-group">
      <input class="field" type="text" name="player" tabindex="1">
      <label><span class="label-content">Player 1</span></label>
    </div><!-- end.input-group -->

    <div class="input-group">
      <input class="field" type="text" name="empresa" tabindex="2">
      <label><span class="label-content">Empresa</span></label>
    </div><!-- end.input-group -->

    <div class="input-group">
      <input class="field" type="text" name="whatsapp" tabindex="3" id="whatsapp">
      <label><span class="label-content">Whatsapp</span></label>
    </div><!-- end.input-group -->

    <div class="input-group">
      <input class="field" type="text" name="email" tabindex="4">
      <label><span class="label-content">Email</span></label>
    </div><!-- end.input-group -->

    <button class="btn-start" tabindex="5">
      <span>Começar</span>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 153 43">
        <g>
          <path d="M132.2,43H2V27.9l3.9-3.8V7.3l5.7-5.5h133.1l-6,7.1v27.6L132.2,43z M3.8,41.2h127.7l5.4-5.4V8.3l3.9-4.6H12.3
                            L7.8,8.1v16.7l-3.9,3.8V41.2z">
        </g>
      </svg>
    </button>

  </form>

</aside>
<!-- END MODAL START -->



<?php
/*
 * Perguntas dinamicas conforme webform.
 */
if(isset($node->webform['components'])) {
  $question = 0;
  $form_size = count($node->webform['components']);
//dsm($node->webform['components'], "node");
//dsm($form_size, "Size of form");

  $datanext = 2;
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
      $class_btn = "btn-" . $id_name;
      if (($question + 1) == $form_size) {
        //dsm("The last is" . $value['name']);
        print '<a href="javascript:void(0);" class="btn-start ' . $class_btn . '"><span>Finalizar</span>';
      } else {
        print '  <a href="javascript:void(0);" class="btn-start btn-continue" data-next="'. $datanext .'"><span>Continuar</span>';
      }
      print '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 153 43">';
      print '<g>';
      print '<path d="M132.2,43H2V27.9l3.9-3.8V7.3l5.7-5.5h133.1l-6,7.1v27.6L132.2,43z M3.8,41.2h127.7l5.4-5.4V8.3l3.9-4.6H12.3';
      print 'L7.8,8.1v16.7l-3.9,3.8V41.2z">';
      print '</g>';
      print '</svg>';
      print '</a>';
      print '  </form>';
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
if($argumentos == 3){
  $nid = arg(1); // need to hard-code nid if this is a custom page
  $sid = $_GET['sid'];
  $submission = webform_get_submission($nid, $sid);
  //dsm($submission, "Submission");
  $total = 0;
  $count =0;
  foreach ($submission->data as $k => $v) {
    if($count > 3) {
      if(count($v) > 1){
        foreach($v as $j){
          $valor = explode("_", $j);
          if (count($valor) > 1) {
            $total += $valor[1];
          } else {
            $total += $valor[0];
          }
        }
      }
      else {
        $valor = explode("_", $v[0]);
        if (count($valor) > 1) {
          $total += $valor[1];
        } else {
          $total += $valor[0];
        }
      }
      //dsm($valor, "item");
    }
    $count ++;
  }
  //dsm($total,"total");
  //dsm(get_defined_vars(), "VARSS");
  //dsm($path_args, "Argumentos");
  //dsm($argumentos);
  $node = node_load($path_args[1]);
  //dsm($node, "Node");
  $count = 0;
  $somaDeTotais = 0;
  foreach($node->webform['components'] as $k => $v){
    if($count > 3){
      if($v['extra']['multiple']){
        $itens = explode(PHP_EOL,$v['extra']['items']);
        foreach($itens as $k => $v){
          $somaDeTotais += explode("_", explode("|", $v)[0])[1];
          //dsm($itensValor, "Valores dos mutiplos");
        }
      }
      else{
        $somaDeTotais += explode("|", explode(PHP_EOL, $v['extra']['items'])[0])[0];
      }
    }
    $count++;
  }
  //dsm($somaDeTotais, "SOMA");
  //print "soma total é: ". $somaDeTotais . " pontos <br/>";
  //print "pontos cadastrados é: " . $total ." pontos <br />";

  $porcentagem = intval($total/$somaDeTotais * 100);

  if($porcentagem < 25){
    $ninja = "amateur";
    $recomendacao = "Você é especialista em seu segmento e podemos ajudar apoiando desde a estratégia digital de sua empresa até a implementação com produtos e serviços que podem suportar a inovação de seu negócio.

Portfolio Resource Digital: CRM, eCommerce, Marketing Digital, BI/BA, Big Data, Mobilidade, iOT, Design Thinking e Gestão do Conhecimento.";
  }
  else if($porcentagem < 50){
    $ninja = "medium";
    $recomendacao = "Legal! Você já deu os primeiros passos no mundo digital, podemos ajudar a acelerar o processo de inovação com nossos produtos e serviços.

Portfólio Resource Resource Digital: CRM, eCommerce, Marketing Digital, BI/BA, Big Data, Mobilidade, iOT, Design Thinking e Gestão do Conhecimento.";
  }
  else if($porcentagem < 75){
    $ninja = "medium";
    $recomendacao = "Ótimo! Sua empresa está no caminho certo, o caminho digital. Quer apoio de um parceiro? Conte conosco.

Portfólio Resource Digital: CRM, eCommerce, Marketing Digital, BI/BA, Big Data, Mobilidade, iOT, Design Thinking e Gestão do Conhecimento.";
  }
  else{
    $ninja = "hard";
    $recomendacao = "Sensacional! Você é Digital, lembre-se, continue inovando sempre, esteja sempre à frente da concorrência e conte com a Resource como parceiro de negócio.

Portfólio Resource Digital: CRM, eCommerce, Marketing Digital, BI/BA, Big Data, Mobilidade, iOT, Design Thinking e Gestão do Conhecimento.
";
  }
}
//dsm($node, "vars");
//dsm($page, "PAGES");

?>
<!-- MAIN Result -->
<section class="main result <?php print $ninja ?>"><!-- Adicionando as classes amateur, medium ou hard muda o nivel do ninja -->

  <article class="main-top">
    <div class="score"><h3>Score <span><b class="count"><?php print $porcentagem;?></b> pts</span></h3></div>

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
  <p><?php print $recomendacao?></p>
  <a href="<?php print '/node/' . $path_args[1]?>" class="btn-start">Iniciar Novo</a>
</section>
<!-- FINISH SECTION -->


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

<script src="/sites/all/themes/avaliacao_digital/library/js/libs/jquery.min.js"></script>
<script src="/sites/all/themes/avaliacao_digital/library/js/libs/create.min.js"></script>
<script src="/sites/all/themes/avaliacao_digital/library/js/libs/libs.min.js"></script>
<script src="/sites/all/themes/avaliacao_digital/library/js/app.js"></script>