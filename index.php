<?php

ini_set('display_errors',0);
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
if($operator=="C1,5")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$type = "C1,5";
$result = $add1*1.5*(($add2/230)/100);
$extrainfo="1extrainnfo, verkoringsfactor en kabeltypekkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk";
}
if($operator=="C3")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$type = "C3";
$result = $add1*3*(($add2/230)/100);
$extrainfo="2extrainnfo, verkoringsfactor en kabeltypekkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk";
}
if($operator=="C6")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$type = "C6";
$result  =$add1*6*(($add2/230)/100);
$extrainfo="3extrainnfo, verkoringsfactor en kabeltypekkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk";
}
if($operator=="C9")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$type = "C9";
$result = $add1*9*(($add2/230)/100);
$extrainfo="4extrainnfo, verkoringsfactor en kabeltypekkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk";
}
if($operator=="C12")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$result = $add1*12*(($add2/230)/100);
$extrainfo="extrainnfo, verkoringsfactor en kabeltypekkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk";
}
if($operator=="C18")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$type = "C18";
$result = $add1*18*(($add2/230)/100);
$extrainfo="6extrainnfo, verkoringsfactor en kabeltypekkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk";
}
if($_REQUEST['fvalue']==NULL && $_REQUEST['lvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter values.\");</script>";
}
else if($_REQUEST['fvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter meters\");</script>";
}
else if($_REQUEST['lvalue']==NULL)
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
                    <input name="fvalue" type="number" step="10" value="100" min="0" style="color:red"/></td>
            <tr>
                <td style="background-color:"#ffffff"; color:red; font-family:'Times New Roman'">Type Coaxkabel</td>
                <td>
                    <select name="operator" style="width: 63px">
                <option>C1,5</option>
                <option>C3</option>
                <option>C6</option>
                <option>C9</option>
                <option>C12</option>
                <option>C18</option>
                </select></td>
               </tr>
            <tr>
                <td style="background-color:"#ffffff"; color:red; font-family:'Times New Roman'">Frequentie</td>
                <td class="auto-style5">
                    <!-- <input name="lvalue" type="number" value="0" min="0" max="1000" style="color:red"> -->

                        <input name="lvalue" type="range" min="0" max="1000" value="0" step="10" onchange="showValue(this.value)" />
                        <span id="range">0</span><span id="range">Mhz</span>
                        <script type="text/javascript">
                        function showValue(newValue)
                        {
                                document.getElementById("range").innerHTML=newValue;
                        }
                        </script>

            </td></tr>
               </td>
                <td><input type="submit" name="calculate" value="Bereken" style="color:wheat;background-color:rosybrown" /></td>
                <td style="color:darkblue"><?php echo $type; echo ":  "; echo $add1; echo " Meter   "; echo $add2; echo " Mhz";?></td>

            </tr>
            <tr>
                <td style="background-color:"#ffffff";color:red">Demping (dB) = </td>
                <td style="color:darkblue"><?php echo $result ; echo " dB";?></td>

            </tr>
            </table>
               <table style="border:groove #00FF99"
                <tr>
                        <td style="color:darkblue"><?php echo $extrainfo;?></td>
                </tr>
                </table>
 </form>
