<div class="d-flex align-items-center justify-content-between mb-5">
    <h1 class="mt-3 display-4">
        Samples
    </h1>

    <?php if($this->session->userdata('relation') == 1):?>
        <div id="add-post">
            <a href="<?=base_url();?>posts/create" class="btn btn-primary">Add Sample</a>
        </div>
    <?php endif;?>
</div>

<?= count($posts) >0 ? null :'No samples available at this point 😞'  ?>

<?php foreach($posts as $post):?>
<div class="card my-5">
    <div class="card-body">
        <h4 class="card-title">
            <b><span class="text-danger"><?=$post['type']?></span></b>
            donated by
            <b><?=$post['title']?></b> 
        </h4>
        <p class="text-right text-muted"><?=$post['created_at']?></p>
        <p class="card-text"><?=$post['body']?></p>

        <?php if(($this->session->userdata('user_id') == $post['user_id'])): ?>
            <a class="btn btn-danger" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Handle Requests</a></p>
        <?php elseif(($this->session->userdata('relation') != 1)):?>
            <a class="btn btn-warning" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Request Samples</a></p>
        <?php endif;?> 
        
            <!-- <?php if($this->session->userdata('relation') == 0):?>        
        <?php endif;?> -->

    </div>
</div>

<?php endforeach;?>