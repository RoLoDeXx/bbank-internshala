  
<?php echo form_open('users/login'); ?>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login-box d-flex flex-column justify-content-around">
            <h1 class="display-4"><?php echo $title; ?></h1>
            <?php if($this->session->flashdata('login_failed')): ?>
            <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
            <?php endif; ?>
            <div class="mt-5">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter email" required autofocus>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
                </div>
                <p class="text-white py-5 px-3 bg-danger rounded" id="donation-fact"></p>
                <button type="submit" class="btn btn-primary btn-block mt-5">Login</button>
            </div>
        </div>
    </div>
    <div class="col-md-8 d-none d-md-block mt-5">
			<img src="<?=base_url();?>assets/img/donate.gif" class="rounded" alt="hero"/>
    </div>
</div>    
    
<?php echo form_close(); ?>