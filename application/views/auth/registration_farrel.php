 <div class="container">

     <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
         <div class="card-body p-0">
             <!-- Nested Row within Card Body -->
             <div class="row">

                 <div class="col-lg">
                     <div class="p-5">
                         <div class="text-center">
                             <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                         </div>
                         <form class="user" method="post" action="<?= base_url() ?>auth_farrel/registration_farrel">

                             <div class="form-group">
                                 <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?= set_value('name')?>">
                                 <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                             </div>
                             <div class="form-group"> <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                 <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address"  value="<?= set_value('email')?>">
                                
                             </div>
                             <div class="form-group row">
                                 <div class="col-sm-12 mb-3 mb-sm-0">
                                     <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                     <div class="form-group"> <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?> <br>
                                     <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                 </div>
                                
                                    
                                 
                             </div>
                        </div>

                            
                             <button type="submit" class="btn btn-primary btn-user btn-block">
                                 Register Account
                             </button>

                         </form>
                         
                     </div>
                 </div>
             </div>
         </div>
     </div>

 </div>