<!DOCTYPE html>
<html lang="en" >
    <!--begin::Head-->
    <head>
        <meta charset="utf-8"/>
        <title>App</title>
        <meta name="description" content="Updates and statistics"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->
		
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="<?php echo base_url(); ?>assets2/dist/assets/css/pages/login/login-2.css" rel="stylesheet" type="text/css"/>
		<!--end::Page Custom Styles-->
	  
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="<?php echo base_url(); ?>assets2/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>
		<!--end::Page Vendors Styles-->


        <!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?php echo base_url(); ?>assets2/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets2/dist/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets2/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
		<!--end::Global Theme Styles-->

        <!--begin::Layout Themes(used by all pages)-->
		<link href="<?php echo base_url(); ?>assets2/dist/assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets2/dist/assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets2/dist/assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets2/dist/assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css"/>        
		<!--end::Layout Themes-->

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets2/dist/assets/media/logos/favicon.ico"/>

    </head>
    <!--end::Head-->
	<!--end::Head-->
<!--begin::Body-->
   <body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >
      <!--begin::Main-->
      <div class="d-flex flex-column flex-root">
         <!--begin::Login-->
         <div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
            <!--begin::Aside-->
            <div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden">
               <!--begin: Aside Container-->
               <div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-35">
                  <!--begin::Logo-->
                  <a href="#" class="text-center pt-2">
                  <img src="assets2/dist/assets/media/logos/logo.png" class="max-h-75px" alt=""/>
                  </a>
                  <!--end::Logo-->
                  <!--begin::Aside body-->
                  <div class="d-flex flex-column-fluid flex-column flex-center">
                     <!--begin::Signin-->
                     <div class="login-form login-signin py-11">
                        <!--begin::Form-->
                        <?php echo form_open('login_validation'); ?>

						<!--begin::Title-->
                           <div class="text-center pb-8">
                              <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign In</h2>
                           </div>
                           <!--end::Title-->
                           <!--begin::Form group-->
                           <div class="form-group">
                              <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
							  <input type="hidden" value="<?php isset($url)?$url:''; ?>" name="url">
                              <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="username" autocomplete="off"/>
                           </div>
                           <!--end::Form group-->
                           <!--begin::Form group-->
                           <div class="form-group">
                              <div class="d-flex justify-content-between mt-n5">
                                 <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                              </div>
                              <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" name="password" autocomplete="off"/>
                           </div>
                           <!--end::Form group-->
                           <!--begin::Action-->
                           <div class="text-center pt-2">
                              <input type="submit" id="kt_login_signin_submit" class="btn btn-dark font-weight-bolder font-size-h6 px-8 py-4 my-3">
                           </div>
                           <!--end::Action-->
						<?php echo form_close(); ?>
                        
                        <!--end::Form-->
                     </div>
                     <!--end::Signin-->
                  </div>
                  <!--end::Aside body-->
               </div>
               <!--end: Aside Container-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="content order-1 order-lg-2 d-flex flex-column w-100 pb-0" style="background-color: #B1DCED;">
               <!--begin::Title-->
               <div class="d-flex flex-column justify-content-center text-center pt-lg-40 pt-md-5 pt-sm-5 px-lg-0 pt-5 px-7">
                  <h3 class="display4 font-weight-bolder my-7 text-dark" style="color: #986923;">Amazing Wireframes</h3>
                  <p class="font-weight-bolder font-size-h2-md font-size-lg text-dark opacity-70">
                     User Experience & Interface Design, Product Strategy<br/>
                     Web Application Verification Reporting KSPN
                  </p>
               </div>
               <!--end::Title-->
               <!--begin::Image-->
               <div class="content-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(assets2/dist/assets/media/svg/illustrations/login-visual-2.svg);"></div>
               <!--end::Image-->
            </div>
            <!--end::Content-->
         </div>
         <!--end::Login-->
      </div>
      <!--end::Main-->
	  <?php echo $this->load->view('basic_jsnew'); ?>
   </body>
   <!--end::Body-->
</html>