<div class="row">
<?php if (app()->session->hasFlash('success')) { ?>
    <p class="has-text-success">
        <h1><?php echo app()->session->getFlash('success'); ?></h1>
    </p>
    <?php } ?>
	
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>All Information User Profile</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a class="dropdown-item" href="#">Settings 1</a>
							</li>
							<li><a class="dropdown-item" href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />

				<form id="demo-form2" method="post" action="profile_add" data-parsley-validate class="form-horizontal form-label-left">

<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">User Name <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" name="username" id="username" value="<?php echo $data[0]->username; ?>" class="form-control ">
						</div>
						<?php if (app()->session->hasFlash('errors')) { ?>
							<?php if (isset(app()->session->getFlash('errors')['username'])) { ?>
							<p class="has-text-danger"><?php echo app()->session->getFlash('errors')['username'][0]; ?></p>
						<?php }
							} ?>
					</div> 
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" > Name <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="name" name="name"  value="<?php echo $data[0]->name; ?>"   required="required" class="form-control">
						</div>
						<?php if (app()->session->hasFlash('errors')) { ?>
							<?php if (isset(app()->session->getFlash('errors')['name'])) { ?>
							<p class="has-text-danger"><?php echo app()->session->getFlash('errors')['name'][0]; ?></p>
						<?php }
							} ?>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Email <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="email" id="email" name="email" value="<?php echo $data[0]->email; ?>"  required="required" class="form-control ">
						</div>
						<?php if (app()->session->hasFlash('errors')) { ?>
							<?php if (isset(app()->session->getFlash('errors')['email'])) { ?>
							<p class="has-text-danger"><?php echo app()->session->getFlash('errors')['email'][0]; ?></p>
						<?php }
							} ?>
					</div>

					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-3">
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>

	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Form Update Password</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a class="dropdown-item" href="#">Settings 1</a>
							</li>
							<li><a class="dropdown-item" href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />

				<form id="demo-form2" method="post" action="profile_add_pass" data-parsley-validate class="form-horizontal form-label-left">
				<?php if (app()->session->hasFlash('errorHash')) { ?>
				<p class="has-text-success">
					<h1><?php echo app()->session->getFlash('errorHash'); ?></h1>
				</p>
				<?php } ?>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" >Old Password <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="password" id="OldPassword"  name="OldPassword" required="required" class="form-control">
						</div>
						<?php if (app()->session->hasFlash('errors')) { ?>
							<?php if (isset(app()->session->getFlash('errors')['OldPassword'])) { ?>
							<p class="has-text-danger"><?php echo app()->session->getFlash('errors')['OldPassword'][0]; ?></p>
						<?php }
							} ?>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" >New Password <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="password" id="password"  name="password" required="required" class="form-control">
						</div>
						<?php if (app()->session->hasFlash('errors')) { ?>
							<?php if (isset(app()->session->getFlash('errors')['Password'])) { ?>
							<p class="has-text-danger"><?php echo app()->session->getFlash('errors')['Password'][0]; ?></p>
						<?php }
							} ?>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" > Confirm Password <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="password" id="password_confirmation"  name="password_confirmation" required="required" class="form-control">
						</div>
						<?php if (app()->session->hasFlash('errors')) { ?>
							<?php if (isset(app()->session->getFlash('errors')['ConfirmPassword'])) { ?>
							<p class="has-text-danger"><?php echo app()->session->getFlash('errors')['ConfirmPassword'][0]; ?></p>
						<?php }
							} ?>
					</div>

					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-3">
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>