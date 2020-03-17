
	<br />
	<div class="navbar navbar-expand-lg navbar-dark bg-danger">
		<a class="navbar-brand" href="<?=base_url();?>">Travelll</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
				<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarColor01">
	  		<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?=base_url();?>"><?php if ($this->session->userdata('logged_in') == TRUE) {?><i class="fa fa-home"></i> &nbsp;Beranda<?php } else { ?><i class="fa fa-sign-in"></i> &nbsp;Login<?php } ?> <span class="sr-only">(current)</span></a>
				</li>
		<?php if ($this->session->userdata('logged_in') == TRUE) {?>
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('p/masuk');?>"><i class="fa fa-level-up"></i> &nbsp;Supir</a>
				</li>
		<?php } ?>
			    
		<?php if ($this->session->userdata('logged_in') == TRUE) {?>
		   		
	    		<li class="nav-item">
	    			<a class="nav-link" href="<?=base_url('p/logout');?>"><i class="fa fa-sign-out"></i> &nbsp;Logout</a>
	    		</li>
	    <?php } ?>
	    	</ul>
		</div>
	</div>
	<br />
	