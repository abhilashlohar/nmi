<!DOCTYPE html>
<html lang="en" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>


<meta charset="utf-8"/>
<title>Online Sell and Purchase Non Moving Inventory</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<?php Configure::write('debug', 0); 
echo $this->fetch('meta'); ?>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?php echo $this->webroot; ?>theme_admin/assets/global/css/fonts/font.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/jquery-notific8/jquery.notific8.min.css"/>
  <link href="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
     <link href="<?php echo $this->webroot; ?>theme_admin/assets/frontend/onepage/css/style.css" rel="stylesheet">
  <link href="<?php echo $this->webroot; ?>theme_admin/assets/frontend/onepage/css/themes/blue.css" rel="stylesheet">
  <link href="<?php echo $this->webroot; ?>theme_admin/assets/frontend/pages/css/style-shop.css" rel="stylesheet" type="text/css">

<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link href="<?php echo $this->webroot; ?>theme_admin/assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->

<link href="<?php echo $this->webroot; ?>theme_admin/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot; ?>theme_admin/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot; ?>theme_admin/assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->webroot; ?>theme_admin/assets/admin/layout2/css/themes/grey.css" rel="stylesheet" type="text/css" id="style_color"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="<?php echo $this->webroot; ?>theme_admin/images/shortcut_icon/non-moving-logo.png"/>
 <script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/jquery.min.js" type="text/javascript"></script>

<script>
jQuery(document).ready(function(){

   $("a[rel='tab']").live('click',function(e){
		e.preventDefault();
		$(".page-spinner-bar").removeClass("hide"); //show loading
		pageurl=$(this).attr('href');
		window.history.pushState({path:pageurl},'',pageurl);
		$.ajax({
			url:pageurl,
		}).done(function(responce){
			$(".page-spinner-bar").addClass(" hide"); //hide loading
			$(".page-content").html(responce);
			$("html, body").animate({
				scrollTop:0
			},"slow");
		});
		
		});

		
});
</script>

<style>
@media (max-width: 770px) 
{
	.flip-scroll th, td
	{
		text-align: left;
		border-width: 0px 0px 0px 0px !important;
	}
	.table-bordered > tbody > tr > td, .table-bordered > thead > tr > th
	{
		line-height: 2.4;
	}
	.table-condensed > tbody > tr > td, .table-condensed > thead > tr > th {
		padding: 0px;
	}

}
.mycolour
{
	color:#C2C1C1;
}
/*.page-sidebar-closed .page-content-wrapper .page-content {
    margin-left: 0px !important;
}*/

@media (max-width: 1300px) 
{
  .header-navigation > li > a
  {  
  color:#85878E;
	
  }
   .displayshow
  {  
  display:none !important;
	
  }

}
@media (max-width: 992px) 
{
  .header-navigation > li > a
  {  
  color:#85878E;
	
  }
   .displayshow
  {  
  display:none !important;
	
  }

}
@media (max-width: 480px) 
{
  .navbar-brand > a > img
  {  
 	height:50px;
	width:160px;
	
  }

.navbar-brand
  {  
 	
	width:180px;
	
  }
}

@media (max-width: 425px) 
{
  .hor-menu
  {  
  
  display:none;
	
  }
  .displayshow
  {  
  
  	display:block !important;
	
  }
}

</style>
  
        <!-- ---------------------------------------------start  java script  header ---------------------------------------------   -->
         <script src="<?php echo $this->webroot; ?>assets/javascripts/jquery-411a53b27134bb9f6289afadeb2ea0b3.js"></script>
    <script src="<?php echo $this->webroot; ?>assets/javascripts/bootstrap-js-9740c835b5d9e905f6e4960383ab36a0.js"></script>
   <?php    
$this->requestAction(array('controller' => 'Nonmovinginventory', 'action' => 'ajax_function'), array());
?>   
</head>
<!-- --------------------------------start  menu  header--------------------------------------------- -->
<body class=" page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo  page-sidebar-closed" >
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div >
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
	
		
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
         <span class="title-main navbar-brand tk-adelle"><a href="<?php echo $this->webroot; ?>index"><img src="<?php echo $this->webroot; ?>images/project_logo/non-moving-logo.png" width="200" height="51"  alt="NON MOVING INVENTORY"  rel='tab'></a></span>
			<!-- BEGIN HEADER SEARCH BOX -->
			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
			<form class="search-form search-form-expanded"  action="<?php echo $this->webroot; ?>categories_details" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" id="search_by_meta" placeholder="Search..." name="search_by_meta">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="hor-menu">
				<ul class="header-navigation" style="padding-right:22px;">
					<!-- BEGIN NOTIFICATION DROPDOWN -->
                     <li>
                     <a href="<?php echo $this->webroot; ?>login" style="font-size:17px;"> <i class="fa fa-key"></i> Sign In</a>
                    </li>
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="" >
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar-wrapper">
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<div class="page-sidebar navbar-collapse collapse">
				<!-- BEGIN SIDEBAR MENU -->
				<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
				<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
				<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
				<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
				<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
				<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
				<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu page-sidebar-menu-closed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
					<li class="start active ">
						<a href="<?php echo $this->webroot; ?>index" rel='tab'>
						<i class="icon-home"></i>
						<span class="title" >Dashboard</span>
						<span class="selected"></span>
						</a>
					</li>
                    <li class="">
						<a href="<?php echo $this->webroot; ?>about_us" rel='tab'>
						<i class="icon-users"></i>
						<span class="title">About Us</span>
						<span class="selected"></span>
						</a>
					</li>
                    <li class="">
						<a href="<?php echo $this->webroot; ?>register">
						<i class="icon-user"></i>
						<span class="title">Registration</span>
						<span class="selected"></span>
						</a>
					</li>
                   <li class="displayshow">
						<a href="<?php echo $this->webroot; ?>login">
						<i class="fa fa-key"></i>
						<span class="title">Sign In</span>
						<span class="selected"></span>
						</a>
					</li>
				</ul>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>
		<!-- END SIDEBAR -->

