<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $this->lang->line('savsoft_quiz');?></title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>css/sb-admin-2.css" rel="stylesheet">
    <link rel="SHORTCUT ICON" href="<?php echo base_url();?>images/favicon.svg"/>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block  ">
                  <img src="<?= base_url("images/logo_300.png") ?>" alt="">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <form class="user"  method="post" action="<?php echo site_url('login/verifylogin');?>">
					 
		<?php 
		if($this->session->flashdata('message')){
			?>
			<div class="alert alert-danger">
			<?php echo str_replace('{resend_url}',site_url('login/resend'),$this->session->flashdata('message'));?>
			</div>
		<?php	
		}
		?>	
		
		
		
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="<?php echo $this->lang->line('email_address');?>">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="<?php echo $this->lang->line('password');?>">
                    </div>
                    <div class="form-group">
                      
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  
                  </form>
				  
				     <div class="text-center">
                    <a class="small" href="<?php echo site_url('login/forgot');?>"><?php echo $this->lang->line('forgot_password');?> </a>
					<?php /*if($this->config->item('open_quiz')){?>
			              &nbsp;&nbsp;&nbsp; <a class="small" href="<?php echo site_url('quiz/open_quiz/0');?>"  ><?php echo $this->lang->line('open_quizzes');?></a>
                    <?php } */ ?>
			
                  </div>
				  
				  
				  
                  <hr>
               
<!--                  <div class="text-center">-->
<!--                    <a class="btn btn-danger btn-user btn-block" href="--><?php //echo site_url('login/registration');?><!--">--><?php //echo $this->lang->line('register_new_account');?><!--</a>-->
<!--				 </div>-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>js/sb-admin-2.min.js"></script>

</body>

</html>










 