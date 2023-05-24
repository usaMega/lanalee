<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?=link_tag('public/styles/bootstrap.min.css')?>
    <?=script_tag('public/scripts/bootstrap.min.js')?>
    <link rel="stylesheet" href="public/styles/style.css">
   <title>KDRAMA</title>
</head>
<body>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Plot
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="container fst-italic">
        <strong>The Heirs</strong> <br> <br> The series follows a group of wealthy, privileged high school students as they are about to take over their families' business empires, 
        overcoming difficulties and growing every step of the way.
      <br>
      <br>
      Kim Tan (Lee Min-ho) is a wealthy heir to a large Korean conglomerate called Jeguk Group.
      He was exiled to the U.S. by his half-brother Kim Won (Choi Jin-hyuk), who tries to take control of the family business.
      While in the States, he meets Cha Eun-sang (Park Shin-hye), who went there to look for her sister.
      Despite being engaged to Yoo Rachel (Kim Ji-won), a fellow heiress, Kim Tan soon falls in love with Eun-sang. 
      When Kim Tan returns to Korea, his former best friend turned enemy Choi Young-do (Kim Woo-bin) begins picking on Eun-sang to irritate Tan. Tension ensues when Young-do also falls in love with Eun-sang,
      and Kim Tan is forced to choose between his responsibility of pursuing the family business or love.
      </p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Main Cast
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="container fst-italic">
            <div id="persona">
            <div class="col">
                  <div class="text-center"> 
                  <img src="..\img\LeeMinHo.jpeg" style=width:150px height="200px" ; />
                     <div class=fs-1>
                      <div class="fw-bold">
                     <p class="outline-danger"> <h6>Lee Min-ho </h6></p>
                      </div>
                     </div>
                  </div>
               </div>
               <div class="col">
               <div class="text-center"> 
                  <img src="..\img\ParkShinHye.jpeg" style=width:150px height="200px" ; />
                     <div class=fs-1>
                      <div class="fw-bold">
                     <p class="outline-danger"> <h6>Park Shin-hye </h6></p>
                      </div>
                     </div>
                  </div>
               </div>
               <div class="col">
               <div class="text-center"> 
                  <img src="..\img\KimWooBin.jpeg" style=width:150px height="200px" ; />
                     <div class=fs-1>
                      <div class="fw-bold">
                     <p class="outline-danger"> <h6>Kim Woo-bin</h6></p>
                      </div>
                     </div>
                  </div>
               </div>
               <div class="col">
               <div class="text-center"> 
                  <img src="..\img\KimJiWon.jpeg" style=width:150px height="200px" ; />
                     <div class=fs-1>
                      <div class="fw-bold">
                     <p class="outline-danger"> <h6>Kim Ji Won </h6></p>
                      </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
    </div>
  </div>
  </div>
</div>
<div class="bg-custom text-center py-5">
        <br> <br><br><button class="btn btn-outline-success " onclick="history.back()">Home</button>
      </div>
</body>
</html>