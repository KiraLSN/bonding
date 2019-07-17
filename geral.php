<script >

// JavaScript Document
var Timer;
var TotalSeconds;

function CreateTimer(TimerID, Time){
    var oop=this;
	this.Timer = document.getElementById(TimerID);
	this.TotalSeconds = Time;
	this.update();
	oop.to=setTimeout(function(){ oop.tick(); }, 1000);
}

CreateTimer.prototype={

 tick:function(){
    var oop=this;
	if (this.TotalSeconds <= 0){
		return;
	}
	this.TotalSeconds -= 1;
	this.update()
	oop.to=setTimeout(function(){ oop.tick(); }, 1000);
 },

 update:function(){
 	var Seconds = this.TotalSeconds,Days = Math.floor(Seconds / 86400);
	Seconds -= Days * 86400;
	var Hours = Math.floor(Seconds / 3600);
	Seconds -= Hours * (3600);
	var Minutes = Math.floor(Seconds / 60);
	Seconds -= Minutes * (60);
	var TimeStr = ((Days > 0) ? Days + " days " : "") +
	LeadingZero(Hours) + ":" + LeadingZero(Minutes) + ":" + LeadingZero(Seconds)
	this.Timer.innerHTML = TimeStr;
 }

}


function LeadingZero(Time){
	return (Time < 10) ? "0" + Time : + Time;
}
    function toZero(Time){
	return (Time = 0) 
}
        
       

</script>

<?php
include ("conexao.php");

$pdo_verifica = $conexao_pdo->prepare("select * from tb_cura order by id desc limit 1");
                     $pdo_verifica->execute();
            while($fetch = $pdo_verifica->fetch()){
                	
			
			
			if($fetch['status'] == "Start"){
    echo "Funciona";
    
    echo "<p class='l1-txt2 p-b-4 hours' id='timer1'></p>";
    echo "</div>";
    echo "<script type='text/javascript'>";
                echo "temp1 = new CreateTimer('timer1', 7200); ";
                echo "</script>";
                 
    }else{
             echo "Funciona";
    echo "<div class='flex-col-c-m wsize2 m-b-20'>";
    echo "<div class='flex-col-c-m wsize2 m-b-20'>";
    echo " <p class='l1-txt2 txt-center p-b-22'>
				Carro 1
			</p>";
    echo "<p class='l1-txt2 p-b-4 hours' id='timer1'>00:00:00</spam>";
    echo "</p>";   
            }
}
            



                   
                    
					
					
				

?>

<script>
    function tempo1(){
        
       document.getElementById("b1").disabled=true;
           document.getElementById("b1").disabled = true;
            temp1 = new CreateTimer("timer1", 7200);   
    }
</script>