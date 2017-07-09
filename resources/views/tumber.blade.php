
<!DOCTYPE html>
<html>
    <head>
        <title>Tumberlink</title>
                <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/lg.png" />
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/tumber.style.css" >
        <link href='http://fonts.googleapis.com/css?family=Allerta' rel='stylesheet' type='text/css'>
          <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <script type="text/javascript" src="js/script.js"></script>
       
    </head>
    <body>
    
        <div class="all_cont">
        
        <div class="lab_on">
        <div class="mai_na">
            <div class="as_sia">
              <div class="head_di">
              <div class="eta_sa"><div class='log_i_d'>Françai <i class="fa fa-sort" aria-hidden="true"></i>
</div></div>   
              </div>
            <div class="conte_di"> 
              <div class='all_sas'>
              
                
                  
                <div class="cont_ofslect">
                  <div class="si_sa7sp">
                  
    <div class="container duiz">
  <div class="select_ra-dio">
                   <ul class="tabs">
		<li class="tab-link current" data-tab="tab-1">
                                         <div class="ol_ozz">
                                         <label class="radio inline"> 
      <input type="radio" name="sex" value="female" checked="">
      <span>INSCRIPTION</span> 
  </label>
                                        </div> 
                                           </li>
		<li class="tab-link" data-tab="tab-2">
                                           
                                          <div class="ol_ozz">
                                            <label class="radio inline"> 
      <input type="radio" name="sex" value="male">
      <span>CONEXION
</span> 
   </label>
                                        </div>
                                           </li>

	</ul> 
                  </div>

        <div class='dziz_o'>  
         
             <div id="tab-1" class="tab-content current"> 
                                     <div class="sai_s">Inscription gratuite</div>

<div class="goli_fke">
    <div class="la_ia">
        
        
        <form action="{{ route('signup') }}"  class="form-signin" method="post" id="register-form">
            <div class="sa_isa_o">
           <div class="lable_n">ADRESSE E-MAIL :</div>
           <div class="form-group htui">
                <input type="email" class="form-control ino_con" placeholder="email" name="email" id="email" />
            </div> 
            </div>
            
             <div class="sa_isa_o">
           <div class="lable_n">NOUVEAU NOM D'UTILISATEUR :</div>
           <div class="form-group htui">
                <input type="text" class="form-control ino_con" placeholder="username" name="username" id="username" />
            </div> 
            </div>
            
             <div class="sa_isa_o">
           <div class="lable_n">VOTRE NOME :</div>
           <div class="form-group htui">
                <input type="text" class="form-control ino_con" placeholder="nome" name="lname" id="lname" />
            </div> 
            </div>
            
             <div class="sa_isa_o">
           <div class="lable_n">VOTRE PRENOME :</div>
           <div class="form-group htui">
                <input type="text" class="form-control ino_con" placeholder="prénome" name="fname" id="fname" />
            </div> 
            </div>
            
              <div class="sa_isa_o">
           <div class="lable_n">MOT DE PASSE :</div>
           <div class="form-group htui">
                <input type="password" class="form-control ino_con" placeholder="mot de passe" name="password" id="password" />
            </div> 
            </div>
            
             <div class="sa_isa_o">
           <div class="lable_n">NUMERAU TELEPHONE :</div>
           <div class="form-group htui">
                <input type="text" class="form-control ino_con" placeholder="telephone" name="phone" id="phone" />
            </div> 
            </div>
            <div class="dv_reg">
            <div class="form-group">
                <button type="submit" class="btn btn-default btn_reg" name="btn-save" id="btn-submit">
                    Sign up for Tumberlink
                </button>
                   <input type="hidden" name="_token" value="{{ Session::token() }}"  />
            </div>
            </div>
        </form>
        
        
        
</div>
       
        </div>
             <div class="dk_izm">
         <div class="ski_zk">
     <div class='lo_odo' id="error">
            </div>
             
             <div class="s_kas">
             <h4>By clicking "Sign up to Tumberlink", you agree to our <a href="#">terms of service</a> and <a href="#">privacy policy</a>. We’ll occasionally send you account related emails.</h4>
             </div>
    </div>
        </div>
        </div>
            <div id="tab-2" class="tab-content"> 
<div class="goli_de">
    <div class="la_da">

        
        <form action="{{ route('signin') }}" class="form-signin" method="post" id="lodin-form">
            <div class="sa_dz">
                                <div class="s_isiiz">Login to tumberlink</div> 

            <div class="sa_isa_p">
           <div class="form-group htui">
                <input type="text" class="form-control ino_co2n" placeholder="username ou email" name="username" id="username" />
            </div> 
            </div>
            
           
              <div class="sa_isa_p">
           <div class="form-group htui">
                <input type="password" class="form-control ino_co2n" placeholder="password" name="user_password" id="user_password" />
            </div> 
            </div>
            
          
            <div class="dv_log">
            <div class="form-group">
                <button type="submit" class="btn btn-default btn_login" name="btn-save" id="btn-login">
                    Login
                </button>
                                   <input type="hidden" name="_token" value="{{ Session::token() }}"  />

            </div>
            <div class="ss_ska">
                <a href="/home">forggoten acconte?</a>
                </div>    
            </div>
        </form>
        
        
        
</div>
</div>
       
        </div>
        </div>
            
                    
             <div class="dk_izm">
         <div class="ski_zk">
     <div class='lo_odo' id="error">
            </div>
             
             <div class="s_kas">
             <h4></h4>
             </div>
    </div>
        </div>
        
        </div>
        
        
        
        
       
        
        
        
    </div>
                  </div>
                  
                  </div>
              </div>
               <div class="as_comp">
                </div> 
            </div>
            </div>
           
        </div>    
        </div>
            
        </div>
        
        
        
        
             <script type="text/javascript">
        var clickState = false;

$("#show").on("click", function() {
  if (!clickState) {
    $(".animated").removeClass("off");
    renewElement($(".animated"));
    $(".animated").addClass("on");
    clickState = true;
  } else if (clickState) {
    $(".animated").removeClass("on");
    renewElement($(".animated"));
    $(".animated").addClass("off");
    clickState = false;
  }
});

function renewElement(e) {
  var newElement = e.clone(true);
  e.remove();
  $(".container").append(newElement);
}
         
         $(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

});
         
        </script>
        
   <script src="js/bootstrap.min.js"></script>
</body>
    </html>