<!-- For index page -->
<?php function index(){?>
<style>
  
    .font-color-white{
        color: #fff;
    }
    .navbar-bg{
        background:#1DBDBD;
        border-radius: 2px;
    }
    .login-title{
        letter-spacing: 0.2em;
        text-transform: uppercase;
    }
   
    .login-input{
       
        width: 100%;
        padding: 7px;
        border: 1px solid #fff;
        border-radius: 5px;
        background: #1d2b3a;
        outline: none;
        font-size: 1em;
        transition: .5s;
    }
    .card-body{
        background: #1d2b3a;
        border-radius: 5px;
        position: relative;
    }
    .card-body .label{
        position: absolute;
        left: 0;
        padding:7px 30px;
        text-transform: uppercase;
        transition: .5s;
    }
    
    .login-input:valid ~ .label,.login-input:focus ~ .label{
        color:#000;
        transform: translateX(30px) translateY(-8px);
        font-size: 0.75em;
        background: #00dfc4;
        padding: 0 10px;
        border-left:1px solid #00dfc4;
        border-right:1px solid #00dfc4;
        letter-spacing: 0.2em;
        border-radius: 2px;
      
    }
    .login-input:valid,.login-input:focus{
        border: 1px solid #00dfc4;
    }

    </style>
<?php } ?>


<!-- For signup and edit from admin_dashboard page -->
<?php function admin_css_dashboard(){?>
<style>
    .eye-danger{
        color: red;
    }
    body{
        background:#e7f0ec;
    }
    .font-color-purple{
        color:#AC3DED;
    }
    .font-color-blue{
        color: #1C55EE;
    }
    .title{
        letter-spacing: 0.2em;
        text-transform: uppercase;
    }

    .input{
       
        width: 100%;
        padding: 7px;
        border: 1px solid #6C30E4;
        border-radius: 5px;
        background: #9FE2E1;
        outline: none;
        font-size: 1em;
        transition: .5s;
    }
    .card-body{
        background: #CCCCFF;
        border-radius: 5px;
        position: relative;
        
      }
    .card{
        border:none
        
    } 
    .card-body .label{
        position: absolute;
        left: 0;
        padding:7px 30px;
        text-transform: uppercase;
        transition: .5s;
    }
    
    .input:valid ~ .label,.input:focus ~ .label{
        color:#000;
        transform: translateX(30px) translateY(-8px);
        font-size: 0.75em;
        background: #00dfc4;
        padding: 0 10px;
        border-left:1px solid #00dfc4;
        border-right:1px solid #00dfc4;
        letter-spacing: 0.2em;
        border-radius: 2px;
      
    }
    .input:valid,.input:focus{
        border: 1px solid #000;
    }

    /* For show and hide eye */
  
    .fa-eye,.fa-eye-slash{
        cursor: pointer;
        position: absolute;
        margin-top: 12px;
        margin-left: -35px;
    }

</style>
<?php } ?>


<!-- For user dashboard -->

