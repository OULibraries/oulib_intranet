<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>


<div id="top_regions">
    <div class="container-fluid">
        <div class="row">
          <?php if (!empty($page['logo'])): ?>
              <div class="col-md-8 col-sm-9 col-xs-12">
                <?php print render($page['logo']); ?>
              </div>
          <?php endif; ?>

            <div class="col-md-4 col-sm-3 col-xs-12">
                <div class="login-area">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                      <?php if (!empty($page['login-left'])): ?>
                        <?php print render($page['login-left']); ?>
                      <?php endif; ?>
                    </div>
                    <div class="col-md-3 hidden-sm hidden-xs">
                      <?php if (!empty($page['login-dots'])): ?>
                        <?php print render($page['login-dots']); ?>
                      <?php endif; ?>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <?php if (!empty($page['login-right'])): ?>
                        <?php print render($page['login-right']); ?>
                      <?php endif; ?>
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="carousel_inner hidden-xs">
  <?php print render($page['header']); ?>
</div> <!-- /#Main Carousel -->


<div class="menu">

    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed"
                        data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
				<?php if (!empty($page['site-name'])): ?>
                <?php print render($page['site-name']); ?>
            <?php endif; ?>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse"
                 id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <?php if (!empty($primary_nav) && user_is_logged_in()): ?>
                    <?php print render($primary_nav); ?>
                  <?php endif; ?>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

</div> <!-- /#menu -->


<div id="holder">
    <div class="container whitebg">


        <!-- body tag for stick footer -->

        <div id="body">

            <div class="main-container">

                <div class="row">

                  <?php if (!empty($page['sidebar_first'])): ?>
                      <aside class="col-sm-3" role="complementary">
                        <?php print render($page['sidebar_first']); ?>
                      </aside>  <!-- /#sidebar-first -->
                  <?php endif; ?>

                    <section<?php print $content_column_class; ?>>
                      <?php if (!empty($page['highlighted'])): ?>
                          <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
                      <?php endif; ?>
                      <?php if (!empty($breadcrumb)): print $breadcrumb; endif; ?>
                        <a id="main-content"></a>
                      <?php print render($title_prefix); ?>
                      <?php if (!empty($title)): ?>
                          <h1 class="page-header"><?php print $title; ?></h1>
                      <?php endif; ?>
                      <?php print render($title_suffix); ?>
                      <?php print $messages; ?>
                      <?php if (!empty($tabs)): ?>
                        <?php print render($tabs); ?>
                      <?php endif; ?>
                      <?php if (!empty($page['help'])): ?>
                        <?php print render($page['help']); ?>
                      <?php endif; ?>
                      <?php if (!empty($action_links)): ?>
                          <ul class="action-links"><?php print render($action_links); ?></ul>
                      <?php endif; ?>
                      <?php print render($page['content']); ?>
                    </section>

                  <?php if (!empty($page['sidebar_second'])): ?>
                      <aside class="col-sm-3" role="complementary">
                        <?php print render($page['sidebar_second']); ?>
                      </aside>  <!-- /#sidebar-second -->
                  <?php endif; ?>

                </div>

            </div>
        </div>

        <!-- end body tag -->
    </div>


    <!-- footer -->
    <div class="footer">

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-4" style="padding-bottom:25px;">
                    <h2>Libraries Resources</h2>

                    <ul>

                        <li><a href="/alerts-archive" title="Alerts">Alerts</a>
                        </li>

                        <li>
                            <a href="https://libraries.ou.edu/node/add/resource-problem"
                               title="E-Resource Report Form">E-Resource Report
                                Form</a></li>

                        <li><a href="https://help.libraries.ou.edu/"
                               title="Help.libraries.ou.edu">Library IT
                                Support</a></li>

                    </ul>
                </div>


                <div class="col-md-4" style="padding-bottom:25px;">
                    <h2>Campus Resources</h2>
                    <ul>

                        <li>
                            <a href="http://www.ou.edu/emergencypreparedness.html"
                               title="Emergency Preparedness">Emergency
                                Preparedness</a></li>

                        <li><a href="http://hr.ou.edu/" title="Human Resources">Human
                                Resources</a></li>

                        <li><a href="https://www.ou.edu/ouit/help"
                               title="IT Support">OU IT Support</a></li>

                    </ul>
                </div>


                <div class="col-md-4">
                    <div class="social">

                        <ul>

                            <li><a href="http://www.facebook.com/OULibraries"
                                   class="facebook" title="facebook"></a></li>

                            <li><a href="http://twitter.com/OU_Libraries"
                                   class="twitter" title="twitter"></a></li>

                            <li>
                                <a href="http://www.youtube.com/user/OULibraryOverview"
                                   class="youtube" title="youtube"></a></li>

                            <li><a href="https://www.instagram.com/oulibraries/"
                                   class="instagram" title="instagram"></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>


        </footer>

        <!-- footer -->
    </div>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5W4N7EK80R"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-5W4N7EK80R');
</script>