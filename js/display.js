        var begintime=document.getElementById("begintime").value;
    	var endtime=document.getElementById("endtime").value;

    	if(begintime=="" && endtime=="" )
    	{
    		alert('aaa');
    		//location.href='query.php';
    	}
    	else if(begintime!="" && endtime=="" )
    	{
    		document.getElementById("tab").style.display="";
    		document.getElementById("tab1").style.display="none";
    		document.getElementById("tab2").style.display="none";
    		//location.href='query.php?begintime='+begintime;
    	}
    	else if (begintime=="" && endtime!="" )
    	{
    		document.getElementById("tab").style.display="";
    		document.getElementById("tab1").style.display="none";
    		document.getElementById("tab2").style.display="none";
    		//location.href='query.php?endtime='+endtime;
    	}
    	else
    	{
    		document.getElementById("tab").style.display="";
    		document.getElementById("tab1").style.display="none";
    		document.getElementById("tab2").style.display="none";
    		//location.href='?begintime='+begintime+"&endtime="+endtime;
    	}
    	//My model表
    	var begintime2=document.getElementById("begintime2").value;
    	var endtime2=document.getElementById("endtime2").value;

    	if(begintime2=="" && endtime2=="" )
    	{
    		alert('bbb');
    		//location.href='query.php';
    	}
    	else if(begintime2!="" && endtime2=="" )
    	{
    		document.getElementById("tab").style.display="none";
    		document.getElementById("tab1").style.display="";
    		document.getElementById("tab2").style.display="none";
    		//location.href='query.php?begintime='+begintime;
    	}
    	else if (begintime2=="" && endtime2!="" )
	    {   
    		document.getElementById("tab").style.display="none";
			document.getElementById("tab1").style.display="";
			document.getElementById("tab2").style.display="none";
    		//location.href='query.php?endtime='+endtime;
    	}
    	else
    	{
    		document.getElementById("tab").style.display="none";
    		document.getElementById("tab1").style.display="";
    		document.getElementById("tab2").style.display="none";
    		//location.href='?begintime='+begintime+"&endtime="+endtime;
    	}
    	//第三个表
    	var begintime3=document.getElementById("begintime3").value;
    	var endtime3=document.getElementById("endtime3").value;

    	if(begintime3=="" && endtime3=="" )
    	{
    		alert('ccc');
    		//location.href='query.php';
    	}
    	else if(begintime3!="" && endtime3=="" )
    	{
    		document.getElementById("tab").style.display="none";
    		document.getElementById("tab1").style.display="none";
    		document.getElementById("tab2").style.display="";
    		
    		//location.href='query.php?begintime='+begintime;
    	}
    	else if (begintime3=="" && endtime3!="" )
    	{
    		document.getElementById("tab").style.display="none";
    		document.getElementById("tab1").style.display="none";
    		document.getElementById("tab2").style.display="";
    		//location.href='query.php?endtime='+endtime;
    	}
    	else
    	{
    		document.getElementById("tab").style.display="none";
    		document.getElementById("tab1").style.display="none";
    		document.getElementById("tab2").style.display="";
    		//location.href='?begintime='+begintime+"&endtime="+endtime;
    	}