<?php
function productTable(){
    $id = (get_query_var('id')) ? get_query_var('id') : 1;
    $tb_hd = "";
    switch ($id){
        case 1:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 2:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 3:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 4:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 5:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 6:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 7:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 8:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 9:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 10:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 11:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 12:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 13:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 14:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 15:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 1:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 2:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 3:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 4:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 5:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 6:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 7:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 8:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 9:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 10:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 11:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 12:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 13:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 14:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        case 15:
            $tb_hd = "
<!-- wp:paragraph -->
<table width=\"932\">
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"108\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"143\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"140\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\" width=\"122\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"188\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\" width=\"174\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\" width=\"87\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"94\"> </th>
<th style=\"font-weight: 400;\" width=\"83\">If</th>
<th style=\"font-weight: 400;\" width=\"87\"> </th>
<th style=\"font-weight: 400;\" width=\"68\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" width=\"143\">V</th>
<th style=\"font-weight: 400;\" width=\"140\">A</th>
<th style=\"font-weight: 400;\" width=\"122\">A</th>
<th style=\"font-weight: 400;\" width=\"94\">V</th>
<th style=\"font-weight: 400;\" width=\"83\">A</th>
<th style=\"font-weight: 400;\" width=\"87\">mA</th>
<th style=\"font-weight: 400;\" width=\"68\">V</th>
</tr>
</tbody>
</table>
<!-- /wp:paragraph -->
";
            break;
        default:
            break;
    }

    echo $tb_hd."<div id='loadtip' class='loadtip'>加载中...</div><ul class='pagination'></ul>";
}