<?php function admin_js_dashboard(){?>
<script>
//for show eye
var pass = "password";
    var txt = "text";
function Eye(){
    var x = document.getElementById('password');
    let show_hide = document.getElementById('show_hide');
 
    if(x.type == pass){
        x.setAttribute('type',txt);
        show_hide.classList.remove('fa-eye');
        show_hide.classList.add('fa-eye-slash','eye-danger');

    }else{
        x.setAttribute('type',pass);
        show_hide.classList.add('fa-eye');
        show_hide.classList.remove('fa-eye-slash','eye-danger');
        
    }     

}
function Eye2(){
    var x = document.getElementById('confirm_password');
    let show_hide = document.getElementById('show_hides');
   
    if(x.type == pass){
        x.setAttribute('type',txt);
        show_hide.classList.remove('fa-eye');
        show_hide.classList.add('fa-eye-slash','eye-danger');

    }else{
        x.setAttribute('type',pass);
        show_hide.classList.add('fa-eye');
        show_hide.classList.remove('fa-eye-slash','eye-danger');
        
    }   
    

}

</script>
<?php } ?>