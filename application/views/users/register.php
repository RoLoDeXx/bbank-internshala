
<?php echo form_open('users/register'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <h1 class="display-4"><?= $title; ?></h1>
            <?php echo validation_errors(); ?>
            
			<div class="form-group mt-5">
				<label>Name</label>
				<input type="text" class="form-control" name="name" placeholder="Name">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email">
			</div>
			<div class="form-group">
                <label>Relation</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Radio1" name="relation" class="custom-control-input" checked value=<?=true;?>>
                    <label class="custom-control-label" for="Radio1" >Hospital</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Radio2" name="relation" class="custom-control-input" value=<?=false;?>>
                    <label class="custom-control-label" for="Radio2">Independent entity</label>
                </div>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
			</div>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</div>
		<div class="col-md-8 d-none d-md-block mt-5">
			<img src="<?=base_url();?>assets/img/donate.gif" class="rounded" alt="hero"/>
		</div>
	</div>
	<p class="text-white py-5 px-3 bg-danger rounded" id="donation-fact"> 
	</p>
<?php echo form_close(); ?>