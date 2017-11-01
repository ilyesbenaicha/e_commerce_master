<?php 	
$id_page = "promos";
require_once('verifier_access.php'); 
require_once('biens_msg_box.php');
require_once("../classes/Promo.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Liste des promos</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->
            <?php require_once('header.php'); ?>

            <div class="container2">
              <h1>Liste des promos
                :
                <a type="button" class="btn btn-primary btn-lg pull-right" href="promo_new.php">
                  Ajouter une promo </a>	  </h1>
                </div>

                <div class="container2">

                  <div class="clear"><p>&nbsp;</p></div>

                  <div id="result">
                   <table class="table table-striped">   
                    <thead> 
                      <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Code</th>
                        <th>Date début</th>
                        <th>Date fin</th>
                        <th>MOD</th>
                        <th>SUPP</th>
                      </tr>
                    </thead>
                    <thead id="resultat-diporama"> 
                      <?php 

                      $promo = new Promo();	
                      $liste = $promo->liste();
                      foreach($liste as $data_list ){
                       $id = $data_list->_id;
                       $titre = $data_list->_titre;
                       $code = $data_list->_code;
                       $d_debut = $data_list->_d_debut;
                       $d_fin = $data_list->_d_fin;

					//var_dump($data_list);
                       ?>
                       <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $titre; ?></td>
                        <td><?php echo $code; ?></td>
                        <td><?php echo $d_debut; ?> </td>
                        <td><?php echo $d_fin; ?> </td>

                        <td>
                          <!-- Button trigger modal -->
                          <a class="btn btn-primary" href="promo_new.php?id=<?php echo $id; ?>">
                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  Modifier
                          </a>
                        </td>
                        <td>
                         <a href="javascript:confirmDelete('promo_supp_action.php?id=<?php echo $id; ?>')" class="btn btn-danger btn-mini">
                           <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Supp
                         </a>                 
                       </td>
                     </tr>
                     <?php  } ?>
                   </thead>
                 </table>
               </div>        

               <div style="text-align: center;">
                <div id="bootstrap-pagination"></div>
              </div>

            </div>
            <?php //require_once("promo_modifier.php"); ?>
            <hr>

            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.js"></script>
            <script src="js/bootstrap-paginator.js"></script>
            <script src="js/bootstrap.validate.js"></script>
            <script src="js/bootstrap.validate.en.js"></script>
            <script type="text/javascript" src="js/jquery.form.js"></script>
            <script type="text/javascript">
            $(document).ready(function()
            {
              $('.form_valid').bt_validate();

              var options = {
               beforeSend: function()
               {
                 $("#resultat-new-diapo").html("");
                 document.getElementById("loading").style.display = "block";
               },
               complete: function(response)
               {
                 $("#resultat-new-diapo").html(response.responseText);
			  //document.getElementById("loading").style.display = "none";
			}
    };
    $("#form_vote").ajaxForm(options);
  });

            function confirmDelete(delUrl) {
              if (confirm("Voulez vous vraiment supprimer cette promo ? ?")) {
               document.location = delUrl;
             }
           }
           </script>
         </body>
         </html>