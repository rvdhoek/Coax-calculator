<?php
//Default values
if (empty($lengte)){$lengte=100;}
if (empty($frequentie)){$frequentie=230;}
if (empty($type)){$type="C9";}

include_once("/var/www/analyticstracking.php");

ini_set('display_errors',0);
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
if($operator=="C1,5")
{
$lengte = $_REQUEST['lengtevalue'];
$frequentie = $_REQUEST['freqvalue'];
$type = "C1,5";
$result = round($lengte*0.015*sqrt($frequentie/230),2);
$extrainfo="Extrainfo Coax 1,5: Voortplantingssnelheid:0,91 Loopsnelheid:136,5";
}
if($operator=="C3")
{
$lengte = $_REQUEST['lengtevalue'];
$frequentie = $_REQUEST['freqvalue'];
$type = "C3";
$result = round($lengte*0.03*sqrt($frequentie/230),2);
$extrainfo="Extrainfo Coax 3: Voortplantingssnelheid:0,89 Loopsnelheid:133";
}
if($operator=="C6")
{
$lengte = $_REQUEST['lengtevalue'];
$frequentie = $_REQUEST['freqvalue'];
$type = "C6";
$result  =round($lengte*0.06*sqrt($frequentie/230),2);
$extrainfo="Extrainfo Coax 6: Voortplantingssnelheid:0,88 Loopsnelheid:132";
}
if($operator=="C9")
{
$lengte = $_REQUEST['lengtevalue'];
$frequentie = $_REQUEST['freqvalue'];
$type = "C9";
$result = round($lengte*0.09*sqrt($frequentie/230),2);
$extrainfo="Extrainfo Coax 9: Voortplantingssnelheid:0,81 Loopsnelheid:127";
}
if($operator=="C12")
{
$lengte = $_REQUEST['lengtevalue'];
$frequentie = $_REQUEST['freqvalue'];
$type = "C12";
$result = round($lengte*0.12*sqrt($frequentie/230),2);
$extrainfo="Extrainfo Coax 12: Voortplantingssnelheid:0,67 Loopsnelheid:100";
}
if($operator=="C18")
{
$lengte = $_REQUEST['lengtevalue'];
$frequentie = $_REQUEST['freqvalue'];
$type = "C18";
$result = round($lengte*0.18*sqrt($frequentie/230),2);
$extrainfo="Extrainfo Coax 18: Voortplantingssnelheid:    Loopsnelheid:";
}

if($_REQUEST['lengtevalue']==NULL && $_REQUEST['freqvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter values.\");</script>";
}
else if($_REQUEST['lengtevalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter meters\");</script>";
}
else if($_REQUEST['freqvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter frequency\");</script>";
}
}
?>
<form>
<table  border="3" bordercolor="#c86260" bgcolor="#ffffcc" width="50%" cellspacing="5" cellpadding="3">
            <tr>
                <td style="background-color:"#ffffff"; color:red; font-family:'Times New Roman'">Lengte coax (Meter)</td>
                <td colspan="1">
                    <input name="lengtevalue" type="number" value="<?php echo $lengte; ?>" min="0" style="color:red"/></td>
            <tr>
                <td style="background-color:"#ffffff"; color:red; font-family:'Times New Roman'">Type Coaxkabel</td>
                <td>
                    <select name="operator" style="width: 63px">
			<option <?php if($type == "C1,5"){echo("selected");}?>>C1,5</option>
        	        <option <?php if($type == "C3"){echo("selected");}?>>C3</option>
                	<option <?php if($type == "C6"){echo("selected");}?>>C6</option>
	                <option <?php if($type == "C9"){echo("selected");}?>>C9</option>
        	        <option <?php if($type == "C12"){echo("selected");}?>>C12</option>
                	<option <?php if($type == "C18"){echo("selected");}?>>C18</option>
		    </select></td>
               </tr>
            <tr>
                <td style="background-color:"#ffffff"; color:red; font-family:'Times New Roman'">Frequentie</td>
                <td class="auto-style5">
                    <!-- <input name="freqvalue" type="number" value="<?php $freqvalue ?>" min="0" max="1000" style="color:red"> -->

			<input name="freqvalue" type="range" min="0" max="1000" value="<?php echo $frequentie; ?>" step="10" onchange="showValue(this.value)" />
			<span id="range"><?php echo $frequentie; ?></span><span id="range">Mhz</span>
			<script type="text/javascript">
			function showValue(newValue)
			{
				document.getElementById("range").innerHTML=newValue;
			}
			</script>

            </td></tr>
               </td>
                <td><input type="submit" name="calculate" value="Bereken" style="color:wheat;background-color:rosybrown" /></td>
		<td style="color:darkblue"></td>

            </tr>
            <tr>
                <td style="background-color:"#ffffff";color:red">Demping (dB) = </td>
                <td style="color:darkblue"><?php echo $result ; echo " dB";?></td>

            </tr>
	    </table>
		 <table style=border="3" bordercolor="#c86260" bgcolor="#ffffcc" width="50%" cellspacing="5" cellpadding="3"
		<tr>
			<td style="color:darkblue"><?php echo $extrainfo;?></td>
		</tr>
</table>
</form>

