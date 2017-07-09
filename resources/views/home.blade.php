<!DOCTYPE html>
<html>
   <head>
        <title>Tumberlink</title>
                <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="css/tumber.feed.min.css" >
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Kurale' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .affix {
      top:75px;
      width:15.75%;
  }

 
  </style>
    </head>
    <body>
      <header id='header'>
           <div class="mp_idz">
                 <div class="s_sjzm">
                <div class="logo_ik_f"><div class="ss_ais"><a href='{{ URL::route('home') }}'>Tumberlink</a></div></div>
                <div class="categorie_uf_eo">
                     <div class="ki_cudk"><input type='text' placeholder='Recherche'/></div>
                     </div>
                <div class="go_udi">
                    <div class="dr_ofed" >
                     <div class="sd_idmp" onclick="myFunction()">  </div>
                        <div id="myDropdown" class="dhh_siz">
    <a href="#home"><h5>{{ Auth::user()->username }}</h5><div class="vvv">Voir le Profile</div></a>
    <a href="#home">Aide</a>
    <a href="#about">Paramètre</a>
    <a href="{{ URL::route('account-sign-out') }}">Se déconnecter</a>
  </div>
                    </div>
                    
                    <div class="s_qi_s2">
                       
                    </div>
                    <div class="s_qi_s">
                    
                    </div>
                    
                     </div>
                </div>
            <div class="dz_idkzs"></div>
                </div>
            </header>
            <div class='jdu_dkj'>
                <div class='ui_die'>
                    <div class='engle_controller'>
                        <div class='cont_prof_p'>
                            <div class='cont_inf_loged'>
                                <div class='jeu_efj'></div>
                                <div class='kde_ied'><a><img src='css/img/gt.png'/></a></div>
                                <div class='kc_iece'><a>{{ Auth::user()->fname }} {{ Auth::user()->lname }}</a></div>
                            </div>
                        </div>
                        <div class="cont_list navbar-inverse" data-spy="affix" data-offset-top="120">
                            <div class='lfl_fri'>
                                <div class='ksi_a_i'><div class='ns_uai actif'><i class="fa fa-home" aria-hidden="true"></i><a>Feed</a></div></div>
                            <div class='ksi_a_i'><div class='ns_uai'><span class="glyphicon glyphicon-comment" aria-hidden="true"></span><a>Messages</a></div></div>
                            <div class='ksi_a_i'><div class='ns_uai'><i class="fa fa-usd" aria-hidden="true"></i><a>Gains</a></div></div>
                            </div>
                        </div>
                    </div>
                    <div class='engle_posts'></div>
                </div>
                <div class='engle_sadj'></div>
            </div>
            
            
            
            
            
       <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.sd_idmp')) {

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
