@extends('layout.admin')
@section('content')
        <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../plugins/layui/css/layui.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/basic.css"/>
    <link rel="stylesheet" href="../css/main.css" />
    <script src="http://cdn.hcharts.cn/jquery/jquery-1.8.3.min.js"></script>
    <script src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>
    <script src="../js/indexchart.js" type="text/javascript" charset="utf-8"></script>
</head>

<body style="font-family: '微软雅黑';">
<div class="wraper admin-main">
    <h1 class="admin-main-header">下午好，陈璐璐</h1>
    <div class="main-view-list">
        <div class="row cardcontainner">
            <div class="card_items col-lg-2 col-sm-6 col-sm-12">
                <div class="card_href main-view-company">
                    <span>168</span>
                    <h3>入驻企业</h3>
                </div>
            </div>
            <div class="card_items col-lg-2 col-sm-6 col-sm-12">
                <div class="card_href main-view-work">
                    <span>168</span>
                    <h3>本周新入驻</h3>
                </div>
            </div>
            <div class="card_items col-lg-2 col-sm-6 col-sm-12">
                <div class="card_href main-view-fault">
                    <span>168</span>
                    <h3>园区报修</h3>
                </div>
            </div>
            <div class="card_items col-lg-2  col-sm-6 col-sm-12">
                <div class="card_href main-view-per">
                    <span>168</span>
                    <h3>入驻率</h3>
                </div>
            </div>
            <div class="card_items col-lg-2  col-sm-6 col-sm-12">
                <div class="card_href main-view-deadline">
                    <span>168</span>
                    <h3>本月到租企业</h3>
                </div>
            </div>
            <div class="card_items col-lg-2 col-sm-6 col-sm-12">
                <div class="card_href main-view-addcompany">
                    <span>168</span>
                    <h3>园区服务申请</h3>
                </div>
            </div>
        </div>
    </div>

    <!--第二列-->
    <div class="row viewlistcontent">
        <div class="list_items list_items_left col-lg-6 col-sm-12">
            <div class="list-items-con">
                <div class="con">
                    <div class="title clearfix">
                        <div class="title-inner">
                            <span class="titlename pull-left">收款审核</span>
                            <div class="pull-right r_info">
                                <i class="layui-icon">&#xe6b7;</i>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="row">
                            <table class="layui-table">
                                <thead>
                                <tr>
                                    <th>单据号</th>
                                    <th>入驻企业</th>
                                    <th>费用类型</th>
                                    <th>实收金额</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>贤心</td>
                                    <td>2016-11-29</td>
                                    <td>人生就像是一场修行</td>
                                    <td>人生就像是一场修行</td>
                                </tr>
                                <tr>
                                    <td>贤心</td>
                                    <td>2016-11-29</td>
                                    <td>人生就像是一场修行</td>
                                    <td>人生就像是一场修行</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="list_items list_items_left col-lg-6 col-sm-12">
            <div class="list-items-con">
                <div class="con">
                    <div class="title clearfix">
                        <div class="title-inner">
                            <span class="titlename pull-left">退款审核</span>
                            <div class="pull-right r_info">
                                <i class="layui-icon">&#xe6b7;</i>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="row">
                            <table class="layui-table">
                                <thead>
                                <tr>
                                    <th>单据号</th>
                                    <th>入驻企业</th>
                                    <th>费用类型</th>
                                    <th>实收金额</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>贤心</td>
                                    <td>2016-11-29</td>
                                    <td>人生就像是一场修行</td>
                                    <td>人生就像是一场修行</td>
                                </tr>
                                <tr>
                                    <td>贤心</td>
                                    <td>2016-11-29</td>
                                    <td>人生就像是一场修行</td>
                                    <td>人生就像是一场修行</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end----------------->
    <!--第三列-->
    <div class="row viewlistcontent">
        <div class="list_items list_items_left col-lg-6 col-sm-12">
            <div class="list-items-con">
                <div class="con">
                    <div class="title clearfix">
                        <div class="title-inner">
                            <span class="titlename pull-left">租金收入</span>
                            <div class="pull-right r_info select-year-box">
                                <select name="" id="" class="layui-select-group">
                                    <option value="">2015年</option>
                                    <option value="">2016年</option>
                                    <option value="">2017年</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div id="cash" style="width:100%;height:250px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="list_items list_items_left col-lg-6 col-sm-12">
            <div class="list-items-con">
                <div class="con">
                    <div class="title clearfix">
                        <div class="title-inner">
                            <span class="titlename pull-left">入驻企业经营行业分布情况</span>
                            <div class="pull-right r_info">
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="row date_view_list2">
                            <div class="flag_data col-lg-5 col-sm-12">
                                <div id="flagDay" style="width:100%;height:250px;"></div>
                            </div>
                            <div class="flag_data flag_r_data col-lg-7 col-sm-12">
                                <div class="row" >
                                    <div class="isDay col-lg-6 col-sm-6 col-sm-12">
                                        <div><span class="pull-left"><i class="arrow"></i>人工智能</span><span class="pull-right">30%</span></div>
                                    </div>
                                    <div class="isDay col-lg-6 col-sm-6 col-sm-12">
                                        <div><span class="pull-left"><i class="arrow arr_blue"></i>人工智能</span><span class="pull-right">30%</span></div>
                                    </div>
                                    <div class="isDay col-lg-6 col-sm-6 col-sm-12">
                                        <div><span class="pull-left"><i class="arrow arr_y"></i>人工智能</span><span class="pull-right">30%</span></div>
                                    </div>
                                    <div class="isDay col-lg-6 col-sm-6 col-sm-12">
                                        <div><span class="pull-left"><i class="arrow arr_b"></i>人工智能</span><span class="pull-right">30%</span></div>
                                    </div>
                                    <div class="isDay col-lg-6 col-sm-6 col-sm-12">
                                        <div><span class="pull-left"><i class="arrow arr_db"></i>人工智能</span><span class="pull-right">30%</span></div>
                                    </div>
                                    <div class="isDay col-lg-6 col-sm-6 col-sm-12">
                                        <div><span class="pull-left"><i class="arrow arr_qb"></i>人工智能</span><span class="pull-right">30%</span></div>
                                    </div>
                                    <div class="isDay col-lg-6 col-sm-6 col-sm-12">
                                        <div><span class="pull-left"><i class="arrow arr_z"></i>人工智能</span><span class="pull-right">30%</span></div>
                                    </div>
                                    <div class="isDay col-lg-6 col-sm-6 col-sm-12">
                                        <div><span class="pull-left"><i class="arrow arr_g"></i>人工智能</span><span class="pull-right">30%</span></div>
                                    </div>
                                    <div class="isDay col-lg-6 col-sm-6 col-sm-12">
                                        <div><span class="pull-left"><i class="arrow arr_gray"></i>其它</span><span class="pull-right">30%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end----------------->
</div>
</body>
</html>
@endsection