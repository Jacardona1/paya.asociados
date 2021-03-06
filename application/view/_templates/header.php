<?php
if(isset($_SESSION["Cod"]) == NULL){
  header('location:'.URL.'Login/close');
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>Pa'Ya | Asociados</title>
 <meta name="author" content="">

 <script type="text/javascript" src="https://ajax.cloudflare.com/cdn-cgi/scripts/9014afdb/cloudflare-static/rocket.min.js"></script>
 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />


 <link href="<?php echo URL ;?>css/materialize.css" rel="stylesheet"  />
 <link href="<?php echo URL ;?>font-awesome/css/font-awesome.css" rel="stylesheet"  />
 <link href="<?php echo URL ;?>css/prettify.css" rel="stylesheet"  />
 <link href="<?php echo URL ;?>css/admin.css" rel="stylesheet"  />



 <link href="<?php echo URL ;?>css/light.css" id="ssThemeColor" rel="stylesheet"  />
 <link href="<?php echo URL ;?>css/amber.css" id="ssMainColor"  rel="stylesheet" />
 <link href="<?php echo URL ;?>css/red.css" id="ssAlternativeColor" rel="stylesheet"  />



 <link href="<?php echo URL ;?>css/theme-switcher.css" rel="stylesheet"  />
 <script src="<?php echo URL ;?>js/jquery.js"></script>






 <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
 </head>
 <body>



 <div id="nav-content">
 <nav>
 <div class="row">
 <div class="col s12">



 <div class="nav-wrapper">
 <div  class="brand-logo">
 <span class="valign">
<b class="main-text">Pa'Ya</b> Asociados
 </span>
 </div>

 <ul class="right hide-on-med-and-down">
 <li class="active"><a href="<?php echo URL?>Administrador/perfil">Inicio</a></li>
 <li><a href="#">Historial</a></li>
 <!-- <li>
 <a class="dropdown-button" href="#!" data-activates="dropdown-css" data-constrainwidth="false" data-beloworigin="true">
 CSS<i class="material-icons dropdown-icon right">arrow_drop_down</i>
 </a>
 </li> -->
 <!-- <li>
 <a class="dropdown-button" href="#!" data-activates="dropdown-components" data-constrainwidth="false" data-beloworigin="true">
 Components<i class="material-icons dropdown-icon right">arrow_drop_down</i>
 </a>
 </li> -->
 <!-- <li>
 <a class="dropdown-button" href="#!" data-activates="dropdown-javascript" data-constrainwidth="false" data-beloworigin="true">
 Javascript<i class="material-icons dropdown-icon right">arrow_drop_down</i>
 </a>
 </li>
 <li>
  <a class="dropdown-button" href="#!" data-activates="dropdown-apps" data-constrainwidth="false" data-beloworigin="true">
 APPs<i class="material-icons dropdown-icon right">arrow_drop_down</i>
 </a>
 </li> -->
 <!-- <li>
 <a class="dropdown-button" href="#!" data-activates="dropdown-pages" data-constrainwidth="false" data-beloworigin="true">
 Pages<i class="material-icons dropdown-icon right">arrow_drop_down</i>
 </a>
 </li> -->
 <li class="profile ">
 <a class="dropdown-button" href="#!" data-activates="dropdown-profile" data-constrainwidth="false" data-beloworigin="true" data-alignment="right">
 <div class="valign-wrapper">
 <img src="<?php echo URL ;?>img/asociado.png" alt="My profile" class="circle responsive-img margin-right-10">
 <?php echo ucfirst($_SESSION["Nombre"])." ".ucfirst($_SESSION["Apellido"]);?>
 <i class="material-icons dropdown-icon right">arrow_drop_down</i>
 </div>
 </a>
 </li>
 </ul>

 <!-- <ul id="dropdown-css" class="dropdown-content">
 <li><a href="css_color.html">Color</a></li>
 <li><a href="css_grid.html">Grid</a></li>
 <li><a href="css_helpers.html">Helpers</a></li>
 <li><a href="css_media.html">Media</a></li>
 <li><a href="css_sass.html">Sass</a></li>
 <li><a href="css_shadow.html">Shadow</a></li>
 <li><a href="css_table.html">Table</a></li>
 <li><a href="css_typography.html">Typography</a></li>
 </ul>
 <ul id="dropdown-components" class="dropdown-content">
 <li><a href="components_badges.html">Badges</a></li>
 <li><a href="components_buttons.html">Buttons</a></li>
 <li><a href="components_breadcrumbs.html">Breadcrumbs</a></li>
 <li><a href="components_cards.html">Cards</a></li>
 <li><a href="components_chips.html">Chips</a></li>
 <li><a href="components_collections.html">Collections</a></li>
 <li><a href="components_footer.html">Footer</a></li>
 <li><a href="components_forms.html">Forms</a></li>
 <li><a href="components_icons.html">Icons</a></li>
 <li><a href="components_navbar.html">Navbar</a></li>
 <li><a href="components_pagination.html">Pagination</a></li>
 <li><a href="components_preloader.html">Preloader</a></li>
 </ul> -->
 <!-- <ul id="dropdown-javascript" class="dropdown-content">
 <li><a href="js_collapsible.html">Collapsible</a></li>
 <li><a href="js_dialogs.html">Dialogs</a></li>
 <li><a href="js_dropdown.html">Dropdown</a></li>
 <li><a href="js_media.html">Media</a></li>
 <li><a href="js_modals.html">Modals</a></li>
 <li><a href="js_parallax.html">Parallax</a></li>
 <li><a href="js_pushpin.html">Pushpin</a></li>
 <li><a href="js_scrollfire.html">ScrollFire</a></li>
 <li><a href="js_scrollspy.html">Scrollspy</a></li>
 <li><a href="js_sidenav.html">SideNav</a></li>
 <li><a href="js_tabs.html">Tabs</a></li>
 <li><a href="js_transitions.html">Transitions</a></li>
 <li><a href="js_waves.html">Waves</a></li>
 </ul> -->
 <!-- <ul id="dropdown-apps" class="dropdown-content">
 <li><a href="apps_crud.html">CRUD</a></li>
 <li><a href="apps_pricing_table.html">Pricing Table</a></li>
 <li><a href="apps_datatables.html">DataTables</a></li>
 <li><a href="apps_maps.html">Maps</a></li>
 <li><a href="apps_charts.html">Charts</a></li>
 </ul>
 <ul id="dropdown-pages" class="dropdown-content">
 <li><a href="pages_blank.html">Blank</a></li>
 <li class="divider"></li>
 <li><a href="login.html">Login</a></li>
 <li><a href="register.html">Register</a></li>
 <li><a href="forgot_password.html">Forgot Password</a></li>
 <li class="divider"></li>
 <li><a href="error_400.html">Error 400</a></li>
 <li><a href="error_403.html">Error 403</a></li>
 <li><a href="error_404.html">Error 404</a></li>
 <li><a href="error_500.html">Error 500</a></li>
 </ul> -->
 <ul id="dropdown-profile" class="dropdown-content">
 <!-- <li><a href="<?php echo URL?>Administrador/perfil">Perfil</a></li> -->
 <li><a href="<?php echo URL;?>Login/close">Salir</a></li>
 </ul>

 <a href="#" data-activates="mobile-demo" class="button-collapse">
 <i class="material-icons">menu</i>
 </a>
 </div>



 <ul class="side-nav" id="mobile-demo">
 <li class="logo">
 <p>
 <b class="main-text">Pa'Ya</b> Asociados
 </p>
 </li>
 <li>
 <a href="<?php echo URL?>Administrador" class="waves-effect">Inicio</a>
 </li>
 <li>
 <a href="<?php echo URL?>Administrador" class="waves-effect">Historial</a>
 </li>
 <!-- <li class="padding-0">
 <ul class="collapsible collapsible-accordion">
 <li class="bold">
 <a class="collapsible-header waves-effect">CSS</a>
 <div class="collapsible-body">
 <ul>
 <li><a href="css_color.html">Color</a></li>
 <li><a href="css_grid.html">Grid</a></li>
 <li><a href="css_helpers.html">Helpers</a></li>
 <li><a href="css_media.html">Media</a></li>
 <li><a href="css_sass.html">Sass</a></li>
 <li><a href="css_shadow.html">Shadow</a></li>
 <li><a href="css_table.html">Table</a></li>
 <li><a href="css_typography.html">Typography</a></li>
 </ul>
 </div>
 </li>
 <li class="bold">
 <a class="collapsible-header waves-effect">Components</a>
 <div class="collapsible-body">
 <ul>
 <li><a href="components_badges.html">Badges</a></li>
 <li><a href="components_buttons.html">Buttons</a></li>
 <li><a href="components_breadcrumbs.html">Breadcrumbs</a></li>
 <li><a href="components_cards.html">Cards</a></li>
 <li><a href="components_chips.html">Chips</a></li>
 <li><a href="components_collections.html">Collections</a></li>
 <li><a href="components_footer.html">Footer</a></li>
 <li><a href="components_forms.html">Forms</a></li>
 <li><a href="components_icons.html">Icons</a></li>
 <li><a href="components_navbar.html">Navbar</a></li>
 <li><a href="components_pagination.html">Pagination</a></li>
 <li><a href="components_preloader.html">Preloader</a></li>
 </ul>
 </div>
 </li>
 <li class="bold">
 <a class="collapsible-header waves-effect">JavaScript</a>
 <div class="collapsible-body">
 <ul>
 <li><a href="js_collapsible.html">Collapsible</a></li>
 <li><a href="js_dialogs.html">Dialogs</a></li>
 <li><a href="js_dropdown.html">Dropdown</a></li>
 <li><a href="js_media.html">Media</a></li>
 <li><a href="js_modals.html">Modals</a></li>
 <li><a href="js_parallax.html">Parallax</a></li>
 <li><a href="js_pushpin.html">Pushpin</a></li>
 <li><a href="js_scrollfire.html">ScrollFire</a></li>
 <li><a href="js_scrollspy.html">Scrollspy</a></li>
 <li><a href="js_sidenav.html">SideNav</a></li>
 <li><a href="js_tabs.html">Tabs</a></li>
 <li><a href="js_transitions.html">Transitions</a></li>
 <li><a href="js_waves.html">Waves</a></li>
 </ul>
 </div>
 </li>
 <li class="bold">
 <a class="collapsible-header waves-effect">APPs</a>
 <div class="collapsible-body">
 <ul>
 <li><a href="apps_crud.html">CRUD</a></li>
 <li><a href="apps_pricing_table.html">Pricing Table</a></li>
  <li><a href="app_datatables.html">Datatables</a></li>
 <li><a href="app_maps.html">Maps</a></li>
 <li><a href="app_charts.html">Charts</a></li>
 </ul>
 </div>
 </li>
 </ul>
 </li> -->
 </ul>
 </div>
 </div>
 </nav>
 </div>
 <main>
 <div class="main-content no-gutter">
