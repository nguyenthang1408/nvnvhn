<?php 

include "../Model/DBconfig.php";
$db = new Database();
$db -> connect();
session_start();

if(isset($_GET['id'])){
           $id = $_GET['id'];
           $table = "tiendomaymoc";
           $dataID = $db->getDataID($table,$id);

        $tablee = 'tiendo';
        $bophan = $dataID['bophan'];
        $tenmay = $dataID['tenmay'];
        $ngaybatdau = $dataID['ngaybatdau'];
        $datatiendo = $db->getDatatiendo($tablee,$tenmay,$ngaybatdau);
       
       }
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $table = 'tiendomaymoc';
            $dataID = $db->getDataID($table,$id); 
        }

$id = $_GET['id'];

$dataID['tiendo'];
$tim = strpos($dataID['tiendo'], '%');
$tiendo = substr($dataID['tiendo'], 0, $tim);
$ngaybatdau = $dataID['ngaybatdau'];
$ngaydukien = $dataID['ngaydukien'];
$catthang = substr($ngaybatdau, 5, -3);
$catthang1 = substr($ngaydukien, 5, -3);
$catnam = substr($ngaybatdau, 0, 4);
$catnam1 = substr($ngaydukien, 0, 4);
$catngay = substr($ngaybatdau, -2, 2);
$catngay1 = substr($ngaydukien, -2, 2);
$nambatdau = $catnam;
$namdukien = $catnam1;
if($catthang==11||$catthang==12||$catthang==10)
{
    $thangbatdau = $catthang;
}else
{
    $thangbatdau = substr($catthang,1);
}
if($catngay==11||$catngay==12||$catngay==10)
{
	$ngay = $catngay;
}
else{
	$ngay = substr($catngay,1);
}
if($catthang1==11||$catthang1==12||$catthang1==10)
{
    $thangdukien = $catthang1;
}else
{
    $thangdukien = substr($catthang1,1);
}
if($catngay1==11||$catngay1==12||$catngay1==10)
{
	$ngay1 = $catngay1;
}
else{
	$ngay1 = substr($catngay1,-2,2);
}
$ngayhientai = date("j");  
$thanghientai = date("n");
$namhientai = date("Y");


        $tablee = 'tiendoline';
        $table100 = 'tiendomaymoc';
        $tiendomaymoc1 = 'tiendomaymoc1';
        $tenmay = $dataID['tenmay'];
        $ngaybatdau = $dataID['ngaybatdau'];
        $datatiendo = $db->getDatatiendo($tablee,$tenmay,$ngaybatdau);
        $datatiendo2 = $db->getDatatiendo($table100,$tenmay,$ngaybatdau);
        $bophanline = $db->getDataBoPhanLine($tiendomaymoc1,$tenmay,$bophan);

        $tablee1 = 'tiendoquydinhline';
        $datatiendo1 = $db->getDatatiendo1($tablee1,$tenmay,$ngaybatdau);
      
        $a = array(10);
        $b = 0;
        foreach ($bophanline as $key3) {
            $b++;
            $a[$b] = $key3['tiendo'];
           
        }


        $c = array(10);
        $d = 0;
        foreach ($bophanline as $key4) {
            $d++;
            $c[$d] = $key4['id'];
           
        }

       
        $dau = $a[1];
        $ch = substr($dau, 0, -1);
        $tong1 = (($ch*10)/100);
        
        

        $dau2 = $a[2];
        $ch2 = substr($dau2, 0, -1);
        $tong2 = (($ch2*10)/100);

        $dau3 = $a[3];
        $ch3 = substr($dau3, 0, -1);
        $tong3 = (($ch3*10)/100);

        $dau4 = $a[4];
        $ch4 = substr($dau4, 0, -1);
        $tong4 = (($ch4*10)/100);

        $dau5 = $a[5];
        $ch5 = substr($dau5, 0, -1);
        $tong5 = (($ch5*10)/100);

        $dau6 = $a[6];
        $ch6 = substr($dau6, 0, -1);
        $tong6 = (($ch6*10)/100);
        
        $dau7 = $a[7];
        $ch7 = substr($dau7, 0, -1);
        $tong7 = (($ch7*10)/100);
        
        $dau8 = $a[8];
        $ch8 = substr($dau8, 0, -1);
        $tong8 = (($ch8*10)/100);
        
        $dau9 = $a[9];
        $ch9 = substr($dau9, 0, -1);
        $tong9 = (($ch9*10)/100);
        
        $dau10 = $a[10];
        $ch10 = substr($dau10, 0, -1);
        $tong10 = (($ch10*10)/100);
      

        $tong = $tong1+$tong2+$tong3+$tong4+$tong5+$tong6+$tong7+$tong8+$tong9+$tong10;
        

       $table = 'tiendomaymoc';
       $id = $_GET['id'];
       $dataID = $db->getDataID($table,$id); 
       $tiendo = $dataID['tiendo'];
       $tiendo1 = substr($tiendo, 0, -1);

       $ngayhoanthanh =  date("Y-m-d");

       
       $date1 = $ngaybatdau;
       $date2 = $ngaydukien;
       $diff = abs(strtotime($date2) - strtotime($date1));
       $hours = $diff / (60 * 60);
       
       

       $date3 = $ngaybatdau;
       $date4 = $ngayhoanthanh;
       $diff1 = abs(strtotime($date4) - strtotime($date3));
       $hours1 = $diff1 / (60 * 60);


         if(isset($_POST['submitmay1']))
        {
        $tentiendo = 'may1';
        $tiendo = $_POST['tongmay1'].'%';
        if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            header('Refresh:0');
        }
        }
        if(isset($_POST['submitmay2']))
        {
            $tentiendo = 'may2';
            $tiendo = $_POST['tongmay2'].'%';
            if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
                
                header('Refresh:0');
               }

        }

         
        if(isset($_POST['submitmay3']))
        {
        $tentiendo = 'may3';
        $tiendo = $_POST['tongmay3'].'%';
        if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            header('Refresh:0');
        }
        }

        if(isset($_POST['submitmay4']))
        {
        $tentiendo = 'may4';
        $tiendo = $_POST['tongmay4'].'%';
        if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            header('Refresh:0');
        }
        }
        
        if(isset($_POST['submitmay5']))
        {
        $tentiendo = 'may5';
        $tiendo = $_POST['tongmay5'].'%';
        if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            header('Refresh:0');
        }
        }
        if(isset($_POST['submitmay6']))
        {
        $tentiendo = 'may6';
        $tiendo = $_POST['tongmay6'].'%';
        if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            header('Refresh:0');
        }
        }
        if(isset($_POST['submitmay7']))
        {
        $tentiendo = 'may7';
        $tiendo = $_POST['tongmay7'].'%';
        if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            header('Refresh:0');
        }
        }
        if(isset($_POST['submitmay8']))
        {
        $tentiendo = 'may8';
        $tiendo = $_POST['tongmay8'].'%';
        if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            header('Refresh:0');
        }
        }
        if(isset($_POST['submitmay9']))
        {
        $tentiendo = 'may9';
        $tiendo = $_POST['tongmay9'].'%';
        if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            header('Refresh:0');
        }
        }
        if(isset($_POST['submitmay10']))
        {
        $tentiendo = 'may10';
        $tiendo = $_POST['tongmay10'].'%';
        if($db->Updattiendo1($tablee,$tentiendo,$tiendo,$tenmay,$ngaybatdau)){
            header('Refresh:0');
        }
        }
        $tongline = $tong.'%';
        $db->UpdateTienDo($id,$tongline);

if(isset($_GET['id'])){
           $id = $_GET['id'];
           $table = "tiendomaymoc";
           $dataID = $db->getDataID($table,$id);

           $ketqua = $dataID['tiendo'];
             $chuoidau = $dataID['tiendo'];
        $chuoi = substr($chuoidau, 0, -1);
       }
       
          $hoanthanh = $dataID['ngayhoanthanh'];
        if($tiendo1 == 100 && $hoanthanh == "")
        { 
          $hieusuat = floor((100 * $hours) / $hours1).'%';
          $db->Updatehieusuat($table,$hieusuat,$id);
          $db->Updatehoanthanh($table,$ngayhoanthanh,$id);
        }



$tableusersview = 'usersview';
$matkhau = $db->getAllData($tableusersview);


$matkhau2 = array();
$a = 0;
foreach ($matkhau as $keyy) {
    $a++;
    $matkhau1[$a] = $keyy['password'];
}


?>

