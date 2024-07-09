<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

        <style>
            input[type="number"]::-webkit-outer-spin-button,
            input[type="number"]::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
            table.table-bordered tbody th, table.table-bordered tbody td {vertical-align: middle;}
            .update {margin-left: 10px;}
            .update img {margin-bottom: 2px;}
            .first_num {margin-left: 20px;}
            .update_num {width: 80px;}

            .search_table { width:100%; border: 1px solid #ededed;}
            .search_table tr { border: 1px solid #ededed;}
            .search_table th { background-color: #f4f4f5; width:15%; text-align:center;}
            .search_table tr td { border: 1px solid #ededed; padding: 7px 30px;}
            .search_table tr td input { width:80%; }
            .box .box-body .search_btn_wrap { width:100%; text-align: center; padding: 5px;}
            .box .box-body .search_btn_wrap a { width: 120px;}

            .admin_pager {text-align:center; margin-top:50px;}
            .admin_pager ul {font-size:0;}
            .admin_pager ul li {display:inline-block; vertical-align:top; margin:0 2.5px; width:35px; height:35px; border:1px solid #ccc;}
            .admin_pager ul li a {display:block; width:100%; height:100%; font-size:16px; color:#666666; font-weight:300; line-height:33px;}
            .admin_pager ul li.active {background:#337ab7; border:1px solid #000;}
            .admin_pager ul li.active a {color:#fff;}
            .admin_pager ul li.first a {line-height:31px;}
            .admin_pager ul li.prev {margin-right:10px;line-height:31px;}
            .admin_pager ul li.prev a {line-height:31px;}
            .admin_pager ul li.next {margin-left:10px;line-height:31px;}
            .admin_pager ul li.next a {line-height:31px;}
            .admin_pager ul li.last a {line-height:31px;}
        </style>
        <script>
            $(function () {
                $('#start_date, #end_date').datepicker({
                    autoclose: true
                });

                $('#main_list').DataTable({
                    'paging'        : false,
                    'lengthChange'  : false,
                    'searching'     : false,
                    'ordering'      : false,
                    'info'          : false,
                    'autoWidth'     : false,
                    'pageLength'    : 20,
                });

                $("#media").change(function(){
                    $("#part").empty();
                    var media   = $("#media option:selected").val();
                    var param   = {};
                    param.media = media;
                    $.ajax({
                        url     : "/admin/main/getPart",
                        type    : "POST",
                        dataType: "JSON",
                        data    : param,
                        success : function(result){
                            $("#part").append(result);
                        }
                    });
                });
            });

            function searchList(){
                var search_phone    = $.trim($("#search_phone").val());
                var check_phone     = /^01[0-9]{8,9}$/;
                var media           = $("#media option:selected").val();
                var part            = $("#part option:selected").val();
                var start_date      = $("#start_date").val();
                var end_date        = $("#end_date").val();

                if( start_date != "" || end_date != "" ){
                    if( start_date > end_date ){
                        alert("등록일 다시 확인하여주세요.");
                        return;
                    }
                }

                if( search_phone != "" ){
                    if( !check_phone.test(search_phone) ){
                        alert('핸드폰 번호를 정확히 입력하여 주세요.');
                    }else{
                        location.href = "/admin/main?media="+media+"&part="+part+"&search_phone="+search_phone+"&start_date="+start_date+"&end_date="+end_date;
                    }
                }else{
                    location.href = "/admin/main?media="+media+"&part="+part+"&start_date="+start_date+"&end_date="+end_date;
                }
            }
        </script>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Event
                <small>- List</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header" id="order_btn">
                            <button type="button" onclick="location.href='/admin/main/eventXls?search_phone=<?=$search_phone?>&start_date=<?=$start_date?>&end_date=<?=$end_date?>';" class="btn btn-block btn-success" style="width:100px; float:right;">엑셀 저장</button>
                        </div>
                        <div class="box-body" style="overflow-x: auto;">
                            <table class="search_table">
                                <tr>
                                    <th>매체명</th>
                                    <td>
                                        <select id="media" class="form-control" style="width:270px;">
                                            <option value="all">전체</option>
                                        </select>
                                    </td>
                                    <th>등록일</th>
                                    <td>
                                        <div class="input-group date" style="width:200px; float:left;">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="start_date" style="width:100%" value="<?=$start_date?>">
                                        </div>
                                        <span style="float:left; line-height:30px;">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                        <div class="input-group date" style="width:200px;">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="end_date" style="width:100%" value="<?=$end_date?>">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>광고명</th>
                                    <td>
                                        <select id="part" class="form-control" style="width:270px;">
                                            <option value="">전체</option>
                                        </select>
                                    </td>
                                    <th>핸드폰 번호</th>
                                    <td>
                                        <input type="text" maxlength="11" class="form-control" id="search_phone" value="<?=$search_phone?>" style="width:200px;"/>
                                    </td>
                                </tr>
                            </table>
                            <div class="search_btn_wrap">
                                <a href="javascript:searchList();" class="btn btn-default">검색</a>
                            </div>
                        </div>
                        <div class="box-body" style="overflow-x: auto;">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    사전예약 응모자 검색: <?=$tot_row?> 명 (총 : <?=$total_cnt?>명)
                                </div>
                            </div>
                            <table id="main_list" class="table table-bordered table-hover" style="text-align:center;">
                                <thead>
                                <tr>
                                    <th style="width:6%; text-align:center;">No</th>
                                    <th style="width:8%; text-align:center;">디바이스</th>
                                    <th style="width:8%; text-align:center;">OS</th>
                                    <th style="width:18%; text-align:center;">핸드폰 번호</th>
                                    <th style="width:18%; text-align:center;">광고성 정보 수신 동의</th>
                                    <th style="width:9%; text-align:center;">등록일</th>
                                    <th style="width:9%; text-align:center;">등록시간</th>
                                </tr>
                                </thead>
                                <tbody id="sort_list">
                                <?php foreach( $result as $rows ): ?>
                                    <tr>
                                        <td><?=$cur_num;?></td>
                                        <td><?=($rows['device'] == "P" ? "Pc" : "Mobile")?></td>
                                        <td><?=($rows['app'] == "google" ? "Android" : "iOS")?></td>
                                        <td>
                                            <?php if( !empty($rows['phone']) && mb_strlen($rows['phone'], 'UTF-8') > 10 ): ?>
                                                <?=substr($rows['phone'], 0, 3) . "-". substr($rows['phone'], 3, 4) . "-". substr($rows['phone'], 7, 4)?>
                                            <?php elseif( !empty($rows['phone']) && mb_strlen($rows['phone'], 'UTF-8') == 10 ): ?>
                                                <?=substr($rows['phone'], 0, 3) . "-". substr($rows['phone'], 3, 3) . "-". substr($rows['phone'], 6, 4)?>
                                            <?php else: ?>
                                                <?=$rows['phone']?>
                                            <?php endif; ?>
                                        </td>
                                        <td><?=$rows['ad_agreement'] == 1 ? '동의' : '미동의' ?></td>
                                        <td><?=date("Y-m-d", strtotime($rows['reg_date']));?></td>
                                        <td><?=date("H:i:s", strtotime($rows['reg_date']));?></td>
                                    </tr>
                                    <?php $cur_num --; ?>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class="admin_pager">
                                <?=$paging?>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>

</div>