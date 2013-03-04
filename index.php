<?php // No direct access.
defined('_JEXEC') or die;

include_once JPATH_THEMES.'/'.$this->template.'/include/params.php';
include_once JPATH_THEMES.'/'.$this->template.'/include/unseting.php';

// logic for calculating the sidebars
$showLeftSidebar  = $this->countModules('left');
$showRightSidebar = $this->countModules('right');
if ($showLeftSidebar == 0 && $showRightSidebar == 0) {
  $sidebarWidth = null;
} elseif ($showLeftSidebar >= 1 && $showRightSidebar == 0) {
  $sidebarWidth = 30;
} elseif ($showLeftSidebar == 0 && $showRightSidebar >= 1) {
  $sidebarWidth = 30;
} elseif ($showLeftSidebar && $showRightSidebar >= 1) {
  $sidebarWidth = 20;
}?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
  <head>
    <jdoc:include type="head" />
    <!--[if (lt IE 9)&(!IEMobile)]>
    	<link rel="stylesheet" href="<?php echo $templatePath; ?>/css/enhanced.css" />
      <?php if ($html5shiv) { ?>
      <script src="<?php echo $templatePath; ?>/js/html5shiv-ck.js"></script>
      <?php } ?>
      <?php if ($html5shivprint) { ?>
      <script src="<?php echo $templatePath; ?>/js/html5shiv-printshiv-ck.js"></script>
      <?php } ?>
    <![endif]-->
  </head>
  <body itemscope itemtype="http://schema.org/WebPage">
    <header>
      <h1 id="logo">
        <?php if ($logo) : ?>
          <a href="<?php echo $this->baseurl ?>">
            <img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>" alt="<?php echo htmlspecialchars($templateparams->get('sitetitle'));?>" />
          </a>
        <?php endif;?>
        <?php if (!$logo AND $templateparams->get('sitetitle')) : ?>
          <a href="<?php echo $this->baseurl ?>">
            <?php echo htmlspecialchars($templateparams->get('sitetitle'));?>
          </a>
        <?php elseif (!$logo AND $config->get('sitename')) : ?>
          <a href="<?php echo $this->baseurl ?>">
            <?php echo htmlspecialchars($config->get('sitename'));?>
          </a>
        <?php endif; ?>
      </h1>
    </header>
    <?php if ($this->countModules('nav')) : ?>
      <nav>
        <jdoc:include type="modules" name="nav" />
      </nav>
    <?php endif; ?>
    <div class="wrapper">
      <jdoc:include type="message" />
      
      <?php if ($this->countModules('left')) : ?>
				<aside id="left-sidebar">
				  <jdoc:include type="modules" name="left" />
				</aside>
			<?php endif; ?>
			
			<section id="content<?php echo $sidebarWidth; ?>">
        <?php if ($this->countModules('breadcrumbs')) : ?>
          <jdoc:include type="modules" name="breadcrumbs" />
        <?php endif; ?>
			  <jdoc:include type="component" />
			</section>
			
			<?php if ($this->countModules('right')) : ?>
				<aside id="right-sidebar">
				  <jdoc:include type="modules" name="right" />
				</aside>
			<?php endif; ?>
		</div>
    <?php if ($zepto) { ?>
    <script src="<?php echo $templatePath; ?>/js/zepto.min.js"></script>
    <?php } ?>
    <?php if ($jquery) { ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo $templatePath; ?>/js/jquery-1.9.1.min.js"><\/script>')</script>
    <?php } ?>
    <?php if ($sizzle) { ?>
    <script src="<?php echo $templatePath; ?>/js/sizzle-ck.js"></script>
    <?php } ?>
    <?php if ($selectivizr) { ?>
    <script src="<?php echo $templatePath; ?>/js/selectivizr-min.js"></script>
    <?php } ?>
    <jdoc:include type="modules" name="debug" />
  </body>
</html>