<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="../codejavascript/script.js"></script>
    <script type="text/javascript" src="../canvasjs/canvasjs.min.js"></script>
    <script type="text/javascript" src="../canvasjs/canvasjs.react.js"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap-5/css/bootstrap.min.css">
    <script type="text/javascript" src="../canvasjs/jquery.canvasjs.min.js"></script>
    <title>Biểu Đồ Tiến Độ</title>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    exportEnabled: true,
    zoomEnabled: true,
    theme: "light1",
    title:{
         fontFamily: "Times New Roman",
         fontSize: 50,
         // fontWeight: "bold",
        text: "Biểu đồ tiến độ <?php echo $datatiendo1['tenmay'];  ?>"

    },
    toolTip: {
        shared: true
    },
    axisX: {
        title: "Tên Máy",
        crosshair: {
            enabled: true,
            snapToDataPoint: true
        }
    },
    axisY: {
        title: "Phần Trăm(%)",
        minimum: 1,
        maximum: 100,
        titleFontColor: "#4F81BC",
        lineColor: "#4F81BC",
        tickColor: "#4F81BC",
         crosshair: {
            enabled: true
        }
    },
    axisY2: {
        title: "Thời Gian",
         valueFormatString: "D-MM-YYYY",
        titleFontColor: "#C0504E",
        lineColor: "#C0504E",
        tickColor: "#C0504E"
    },
    legend:{
        cursor:"pointer",
        verticalAlign: "bottom",
        horizontalAlign: "left",
        dockInsidePlotArea: true,
    },
    data: [{
        type: "spline",
        name: "Tiến Độ",
        lineColor: "red",
        showInLegend: true,
        indexLabel: "{y}",
        markerType: "square",
        indexLabelFontSize: 16,
        yValueFormatString: "#,##0.0\"%\"",
        dataPoints: [
            { label: "<?php echo $datatiendo1['may1']; ?>", y: <?php echo $ch; ?> },
            { label: "<?php echo $datatiendo1['may2']; ?>", y: <?php echo $ch2; ?>},
            { label: "<?php echo $datatiendo1['may3']; ?>",  y: <?php echo $ch3; ?> },
            { label: "<?php echo $datatiendo1['may4']; ?>",  y: <?php echo $ch4; ?> },
            { label: "<?php echo $datatiendo1['may5']; ?>",  y: <?php echo $ch5; ?> },
            { label: "<?php echo $datatiendo1['may6']; ?>",  y: <?php echo $ch6; ?> },
            { label: "<?php echo $datatiendo1['may7']; ?>",  y: <?php echo $ch7; ?> },
            { label: "<?php echo $datatiendo1['may8']; ?>",  y: <?php echo $ch8; ?> },
            { label: "<?php echo $datatiendo1['may9']; ?>",  y: <?php echo $ch9; ?>},
            { label: "<?php echo $datatiendo1['may10']; ?>",  y: <?php echo $ch10; ?> }
        ]
    },
    {
        type: "spline",  
        axisYType: "secondary",
        name: "Thời Gian",
        dataPoints: [
             { label: "<?php echo $datatiendo1['may1']; ?>", y: "<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>" },
            { label: "<?php echo $datatiendo1['may2']; ?>", y: "<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>"},
            { label: "<?php echo $datatiendo1['may3']; ?>",  y:"<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>" },
            { label: "<?php echo $datatiendo1['may4']; ?>",  y: "<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>" },
            { label: "<?php echo $datatiendo1['may5']; ?>",  y:"<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>" },
            { label: "<?php echo $datatiendo1['may6']; ?>",  y: "<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>" },
            { label: "<?php echo $datatiendo1['may7']; ?>",  y: "<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>" },
            { label: "<?php echo $datatiendo1['may8']; ?>",  y: "<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>" },
            { label: "<?php echo $datatiendo1['may9']; ?>",  y: "<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>"},
            { label: "<?php echo $datatiendo1['may10']; ?>",  y: "<?php echo $datatiendo1['ngaybatdau']; ?><?php echo " -> ".$datatiendo2['ngaydukien']; ?>" }
        ]
    }]
});
chart.render();

}
</script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" type="text/css" href="../codejavascript/stylebieudo.css">
   <script src="../codejavascript/jq1.js"></script>
   <style type="text/css">

       .progress{
        border-radius: 50px;
        height:3vh;
        box-sizing: content-box;
        position: relative;
        background: #555;
        border: 1px solid #333;
        border-radius: 25px;
        box-shadow: inset 0 -1px 1px rgba(255, 255, 255, 0.3);
        animation: prog 2s linear forwards;
       }
       @keyframes prog{
        0%{
         background: #f9bcca;
        }
        100%{
         background: white;
         box-shadow: 10px -5px 10px 0px rgba(0,0,0,0.6);
        }
       }
       .progress-bar > span {
          display: block;
          height: 100%;
          line-height: 3vh;
          border-top-right-radius: 8px;
          border-bottom-right-radius: 8px;
          border-top-left-radius: 20px;
          border-bottom-left-radius: 20px;
          background-color: rgb(43, 194, 83);
          background-image: linear-gradient(
            center bottom,
            rgb(43, 194, 83) 37%,
            rgb(84, 240, 84) 69%
          );
          box-shadow: inset 0 2px 9px rgba(255, 255, 255, 0.3),
            inset 0 -2px 6px rgba(0, 0, 0, 0.4);
          position: relative;
          overflow: hidden;
        }
        .progress-bar > span:after {
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          bottom: 0;
          right: 0;
          background-image: linear-gradient(
            -45deg,
            rgba(255, 255, 255, 0.2) 25%,
            transparent 25%,
            transparent 50%,
            rgba(255, 255, 255, 0.2) 50%,
            rgba(255, 255, 255, 0.2) 75%,
            transparent 75%,
            transparent
          );
          z-index: 1;
          background-size: 100px 100px;
          animation: move 2s linear infinite;
          border-top-right-radius: 8px;
          border-bottom-right-radius: 8px;
          border-top-left-radius: 20px;
          border-bottom-left-radius: 20px;
          overflow: hidden;
        }

        @keyframes move {
          0% {
            background-position: 0 0;
          }
          100% {
            background-position: 50px 50px;
          }
        }
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
           background: green;
        }
         to {
           width: 100%;
           background: green;
           color: black;
           font-weight: bold;
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
        display: grid;
        width: 100vw;
        height: 170px;
        grid-template-columns: repeat(10, 1fr);
        column-gap: 1.6rem;
        /*grid-template-columns: 10% 10% 10% 10% 10% 10% 10% 10% 10% 9%;*/
        row-gap: 2rem;
        margin-top: 0.5rem;
        justify-items: center;
      }
      .dfm{
         cursor: pointer;
      }
      .to2d{
         cursor: pointer;
      }
      .giacongvadathang{
         cursor: pointer;
      }
      .lapdatvachinhmay{
         cursor: pointer;
      }
      .buyoff{
         cursor: pointer;
      }



       @import "nib";



.green {
  margin-top: 15px;
}
.green .progress1,
.red .progress1,
.orange .progress1 {
  position: relative;
  border-radius: 50%;
}
.green .progress1,
.red .progress1,
.orange .progress1 {
  width: 150px;
  height: 150px;
}
.green .progress1 {
  border: 5px solid #53fc53;
}
.green .progress1 {
  box-shadow: 0 0 20px #029502;
}
.green .progress1,
.red .progress1,
.orange .progress1 {
  transition: all 1s ease;
}
.green .progress1 .inner,
.red .progress1 .inner,
.orange .progress1 .inner {
  position: absolute;
  overflow: hidden;
  z-index: 2;
  border-radius: 50%;
  background: #333;
}
.green .progress1 .inner,
.red .progress1 .inner,
.orange .progress1 .inner {
  width: 140px;
  height: 140px;
}
.green .progress1 .inner,
.red .progress1 .inner,
.orange .progress1 .inner {
  border: 5px solid #1a1a1a;
  /*border: 5px solid white;*/
}
.green .progress1 .inner,
.red .progress1 .inner,
.orange .progress1 .inner {
  transition: all 1s ease;
}
.green .progress1 .inner .water,
.red .progress1 .inner .water,
.orange .progress1 .inner .water {
  position: absolute;
  z-index: 1;
  width: 200%;
  height: 200%;
  left: -50%;
  border-radius: 40%;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  animation-name: spin;
}
.green .progress1 .inner .water {
  top: 25%;
}
.green .progress1 .inner .water {
  /*background: rgba(83,252,83,0.5);*/
  background: #00A2FF;
}
.green .progress1 .inner .water,
.red .progress1 .inner .water,
.orange .progress1 .inner .water {
  transition: all 1s ease;
}
.green .progress1 .inner .water,
.red .progress1 .inner .water,
.orange .progress1 .inner .water {
  animation-duration: 10s;
}
.green .progress1 .inner .water {
  box-shadow: 0 0 20px #03bc03;
}
.green .progress1 .inner .glare,
.red .progress1 .inner .glare,
.orange .progress1 .inner .glare {
  position: absolute;
  top: -120%;
  left: -120%;
  z-index: 5;
  width: 200%;
  height: 200%;
  transform: rotate(45deg);
  border-radius: 50%;
}
.green .progress1 .inner .glare,
.red .progress1 .inner .glare,
.orange .progress1 .inner .glare {
  background-color: rgba(255,255,255,0.15);
}
.green .progress1 .inner .glare,
.red .progress1 .inner .glare,
.orange .progress1 .inner .glare {
  transition: all 1s ease;
}
.green .progress1 .inner .percent,
.red .progress1 .inner .percent,
.orange .progress1 .inner .percent {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  font-weight: bold;
  text-align: center;
}
.green .progress1 .inner .percent,
.red .progress1 .inner .percent,
.orange .progress1 .inner .percent {
  line-height: 140px;
  font-size: 45px;
}
.green .progress1 .inner .percent {
  /*color: #03c603;*/
  color: white;
  z-index: 2;
}
.green .progress1 .inner .percent {
  text-shadow: 0 0 10px #029502;
}
.green .progress1 .inner .percent,
.red .progress1 .inner .percent,
.orange .progress1 .inner .percent {
  transition: all 1s ease;
}
.red {
  margin-top: 15px;
}
.red .progress1 {
  border: 5px solid #ed3b3b;
}
.red .progress1 {
  box-shadow: 0 0 20px #7a0b0b;
}
.red .progress1 .inner .water {
  top: 75%;
}
.red .progress1 .inner .water {
  background: rgba(237,59,59,0.5);
  /*background: #00A2FF;*/
}
.red .progress1 .inner .water {
  box-shadow: 0 0 20px #9b0e0e;
}
.red .progress1 .inner .percent {
  /*color: #a30f0f;*/
  color: white;
}
.red .progress1 .inner .percent {
  text-shadow: 0 0 10px #7a0b0b;
}
.orange {
  margin-top: 15px;
}
.orange .progress1 {
  border: 5px solid #f07c3e;
}
.orange .progress1 {
  box-shadow: 0 0 20px #7e320a;
}
.orange .progress1 .inner .water {
  top: 50%;
}
.orange .progress1 .inner .water {
  background: rgba(240,124,62,0.5);
}
.orange .progress1 .inner .water {
  box-shadow: 0 0 20px #a0400c;
}
.orange .progress1 .inner .percent {
  /*color: #a8430d;*/
  color: white;
}
.orange .progress1 .inner .percent {
  text-shadow: 0 0 10px #7e320a;
}


