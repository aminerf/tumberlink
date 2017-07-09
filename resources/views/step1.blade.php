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
    <a href="#home">Aide</a>
    <a href="{{ URL::route('account-sign-out') }}">Se déconnecter</a>
  </div>
                    </div>


                    </div></div></div>
                
            </div>
        </header>
        <div class="goli_fke">
    <div class="lq_ia">
        
        <div class="ss_ias">{{ Auth::user()->fname }} {{ Auth::user()->lname }}</div>
        <form action="{{ route('register_in') }}"  class="form-register" method="post" id="register2-form">
            
            <div class="form-group htui">
                <div class='lable_n'>Gender</div>
               <div class='do_if'>
                 <select type="check" class="form-control ino_con" name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                </select>
                </div>
            </div>
            
            <div class="sa_saisa_o">
           <div class="lable_n">Birthday</div>
           <div class="form-group htui">
                <div class='lidzo'><input type="text" class="form-control ino_con" placeholder="jour" name="day" id="d_birth" /></div>
                <div class='zjdd'><input type="text" class="form-control ino_con" placeholder="moi" name="month" id="m_birth" /></div>
                <div class='zidp'><input type="text" class="form-control ino_con" placeholder="année" name="year" id="y_birth" /></div>
            </div> 
            </div>
               
            
            
            <div class="dv_raeg">
            <div class="form-group">
                <button type="submit" class="btn btn-default btn_reg" name="btn-save" id="hy_sa">
                    Next
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
    </body>
</html>