<?php function user_dashboard() { ?>
    <style>
        .text-uppercase{
            text-transform: uppercase;
        }
        .text-bolder{
            font-weight: bolder;
        }
        .text-bold{
            font-weight: bold;
        }
        .title-insert,.title-limitation,.pass-limitation-amount{
            text-transform: uppercase;
            letter-spacing: .2em;
            background:#AC3DED;
            display: inline;
            padding: 5px 20px;
            border-radius: 10px;
            color:#ffff;
        }
        .letter-spacing{
        letter-spacing: .3em;
    }
    .limit-input{
       
        width: 100%;
        padding: 7px;
        border: 1px solid #6C30E4;
        border-radius: 5px;
        background: #9FE2E1;
        margin-top: 5px;
        outline: none;
        font-size: 1em;
        transition: .5s;
        letter-spacing: .3em;
        font-weight: bolder;
        color:#AC3DED;
        text-align: center;
    } 
    .insert-input{
       
        width: 100%;
        padding: 7px;
        border: 1px solid #6C30E4;
        border-radius: 5px;
        background: #9FE2E1;
        margin-top: 5px;
        outline: none;
        font-size: 1em;
        transition: .5s;
        letter-spacing: .3em;
        font-weight: bolder;
        color:#AC3DED;
       
    } 
   .limit-label{
        position: absolute;
        left: 0;
        letter-spacing: .1em;
        padding:13px 30px;
        text-transform: uppercase;
        transition: .5s;
        font-style: italic;
    }
    .insert-form-group{
        position:relative;
    }
    .reverse{
        cursor: pointer;
    }
   .insert-label{
        position: absolute;
        left: 0;
        letter-spacing: .1em;
        padding:13px 30px;
        text-transform: uppercase;
        transition: .5s;
        font-style: italic;
    }
    
    .limit-input:valid ~ .limit-label,.limit-input:focus ~ .limit-label{
        color:#000;
        transform: translateX(30px) translateY(-4px);
        font-size: 0.75em;
        background: #00dfc4;
        padding: 0 10px;
        border-left:1px solid #00dfc4;
        border-right:1px solid #00dfc4;
        letter-spacing: 0.2em;
        border-radius: 2px;
      
    }
    .insert-input:valid ~ .insert-label,.insert-input:focus ~ .insert-label{
        color:#000;
        transform: translateX(30px) translateY(-4px);
        font-size: 0.75em;
        background: #00dfc4;
        padding: 0 10px;
        border-left:1px solid #00dfc4;
        border-right:1px solid #00dfc4;
        letter-spacing: 0.2em;
        border-radius: 2px;
      
    }
    .limit-input:valid,.limit-input:focus{
        border: 1px solid #1d2b3a;
    }
   
    </style>
<?php } ?>


<!-- For total-record -->

<?php function totalRecord() { ?>
    <style>
        .text-uppercase{
            text-transform: uppercase;
        }
        .text-bolder{
            font-weight: bolder;
        }
        .text-bold{
            font-weight: bold;
        }
        .title-insert,.title-limitation,.pass-limitation-amount{
            text-transform: uppercase;
            letter-spacing: .2em;
            background:#AC3DED;
            display: inline;
            padding: 5px 20px;
            border-radius: 10px;
            color:#ffff;
        }
        .letter-spacing{
        letter-spacing: .3em;
    }
    .limit-input{
       
        width: 100%;
        padding: 7px;
        border: 1px solid #6C30E4;
        border-radius: 5px;
        background: #9FE2E1;
        margin-top: 5px;
        outline: none;
        font-size: 1em;
        transition: .5s;
        letter-spacing: .3em;
        font-weight: bolder;
        color:#AC3DED;
        text-align: center;
    } 
    .insert-input{
       
        width: 100%;
        padding: 7px;
        border: 1px solid #6C30E4;
        border-radius: 5px;
        background: #9FE2E1;
        margin-top: 5px;
        outline: none;
        font-size: 1em;
        transition: .5s;
        letter-spacing: .3em;
        font-weight: bolder;
        color:#AC3DED;
       
    } 
   .limit-label{
        position: absolute;
        left: 0;
        letter-spacing: .1em;
        padding:13px 30px;
        text-transform: uppercase;
        transition: .5s;
        font-style: italic;
    }
    .insert-form-group{
        position:relative;
    }
    .reverse{
        cursor: pointer;
    }
   .insert-label{
        position: absolute;
        left: 0;
        letter-spacing: .1em;
        padding:13px 30px;
        text-transform: uppercase;
        transition: .5s;
        font-style: italic;
    }
    
    .limit-input:valid ~ .limit-label,.limit-input:focus ~ .limit-label{
        color:#000;
        transform: translateX(30px) translateY(-4px);
        font-size: 0.75em;
        background: #00dfc4;
        padding: 0 10px;
        border-left:1px solid #00dfc4;
        border-right:1px solid #00dfc4;
        letter-spacing: 0.2em;
        border-radius: 2px;
      
    }
    .insert-input:valid ~ .insert-label,.insert-input:focus ~ .insert-label{
        color:#000;
        transform: translateX(30px) translateY(-4px);
        font-size: 0.75em;
        background: #00dfc4;
        padding: 0 10px;
        border-left:1px solid #00dfc4;
        border-right:1px solid #00dfc4;
        letter-spacing: 0.2em;
        border-radius: 2px;
      
    }
    .limit-input:valid,.limit-input:focus{
        border: 1px solid #1d2b3a;
    }
   
    </style>
<?php } ?>