@-moz-keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
@-webkit-keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
@-o-keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}






body {
  background-color: #cce4f0;
  width: 100vw;
  height: 50vh;
  position: relative;
  /*overflow: hidden; */}

.canvas {
  position: relative;
  width: 60vw;
  height: 15vw;
  margin: 0 auto;
  top: 0%;
  overflow: hidden; }

.loading {
  margin: 0 auto;
  position: relative;
  width: 80vw;
  height: 20px;
  top: 0%; }
  .loading h1 {
    width: 100%;
    text-align: center;
    color: red;
    font-family: 'Arvo';
    font-size: 30pt;
    height: 100%;
    letter-spacing: 6px; }

.scrolling-area {
  width: 100%;
  height: 98%;
  position: relative; }

.ground {
  width: 100%;
  height: 2%;
  z-index: 2;
  position: relative;
  background-color: black; }

.rabbit-main {
  width: 15%;
  height: 60%;
  margin: 0 auto;
  transform: translate3d(0, 0, 0) !important;
  position: relative;
  z-index: 0; }
  .rabbit-main .rabbit-body-part {
    position: absolute;
    background-color: #c41d1d; }

.rabbit-main.rabbit-floor {
  top: 40%; }
  .rabbit-main.rabbit-floor .rabbit-body {
    width: 60%;
    height: 60%;
    border-radius: 100%;
    top: 35%;
    left: 10%;
    z-index: 2;
    transform: translate3d(0, 0, 0) !important; }
  .rabbit-main.rabbit-floor .rabbit-tail {
    width: 13%;
    height: 13%;
    border-radius: 100%;
    top: 80%;
    left: 9%;
    transform: translate3d(0, 0, 0) !important; }
  .rabbit-main.rabbit-floor .rabbit-foot {
    width: 31%;
    height: 17%;
    border-radius: 100%;
    top: 88%;
    left: 38%;
    position: relative !important;
    transform: translate3d(0, 0, 0) !important; }
    .rabbit-main.rabbit-floor .rabbit-foot .foot-cover {
      background-color: #cce4f0;
      height: 75%;
      width: 110%;
      top: 40%;
      position: relative !important;
      z-index: 0 !important; }
  .rabbit-main.rabbit-floor .rabbit-head {
    width: 32%;
    height: 32%;
    border-radius: 100%;
    top: 21%;
    left: 52%;
    z-index: 2 !important;
    transform: translate3d(0, 0, 0) !important; }
  .rabbit-main.rabbit-floor .rabbit-ear {
    width: 36%;
    height: 25%;
    border-radius: 100%;
    top: 0%;
    left: 0%; }
    .rabbit-main.rabbit-floor .rabbit-ear .ear-cover {
      background-color: #cce4f0;
      height: 65%;
      width: 110%;
      top: 40%;
      position: relative !important;
      z-index: 0 !important; }
  .rabbit-main.rabbit-floor .rabbit-ear-1 {
    transform: rotate(-146deg) translate3d(0, 0, 0);
    left: 38%;
    top: 8%;
    animation: ear-1-twitch;
    animation-duration: 1s;
    animation-iteration-count: infinite; }
  .rabbit-main.rabbit-floor .rabbit-ear-2 {
    transform: rotate(-130deg) translate3d(0, 0, 0);
    left: 45%;
    top: 5%;
    animation: ear-2-twitch;
    animation-duration: 1s;
    animation-iteration-count: infinite; }

@keyframes ear-1-twitch {
  0% {
    transform: rotate(-146deg); }
  25% {
    transform: rotatate(-120deg); }
  50% {
    transform: rotate(-135deg); }
  75% {
    transform: rotate(-115deg); }
  90% {
    tranform: rotate(-146deg); } }

@keyframes ear-2-twitch {
  0% {
    transform: rotate(-130deg); }
  25% {
    transform: rotatate(-110deg); }
  50% {
    transform: rotate(-120deg); }
  75% {
    transform: rotate(-115deg); }
  90% {
    transform: rotate(-146deg); } }

.egg-outer.egg-1 {
  transform: rotate(-20deg);
  animation: egg-scroll linear;
  animation-duration: 4s;
  animation-iteration-count: infinite; }

.egg-outer.egg-2 {
  transform: rotate(35deg);
  animation: egg-scroll linear;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  animation-delay: 1s; }

.egg-outer.egg-3 {
  transform: rotate(-15deg);
  animation: egg-scroll linear;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  animation-delay: 2s; }

.egg-outer.egg-4 {
  transform: rotate(20deg);
  animation: egg-scroll linear;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  animation-delay: 3s; }

.egg-outer {
  width: 5%;
  height: 30%;
  background-color: red;
  position: absolute;
  left: 110%;
  border-radius: 50%/60% 60% 40% 40%;
  top: 70%;
  overflow: hidden; }
  .egg-outer .egg-line {
    width: 120%;
    height: 20%;
    background-color: white; }
  .egg-outer .egg-line-1 {
    background-color: #f16565; }
  .egg-outer .egg-line-2 {
    background-color: #ffab61; }
  .egg-outer .egg-line-3 {
    background-color: #fffe70; }
  .egg-outer .egg-line-4 {
    background-color: #8aff70; }
  .egg-outer .egg-line-5 {
    background-color: #7072ff; }

@keyframes egg-scroll {
  0% {
    left: 110%; }
  40% {
    left: 30%; }
  60% {
    left: 0%; }
  61% {
    left: -1%; }
  65% {
    left: -10%; }
  100% {
    left: -20%; } }

.rabbit-main.rabbit-jump {
  animation: rabbit-jump;
  animation-duration: 1s;
  animation-iteration-count: infinite; }
  .rabbit-main.rabbit-jump .rabbit-head {
    animation: rabbit-jump-head;
    animation-duration: 1s;
    animation-iteration-count: infinite; }
  .rabbit-main.rabbit-jump .rabbit-foot {
    animation: rabbit-jump-foot;
    animation-duration: 1s;
    animation-iteration-count: infinite; }
  .rabbit-main.rabbit-jump .rabbit-body {
    animation: rabbit-jump-body;
    animation-duration: 1s;
    animation-iteration-count: infinite; }
  .rabbit-main.rabbit-jump .rabbit-tail {
    animation: rabbit-jump-tail;
    animation-duration: 1s;
    animation-iteration-count: infinite; }
  .rabbit-main.rabbit-jump .rabbit-ear-1 {
    animation: rabbit-jump-ear-1;
    animation-duration: 1s;
    animation-iteration-count: infinite; }
  .rabbit-main.rabbit-jump .rabbit-ear-2 {
    animation: rabbit-jump-ear-2;
    animation-duration: 1s;
    animation-iteration-count: infinite; }

@keyframes rabbit-jump {
  0% {
    top: 40%; }
  30% {
    top: 0%; }
  100% {
    top: 40%; } }

@keyframes rabbit-jump-foot {
  0% {
    transform: rotate(0deg);
    left: 38%;
    top: 88%; }
  10% {
    transform: rotate(30deg);
    left: 25%;
    top: 94%; }
  100% {
    transform: rotate(0deg);
    left: 38%;
    top: 88%; } }

@keyframes rabbit-jump-tail {
  0% {
    top: 80%;
    left: 9%; }
  5% {
    top: 76%;
    left: 6%; }
  10% {
    top: 73%;
    left: 4.5%; }
  15% {
    top: 68%;
    left: 3%; }
  25% {
    top: 64%;
    left: 2%; }
  40% {
    top: 68%;
    left: 3%; }
  60% {
    top: 73%;
    left: 4.5%; }
  80% {
    top: 77%;
    left: 6%; }
  100% {
    top: 80%;
    left: 9%; } }

@keyframes rabbit-jump-head {
  0% {
    top: 21%;
    left: 52%; }
  20% {
    top: 28%;
    left: 58%; }
  100% {
    top: 21%;
    left: 52%; } }

@keyframes rabbit-jump-ear-1 {
  0% {
    transform: rotate(-146deg) translate3d(0, 0, 0);
    left: 38%;
    top: 8%; }
  10% {
    transform: rotate(-150deg);
    left: 40%;
    top: 10%; }
  100% {
    transform: rotate(-146deg) translate3d(0, 0, 0);
    left: 38%;
    top: 8%; } }

@keyframes rabbit-jump-ear-2 {
  0% {
    transform: rotate(-130deg) translate3d(0, 0, 0);
    left: 45%;
    top: 5%; }
  10% {
    transform: rotate(-140deg);
    left: 43%;
    top: 7%; }
  100% {
    transform: rotate(-130deg) translate3d(0, 0, 0);
    left: 45%;
    top: 5%; } }

.dot-red {
  color: yellow;
  font-family: 'Arvo'; }

.dot-yellow {
  color: #00F020;
  font-family: 'Arvo'; }

.dot-green {
  color: red;
  font-family: 'Arvo'; }
   </style>
</head>
<body>

	<section class="packages" id="packages">

    <div style="width: 100%;height: 70px;position: fixed;">
        <h2><a href="../Controller/index.php?action=test2#book" style="font-size: 25px;" class="btn btn-success">Trang Chủ</a></h2>
        
       
    </div>



    <div class="canvas">
            <div class="scrolling-area">
                <div class="rabbit-main rabbit-floor rabbit-jump">
                    <div class="rabbit-body-part rabbit-body"></div>
                    <div class="rabbit-body-part rabbit-tail"></div>
                    <div class="rabbit-body-part rabbit-foot">
                        <div class="foot-cover"></div>
                    </div>
                    <div class="rabbit-body-part rabbit-head"></div>
                    <div class="rabbit-body-part rabbit-ear  rabbit-ear-1">
                        <div class="ear-cover"></div>
                    </div>
                    <div class="rabbit-body-part rabbit-ear  rabbit-ear-2">
                        <div class="ear-cover"></div>
                    </div>
                </div>
                <div class="egg-outer egg-1">
                    <div class="egg-line egg-line-1"></div>
                    <div class="egg-line egg-line-2"></div>
                    <div class="egg-line egg-line-3"></div>
                    <div class="egg-line egg-line-4"></div>
                    <div class="egg-line egg-line-5"></div>
                </div>
                <div class="egg-outer egg-2">
                    <div class="egg-line egg-line-1"></div>
                    <div class="egg-line egg-line-2"></div>
                    <div class="egg-line egg-line-3"></div>
                    <div class="egg-line egg-line-4"></div>
                    <div class="egg-line egg-line-5"></div>
                </div>
                <div class="egg-outer egg-3">
                    <div class="egg-line egg-line-1"></div>
                    <div class="egg-line egg-line-2"></div>
                    <div class="egg-line egg-line-3"></div>
                    <div class="egg-line egg-line-4"></div>
                    <div class="egg-line egg-line-5"></div>
                </div>
                <div class="egg-outer egg-4">
                    <div class="egg-line egg-line-1"></div>
                    <div class="egg-line egg-line-2"></div>
                    <div class="egg-line egg-line-3"></div>
                    <div class="egg-line egg-line-4"></div>
                    <div class="egg-line egg-line-5"></div>
                </div>
            </div>
            <div class="ground">
            </div>
        </div>
        <div class="loading" id="loading">
            <h1>LOADING</h1>
        </div>

<!--      <div class="box-container" style="">
        <div id="chartContainer" style="height: 400px; width: 100%;"></div>
     </div>

    <div>
      <img src="../image/gif.gif" border="0" alt="Photobucket" height="200" width="250" id="ani" style="position: relative;top:-20px;z-index: -1;--g: <?php echo $tong-5; ?>vw;">
    </div> -->
     
    <div style="width: 99vw;margin-top: 30px;">
      <div class="progress" style="">
        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $tong; ?>" aria-valuemin="0" aria-valuemax="100" style="max-width: <?php echo $tong; ?>%">
        <span class="title" style="font-size:30px"><?php echo $tong; ?>%</span>
        </div>
      </div>    
    </div>


  <div class="tiendo" >

     <div style="" class="dfm">
      <h5 style="font-weight: bold;">
        <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[1]; ?>" style="text-decoration:none;">
            <div class="green" id="green1">
            <div class="progress1" id="progress1">
              <div class="inner" id="inner1" 
              >
                <div class="percent" id="percent1"><span>23</span>%</div>
                <div class="water" id="water1"></div>
                <div class="glare" id="glare1"></div>
              </div>
            </div>
          </div>
          <?php $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $a++;
                $arraymay1[$a] = $key1['tiendo'];

            } 
            $ch3 = substr($arraymay1[1], 0, -1);

            ?>
          <span><input type="hidden" id="percent-box" value="<?php 
            echo $ch3; ?>">
        </a>
    </h5>
    <div style="width: 7vw;text-align: center;">
             <span style="font-weight:bold;font-size:20px;text-align:center;"><?php echo $datatiendo1['may1']; ?></span>
         </div>
</div>


        <div style="" class="to2d">
              <h5 style="font-weight: bold;">
                <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[2]; ?>" style="text-decoration:none;">

                    <div class="green" id="green2">
                    <div class="progress1" id="progress2">
                      <div class="inner" id="inner2">
                        <div class="percent" id="percent2"><span><?php echo $chuoi2; ?></span>%</div>
                        <div class="water" id="water2"></div>
                        <div class="glare" id="glare2"></div>
                      </div>
                    </div>
                  </div>
                  <?php $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $a++;
                $arraymay1[$a] = $key1['tiendo'];

            } 
            $ch3 = substr($arraymay1[2], 0, -1);

            ?>
          <span><input type="hidden" id="percent-box2" value="<?php 
            echo $ch3; ?>">
        </span>
         </a>
                </h5>
                <div style="width: 7vw;text-align: center;">
             <span style="font-weight:bold;font-size:20px;text-align:center;"><?php echo $datatiendo1['may2']; ?></span>
         </div>
        </div>

        <div style="" class="giacongvadathang">
         <h5 style="font-weight: bold;"> 
          <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[3]; ?>" style="text-decoration:none;">
            <div class="green" id="green3">
            <div class="progress1" id="progress3">
              <div class="inner" id="inner3">
                <div class="percent" id="percent3"><span><?php echo $chuoi3; ?></span>%</div>
                <div class="water" id="water3"></div>
                <div class="glare" id="glare3"></div>
              </div>
            </div>
          </div>
          <?php $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $a++;
                $arraymay1[$a] = $key1['tiendo'];

            } 
            $ch3 = substr($arraymay1[3], 0, -1);

            ?>
          <span><input type="hidden" id="percent-box3" value="<?php 
            echo $ch3; ?>">
          </a>
          </h5>
          <div style="width: 7vw;text-align: center;">
             <span style="font-weight:bold;font-size:20px;text-align:center;"><?php echo $datatiendo1['may3']; ?></span>
         </div>
      </div>
      <div style="" class="lapdatvachinhmay">
      <h5 style="font-weight: bold;"> 
        <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[4]; ?>" style="text-decoration:none;">
            <div class="green" id="green4">
            <div class="progress1" id="progress4">
              <div class="inner">
                <div class="percent" id="percent4"><span><?php echo $chuoi4; ?></span>%</div>
                <div class="water" id="water4"></div>
                <div class="glare" id="glare4"></div>
              </div>
            </div>
          </div>
          <?php $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $a++;
                $arraymay1[$a] = $key1['tiendo'];

            } 
            $ch3 = substr($arraymay1[4], 0, -1);

            ?>
          <span><input type="hidden" id="percent-box4" value="<?php 
            echo $ch3; ?>">
        </a>
        </h5>
        <div style="width: 7vw;text-align: center;">
             <span style="font-weight:bold;font-size:20px;text-align:center;"><?php echo $datatiendo1['may4']; ?></span>
         </div>
    </div>
    <div style="" class="buyoff">
      <h5 style="font-weight: bold;">
        <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[5]; ?>" style="text-decoration:none;">
            <div class="green" id="green5">
            <div class="progress1" id="progress5">
              <div class="inner" id="inner5">
                <div class="percent" id="percent5"><span><?php echo $chuoi5; ?></span>%</div>
                <div class="water" id="water5"></div>
                <div class="glare" id="glare5"></div>
              </div>
            </div>
          </div>
          <?php $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $a++;
                $arraymay1[$a] = $key1['tiendo'];

            } 
            $ch3 = substr($arraymay1[5], 0, -1);

            ?>
          <span><input type="hidden" id="percent-box5" value="<?php 
            echo $ch3; ?>">
        </a>
        </h5>
        <div style="width: 7vw;text-align: center;">
             <span style="font-weight:bold;font-size:20px;text-align:center;"><?php echo $datatiendo1['may5']; ?></span>
         </div>
    </div>
    <div style="" class="buyoff">
      <h5 style="font-weight: bold;">
        <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[6]; ?>" style="text-decoration:none;">
            <div class="green" id="green6">
            <div class="progress1" id="progress6">
              <div class="inner" id="inner6">
                <div class="percent" id="percent6"><span><?php echo $chuoi6; ?></span>%</div>
                <div class="water" id="water6"></div>
                <div class="glare" id="glare6"></div>
              </div>
            </div>
          </div>
          <?php $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $a++;
                $arraymay1[$a] = $key1['tiendo'];

            } 
            $ch3 = substr($arraymay1[6], 0, -1);

            ?>
          <span><input type="hidden" id="percent-box6" value="<?php 
            echo $ch3; ?>">
        </a>
        </h5>
        <div style="width: 7vw;text-align: center;">
             <span style="font-weight:bold;font-size:20px;text-align:center;"><?php echo $datatiendo1['may6']; ?></span>
         </div>
    </div>


    <div style="" class="buyoff">
      <h5 style="font-weight: bold;">
        <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[7]; ?>" style="text-decoration:none;">
            <div class="green" id="green7">
            <div class="progress1" id="progress7">
              <div class="inner" id="inner7">
                <div class="percent" id="percent7"><span><?php echo $chuoi7; ?></span>%</div>
                <div class="water" id="water7"></div>
                <div class="glare" id="glare7"></div>
              </div>
            </div>
          </div>
          <?php $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $a++;
                $arraymay1[$a] = $key1['tiendo'];

            } 
            $ch3 = substr($arraymay1[7], 0, -1);

            ?>
          <span><input type="hidden" id="percent-box7" value="<?php 
            echo $ch3; ?>">
        </a>
        </h5>
        <div style="width: 7vw;text-align: center;">
             <span style="font-weight:bold;font-size:20px;text-align:center;"><?php echo $datatiendo1['may7']; ?></span>
         </div>
    </div>


    <div style="" class="buyoff">
      <h5 style="font-weight: bold;">
        <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[8]; ?>" style="text-decoration:none;">
            <div class="green" id="green8">
            <div class="progress1" id="progress8">
              <div class="inner" id="inner8">
                <div class="percent" id="percent8"><span><?php echo $chuoi8; ?></span>%</div>
                <div class="water" id="water8"></div>
                <div class="glare" id="glare8"></div>
              </div>
            </div>
          </div>
          <?php $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $a++;
                $arraymay1[$a] = $key1['tiendo'];

            } 
            $ch3 = substr($arraymay1[8], 0, -1);

            ?>
          <span><input type="hidden" id="percent-box8" value="<?php 
            echo $ch3; ?>">
        </a>
        </h5>
        <div style="width: 7vw;text-align: center;">
             <span style="font-weight:bold;font-size:20px;text-align:center;"><?php echo $datatiendo1['may8']; ?></span>
         </div>
    </div>


    <div style="" class="buyoff">
      <h5 style="font-weight: bold;">
        <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[9]; ?>" style="text-decoration:none;">
            <div class="green" id="green9">
            <div class="progress1" id="progress9">
              <div class="inner" id="inner9">
                <div class="percent" id="percent9"><span><?php echo $chuoi9; ?></span>%</div>
                <div class="water" id="water9"></div>
                <div class="glare" id="glare9"></div>
              </div>
            </div>
          </div>
          <?php $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $a++;
                $arraymay1[$a] = $key1['tiendo'];

            } 
            $ch3 = substr($arraymay1[9], 0, -1);

            ?>
          <span><input type="hidden" id="percent-box9" value="<?php 
            echo $ch3; ?>">
        </a>
        </h5>
        <div style="width: 7vw;text-align: center;">
             <span style="font-weight:bold;font-size:20px;text-align:center;"><?php echo $datatiendo1['may9']; ?></span>
         </div>
    </div>




    <div style="" class="buyoff">
      <h5 style="font-weight: bold;">
        <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[10]; ?>" style="text-decoration:none;">
            <div class="green" id="green10">
            <div class="progress1" id="progress10">
              <div class="inner" id="inner10">
                <div class="percent" id="percent10"><span></span>%</div>
                <div class="water" id="water10"></div>
                <div class="glare" id="glare10"></div>
              </div>
            </div>
          </div>
          <?php $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $a++;
                $arraymay1[$a] = $key1['tiendo'];

            } 
            $ch3 = substr($arraymay1[10], 0, -1);

            ?>
          <span><input type="hidden" id="percent-box10" value="<?php 
            echo $ch3; ?>">
        </a>
        </h5>
        <div style="width: 7vw;text-align: center;">
             <span style="font-weight:bold;font-size:20px;text-align:center;"><?php echo $datatiendo1['may10']; ?></span>
         </div>
    </div>
    


   <!--   <div style="" class="dfm">
      <h5 style="font-weight: bold;">
        <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[1]; ?>" style="text-decoration:none;">
            <?php echo $datatiendo1['may1']; ?> <br> 
            <span style="color:red;font-weight:bold;">
            <?php $count = 0;
              $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $count++;
                $a++;
                $arraymay1[$a] = $key1['tiendo'];
            }
            echo $arraymay1[1];
            ?>       
              </span>
        </a>
      </h5>
     </div>
     <div style="" class="to2d">
      <h5 style="font-weight: bold;">
        <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[2]; ?>" style="text-decoration:none;">
            <?php echo $datatiendo1['may2']; ?> <br> 
            <span style="color:red;font-weight:bold;">
            <?php $count = 0;
              $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $count++;
                $a++;
                $arraymay1[$a] = $key1['tiendo'];
            }
            echo $arraymay1[2];
            ?>       
              </span>
        </a>
     </h5>
     </div>
     <div style="" class="giacongvadathang">
      <h5 style="font-weight: bold;"> 
        <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[3]; ?>" style="text-decoration:none;">
            <?php echo $datatiendo1['may3']; ?> <br> 
            <span style="color:red;font-weight:bold;">
            <?php $count = 0;
              $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $count++;
                $a++;
                $arraymay1[$a] = $key1['tiendo'];
            }
            echo $arraymay1[3];
            ?>       
              </span>
        </a>
     </h5>
     </div>
     <div style="" class="lapdatvachinhmay">
      <h5 style="font-weight: bold;"> 
        <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[4]; ?>" style="text-decoration:none;">
            <?php echo $datatiendo1['may4']; ?> <br> 
            <span style="color:red;font-weight:bold;">
            <?php $count = 0;
              $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $count++;
                $a++;
                $arraymay1[$a] = $key1['tiendo'];
            }
            echo $arraymay1[4];
            ?>       
              </span>
        </a>
      </h5>
     </div>
     <div style="" class="buyoff">
      <h5 style="font-weight: bold;">
        <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[5]; ?>" style="text-decoration:none;">
            <?php echo $datatiendo1['may5']; ?> <br> 
            <span style="color:red;font-weight:bold;">
            <?php $count = 0;
              $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $count++;
                $a++;
                $arraymay1[$a] = $key1['tiendo'];
            }
            echo $arraymay1[5];
            ?>       
              </span>
        </a>
      </h5>
     </div>
     <div style="" class="dfm">
      <h5 style="font-weight: bold;">
        <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[6]; ?>" style="text-decoration:none;">
            <?php echo $datatiendo1['may6']; ?> <br> 
            <span style="color:red;font-weight:bold;">
            <?php $count = 0;
              $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $count++;
                $a++;
                $arraymay1[$a] = $key1['tiendo'];
            }
            echo $arraymay1[6];
            ?>       
              </span>
        </a>
      </h5>
     </div>
     <div style="" class="to2d">
      <h5 style="font-weight: bold;"> 
        <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[7]; ?>" style="text-decoration:none;">
            <?php echo $datatiendo1['may7']; ?> <br> 
            <span style="color:red;font-weight:bold;">
            <?php $count = 0;
              $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $count++;
                $a++;
                $arraymay1[$a] = $key1['tiendo'];
            }
            echo $arraymay1[7];
            ?>       
              </span>
        </a>
     </h5>
     </div>
     <div style="" class="giacongvadathang">
      <h5 style="font-weight: bold;">
        <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[8]; ?>" style="text-decoration:none;">
            <?php echo $datatiendo1['may8']; ?> <br> 
            <span style="color:red;font-weight:bold;">
            <?php $count = 0;
              $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $count++;
                $a++;
                $arraymay1[$a] = $key1['tiendo'];
            }
            echo $arraymay1[8];
            ?>       
              </span>
        </a>
     </h5>
     </div>
     <div style="" class="lapdatvachinhmay">
      <h5 style="font-weight: bold;">
        <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[9]; ?>" style="text-decoration:none;">
            <?php echo $datatiendo1['may9']; ?> <br> 
            <span style="color:red;font-weight:bold;">
            <?php $count = 0;
              $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $count++;
                $a++;
                $arraymay1[$a] = $key1['tiendo'];
            }
            echo $arraymay1[9];
            ?>       
              </span>
        </a>
      </h5>
     </div>
     <div style="" class="buyoff">
      <h5 style="font-weight: bold;"> 
        <a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[10]; ?>" style="text-decoration:none;">
            <?php echo $datatiendo1['may10']; ?> <br> 
            <span style="color:red;font-weight:bold;">
            <?php $count = 0;
              $arraymay1 = array();
              $a = 0;
              foreach ($bophanline as $key1) {
                $count++;
                $a++;
                $arraymay1[$a] = $key1['tiendo'];
            }
            echo $arraymay1[10];
            ?>       
              </span>
        </a>
      </h5>
     </div> -->

