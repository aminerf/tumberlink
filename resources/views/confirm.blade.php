<!DOCTYPE html>
<html>
    <head>
        <title>Tumberlink</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/tumber.steps.style.css" >

      
    </head>
    <body>
        <header id="header_dzi">
            <div class="uis_zis_s">
                <div class="dz_odzl"><div class='dki_di'>
                 

<div class="ei_ife" onclick="myFunction()"> </div> </div>
                        <div id="myDropdown" class="dhh_siz">
    <a href="#home"><h5>{{ Auth::user()->username }}</h5><div class="vvv">Voir le Profile</div></a>
    <a href="#home">Aide</a>
    <a href="#about">Paramètre</a>
    <a href="{{ URL::route('account-sign-out') }}">Se déconnecter</a>
  </div>
                    </div>


                    </div></div></div>
                
            </div>
        </header>
                            <div class='_sfki'>
                                <div class="ss_ias2">GENIAL VOUS AVEZ UNE SEULE ÉTAPE POUR COMMENCER
                            <p>INSERER LE CODE QUE NOUS VOUS ENVOYER À</p></div>
                            <div class="ss_ias2 grre">{{ Auth::user()->email }}<a>changer l'email</a></div>
                            </div>

        <div class="goli_f2ke">

    <div class="lq_ia">
        
        <form action=""  class="form-register" method="post" id="register2-form">
            
             <div class="sa_isa_o">
           <div class="form-group htui">
                <input type="text" class="form-control ino_con2" placeholder="######" name="email_conf" id="conf" />
            </div> 
            </div>
            
            
         
               
            
            
            <div class="dv_raeg">
            <div class="form-group">
                <button type="submit" class="btn btn-default btn_reg" name="btn-save" id="hy_sa">
                    Confirm
                </button>
                   <input type="hidden" name="_token" value="{{ Session::token() }}"  />
            </div>
            </div>
        </form>
        
        
        
</div>
       
        </div>
            <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.ei_ife')) {

    var dropdowns = document.getElementsByClassName("dhh_siz");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

     


</script>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
 
    </body>
</html>
