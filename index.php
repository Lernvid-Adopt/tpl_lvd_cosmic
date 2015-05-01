<?php
defined( '_JEXEC' ) or die( 'Restricted index access' ); 
echo '<?xml version="1.0" encoding="utf-8"?'.'>'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
xml:lang="<?php echo $this->language; ?>"
lang="<?php echo $this->language ?>" dir="<?php echo $this->direction; ?>">
<head>
<jdoc:include type="head" />
<?php
$collspan_offset = ( $this->CountModules( 'right', 'left' ) + $this->CountModules( 'user2' ) ) ? 2 : 1;
//script to determine which div setup for layout to use based on module configuration
$user1 = 0;
$user2 = 0;
$colspan = 0;
$right = 0;
$left = 0;
$banner = 0;
$user3 = 0;
$user4 = 0;
$user5 = 0;
$top = 0;
// banner combos
//user1 combos
if ( $this->CountModules( 'user1' ) + $this->CountModules( 'user2' ) == 2) {
	$user1 = 2;
	$user2 = 2;
	$colspan = 3;
} elseif ( $this->CountModules( 'user1' ) == 1 ) {
	$user1 = 1;
	$colspan = 1;
} elseif ( $this->CountModules( 'user2' ) == 1 ) {
	$user2 = 1;
	$colspan = 1;
}
//banner based combos
if ( $this->CountModules( 'banner' ) and ( empty( $_REQUEST['task'] ) || $_REQUEST['task'] != 'edit' ) ) {
	$banner = 1;
}
//right based combos
if ( $this->CountModules( 'right' ) and ( empty( $_REQUEST['task'] ) || $_REQUEST['task'] != 'edit' ) ) {
	$right = 1;
}
//left based combos
if ( $this->CountModules( 'left' ) and ( empty( $_REQUEST['task'] ) || $_REQUEST['task'] != 'edit' ) ) {
      $left = 1;
}
//top based combos
if ( $this->CountModules( 'top' ) and ( empty( $_REQUEST['task'] ) || $_REQUEST['task'] != 'edit' ) ) {
      $top = 1;
}
//user4 based combos
if ( $this->CountModules( 'user4' ) and ( empty( $_REQUEST['task'] ) || $_REQUEST['task'] != 'edit' ) ) {
      $user4 = 1;
}
//user3 based combos
if ( $this->CountModules( 'user3' ) and ( empty( $_REQUEST['task'] ) || $_REQUEST['task'] != 'edit' ) ) {
      $user3 = 1;
}
//user5 based combos
if ( $this->CountModules( 'user5' ) and ( empty( $_REQUEST['task'] ) || $_REQUEST['task'] != 'edit' ) ) {
      $user5 = 1;
}
?>
<meta name="designer" content="Juergen Koller and ah-68" />
<meta name="licence" content="Creative Commons Sharealike 3.0" />
<link href="templates/<?php echo $this->template ?>/css/template.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/mootools.js"></script>
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/hover.js"></script>
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/fontsize.js"></script>