</div>
      <div style="width: 100vw;">
       <!--  <div style="">
            <h2 style="text-align: center;">Chi Tiết Tiến Độ <?php echo $datatiendo1['tenmay'];  ?></h2>
        </div>
        
         <table style="margin-top: 1%;width: 100%;" class="table">
                      <thead>
                        <tr style="text-align:center;height: 50px;background: #ffed86;">
                          <th style="width: 8%;border: 1px solid;font-size: 20px;" scope="col">#</th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may1']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may2']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may3']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may4']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may5']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may6']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may7']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may8']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may9']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col"><?php echo $datatiendo1['may10']; ?></th>
                          <th style="width: 7%;border: 1px solid;font-size: 20px;" scope="col">Tổng</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr style="text-align:center;height: 50px;">
                          <th style="font-size: 20px;">Tiến Độ</th>
                          <?php $count = 0;
                          foreach ($bophanline as $key1) {
                            $count++;
                          ?>
                          <td style="border: 1px solid"><a href="../Controller/index.php?action=bieudoline1&id=<?php echo $c[$count]; ?>" class="btn btn-primary may<?php echo $count; ?>" data-bs-whatever="Máy <?php echo $count; ?>"><?php echo $key1['tiendo'];  ?></a></td>
                          <?php } ?>
                          <td ></td>
                        </tr>
                         <tr style="background: #9BC86A;text-align:center;line-height: 50px;">
                          <th style="border: 1px solid;font-size: 20px;">Tiến Độ Tổng</th>
                          <td style="border: 1px solid;font-size: 20px;"><?php echo $tong1.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"><?php echo $tong2.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"><?php echo $tong3.'%'; ?></td>
                           <td style="border: 1px solid;font-size: 20px;"><?php echo $tong4.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"><?php echo $tong5.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"><?php echo $tong6.'%'; ?></td>
                           <td style="border: 1px solid;font-size: 20px;"><?php echo $tong7.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"><?php echo $tong8.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"><?php echo $tong9.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"><?php echo $tong10.'%'; ?></td>
                          <td style="border: 1px solid;font-size: 20px;"><button class="btn btn-danger"><?php echo $tong.'%'; ?></button></td>
                        </tr>
                      </tbody>
         </table> 
 -->
        <div style="margin: 0 30px;height: 100vw;height: 35vh; box-shadow:7px 7px 15px rgba(121, 130, 160, 0.747);padding:30px;margin-top: 2%;border-radius: 30px;background: white;">
                <table class="table" style="">
              <thead>
                <tr>
                    <th style="" class="col-2">Tên Máy</th>    
                    <th style="" class="col-1">Tiến Độ</th>
                    <th style="line-height: 100px;" class="col-1">Ngày Bắt Đầu</th>
                    <th style="line-height: 100px;" class="col-1">Ngày Dự Kiến</th>
                    <th style="" class="col-1">Tổng Giờ</th>
                    <th style="line-height: 100px;" class="col-1">Bộ Phận</th>
                    <!-- <th style="line-height: 100px;" class="col-1">Thành Viên</th> -->
                </tr>
              </thead>
           <tbody>
          
            <tr style="background: white;height: 50px;text-align:center;">
                <td style=''> <?php echo $dataID['tenmay']; ?></td>  
                <td style=''><?php echo $dataID['tiendo']; ?></td>
                <td style=''><?php echo $dataID['ngaybatdau']; ?></td>

                <td style=''><?php echo $dataID['ngaydukien']; ?></td>

                <?php if($tiendo1 == 100){ ?>
                <td style=''><?php echo $hours+1; ?></td>
                <?php }else{ ?>
                <td style=''><?php echo $hours+1; ?></td>
                <?php } ?>
                
        

                


                <td style='font-weight: bold;'><?php echo $dataID['bophan']; ?></td>
                <!-- <td style=''><?php echo $dataID['nhomthuchien']; ?></td> -->




                <!-- <td style='font-size: 20px; border: 1px solid; '>
                    <a style="text-decoration: none;"data-bs-toggle="modal" data-bs-target="#exampleModal" href="" >Sửa</a>
                <?php if($dataID['tiendo']=='100%')
                       {
                     ?> 
                 </br>
                    <a style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#exampleModal1" href="" title="xóa">Xóa</a>

                 <?php } ?> 
                </td>    -->    

            </tr>
           
            </tbody>
        </table>
          </div>
            
            </div>
