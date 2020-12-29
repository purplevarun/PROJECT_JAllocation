
<div style="width:100%;font-size:20px;height:43px;background-color:black;margin:0px;padding:0px;position:fixed;bottom:0px;">
    <button style="margin:4px;float:left;background-color:white;border-style:groove;border-radius:5px;" onclick="window.location.href='index.php'">Home</button>
    <button style="margin:4px;float:left;background-color:white;border-style:groove;border-radius:5px;" onclick="history.go(-1)">Back</button>
    <button style="margin:4px;float:left;background-color:white;border-style:groove;border-radius:5px;" onclick="change()">Light Mode</button>    
    <button style="margin:4px;float:left;background-color:white;border-style:groove;border-radius:5px;" onclick="window.location.href='about.php'">About</button>
    
</div>

    <script>
    function change(){
        
        if(document.body.style.color=="black" && document.body.style.backgroundColor=="white"){
            document.body.style.color="white";
            document.body.style.backgroundColor="black";
            
        }
        else{
            document.body.style.color="black";
            document.body.style.backgroundColor="white";
            
        }
    }
</script>
