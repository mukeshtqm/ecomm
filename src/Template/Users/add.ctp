   <!-- Contact Start -->
   <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Registeration</span></h2>
        </div>
        <div class="row px-xl-12 ">
            <div class="col-lg-5 mb-5 offset-md-4">
                <div class="contact-form">
                    <div id="success"></div>
                    <?= $this->Form->create() ?>
                    <!-- <form name="sentMessage" id="contactForm" novalidate="novalidate"> -->
                        <div class="control-group">
                        <?php echo $this->Form->control('name', ['type'=>'text', 'id' => 'name', 'class' => 'form-control', 'placeholder' => 'Your Name', 'required' => true, 'label' => false]); ?>
                            <!-- <input type="text" class="form-control" id="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" /> -->
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        <?php echo $this->Form->control('email', ['type'=>'email', 'id' => 'email', 'class' => 'form-control', 'placeholder' => 'Your Email', 'required' => true, 'label' => false]); ?>
                            
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        <?php echo $this->Form->control('password', ['type'=>'password', 'id' => 'password', 'class' => 'form-control', 'placeholder' => 'Your Email', 'required' => true, 'label' => false]); ?>
                          
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                             <?php echo $this->Form->select('role_type', [1, 2, 3],['id' => 'role_type', 'class' => 'form-control'],
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