<!-- --------------------------------end  menu  header--------------------------------------------- -->
<!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                        	<div ng-spinner-bar="" class="page-spinner-bar hide">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                            <div class="page-content">
                            
                            <!-- BEGIN PAGE HEADER-->
                                <?php echo $this->fetch('content'); ?>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
 <!-- --------------------------------start  footer menu--------------------------------------------- -->
  
 <!-- BEGIN FOOTER -->
    <div class="page-prefooter">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-6 col-sm-6 padding-top-10 mycolour">
           2014 &copy; PHP POETS ALL Rights Reserved.
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-6 col-sm-6 padding-top-10" >
          <!-- social-footer  -->
            <ul class=" list-unstyled list-inline pull-right">
              <li><a href="<?php echo $this->webroot; ?>term_services" style="font-size:17px;color:#57C8EB;" rel='tab'> T &amp; C</a></li>
                <li><a href="<?php echo $this->webroot; ?>faqs" style="font-size:17px;color:#57C8EB;" rel='tab'>FAQ</a></li>
                <li><a href="<?php echo $this->webroot; ?>about_us" style="font-size:17px;color:#57C8EB;" rel='tab'>About Us</a></li>
                <li><a href="<?php echo $this->webroot; ?>contact_us" style="font-size:17px;color:#57C8EB;" rel='tab'>Contact Us</a></li>
                <li><a href="<?php echo $this->webroot; ?>register" style="font-size:17px;color:#57C8EB;">Register </a></li>
                <li><a href="<?php echo $this->webroot; ?>login" style="font-size:17px;color:#57C8EB;">Sign In </a></li>
            </ul>  
          </div>
          <!-- END PAYMENTS -->
        </div>
      </div>
       <div class="scroll-to-top">
			<i class="icon-arrow-up" style="color:#000"></i>
		</div>
    </div>
   
        
    <!-- END FOOTER -->
	<!-- END CONTAINER -->
	
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/respond.min.js"></script>
<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->

   <script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>

<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo $this->webroot; ?>theme_admin/assets/admin/pages/scripts/form-wizard.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/select2/select2.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>

<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/jquery-notific8/jquery.notific8.min.js"></script>
<script src="<?php echo $this->webroot; ?>theme_admin/assets/admin/pages/scripts/ui-notific8.js"></script>

<!-- END PAGE LEVEL SCRIPTS -->
   <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
	<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
	<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->    

	<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
    
    <!-- product zoom -->
 <!--
    <script src="<?php echo $this->webroot; ?>theme_admin/assets/global/plugins/zoom/jquery.zoom.min.js" type="text/javascript"></script>
    <script src="<?php echo $this->webroot; ?>theme_admin/assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>
-->

<script src="<?php echo $this->webroot; ?>theme_admin/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot; ?>theme_admin/assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot; ?>assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot; ?>theme_admin/assets/admin/pages/scripts/components-form-tools.js"></script>
<script id="_webengage_script_tag" type="text/javascript">
  var _weq = _weq || {};
  _weq['webengage.licenseCode'] = '14507c5a6';
  _weq['webengage.widgetVersion'] = "4.0";

  (function(d){
    var _we = d.createElement('script');
    _we.type = 'text/javascript';
    _we.async = true;
    _we.src = (d.location.protocol == 'https:' ? "//ssl.widgets.webengage.com" : "//cdn.widgets.webengage.com") +
              "/js/widget/webengage-min-v-3.0.js";
    var _sNode = d.getElementById('_webengage_script_tag');
    _sNode.parentNode.insertBefore(_we, _sNode);
  })(document);
</script>

<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {  
	Metronic.init(); // init metronic core componets
	Layout.init(); // init layout
	FormWizard.init();
	UINotific8.init();
	Layout.initOWL();
	Demo.init();  // init layout
	ComponentsFormTools.init();
	
});
</script>

<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->
</html>


