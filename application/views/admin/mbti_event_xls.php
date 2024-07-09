<meta http-equiv="Content-Type" content="application/vnd.ms-excel; charset=utf-8">

<br style="mso-data-placement:same-cell;">
<br style="mso-data-placement:same-cell;">
<table>
    <tr>
        <td style="width:10%;" colspan="15">
            MBTI 이벤트 참여자 검색: <?=$tot_row?> 명 (총 : <?=$total_cnt?>명)
        </td>
    </tr>
</table>
<br style="mso-data-placement:same-cell;">
<table>
    <thead>
    <tr>
        <th style="width:25%">MBTI</th>
        <th style="width:25%">Q1</th>
        <th style="width:25%">Q2</th>
        <th style="width:25%">Q3</th>
        <th style="width:25%">Q4</th>
        <th style="width:25%">Q5</th>
        <th style="width:25%">Q6</th>
        <th style="width:25%">Q7</th>
        <th style="width:25%">Q8</th>
        <th style="width:25%">Q9</th>
        <th style="width:25%">Q10</th>
        <th style="width:25%">Q11</th>
        <th style="width:25%">Q12</th>
        <th style="width:9%">등록일</th>
        <th style="width:9%">등록시간</th>
    </tr>
    </thead>
    <tbody>
    <?foreach( $result as $rows ):?>
        <tr class="odd gradeX">
            <td style="mso-number-format:'\@'"><?=$rows['mbti']?></td>
            <td style="mso-number-format:'\@'"><?=$rows['q1']?></td>
            <td style="mso-number-format:'\@'"><?=$rows['q2']?></td>
            <td style="mso-number-format:'\@'"><?=$rows['q3']?></td>
            <td style="mso-number-format:'\@'"><?=$rows['q4']?></td>
            <td style="mso-number-format:'\@'"><?=$rows['q5']?></td>
            <td style="mso-number-format:'\@'"><?=$rows['q6']?></td>
            <td style="mso-number-format:'\@'"><?=$rows['q7']?></td>
            <td style="mso-number-format:'\@'"><?=$rows['q8']?></td>
            <td style="mso-number-format:'\@'"><?=$rows['q9']?></td>
            <td style="mso-number-format:'\@'"><?=$rows['q10']?></td>
            <td style="mso-number-format:'\@'"><?=$rows['q11']?></td>
            <td style="mso-number-format:'\@'"><?=$rows['q12']?></td>
            <td style="mso-number-format:'\@'"><?=date("Y-m-d", strtotime($rows['reg_date']));?></td>
            <td style="mso-number-format:'\@'"><?=date("H:i:s", strtotime($rows['reg_date']));?></td>
        </tr>
    <?endforeach?>
    </tbody>
</table>