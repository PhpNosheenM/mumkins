<div class="row ">
				<div class="card logg">
					<div class="card-body">
						<?= $this->Form->create() ?>
							<div class="form-row">
								
								<?php	echo $this->Html->image('/assets/images/logo-2.png', ['style'=>'width:100px;height:100px;margin:0 auto;']); ?>
							</div>
							<hr width="50%;">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="position-relative form-group" style="font-weight: 600;"><label for="exampleuser" class="">Username</label><input name="username" id="example" type="Name" class="form-control" required></div>
                                </div>
                            </div>
                            <div class="form-row">
                            	 <div class="col-md-12">
                                    <div class="position-relative form-group" style="font-weight: 600;"><label for="examplePassword11" class="">Password</label><input name="password" id="examplePass" type="Password" class="form-control" required></div>
                                </div>
                            </div>
                            <div class=" row form-check">
								<div class="col-md-12">
									<button type="submit" class="btn btn-warning" style="padding:10px 169px;font-size: 14px;margin-top: 30px;margin-left: -15px;">Login</button>
								</div>
                            </div>
					<?= $this->Form->end() ?>		
					</div>
				
			</div>
		</div>