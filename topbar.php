<div style="width:100%;font-size:20px;height:43px;background-color:black;margin:0px;padding:0px;">
    <button style="margin:4px;float:left;background-color:white;border-style:groove;border-radius:5px;" onclick="window.location.href='index.php'">Home</button>
    <button style="margin:4px;float:left;background-color:white;border-style:groove;border-radius:5px;" onclick="history.go(-1)">Back</button>
    <button style="margin:4px;float:right;background-color:white;border-style:groove;border-radius:5px;" onclick=dark()>Dark Mode</button>
    <button style="margin:4px;float:right;background-color:white;border-style:groove;border-radius:5px;" onclick="window.location.href='about.php'">About</button>
    
</div>
<script>
    if(localStorage.getItem("mode")=="dark"){
        document.body.style.backgroundColor="black";
        document.body.style.color="white";
    }
    
    function dark(){    
        if (document.body.style.color=="black" && document.body.style.backgroundColor=="white") {
            document.body.style.color="white";
            document.body.style.backgroundColor="black";
            localStorage.setItem("mode","dark");
        }
        if (document.body.style.color=="white" && document.body.style.backgroundColor=="black") {
            document.body.style.color="black";
            document.body.style.backgroundColor="white";
            localStorage.clear();
        }
        
    }
</script>