</section>
</body>

    

<!-- edit -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nhập Mật Khẩu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Mật Khẩu:</label>
            <input type="password" class="form-control" id="idmatkhau2">
          </div>
          <div>
              <span id="span2">
                  
              </span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="xacnhan2" class="btn btn-primary">Xác Nhận</button>
      </div>
    </div>
  </div>
</div>



<!-- xóa -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nhập Mật Khẩu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Mật Khẩu:</label>
            <input type="password" class="form-control" id="idmatkhau3">
          </div>
          <div>
              <span id="span3">
                  
              </span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="xacnhan3" class="btn btn-primary">Xác Nhận</button>
      </div>
    </div>
  </div>
</div>



<!-- Sửa may 1 -->

<form method="POST" action=""> 
<div class="modal fade" id="may1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cập Nhập Tiến Độ <?php echo $datatiendo1['may1']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau" class="col-form-label">Nhập Mật Khẩu Để Sửa:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau">
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label" id="tieudetiendo" style="display:none;">Tiến Độ(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay1" class="form-control" id="tongmay1"value="<?php echo $ch; ?>" style="display: none;">
          </div>
          <div>
              <span id="idspan"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay11" name="submitmay11">Xác Nhận</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary" id="submitmay1" name="submitmay1" style="display: none;">Xác Nhận</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- Sửa Xuất may 2-->
