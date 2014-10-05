<?php

$titulo = 'sadmaslkd';
$mensaje = 'asdkasdlkasdkjalskdjlaksjdlkasdklaslkdaslkjda';
$fecha = '12/12/2014';
echo '<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >            
    </head>
    <body style="text-aling:center">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center" valign="top" bgcolor="#726627" style="background-color:#726627;"><br/>
                    <br/>
                    <table width="600" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td align="left" valign="top" style="padding:5px;">
                                <img src="' . Yii::app()->theme->baseUrl . '/img/images/logo.png" width="298" height="67" style="display:block;">
                            </td>
                        </tr>
                        <tr>
                            <td align="left" valign="top"><img src="' . Yii::app()->theme->baseUrl . '/img/images/top.png" width="600" height="133" style="display:block;"></td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" bgcolor="#006c00" style="background-color:#006c00; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000000;"><table width="100%" border="0" cellspacing="0" cellpadding="5">
                                    <tr>
                                        <td width="50%" align="left" valign="top" style="color:#ffffff; font-family:Verdana, Geneva, sans-serif; font-size:11px;">&nbsp;&nbsp;' . $fecha . '</td>
                                    </tr>
                                </table></td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" bgcolor="#ffffff" style="background-color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000000; padding:12px;">
                                <table width="100%" border="0" cellspacing="0" cellpadding="10" style="margin-bottom:10px;">
                                    <tr>
                                        <td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#525252;">
                                            <div style="font-size:14px;">
                                                <b>
                                                    <img src="' . Yii::app()->theme->baseUrl . '/img/images/pic002.jpg" width="183" height="122" align="left" style="margin-left:0px; margin-right: 20px ">
                                                        ' . $titulo . '
                                                </b></div>
                                            <div>
                                                ' . $mensaje . '
                                                <br/>                                          
                                            </div></td>
                                    </tr>
                                </table></td>
                        </tr>
                        <tr>
                            <td align="left" valign="top" bgcolor="#006c00" style="background-color:#006c00; border-radius: 0px 0px  10px 10px;"><table width="100%" border="0" cellspacing="0" cellpadding="15">
                                    <tr>
                                        <td align="left" valign="top" style="color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:13px; ">                                           
                                        </td>
                                    </tr>
                                </table></td>
                        </tr>
                    </table>
                    <br/>
                    <br/></td>
            </tr>
        </table>
    </body>
</html>';
?>
