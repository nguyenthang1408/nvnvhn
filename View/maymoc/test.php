<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <script
  src="../codejavascript/jq1.js"
  ></script>
  <style type="text/css">
    @import "nib";



.green {
  margin-top: 15px;
}
.green .progress,
.red .progress,
.orange .progress {
  position: relative;
  border-radius: 50%;
}
.green .progress,
.red .progress,
.orange .progress {
  width: 150px;
  height: 150px;
}
.green .progress {
  border: 5px solid #53fc53;
}
.green .progress {
  box-shadow: 0 0 20px #029502;
}
.green .progress,
.red .progress,
.orange .progress {
  transition: all 1s ease;
}
.green .progress .inner,
.red .progress .inner,
.orange .progress .inner {
  position: absolute;
  overflow: hidden;
  z-index: 2;
  border-radius: 50%;
  background: #333;
}
.green .progress .inner,
.red .progress .inner,
.orange .progress .inner {
  width: 140px;
  height: 140px;
}
.green .progress .inner,
.red .progress .inner,
.orange .progress .inner {
  border: 5px solid #1a1a1a;
}
.green .progress .inner,
.red .progress .inner,
.orange .progress .inner {
  transition: all 1s ease;
}
.green .progress .inner .water,
.red .progress .inner .water,
.orange .progress .inner .water {
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
.green .progress .inner .water {
  top: 25%;
}
.green .progress .inner .water {
  background: rgba(83,252,83,0.5);
}
.green .progress .inner .water,
.red .progress .inner .water,
.orange .progress .inner .water {
  transition: all 1s ease;
}
.green .progress .inner .water,
.red .progress .inner .water,
.orange .progress .inner .water {
  animation-duration: 10s;
}
.green .progress .inner .water {
  box-shadow: 0 0 20px #03bc03;
}
.green .progress .inner .glare,
.red .progress .inner .glare,
.orange .progress .inner .glare {
  position: absolute;
  top: -120%;
  left: -120%;
  z-index: 5;
  width: 200%;
  height: 200%;
  transform: rotate(45deg);
  border-radius: 50%;
}
.green .progress .inner .glare,
.red .progress .inner .glare,
.orange .progress .inner .glare {
  background-color: rgba(255,255,255,0.15);
}
.green .progress .inner .glare,
.red .progress .inner .glare,
.orange .progress .inner .glare {
  transition: all 1s ease;
}
.green .progress .inner .percent,
.red .progress .inner .percent,
.orange .progress .inner .percent {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  font-weight: bold;
  text-align: center;
}
.green .progress .inner .percent,
.red .progress .inner .percent,
.orange .progress .inner .percent {
  line-height: 140px;
  font-size: 60px;
}
.green .progress .inner .percent {
  /*color: #03c603;*/
  color: white;
}
.green .progress .inner .percent {
  text-shadow: 0 0 10px #029502;
}
.green .progress .inner .percent,
.red .progress .inner .percent,
.orange .progress .inner .percent {
  transition: all 1s ease;
}
.red {
  margin-top: 15px;
}
.red .progress {
  border: 5px solid #ed3b3b;
}
.red .progress {
  box-shadow: 0 0 20px #7a0b0b;
}
.red .progress .inner .water {
  top: 75%;
}
.red .progress .inner .water {
  background: rgba(237,59,59,0.5);
}
.red .progress .inner .water {
  box-shadow: 0 0 20px #9b0e0e;
}
.red .progress .inner .percent {
  /*color: #a30f0f;*/
  color: white;
}
.red .progress .inner .percent {
  text-shadow: 0 0 10px #7a0b0b;
}
.orange {
  margin-top: 15px;
}
.orange .progress {
  border: 5px solid #f07c3e;
}
.orange .progress {
  box-shadow: 0 0 20px #7e320a;
}
.orange .progress .inner .water {
  top: 50%;
}
.orange .progress .inner .water {
  background: rgba(240,124,62,0.5);
}
.orange .progress .inner .water {
  box-shadow: 0 0 20px #a0400c;
}
.orange .progress .inner .percent {
  /*color: #a8430d;*/
  color: white;
}
.orange .progress .inner .percent {
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

input[type="text"] {
  background-color: transparent;
  margin-top: 30px;
  border: 0;
  border-bottom: solid 1px #8080ff;
  text-align: center;
  font-size: 20px;
  color: #518bf0;
  text-shadow: 0 0 3px #518bf0;
  width: 45px;
  display: inline-block;
}
input:focus {
  outline: 0;
  border-bottom: dashed 1px #ff8080;
}
input::selection {
  color: #1a1a1a;
  background-color: #c6e4ee;
}
::-webkit-input-placeholder {
  color: #7aa6f3;
  text-shadow: 0 0 3px #7aa6f3;
}
:-moz-placeholder {
  color: #7aa6f3;
  text-shadow: 0 0 3px #7aa6f3;
}
::-moz-placeholder {
  color: #7aa6f3;
  text-shadow: 0 0 3px #7aa6f3;
}
:-ms-input-placeholder {
  color: #7aa6f3;
  text-shadow: 0 0 3px #7aa6f3;
}

  </style>
</head>
<body>


  
  <div class="green">
    <div class="progress">
      <div class="inner">
        <div class="percent"><span>20</span>%</div>
        <div class="water"></div>
        <div class="glare"></div>
      </div>
    </div>
  </div>
  <span><input type="hidden" id="percent-box" value="20"></span>

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
        $(".progress .percent").text(0 + "%");
      }
      else $(".progress .percent").text(valOrig + "%");
      
      $(".progress").parent().removeClass();
      $(".progress .water").css("top", val + "%");
      
      if(valOrig < colorInc * 1)
        $(".progress").parent().addClass("red");
      else if(valOrig < colorInc * 2)
        $(".progress").parent().addClass("orange");
      else
        $(".progress").parent().addClass("green");
    }
    else
    {
      $(".progress").parent().removeClass();
      $(".progress").parent().addClass("green");
      $(".progress .water").css("top", 100 - 67 + "%");
      $(".progress .percent").text(67 + "%");
      $("#percent-box").val("");
    }
  });
});

  </script>
  
</body>
</html>