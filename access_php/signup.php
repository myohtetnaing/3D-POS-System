
    

               
                    <div class="card bg-info">  
                        <div class="card-body">
                        <div class="card-title font-color-purple"><h5 class="title">Register Form</h5></div>
                        <form action="admin-dashboard.php" method="POST">
                            <div class="form-group mt-3">                           
                            <input type="text" required="required" id="name" class="input font-color-blue" name="name"> 
                                <label class="label" for="name">Enter user name</label>                 
                            </div>
                            <div class="form-group mt-3">                           
                                <input type="email" required="required"  id="email" class="input font-color-blue" name="email"> 
                                <label class="label" for="email">Enter your email</label>                 
                            </div>
                            <div class="form-group mt-3">          
                                <input type="password" required="required" id="password" value="" name="password" class="input font-color-blue">
                                <label class="label" for="password">Enter user password</label>                 
                                <i class="fa-solid fa-eye" id="show_hide" onclick="Eye()"></i>
                            
                            </div>
                            <div class="form-group mt-3">                                          
                                <input type="password" required="required" id="confirm_password" name="confirm-password" class="input font-color-blue">
                                <label class="label" for="confirm_password">Enter confirm password</label>
                                <i class="fa-solid fa-eye" id="show_hides" onclick="Eye2()"></i>                           
                            </div>
                            <div class="form-group mt-3">  
                                <span>Role : </span>   
                                <select name="role" id="" class="font-color-blue">
                                    <option value="user" selected >User</option>
                                    <option value="admin">Admin</option>
                                </select>   
                            </div>
                            <div class="form-group my-3"> 
                            
                                <button type="submit" class="btn px-5 btn-secondary w-100" name="register-btn">Register</button>                          
                            </div>  
                            </form>
                            <form action="../access_php/logout.php" method="POST">
                                  
                                <div class="form-group my-3"> 
                                    <button type="submit" name="login-account-btn" class="w-100 btn btn-primary">Login account</button>                        
                                </div> 
                            </form>                                      
                            <div class="form-group"> 
                               <span class=""><?php echo $noti_mail;  ?></span>                        
                            </div>                                       
                        </div>                 
                    </div>
                </form>


