
    

               
                    <div class="card bg-info">  
                        <div class="card-body">
                        <div class="card-title font-color-purple"><h5 class="login-title"><h5 class="title">Edit Form</h5></div>
                            <form action="admin-dashboard.php" method="POST">
                                <div class="form-group mt-3"> 
                                    <input type="text" value="<?php echo $edit_name ;?>" required="required" id="name" class="input font-color-blue" name="update_name"> 
                                    <label class="label" for="name">Edit user name</label>                 
                                </div>
                                <div class="form-group mt-3">                           
                                    <input type="email" required="required" value="<?php echo $edit_email ;?>" id="email" class="input font-color-blue" name="update_email"> 
                                    <label class="label" for="email">Edit your email</label>                 
                                </div>
                                <div class="form-group mt-3 eye-holder">          
                                    <input type="password" required="required" id="password" value="<?php echo $edit_password; ?>" name="update_password" class="input font-color-blue">
                                    <label class="label" for="password">Edit user password</label>
                                    <i class="fa-solid fa-eye" id="show_hide" onclick="Eye()"></i>
            
                                </div>
                                <input type="text" hidden value="<?php echo $edit_id;?>" name="update_id">
                                <div class="form-group mt-3">  
                                    <span>Edit Role : </span>   
                                    <select name="update_role" id="" class="font-color-blue">
                                        <option value="user" <?php if($edit_role == 'user'): ?> selected <?php endif ?> >User</option>
                                        <option value="admin" <?php if($edit_role == 'admin'): ?> selected <?php endif ?>>Admin</option>
                                    </select>   
                                </div>
                                <input type="text" hidden value="<?php echo $edit_id;?>" name="update_id">
                                <div class="form-group my-3"> 
                                     
                                    <button type="submit" class="btn btn-secondary w-100" name="update-btn">Update</button>                          
                                </div>
                            </form>  
                            <form action="admin-dashboard.php" method="POST">
                                <div class="form-group my-3"> 
                                    <button type="submit" name="create_acc_btn" class="btn btn-primary w-100">Create account</button>                      
                                </div> 
                            </form>
                        </div>                 
                    </div>
             


