<meta http-equiv="Content-Type" content="application/vnd.ms-excel; charset=utf-8">

<br style="mso-data-placement:same-cell;">
<br style="mso-data-placement:same-cell;">
<table>
    <tr>
        <td style="width:10%;" colspan="3">
            사전예약 응모자 검색: <?=$tot_row?> 명 (총 : <?=$total_cnt?>명)
        </td>
    </tr>
</table>
<br style="mso-data-placement:same-cell;">
<table>
    <thead>
    <tr>
        <th style="width:25%">디바이스</th>
        <th style="width:25%">OS</th>
        <th style="width:25%">핸드폰 번호</th>
        <th style="width:25%">광고성 정보 수신 동의</th>
        <th style="width:25%">등록일</th>
        <th style="width:25%">등록시간</th>
    </tr>
    </thead>
    <tbody>
    <?foreach( $result as $rows ):?>
        <tr class="odd gradeX">
            <td style="mso-number-format:'\@'"><?=($rows['device'] == "P" ? "Pc" : "Mobile")?></td>
            <td style="mso-number-format:'\@'"><?=($rows['app'] == "google" ? "Android" : "iOS")?></td>
<!--            <td style="mso-number-format:'\@'">-->
<!--                --><?//if( !empty($part_json[$rows['media']]) ):?>
<!--                    --><?php //=$rows['media']?>
<!--                --><?//else:?>
<!--                    자연유입-->
<!--                --><?//endif;?>
<!--            </td>-->
<!--            <td style="mso-number-format:'\@'">-->
<!--                --><?//if( !empty($part_json[$rows['media']][$rows['part']]) ):?>
<!--                    --><?php //=$part_json[$rows['media']][$rows['part']]?>
<!--                --><?//else:?>
<!--                    자연유입-->
<!--                --><?//endif;?>
<!--            </td>-->
            <td style="mso-number-format:'\@'"><?=$rows['phone']?></td>
            <td style="mso-number-format:'\@'"><?=$rows['ad_agreement'] == 1 ? '동의' : '미동의'?></td>
            <td style="mso-number-format:'\@'"><?=date("Y-m-d", strtotime($rows['reg_date']));?></td>
            <td style="mso-number-format:'\@'"><?=date("H:i:s", strtotime($rows['reg_date']));?></td>
        </tr>
    <?endforeach?>
    </tbody>
</table>