</head>
<body>
<div id="wrapper">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td><div id="header">
                  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
				   codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,24"
				   width="800" height="300">
					<param name="movie" value="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/cosmic_header.swf" /> 
					<param name="quality" value="high" />
					<param name="menu" value="false" />
					<param name="wmode" value="transparent" />

					<!--[if !IE]> <-->
		    	<object data="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/cosmic_header.swf"
							width="800" height="300" type="application/x-shockwave-flash">
					 <param name="quality" value="high" />
					 <param name="menu" value="false" />
					 <param name="pluginurl" value="http://www.macromedia.com/go/getflashplayer" />
					 <param name="wmode" value="transparent" />
					 FAIL (the browser should render some flash content, not this).
				</object>
					<!--> <![endif]-->
			</object>

          <?php
							if ( $banner > 0 ) {
		  				?>
          <div id="banner">
            <div id="banner_inner">
              <jdoc:include type="modules" name="banner" style="raw" />
            </div>
          </div>
          <?php
		  			}
		  			?>
        </div></td>
    </tr>
    <?php
							if ( $user3 > 0 ) {
		  				?>
    <tr>
      <td><div id="top_menu">
          <div id="top_menu_inner">
            <jdoc:include type="modules" name="user3" style="xmhtl" />
          </div>
        </div></td>
    </tr>
    <?php
		  			}
		  			?>
    <?php
							if ( $user4 > 0 ) {
		  				?>
    <tr>
      <td><div id="top_menu_top_two">
          <div class="fontsize"><a href="index.php" title="Schrift vergr&ouml;&szlig;ern" onclick="changeFontSize(1);return false;"> <img onmouseout="this.src='templates/<?php echo $this->template ?>/images/font_sizes_plus.png';" onmouseover="this.src='templates/<?php echo $this->template ?>/images/font_sizes_plus_hover.png';" src="templates/<?php echo $this->template ?>/images/font_sizes_plus.png" alt="plus" title="Schrift vergr&ouml;&szlig;ern" style="width:20px;height:20px;" height="20" width="20" border="none" /></a> <a href="index.php" title="Schrift verkleinern" onclick="changeFontSize(-1);return false;"><img onmouseout="this.src='templates/<?php echo $this->template ?>/images/font_sizes_minus.png';" onmouseover="this.src='templates/<?php echo $this->template ?>/images/font_sizes_minus_hover.png';" src="templates/<?php echo $this->template ?>/images/font_sizes_minus.png" alt="minus" title="Schrift verkleinern" style="width:20px;height:20px;" height="20" width="20" border="none" /></a> <a href="index.php" title="standard Schrift" onclick="revertStyles(); return false;"><img onmouseout="this.src='templates/<?php echo $this->template ?>/images/font_sizes_gleich.png';" onmouseover="this.src='templates/<?php echo $this->template ?>/images/font_sizes_gleich_hover.png';" src="templates/<?php echo $this->template ?>/images/font_sizes_gleich.png" alt="gleich" title="standard Schrift" style="width:20px;height:20px;" height="20" width="20" border="none" /></a> </div>
          <div id="top_menu_top_two_inner">
            <div id="search_inner">
              <jdoc:include type="modules" name="user4" style="xhtml" />
            </div>
          </div>
        </div></td>
    </tr>
    <?php
		  			}
		  			?>
    <?php
							if ( $top > 0 ) {
		  				?>
    <tr>
      <td><div id="top_menu_top">
          <div id="top_menu_top_inner">
            <jdoc:include type="modules" name="top" style="xhtml" />
          </div>
        </div></td>
    </tr>
    <?php
		  			}
		  			?>
    <tr>
      <td id="content_outer" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="content_table">
          <tr valign="top">
            <?php
							if ( $left > 0 ) {
		  				?>
            <td><div id="left_outer">
                <div id="left_top"></div>
                <div id="left_inner_float">
                  <div id="left_inner">
                    <jdoc:include type="modules" name="left" style="xhtml" />
                  </div>
                </div>
                <div id="left_bottom"></div>
              </div></td>
            <?php
		  			}
		  			?>
            <td align="center" width="100%" id="content"><div align="center">
                <div id="content_top_bar">
                  <div id="content_top">
                    <div id="content_right_top"></div>
                  </div>
                </div>
              </div>
              <table border="0" align="center" cellpadding="0" cellspacing="0" class="content">
                <tr>
                  <td colspan="<?php echo $colspan; ?>"><div id="topcontent">
                      <jdoc:include type="message" />
                      <?php if($this->countModules('user5')) : ?>
                      <div id="user5">
                        <jdoc:include type="modules" name="user5" style="raw" />
                      </div>
                      <?php endif; ?>
                    </div>
                    <div id="breadcrumbs">
                      <!-- PATHWAY -->
                      <div class="breadcrumbs">
                        <jdoc:include type="module" name="breadcrumbs" />
                      </div>
                      <!-- END PATHWAY-->
                    </div>
                    <div id="main_content">
                      <jdoc:include type="component" />
                    </div></td>
                </tr>
                <?php
								if ($colspan > 0) {
								?>
                <tr valign="top">
                  <?php
				  					if ( $user1 > 0 ) {
				  						?>
                  <td width="50%"><div id="user1_outer">
                      <div class="user1_inner">
                        <jdoc:include type="modules" name="user1" style="xhtml" />
                      </div>
                    </div></td>
                  <?php
				  					}
				  					if ( $colspan == 3) {
										 ?>
                  <?php
										}
				  					if ( $user2 > 0 ) {
				  						?>
                  <td width="50%"><div id="user2_outer">
                      <div class="user2_inner">
                        <jdoc:include type="modules" name="user2" style="xhtml" />
                      </div>
                    </div></td>
                  <?php
				  					}
										?>
                </tr>
                <tr>
                  <td colspan="<?php echo $colspan; ?>"></td>
                </tr>
                <?php
									}
								?>
              </table>
              <div align="center">
                <div id="content_bottom_bar">
                  <div id="content_bottom">
                    <div id="content_right_bottom"></div>
                  </div>
                </div>
              </div></td>
            <?php
							if ( $right > 0 ) {
		  				?>
            <td><div id="right_outer">
                <div id="right_top"></div>
                <div id="right_inner_float">
                  <div id="right_inner">
                    <jdoc:include type="modules" name="right" style="xhtml" />
                  </div>
                </div>
                <div id="right_bottom"></div>
              </div></td>
            <?php
		  			}
		  			?>
          </tr>
        </table>
        <div align="center">
          <div id="copy">
            <div id="copy_inner" class="copy_inner">Valid <a href="http://validator.w3.org/check?uri=referer" target="_blank">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check?uri=templates/counterstrike_lernvid.com/css/template.css" target="_blank">CSS</a> <strong> | </strong> Template Design <strong><a href="http://www.lernvid.com" target="_blank">LernVid.com</a> and <a href="http://www.ah-68.de" target="_blank">ah-68</a></strong></div>
          </div>
        </div></td>
    </tr>
  </table>
</div>
<jdoc:include type="modules" name="debug" style="xhtml" />
</body>
</html>
