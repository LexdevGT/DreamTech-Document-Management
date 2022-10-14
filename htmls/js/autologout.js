


$(function()
{
//var timeStamp = new Date();
    function timeChecker()
    {
        setInterval(function()
        {
            var storedTimeStamp = sessionStorage.getItem("lastTimeStamp");  
            timeCompare(storedTimeStamp);
        },3000);
    }


    function timeCompare(timeString)
    {
        var maxMinutes  = 2;  //MAYOR QUE 1 MIN.
        var currentTime = new Date();
        var pastTime    = new Date(timeString);
        var timeDiff    = currentTime - pastTime;
        var minPast     = Math.floor( (timeDiff/60000) ); 
        //alert(currentTime);
        //alert(minPast);
        /*if (minPast>2000) {
            var minPast = 0;
        }*/
           // alert(maxMinutes);
        if( minPast > maxMinutes)
        {
            sessionStorage.removeItem("lastTimeStamp");
            alert('Sesion cerrada por falta de actividad');
            //alert(minPast);
           // alert(maxMinutes);
            window.location = "session_killer.php";
            return false;
        }else
        {
            //JUST ADDED AS A VISUAL CONFIRMATION
            console.log(currentTime +" - "+ pastTime+" - "+minPast+" min past");
        }
    }

    if(typeof(Storage) !== "undefined") 
    {
        var timeStamp = new Date();
            sessionStorage.setItem("lastTimeStamp",timeStamp);
        $(document).mousemove(function()
        {
            var timeStamp = new Date();
            sessionStorage.setItem("lastTimeStamp",timeStamp);
        });

        timeChecker();
    }  
});//END JQUERY


