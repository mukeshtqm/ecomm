   <!-- Contact Start -->
   <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Registeration</span></h2>
        </div>
        <div class="row px-xl-12 ">
            <div class="col-lg-5 mb-5 offset-md-4">
                <div class="contact-form">
                    <div id="success"></div>
                    <?= $this->Form->create($user) ?>
                    <!-- <form name="sentMessage" id="contactForm" novalidate="novalidate"> -->
                        <div class="control-group">
                        <?php echo $this->Form->control('fullName', ['type'=>'text', 'id' => 'fullName', 'class' => 'form-control', 'placeholder' => 'Your Full Name', 'required' => false, 'label' => false]); ?>
                        <?php
                            //   if ($this->Form->isFieldError('fullName')) {
                            //       echo $this->Form->error('fullName');
                            //   }
                            ?>
                   
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        <?php echo $this->Form->control('email', ['type'=>'text', 'id' => 'email', 'class' => 'form-control', 'placeholder' => 'Your Email', 'required' => false, 'label' => false]); ?>
                        <?php
                            //   if ($this->Form->isFieldError('email')) {
                            //       echo $this->Form->error('email');
                            //   }
                            ?>
                            
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        <?php echo $this->Form->control('password', ['type'=>'password', 'id' => 'password', 'class' => 'form-control', 'placeholder' => 'Your Password', 'required' => false, 'label' => false]); ?>
                          
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <?php $options=['1'=>'1', '2'=>'2', '3'=>'3'];?>
                             <?php echo $this->Form->select('role_type', $options,['id' => 'role_type', 'class' => 'form-control'],
    [
        'multiple' => false,
    ]
); ?>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                        <?php echo $this->Form->button(__('Submit'), ['type' => 'submit', 'class' => 'btn btn-primary py-2 px-4','id' => 'sendMessageButton']) ?>
                            <!-- <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Submit</button> -->
                        </div>
                        <?php echo $this->Form->end(); ?>  
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->