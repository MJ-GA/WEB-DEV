<?php include "travel-data.php"; ?>
         <div class="panel panel-default">
           <div class="panel-heading">Search</div>
           <div class="panel-body">
             <form>
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="search ...">
                  <span class="input-group-btn">
                    <button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span>          
                    </button>
                  </span>
               </div>  
             </form>
           </div>
         </div>  <!-- end search panel -->       
      
         <div class="panel panel-info">
           <div class="panel-heading">Continents</div>
           <ul class="list-group">     
           
           <?php
           sort($continents);
           for ($i=0; $i <6 ; $i++) { 
            echo '<li class="list-group-item"><a href="#">'.$continents[$i].'</a></li>';
           }
           
           ?>
           
        
           </ul>
         </div>  <!-- end continents panel -->  
         <div class="panel panel-info">
           <div class="panel-heading">Popular Countries</div>
           <ul class="list-group">               
           <?php
           sort($countries);
           for ($i=0; $i <5 ; $i++) { 
            echo '<li class="list-group-item"><a href="#">'.$countries[$i].'</a></li>';
           }
           
           ?>       
           </ul>
         </div>  <!-- end countries panel -->  
         <div class="panel panel-info">
          <div class="panel-heading">Examples</div>
         
           <ul class="list-group">               
              <li class="list-group-item"><a href="Pattern.php" >Pattern</a></li>
              <li class="list-group-item"><a href="Table.php"> Table</a></li>                                
           </ul>
         </div>  <!-- end Examples panel -->    