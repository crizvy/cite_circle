<?php if  ( $this->aauth->is_loggedin() ){?>
	<!-- Following Menu -->
    <div class="ui menu">
  	<div class="header item">
  	<?php echo  anchor('home', '<img src="'.base_url().'assets/images/logo1.png" alt="Home" />','class="ui mini image"');?>
  	</div>
  	 <?php echo anchor('home','Home','class="active item"')?>
      <?php echo anchor('News', 'News Feed', 'class="item"')?>
	   <?php echo anchor('status','Feed','class="item"')?>
	
  		<div class="right menu">
          <?php echo anchor('login/logout','Log out','class="item"')?>
  	</div>
  	</div>
<?php }else{?>
	<!-- Following Menu -->
    <div class="ui menu">
  	<div class="header item">
  	<?php echo  anchor('home', '<img src="'.base_url().'assets/images/logo1.png" alt="Home" />','class="ui mini image"');?>
  	</div>
  	<?php echo anchor('home','Home','class="active item"')?>
  		<div class="right menu">
          <?php echo anchor('login','Log in','class="item"')?>
          <?php echo anchor('register','Sign Up','class="item"')?>
  	</div>
</div>
<?php }?>
