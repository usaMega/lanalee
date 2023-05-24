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
        <strong>Vincenzo</strong> <br> <br> At the age of eight, Park Joo-hyung (Song Joong-ki) was adopted by an Italian family. 
        He later joins the mafia and is adopted by Don Fabio, head of the Cassano Family. Renamed “Vincenzo Cassano” he becomes a lawyer, a consigliere for the mafia, and Don Fabio's right-hand man.
      After Fabio dies, Paolo, Fabio's biological son and the new leader of the Cassano Family attempts to kill Vincenzo.
      <br>
      <br>
      He flees to Seoul and sets out to recover 1.5 tons of gold that he helped a recently-dead Chinese tycoon secretly stash within the basement of Geumga Plaza.
      However, a subsidiary of Babel Group has illegally taken ownership of the building, and Vincenzo must use his skills to reclaim the building and recover his fortunes.
      <br>
      <br>
      Among the quirky tenants at Geumga Plaza is the Jipuragi Law Firm run by Hong Yoo-chan (Yoo Jae-myung) in which Vincenzo finds he has aligned interests.
      At first he comes into conflict with Hong Yoo-chan's daughter, Hong Cha-young (Jeon Yeo-been), an attorney for a rival firm, but after her father's death she takes over the practice and joins forces with Vincenzo and the other tenants to fight Babel Group.
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
                  <img src="..\img\SongJoongKiV.jpeg" style=width:150px height="200px" ; />
                     <div class=fs-1>
                      <div class="fw-bold">
                     <p class="outline-danger"> <h6>Song Joong Ki </h6></p>
                      </div>
                     </div>
                  </div>
               </div>
               <div class="col">
               <div class="text-center"> 
                  <img src="..\img\JeonYeoBeen.jpeg" style=width:150px height="200px" ; />
                     <div class=fs-1>
                      <div class="fw-bold">
                     <p class="outline-danger"> <h6>Jeon Yeo-been </h6></p>
                      </div>
                     </div>
                  </div>
               </div>
               <div class="col">
               <div class="text-center"> 
                  <img src="..\img\OkTaecYeon.jpeg" style=width:150px height="200px" ; />
                     <div class=fs-1>
                      <div class="fw-bold">
                     <p class="outline-danger"> <h6>Ok Taec-yeon</h6></p>
                      </div>
                     </div>
                  </div>
               </div>
               <div class="col">
               <div class="text-center"> 
                  <img src="..\img\KwakDongYeon.jpeg" style=width:150px height="200px" ; />
                     <div class=fs-1>
                      <div class="fw-bold">
                     <p class="outline-danger"> <h6>Kwak Dong-yeon </h6></p>
                      </div>
                     </div>
                  </div>
                  <div class="col">
               <div class="text-center"> 
                  <img src="..\img\KimYeoJin.png" style=width:150px height="200px" ; />
                     <div class=fs-1>
                      <div class="fw-bold">
                     <p class="outline-danger"> <h6>Kim Yeon-jin</h6></p>
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