<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <script type="text/javascript" src="../bootstrap-5/js/bootstrap.js"></script>
  <script type="text/javascript" src="../bootstrap-5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../bootstrap-5/css/bootstrap.min.css">
  <style type="text/css">
      .progress-bar {
       width: 0;
       animation: progress 2s ease-in-out forwards;
      }
       .progress-bar .title {
         opacity: 0;
         animation: show 2s forwards ease-in-out 0.5s;
      }
       @keyframes progress {
         from {
           width: 0;
        }
         to {
           width: 100%;
        }
      }
       @keyframes show {
         from {
           opacity: 0;
        }
         to {
           opacity: 1;
        }
      }
      #ani{
        animation: animate 1.5s linear forwards;
      }

      @keyframes animate{
        0%{
             transform: translateX(0px);
        }
        100%{
             transform: translateX(var(--g));
        }
      }
      .tiendo{
        width: 99vw;
        justify-items: center;
        height: 170px;
        display: inline-block;
         display: grid;
         grid-template-columns: repeat(10, 1fr);
         column-gap: 1.6rem;
         grid-template-columns: 10% 10% 10% 10% 10% 10% 10% 10% 10% 9%;
         row-gap: 2rem;
         margin-top: 0.5rem;
      }
 
  </style>
</head>

<body>

    <div aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="max-width: 60%">
      <img src="../image/gif.gif" border="0" alt="Photobucket" height="200" width="250" id="ani" style="position: relative;top:26px;z-index: -1;--g: 55vw;">
    </div>
     
    <div style="width: 99vw;">
      <div class="progress" style="height:5vh">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="max-width: 60%">
        <span class="title" style="font-size:30px">60%</span>
        </div>
      </div>
    </div>


  <div class="tiendo" >
     <div style="width: 150px;height: 120px;border-radius: 50%;overflow: hidden;text-align: center;display: flex;justify-content: center;align-items: center;border: 3px solid #333;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="test">
      <h5 style="font-weight: bold;">may1 <br> <span style="color:red;font-weight:bold;">30%</span></h5>
     </div>
     <div style="width: 150px;height: 120px;border-radius: 50%;overflow: hidden;text-align: center;display: flex;justify-content: center;align-items: center;border: 3px solid #333;" data-bs-toggle="modal" data-bs-target="#exampleModal" >
      <h5 style="font-weight: bold;">may2 <br> <span style="color:red;font-weight:bold;">30%</span></h5>
     </div>
     <div style="width: 150px;height: 120px;border-radius: 50%;overflow: hidden;text-align: center;display: flex;justify-content: center;align-items: center;border: 3px solid #333;" data-bs-toggle="modal" data-bs-target="#exampleModal" >
      <h5 style="font-weight: bold;">may3 <br> <span style="color:red;font-weight:bold;">30%</span></h5>
     </div>
     <div style="width: 150px;height: 120px;border-radius: 50%;overflow: hidden;text-align: center;display: flex;justify-content: center;align-items: center;border: 3px solid #333;" data-bs-toggle="modal" data-bs-target="#exampleModal" >
      <h5 style="font-weight: bold;">may4 <br> <span style="color:red;font-weight:bold;">30%</span></h5>
     </div>
     <div style="width: 150px;height: 120px;border-radius: 50%;overflow: hidden;text-align: center;display: flex;justify-content: center;align-items: center;border: 3px solid #333;" data-bs-toggle="modal" data-bs-target="#exampleModal" >
      <h5 style="font-weight: bold;">may5 <br> <span style="color:red;font-weight:bold;">30%</span></h5>
     </div>
     <div style="width: 150px;height: 120px;border-radius: 50%;overflow: hidden;text-align: center;display: flex;justify-content: center;align-items: center;border: 3px solid #333;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="test">
      <h5 style="font-weight: bold;">may6 <br> <span style="color:red;font-weight:bold;">30%</span></h5>
     </div>
     <div style="width: 150px;height: 120px;border-radius: 50%;overflow: hidden;text-align: center;display: flex;justify-content: center;align-items: center;border: 3px solid #333;" data-bs-toggle="modal" data-bs-target="#exampleModal" >
      <h5 style="font-weight: bold;">may7 <br> <span style="color:red;font-weight:bold;">30%</span></h5>
     </div>
     <div style="width: 150px;height: 120px;border-radius: 50%;overflow: hidden;text-align: center;display: flex;justify-content: center;align-items: center;border: 3px solid #333;" data-bs-toggle="modal" data-bs-target="#exampleModal" >
      <h5 style="font-weight: bold;">may8 <br> <span style="color:red;font-weight:bold;">30%</span></h5>
     </div>
     <div style="width: 150px;height: 120px;border-radius: 50%;overflow: hidden;text-align: center;display: flex;justify-content: center;align-items: center;border: 3px solid #333;" data-bs-toggle="modal" data-bs-target="#exampleModal" >
      <h5 style="font-weight: bold;">may9 <br> <span style="color:red;font-weight:bold;">30%</span></h5>
     </div>
     <div style="width: 150px;height: 120px;border-radius: 50%;overflow: hidden;text-align: center;display: flex;justify-content: center;align-items: center;border: 3px solid #333;" data-bs-toggle="modal" data-bs-target="#exampleModal" >
      <h5 style="font-weight: bold;">may10 <br> <span style="color:red;font-weight:bold;">30%</span></h5>
     </div>
      <!--  <h2 style="top: -160px;position: relative;font-size: 20px;left: 20px;">DFM</h2>
       <h2 style="position: relative;font-size: 20px;left: 80px;top: -100px;">30%</h2> -->


  </div>




<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">

</script>
</body>
</html>