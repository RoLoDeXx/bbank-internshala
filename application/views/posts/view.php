<h1 class="display-4">Sample Details</h1>
<table class="table table-striped mt-4">
  <tbody>
    <tr>
      <th scope="row">Donor's Name</th>
      <td><?=$post['title']?></td>
    </tr>
    <tr>
      <th scope="row">Blood Group</th>
      <td>
	  	<?= $post['type']?>
	  </td>
    </tr>
    <tr>
      <th scope="row">Donor's Age</th>
      <td><?=$post['age']?></td>
    </tr>
	<tr>
      <th scope="row">Donor's details</th>
      <td><?=$post['body']?></td>
    </tr>
	<tr>
      <th scope="row">Posted on</th>
      <td><?=$post['created_at'].' <b>hours IST</b>';?></td>
    </tr>
  </tbody>
</table>



	
<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
	
	<?php echo form_open('/posts/delete/'.$post['id']); ?>
		<input type="submit" value="Remove" class="btn btn-danger my-3">
	</form>

	<h3><b>Requests</b></h3>
		<?php if($comments) : ?>
			<ul class="li-bullet">
			<?php foreach($comments as $comment) : ?>
				<li>
					<hr>
					<h5>
						<?php echo $comment['body']; ?> 
						<br><br><br>Requested by 
						<strong>
							<?php echo $comment['title']; ?>
						</strong>
					</h5>
				</li>
			<?php endforeach; ?>
			</ul>
		<?php else : ?>
			<p>No Requests To Display</p>
		<?php endif; ?>
<hr>

<?php endif; ?>

<?php if($this->session->userdata('relation') != 1):?>

	<?php if($this->session->userdata('logged_in') == 1):?>

		<h3>Add Request</h3>
		<h4>You're about to request this sample, fill the following fields in order to process.</h4>
		<div class="bg-light p-2 d-block">
			<b class="text-danger"><?php echo validation_errors(); ?></b>
		</div>
		<?php echo form_open('comments/create/'.$post['id']); ?>
			<div class="form-group">
				<label>Contact</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label>Detailed Description</label>
				<textarea name="body" class="form-control"></textarea>
			</div>
			<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
			<button class="btn btn-primary" type="submit">Submit</button>
		</form>
	<?php else:?>
		<h3>You need to be a member to request a sample. Sign up 
			<a class="text-danger" href="<?= base_url();?>users/register">here</a>
		</h3>
	<?php endif;?>
<?php endif;?>