<form method="POST" action=""> 
<div class="modal fade" id="may2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cập Nhập Tiến Độ <?php echo $datatiendo1['may2']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau2" class="col-form-label">Nhập Mật Khẩu Để Sửa:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau22">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"id="tieudetiendo2" style="display:none;">Tiến Độ(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay2"class="form-control" id="tongmay2"value="<?php echo $ch2; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan2"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay12" name="submitmay12">Xác Nhận</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
    
        <button type="submit" class="btn btn-primary" id="submitmay2" name="submitmay2"style="display: none;">Xác Nhận</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- Sửa may 3-->
<form method="POST" action=""> 
<div class="modal fade" id="may3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cập Nhập Tiến Độ <?php echo $datatiendo1['may3']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau3" class="col-form-label">Nhập Mật Khẩu Để Sửa:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau33">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"id="tieudetiendo3" style="display:none;">Tiến Độ(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay3"class="form-control" id="tongmay3"value="<?php echo $ch3; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan3"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay13" name="submitmay13">Xác Nhận</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
    
        <button type="submit" class="btn btn-primary" id="submitmay3" name="submitmay3"style="display: none;">Xác Nhận</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- Sửa may 4-->
<form method="POST" action=""> 
<div class="modal fade" id="may4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cập Nhập Tiến Độ <?php echo $datatiendo1['may4']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau4" class="col-form-label">Nhập Mật Khẩu Để Sửa:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau4">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"id="tieudetiendo4" style="display:none;">Tiến Độ(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay4"class="form-control" id="tongmay4"value="<?php echo $ch4; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan4"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay14" name="submitmay14">Xác Nhận</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
    
        <button type="submit" class="btn btn-primary" id="submitmay4" name="submitmay4"style="display: none;">Xác Nhận</button>
      </div>
    </div>
  </div>
</div>
</form>



<!-- Sửa may 5-->
<form method="POST" action=""> 
<div class="modal fade" id="may5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cập Nhập Tiến Độ <?php echo $datatiendo1['may5']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau5" class="col-form-label">Nhập Mật Khẩu Để Sửa:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau5">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"id="tieudetiendo5" style="display:none;">Tiến Độ(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay5"class="form-control" id="tongmay5"value="<?php echo $ch5; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan5"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay15" name="submitmay15">Xác Nhận</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
    
        <button type="submit" class="btn btn-primary" id="submitmay5" name="submitmay5"style="display: none;">Xác Nhận</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- sửa máy 6 -->

<form method="POST" action=""> 
<div class="modal fade" id="may6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cập Nhập Tiến Độ <?php echo $datatiendo1['may6']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau6" class="col-form-label">Nhập Mật Khẩu Để Sửa:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau6">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"id="tieudetiendo6" style="display:none;">Tiến Độ(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay6"class="form-control" id="tongmay6"value="<?php echo $ch6; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan6"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay16" name="submitmay16">Xác Nhận</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
    
        <button type="submit" class="btn btn-primary" id="submitmay6" name="submitmay6"style="display: none;">Xác Nhận</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- sửa máy 7 -->

<form method="POST" action=""> 
<div class="modal fade" id="may7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cập Nhập Tiến Độ <?php echo $datatiendo1['may7']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau7" class="col-form-label">Nhập Mật Khẩu Để Sửa:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau7">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"id="tieudetiendo7" style="display:none;">Tiến Độ(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay7"class="form-control" id="tongmay7"value="<?php echo $ch7; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan7"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay17" name="submitmay17">Xác Nhận</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
    
        <button type="submit" class="btn btn-primary" id="submitmay7" name="submitmay7"style="display: none;">Xác Nhận</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- sửa máy 8 -->

<form method="POST" action=""> 
<div class="modal fade" id="may8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cập Nhập Tiến Độ <?php echo $datatiendo1['may8']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau8" class="col-form-label">Nhập Mật Khẩu Để Sửa:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau8">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"id="tieudetiendo8" style="display:none;">Tiến Độ(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay8"class="form-control" id="tongmay8"value="<?php echo $ch8; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan8"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay18" name="submitmay18">Xác Nhận</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
    
        <button type="submit" class="btn btn-primary" id="submitmay8" name="submitmay8"style="display: none;">Xác Nhận</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- sửa máy 9 -->

<form method="POST" action=""> 
<div class="modal fade" id="may9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cập Nhập Tiến Độ <?php echo $datatiendo1['may9']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau9" class="col-form-label">Nhập Mật Khẩu Để Sửa:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau9">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"id="tieudetiendo9" style="display:none;">Tiến Độ(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay9"class="form-control" id="tongmay9"value="<?php echo $ch9; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan9"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay19" name="submitmay19">Xác Nhận</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
    
        <button type="submit" class="btn btn-primary" id="submitmay9" name="submitmay9"style="display: none;">Xác Nhận</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- sửa máy 10 -->

<form method="POST" action=""> 
<div class="modal fade" id="may10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cập Nhập Tiến Độ <?php echo $datatiendo1['may10']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
         <input type="hidden" name="edit1" id="edit1">
         <div class="mb-3">
            <label for="recipient-name" id="tieudematkhau10" class="col-form-label">Nhập Mật Khẩu Để Sửa:</label>
            <input type="password" required ="required" name="" class="form-control" id="idmatkhau10">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"id="tieudetiendo10" style="display:none;">Tiến Độ(%):</label>
            <input type="number" min="0" max="100" required ="required" name="tongmay10"class="form-control" id="tongmay10"value="<?php echo $ch10; ?>"style="display:none;">
          </div>
          <div>
              <span id="idspan10"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-primary" id="submitmay110" name="submitmay110">Xác Nhận</span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
    
        <button type="submit" class="btn btn-primary" id="submitmay10" name="submitmay10"style="display: none;">Xác Nhận</button>
      </div>
    </div>
  </div>
</div>
</form>




<script type="text/javascript">
    var colorInc = 100 / 3;


$(function()
{
  $("#percent-box").click(function()
  {
    $(this).select();
  });
  
  $("#percent-box").ready(function()
  {
    var val = $("#percent-box").val();

    
    if(val != ""
      && !isNaN(val)
      && val <= 100
      && val >= 0)
    {
      console.log(val);
      
      var valOrig = val;
      val = 100 - val;
      
      if(valOrig == 0)
      {
        $("#percent-box").val(0);
        $("#progress1 #percent1").text(0 + "%");
      }
      else $("#progress1 #percent1").text(valOrig + "%");
      
      $("#progress1").parent().removeClass();
      $("#progress1 #water1").css("top", val + "%");
      
      if(valOrig < colorInc * 1)
        $("#progress1").parent().addClass("red");
      else if(valOrig < colorInc * 2)
        $("#progress1").parent().addClass("orange");
      else
        $("#progress1").parent().addClass("green");
    }
    else
    {
      $("#progress1").parent().removeClass();
      $("#progress1").parent().addClass("green");
      $("#progress1 #water1").css("top", 100 - 67 + "%");
      $("#progress1 #percent1").text(67 + "%");
      $("#percent-box").val("");
    }
  });
});

  </script>

  <script type="text/javascript">
    var colorInc = 100 / 3;


$(function()
{
  $("#percent-box2").click(function()
  {
    $(this).select();
  });
  
  $("#percent-box2").ready(function()
  {
    var val = $("#percent-box2").val();

    
    if(val != ""
      && !isNaN(val)
      && val <= 100
      && val >= 0)
    {
      console.log(val);
      
      var valOrig = val;
      val = 100 - val;
      
      if(valOrig == 0)
      {
        $("#percent-box2").val(0);
        $("#progress2 #percent2").text(0 + "%");
      }
      else $("#progress2 #percent2").text(valOrig + "%");
      
      $("#progress2").parent().removeClass();
      $("#progress2 #water2").css("top", val + "%");
      
      if(valOrig < colorInc * 1)
        $("#progress2").parent().addClass("red");
      else if(valOrig < colorInc * 2)
        $("#progress2").parent().addClass("orange");
      else
        $("#progress2").parent().addClass("green");
    }
    else
    {
      $("#progress2").parent().removeClass();
      $("#progress2").parent().addClass("green");
      $("#progress2 #water2").css("top", 100 - 67 + "%");
      $("#progress2 #percent2").text(67 + "%");
      $("#percent-box2").val("");
    }
  });
});

  </script>


  <script type="text/javascript">
    var colorInc = 100 / 3;


$(function()
{
  $("#percent-box3").click(function()
  {
    $(this).select();
  });
  
  $("#percent-box3").ready(function()
  {
    var val = $("#percent-box3").val();

    
    if(val != ""
      && !isNaN(val)
      && val <= 100
      && val >= 0)
    {
      console.log(val);
      
      var valOrig = val;
      val = 100 - val;
      
      if(valOrig == 0)
      {
        $("#percent-box3").val(0);
        $("#progress3 #percent3").text(0 + "%");
      }
      else $("#progress3 #percent3").text(valOrig + "%");
      
      $("#progress3").parent().removeClass();
      $("#progress3 #water3").css("top", val + "%");
      
      if(valOrig < colorInc * 1)
        $("#progress3").parent().addClass("red");
      else if(valOrig < colorInc * 2)
        $("#progress3").parent().addClass("orange");
      else
        $("#progress3").parent().addClass("green");
    }
    else
    {
      $("#progress3").parent().removeClass();
      $("#progress3").parent().addClass("green");
      $("#progress3 #water3").css("top", 100 - 67 + "%");
      $("#progress3 #percent3").text(67 + "%");
      $("#percent-box3").val("");
    }
  });
});

  </script>


    <script type="text/javascript">
    var colorInc = 100 / 3;


$(function()
{
  $("#percent-box4").click(function()
  {
    $(this).select();
  });
  
  $("#percent-box4").ready(function()
  {
    var val = $("#percent-box4").val();

    
    if(val != ""
      && !isNaN(val)
      && val <= 100
      && val >= 0)
    {
      console.log(val);
      
      var valOrig = val;
      val = 100 - val;
      
      if(valOrig == 0)
      {
        $("#percent-box4").val(0);
        $("#progress4 #percent4").text(0 + "%");
      }
      else $("#progress4 #percent4").text(valOrig + "%");
      
      $("#progress4").parent().removeClass();
      $("#progress4 #water4").css("top", val + "%");
      
      if(valOrig < colorInc * 1)
        $("#progress4").parent().addClass("red");
      else if(valOrig < colorInc * 2)
        $("#progress4").parent().addClass("orange");
      else
        $("#progress4").parent().addClass("green");
    }
    else
    {
      $("#progress4").parent().removeClass();
      $("#progress4").parent().addClass("green");
      $("#progress4 #water4").css("top", 100 - 67 + "%");
      $("#progress4 #percent4").text(67 + "%");
      $("#percent-box4").val("");
    }
  });
});

  </script>
 


   <script type="text/javascript">
    var colorInc = 100 / 3;


$(function()
{
  $("#percent-box5").click(function()
  {
    $(this).select();
  });
  
  $("#percent-box5").ready(function()
  {
    var val = $("#percent-box5").val();

    
    if(val != ""
      && !isNaN(val)
      && val <= 100
      && val >= 0)
    {
      console.log(val);
      
      var valOrig = val;
      val = 100 - val;
      
      if(valOrig == 0)
      {
        $("#percent-box5").val(0);
        $("#progress5 #percent5").text(0 + "%");
      }
      else $("#progress5 #percent5").text(valOrig + "%");
      
      $("#progress5").parent().removeClass();
      $("#progress5 #water5").css("top", val + "%");
      
      if(valOrig < colorInc * 1)
        $("#progress5").parent().addClass("red");
      else if(valOrig < colorInc * 2)
        $("#progress5").parent().addClass("orange");
      else
        $("#progress5").parent().addClass("green");
    }
    else
    {
      $("#progress5").parent().removeClass();
      $("#progress5").parent().addClass("green");
      $("#progress5 #water5").css("top", 100 - 67 + "%");
      $("#progress5 #percent5").text(67 + "%");
      $("#percent-box5").val("");
    }
  });
});

  </script>



    </script>
 


   <script type="text/javascript">
    var colorInc = 100 / 3;


$(function()
{
  $("#percent-box6").click(function()
  {
    $(this).select();
  });
  
  $("#percent-box6").ready(function()
  {
    var val = $("#percent-box6").val();

    
    if(val != ""
      && !isNaN(val)
      && val <= 100
      && val >= 0)
    {
      console.log(val);
      
      var valOrig = val;
      val = 100 - val;
      
      if(valOrig == 0)
      {
        $("#percent-box6").val(0);
        $("#progress6 #percent6").text(0 + "%");
      }
      else $("#progress6 #percent6").text(valOrig + "%");
      
      $("#progress6").parent().removeClass();
      $("#progress6 #water6").css("top", val + "%");
      
      if(valOrig < colorInc * 1)
        $("#progress6").parent().addClass("red");
      else if(valOrig < colorInc * 2)
        $("#progress6").parent().addClass("orange");
      else
        $("#progress6").parent().addClass("green");
    }
    else
    {
      $("#progress6").parent().removeClass();
      $("#progress6").parent().addClass("green");
      $("#progress6 #water6").css("top", 100 - 67 + "%");
      $("#progress6 #percent6").text(67 + "%");
      $("#percent-box6").val("");
    }
  });
});

  </script>



    </script>
 


   <script type="text/javascript">
    var colorInc = 100 / 3;


$(function()
{
  $("#percent-box7").click(function()
  {
    $(this).select();
  });
  
  $("#percent-box7").ready(function()
  {
    var val = $("#percent-box7").val();

    
    if(val != ""
      && !isNaN(val)
      && val <= 100
      && val >= 0)
    {
      console.log(val);
      
      var valOrig = val;
      val = 100 - val;
      
      if(valOrig == 0)
      {
        $("#percent-box7").val(0);
        $("#progress7 #percent7").text(0 + "%");
      }
      else $("#progress7 #percent7").text(valOrig + "%");
      
      $("#progress7").parent().removeClass();
      $("#progress7 #water7").css("top", val + "%");
      
      if(valOrig < colorInc * 1)
        $("#progress7").parent().addClass("red");
      else if(valOrig < colorInc * 2)
        $("#progress7").parent().addClass("orange");
      else
        $("#progress7").parent().addClass("green");
    }
    else
    {
      $("#progress7").parent().removeClass();
      $("#progress7").parent().addClass("green");
      $("#progress7 #water7").css("top", 100 - 67 + "%");
      $("#progress7 #percent7").text(67 + "%");
      $("#percent-box7").val("");
    }
  });
});

  </script>




  </script>
 


   <script type="text/javascript">
    var colorInc = 100 / 3;


$(function()
{
  $("#percent-box8").click(function()
  {
    $(this).select();
  });
  
  $("#percent-box8").ready(function()
  {
    var val = $("#percent-box8").val();

    
    if(val != ""
      && !isNaN(val)
      && val <= 100
      && val >= 0)
    {
      console.log(val);
      
      var valOrig = val;
      val = 100 - val;
      
      if(valOrig == 0)
      {
        $("#percent-box8").val(0);
        $("#progress8 #percent8").text(0 + "%");
      }
      else $("#progress8 #percent8").text(valOrig + "%");
      
      $("#progress8").parent().removeClass();
      $("#progress8 #water8").css("top", val + "%");
      
      if(valOrig < colorInc * 1)
        $("#progress8").parent().addClass("red");
      else if(valOrig < colorInc * 2)
        $("#progress8").parent().addClass("orange");
      else
        $("#progress8").parent().addClass("green");
    }
    else
    {
      $("#progress8").parent().removeClass();
      $("#progress8").parent().addClass("green");
      $("#progress8 #water8").css("top", 100 - 67 + "%");
      $("#progress8 #percent8").text(67 + "%");
      $("#percent-box8").val("");
    }
  });
});

  </script>



  </script>
 


   <script type="text/javascript">
    var colorInc = 100 / 3;


$(function()
{
  $("#percent-box9").click(function()
  {
    $(this).select();
  });
  
  $("#percent-box9").ready(function()
  {
    var val = $("#percent-box9").val();

    
    if(val != ""
      && !isNaN(val)
      && val <= 100
      && val >= 0)
    {
      console.log(val);
      
      var valOrig = val;
      val = 100 - val;
      
      if(valOrig == 0)
      {
        $("#percent-box9").val(0);
        $("#progress9 #percent9").text(0 + "%");
      }
      else $("#progress9 #percent9").text(valOrig + "%");
      
      $("#progress9").parent().removeClass();
      $("#progress9 #water9").css("top", val + "%");
      
      if(valOrig < colorInc * 1)
        $("#progress9").parent().addClass("red");
      else if(valOrig < colorInc * 2)
        $("#progress9").parent().addClass("orange");
      else
        $("#progress9").parent().addClass("green");
    }
    else
    {
      $("#progress9").parent().removeClass();
      $("#progress9").parent().addClass("green");
      $("#progress9 #water9").css("top", 100 - 67 + "%");
      $("#progress9 #percent9").text(67 + "%");
      $("#percent-box9").val("");
    }
  });
});

  </script>



  </script>
 


   <script type="text/javascript">
    var colorInc = 100 / 3;


$(function()
{
  $("#percent-box10").click(function()
  {
    $(this).select();
  });
  
  $("#percent-box10").ready(function()
  {
    var val = $("#percent-box10").val();

    
    if(val != ""
      && !isNaN(val)
      && val <= 100
      && val >= 0)
    {
      console.log(val);
      
      var valOrig = val;
      val = 100 - val;
      
      if(valOrig == 0)
      {
        $("#percent-box10").val(0);
        $("#progress10 #percent10").text(0 + "%");
      }
      else $("#progress10 #percent10").text(valOrig + "%");
      
      $("#progress10").parent().removeClass();
      $("#progress10 #water10").css("top", val + "%");
      
      if(valOrig < colorInc * 1)
        $("#progress10").parent().addClass("red");
      else if(valOrig < colorInc * 2)
        $("#progress10").parent().addClass("orange");
      else
        $("#progress10").parent().addClass("green");
    }
    else
    {
      $("#progress10").parent().removeClass();
      $("#progress10").parent().addClass("green");
      $("#progress10 #water10").css("top", 100 - 67 + "%");
      $("#progress10 #percent10").text(67 + "%");
      $("#percent-box10").val("");
    }
  });
});

  </script>




<script type="text/javascript">
    document.getElementById("submitmay11").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      window.location="../Controller/index.php?action=bieudoline1&id=<?php echo $c[1]; ?>";
  }else{
     
    document.getElementById("idmatkhau").classList.add("form-control");
    document.getElementById("idmatkhau").classList.add("is-invalid");
      document.getElementById("idspan").innerText = 'Mật Khẩu Không Đúng'
      document.getElementById("idspan").style.color = 'red'
  }
}

</script>
<script type="text/javascript">
    document.getElementById("submitmay12").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau22");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      window.location="../Controller/index.php?action=bieudoline1&id=<?php echo $c[2]; ?>";
  }else{
     
    document.getElementById("idmatkhau22").classList.add("form-control");
    document.getElementById("idmatkhau22").classList.add("is-invalid");
      document.getElementById("idspan2").innerText = 'Mật Khẩu Không Đúng'
      document.getElementById("idspan2").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("submitmay13").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau33");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
     window.location="../Controller/index.php?action=bieudoline1&id=<?php echo $c[3]; ?>";
  }else{
     
    document.getElementById("idmatkhau33").classList.add("form-control");
    document.getElementById("idmatkhau33").classList.add("is-invalid");
      document.getElementById("idspan3").innerText = 'Mật Khẩu Không Đúng'
      document.getElementById("idspan3").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("submitmay14").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau4");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      window.location="../Controller/index.php?action=bieudoline1&id=<?php echo $c[4]; ?>";
  }else{
     
    document.getElementById("idmatkhau4").classList.add("form-control");
    document.getElementById("idmatkhau4").classList.add("is-invalid");
      document.getElementById("idspan4").innerText = 'Mật Khẩu Không Đúng'
      document.getElementById("idspan4").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("submitmay15").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau5");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      window.location="../Controller/index.php?action=bieudoline1&id=<?php echo $c[5]; ?>";
  }else{
     
    document.getElementById("idmatkhau5").classList.add("form-control");
    document.getElementById("idmatkhau5").classList.add("is-invalid");
      document.getElementById("idspan5").innerText = 'Mật Khẩu Không Đúng'
      document.getElementById("idspan5").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("submitmay16").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau6");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      window.location="../Controller/index.php?action=bieudoline1&id=<?php echo $c[6]; ?>";
  }else{
     
    document.getElementById("idmatkhau6").classList.add("form-control");
    document.getElementById("idmatkhau6").classList.add("is-invalid");
      document.getElementById("idspan6").innerText = 'Mật Khẩu Không Đúng'
      document.getElementById("idspan6").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("submitmay17").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau7");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
     window.location="../Controller/index.php?action=bieudoline1&id=<?php echo $c[7]; ?>";
  }else{
     
    document.getElementById("idmatkhau7").classList.add("form-control");
    document.getElementById("idmatkhau7").classList.add("is-invalid");
      document.getElementById("idspan7").innerText = 'Mật Khẩu Không Đúng'
      document.getElementById("idspan7").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("submitmay18").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau8");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      window.location="../Controller/index.php?action=bieudoline1&id=<?php echo $c[8]; ?>";
  }else{
     
    document.getElementById("idmatkhau8").classList.add("form-control");
    document.getElementById("idmatkhau8").classList.add("is-invalid");
      document.getElementById("idspan8").innerText = 'Mật Khẩu Không Đúng'
      document.getElementById("idspan8").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("submitmay19").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau9");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      window.location="../Controller/index.php?action=bieudoline1&id=<?php echo $c[9]; ?>";
  }else{
     
    document.getElementById("idmatkhau9").classList.add("form-control");
    document.getElementById("idmatkhau9").classList.add("is-invalid");
      document.getElementById("idspan9").innerText = 'Mật Khẩu Không Đúng'
      document.getElementById("idspan9").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("submitmay110").addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("idmatkhau10");
  x.value = x.value.toUpperCase();
  if((x.value == '<?php echo $matkhau1[1]; ?>')){
      window.location="../Controller/index.php?action=bieudoline1&id=<?php echo $c[10]; ?>";
  }else{
     
    document.getElementById("idmatkhau10").classList.add("form-control");
    document.getElementById("idmatkhau10").classList.add("is-invalid");
      document.getElementById("idspan10").innerText = 'Mật Khẩu Không Đúng'
      document.getElementById("idspan10").style.color = 'red'
  }
}

</script>

<script type="text/javascript">
    document.getElementById("xacnhan2").addEventListener("click", myFunction);

function myFunction() {

     var x = document.getElementById("idmatkhau2");
     var y = document.getElementById("span2");
  x.value = x.value.toUpperCase();
    if(x.value == '<?php echo $matkhau1[1]; ?>'){
        window.location="../Controller/index.php?action=edit&id=<?php echo $dataID['id']; ?>";
    }else{
      document.getElementById("idmatkhau2").classList.add("is-invalid");
      document.getElementById("span2").innerText = 'Mật Khẩu Không Đúng'
      document.getElementById("span2").style.color = 'red'
    }   
    
}


</script>


<script type="text/javascript">
    document.getElementById("xacnhan3").addEventListener("click", myFunction);

function myFunction() {

     var x = document.getElementById("idmatkhau3");
     var y = document.getElementById("span3");
  x.value = x.value.toUpperCase();
    if(x.value == '<?php echo $matkhau1[1]; ?>'){
        window.location="../Controller/index.php?action=delete&id=<?php echo $dataID['id']; ?>";
    }else{
      document.getElementById("idmatkhau3").classList.add("is-invalid");
      document.getElementById("span3").innerText = 'Mật Khẩu Không Đúng'
      document.getElementById("span3").style.color = 'red'
    }
    
}


</script>




        <script type="text/javascript">
          //For adding dots to loading
window.onload = function(){
    var loading = document.getElementById("loading");
    
    function addRedDot(i){
        i.innerHTML = "<h1>LOADING<span class='dot-red'>.</span></h1>";
        }
        function addYellowDot(i){
        i.innerHTML = "<h1>LOADING<span class='dot-red'>.</span><span class='dot-yellow'>.</span></h1>";
        }
        function addGreenDot(i){
        i.innerHTML = "<h1>LOADING<span class='dot-red'>.</span><span class='dot-yellow'>.</span><span class='dot-green'>.</span></h1>";
        }
        function removeDots(i) {
        i.innerHTML = "<h1>LOADING</h1>";
        }
    
    function timedDots(i) {
    
        setTimeout(function(){
            addRedDot(i)
        }, 1000);
        setTimeout(function(){
            addYellowDot(i)
        }, 2000);
        setTimeout(function(){
            addGreenDot(i)
        }, 3000);
        setTimeout(function(){
            removeDots(i)
        }, 4000);
        
        }
    
    setInterval(function(){
        timedDots(loading)
    }, 4000);
}

        </script>


</body>
</html>