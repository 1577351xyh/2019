<?php
    $id = intval($_GET['id']);
    $tb_hd = "";
    switch ($id){
        case 1: case 2: case 3: case 4: case 14:
            $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">If</th>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">A</th>
<th style=\"font-weight: 400;\">A</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">A</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">V</th>
</tr>
</tbody>
</table>
";
            break;

        case 5:
        $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">l（AV）</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">Package Outline</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">If</th>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">A</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">A</th>
<th style=\"font-weight: 400;\">UA</th>
<th style=\"font-weight: 400;\">V</th>
</tr>
</tbody>
</table>
";
        break;

        case 6: case 7: case 8: case 9: case 11: case 12: case 13:
            $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Trr</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">If</th>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">A</th>
<th style=\"font-weight: 400;\">A</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">A</th>
<th style=\"font-weight: 400;\">UA</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">NS</th>
</tr>
</tbody>
</table>
";
            break;

        case 10:
        $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\">TYPE LUM1B</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">V(DC)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">If</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">Package umb</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">If</th>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">V 100</th>
<th style=\"font-weight: 400;\">A 1</th>
<th style=\"font-weight: 400;\">A 35</th>
<th style=\"font-weight: 400;\">V 1.1</th>
<th style=\"font-weight: 400;\">A 1</th>
<th style=\"font-weight: 400;\">UA 5</th>
<th style=\"font-weight: 400;\">V 100</th>
</tr>
</tbody>
</table>
";
        break;

        case 15:
            $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\">TYPE</th>
<th style=\"font-weight: 400;\" colspan=\"3\">Zener Voltage Rang</th>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">Dynamic Impedance</th>
<th style=\"font-weight: 400;\" colspan=\"2\">Reverse Current</th>
<th style=\"font-weight: 400;\">Power DiSSI PATION</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\" colspan=\"3\">VZT(@IZT)</th>
<th style=\"font-weight: 400;\">IZT</th>
<th style=\"font-weight: 400;\">ZZT(@|ZT)</th>
<th style=\"font-weight: 400;\">Ir</th>
<th style=\"font-weight: 400;\">@Vr</th>
<th style=\"font-weight: 400;\">Pd</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">Min(V)</th>
<th style=\"font-weight: 400;\">Nom(V)</th>
<th style=\"font-weight: 400;\">Max(V)</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">Max(Q)</th>
<th style=\"font-weight: 400;\">Max(jjA)</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">mW</th>
</tr>
</tbody>
</table>
";
            break;

        case 16:
            $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"2\">TYPE</th>
<th style=\"font-weight: 400;\">PD</th>
<th style=\"font-weight: 400;\">脚位</th>
<th style=\"font-weight: 400;\">Vrwm</th>
<th style=\"font-weight: 400;\">Ir@Vrwm</th>
<th style=\"font-weight: 400;\">Vbr@Ima</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">mW</th>
<th style=\"font-weight: 400;\">PIN ARRAY</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">UA</th>
<th style=\"font-weight: 400;\">V</th>
</tr>
</tbody>
</table>
";
            break;

        case 17:
            $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"2\">TYPE</th>
<th style=\"font-weight: 400;\">VB0@22nF</th>
<th style=\"font-weight: 400;\">+/-VBO</th>
<th style=\"font-weight: 400;\">AV</th>
<th style=\"font-weight: 400;\">Vo</th>
<th style=\"font-weight: 400;\">Ibo</th>
<th style=\"font-weight: 400;\">IB</th>
<th style=\"font-weight: 400;\">Trr</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">UA</th>
<th style=\"font-weight: 400;\">UA</th>
<th style=\"font-weight: 400;\">US</th>
</tr>
</tbody>
</table>
";
            break;

        case 18:
            $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">PD</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Io</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">If</th>
<th style=\"font-weight: 400;\" colspan=\"2\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Trr</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">If</th>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">mW</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">UA</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">NS</th>
</tr>
</tbody>
</table>
";
            break;

        case 19:
            $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Vr</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Rs</th>
<th style=\"font-weight: 400;\" colspan=\"2\">Ir</th>
<th style=\"font-weight: 400;\" colspan=\"2\">Cl</th>
<th style=\"font-weight: 400;\" colspan=\"2\">C2</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">Vr</th>
<th style=\"font-weight: 400;\">Pf</th>
<th style=\"font-weight: 400;\">Vr</th>
<th style=\"font-weight: 400;\">Pf</th>
<th style=\"font-weight: 400;\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">Ω</th>
<th style=\"font-weight: 400;\">nA</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
</tr>
</tbody>
</table>
";
            break;

        case 20:
            $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Vr</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">If</th>
<th style=\"font-weight: 400;\" colspan=\"2\">Ir</th>
<th style=\"font-weight: 400;\" colspan=\"2\">RD1</th>
<th style=\"font-weight: 400;\" colspan=\"2\">RD2</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">Vr</th>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">@lF</th>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">@lF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">UA</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">Q</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">Q</th>
<th style=\"font-weight: 400;\">mA</th>
</tr>
</tbody>
</table>
";
            break;

        case 21:
            $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Vbr</th>
<th style=\"font-weight: 400;\" colspan=\"2\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Cj</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Vc@Ipp</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Ipp TP=8/20US</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Peak Pulse Current Ipp</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">Vrrm</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">UA</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">Pf</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">A</th>
<th style=\"font-weight: 400;\">W</th>
</tr>
</tbody>
</table>
";
            break;

        case 22:
            $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" colspan=\"2\" rowspan=\"2\">TYPE</th>
<th style=\"font-weight: 400;\">Reverse Stand-off Voltage</th>
<th style=\"font-weight: 400;\" colspan=\"2\">Breakdown Voltage Vbr@It</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Test Current It</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Maximum Reverse Leakage</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Max. Clamp Voltage Vc@Ipp</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Peak Pulse Current Ipp</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Peak Pulse Power Dissipation Pppm</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">Vrmw</th>
<th style=\"font-weight: 400;\">Min</th>
<th style=\"font-weight: 400;\">Max</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">UNI</th>
<th style=\"font-weight: 400;\">Bl</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">UA</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">A</th>
<th style=\"font-weight: 400;\">W</th>
</tr>
</tbody>
</table>
";
            break;

        case 23:
            $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">POLARITY</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">PCM</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Ic</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">BVcbo</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">BVceo</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">BVebo</th>
<th style=\"font-weight: 400;\" colspan=\"4\">Hfe</th>
<th style=\"font-weight: 400;\" colspan=\"3\">VCE(SAT)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Ft</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">@VCE</th>
<th style=\"font-weight: 400;\">@lc</th>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">@lc</th>
<th style=\"font-weight: 400;\">Ib</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">mW</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">Min</th>
<th style=\"font-weight: 400;\">Max</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">Mhz</th>
</tr>
</tbody>
</table>
";
            break;

        case 24:
            $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">極性<br>POLARITY</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">PCM</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Ic</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">BVcbo</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">BVceo</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">BVebo</th>
<th style=\"font-weight: 400;\" colspan=\"4\">Hfe</th>
<th style=\"font-weight: 400;\" colspan=\"3\">VCE(SAT)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Ft</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Rl</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">R2</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">@VCE</th>
<th style=\"font-weight: 400;\">@lc</th>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">@lc</th>
<th style=\"font-weight: 400;\">IB</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">mW</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">Min</th>
<th style=\"font-weight: 400;\">Max</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">Mhz</th>
<th style=\"font-weight: 400;\">Q</th>
<th style=\"font-weight: 400;\">Q</th>
</tr>
</tbody>
</table>
";
            break;

        case 25: case 26:
            $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">極性 POLARITY</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">PCM</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Ic</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">BVcbo</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">BVceo</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">BVebo</th>
<th style=\"font-weight: 400;\" colspan=\"4\">Hfe</th>
<th style=\"font-weight: 400;\" colspan=\"3\">VCE(SAT)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Ft</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">@VCE</th>
<th style=\"font-weight: 400;\">@lc</th>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">@lc</th>
<th style=\"font-weight: 400;\">Ib</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">mW</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">Min</th>
<th style=\"font-weight: 400;\">Max</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">Mhz</th>
</tr>
</tbody>
</table>
";
            break;

        case 27:
        $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"2\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Polarity</th>
<th style=\"font-weight: 400;\">Pd</th>
<th style=\"font-weight: 400;\">Id</th>
<th style=\"font-weight: 400;\">Vds</th>
<th style=\"font-weight: 400;\">Vgs</th>
<th style=\"font-weight: 400;\">DS導通</th>
<th style=\"font-weight: 400;\">DS導通</th>
<th style=\"font-weight: 400;\">DS導通</th>
<th style=\"font-weight: 400;\">DS導通</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">W</th>
<th style=\"font-weight: 400;\">A</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">@10VmQ</th>
<th style=\"font-weight: 400;\">@4.5VmQ</th>
<th style=\"font-weight: 400;\">@2.5VmQ</th>
<th style=\"font-weight: 400;\">@1.8VmQ</th>
</tr>
</tbody>
</table>";
        break;

        case 28:
            $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"2\">TYPE</th>
<th style=\"font-weight: 400;\">Power</th>
<th style=\"font-weight: 400;\">VlN</th>
<th style=\"font-weight: 400;\">VOUT</th>
<th style=\"font-weight: 400;\">lOUT</th>
<th style=\"font-weight: 400;\">Accuracy</th>
<th style=\"font-weight: 400;\">Quiescent Current</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">mW</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">%</th>
<th style=\"font-weight: 400;\">mA</th>
</tr>
</tbody>
</table>
";
            break;

        case 29:
            $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"2\">TYPE</th>
<th style=\"font-weight: 400;\">PD</th>
<th style=\"font-weight: 400;\">Ika</th>
<th style=\"font-weight: 400;\">Vka</th>
<th style=\"font-weight: 400;\">VREF@VKA=VREF</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">管脚排列 PIN ARRAY</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">mW</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">@Ika=10mA</th>
</tr>
</tbody>
</table>
";
            break;

        case 30:
            $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"2\">TYPE</th>
<th style=\"font-weight: 400;\">Po</th>
<th style=\"font-weight: 400;\">Io</th>
<th style=\"font-weight: 400;\">Vl</th>
<th style=\"font-weight: 400;\">V0@Tj=25°C</th>
<th style=\"font-weight: 400;\">Iq</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">mW</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">mA</th>
</tr>
</tbody>
</table>
";
            break;

        case 31:
            $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"2\">TYPE</th>
<th style=\"font-weight: 400;\">Vdd</th>
<th style=\"font-weight: 400;\">SNR</th>
<th style=\"font-weight: 400;\">Sensitivity</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">dB</th>
<th style=\"font-weight: 400;\">dBV</th>
</tr>
</tbody>
</table>
";
            break;

        default:
            $tb_hd = "
<table>
<tbody>
<tr>
<th style=\"font-weight: 400;\" rowspan=\"3\">TYPE</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Vrrm</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">l(AV)</th>
<th style=\"font-weight: 400;\" rowspan=\"2\">Ifsm</th>
<th style=\"font-weight: 400;\" colspan=\"2\">Vf</th>
<th style=\"font-weight: 400;\" colspan=\"2\">Ir</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">Package</th>
<th style=\"font-weight: 400;\" rowspan=\"3\">PDF</th>
</tr>
<tr>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">If</th>
<th style=\"font-weight: 400;\"> </th>
<th style=\"font-weight: 400;\">Vr</th>
</tr>
<tr>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">A</th>
<th style=\"font-weight: 400;\">A</th>
<th style=\"font-weight: 400;\">V</th>
<th style=\"font-weight: 400;\">A</th>
<th style=\"font-weight: 400;\">mA</th>
<th style=\"font-weight: 400;\">V</th>
</tr>
</tbody>
</table>
";
            break;
    }

    echo "<div class='table_wrap'>".$tb_hd."<div id='loadtip' class='loadtip'>加载中...</div></div><ul class='pagination'></ul>";

