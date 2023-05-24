<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?=link_tag('public/styles/bootstrap.min.css')?>
    <?=script_tag('public/scripts/bootstrap.min.js')?>
    <link rel="stylesheet" href="styles/style.css">
    <title>KDRAMA</title>
    </head>
<body>
  
   
   <div class="text-center bg-light" id="about">
      <div class="text-custom fw-semibold fs-2 py-4">My Top 4 Favorite KDRAMA </div>
      <div class="mt-5">
         <div class="container">
            <div id="persona" class="row text-brown">
            <div class="col">
                  <img src="..\public\img\Crash Landing On You.jpg" alt="">
                  <div class="text-center"> 
                     <div class=fs-1>
                      <div class="fw-bold mt-2 mb-4">
                      <a href="<?=base_url("public/lanalee/cloy")?>" class="btn btn-outline-success">CRASH LANDING ON YOU</a>
                      </div>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <img src="..\public\img\THE HEIRS.jpeg" alt="">
                  <div class="text-center"> 
                     <div class=fs-1>
                      <div class="fw-bold mt-2 mb-4">
                      <a href="<?=base_url("public/lanalee/th")?>" class="btn btn-outline-success">THE HEIRS</a>
                      </div>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <img src="..\public\img\DESCENDANTS OF THE SUN.jpeg" alt="">
                  <div class="text-center"> 
                     <div class=fs-1>
                      <div class="fw-bold mt-2 mb-4">
                      <a href="<?=base_url("public/lanalee/dots")?>" class="btn btn-outline-success">DESCENDANTS OF THE SUN</a>
                      </div>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <img src="..\public\img\VINCENZO.jpeg" alt="">
                  <div class="text-center"> 
                     <div class=fs-1>
                      <div class="fw-bold mt-2 mb-4">
                      <a href="<?=base_url("public/lanalee/V")?>" class="btn btn-outline-success">VINCENZO</a>
                      </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      
</body>
</html>