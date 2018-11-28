@extends('layouts.design')
@section('title','Báo cáo giao dịch')
@section('content')
<!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="dashboard">

                    <div class="portlet box green1 margin-page">
                        <div class="portlet-title">
                            <div class="caption">
                                <img src="images/ic3.gif" alt=""> <span>CÁC GIAO DỊCH BẤT THƯỜNG</span> </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                <a href="#portlet-config" data-toggle="modal" class="config" data-original-title=""
                                    title=""> </a>
                                <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                            </div>
                        </div>
                        <div class="portlet-body">

                            <div class="table-scrollable">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>CÁC LOẠI GIAO DỊCH</th>
                                            <th>THÔNG SỐ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Tổng số giao dịch thực hiện</td>
                                            <td class="number">{{count($trans)}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="portlet box green1 margin-page">
                        <div class="portlet-title">
                            <div class="caption">
                                <img src="images/ic3.gif" alt=""> <span>Số lượng giao dịch</span> </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                <a href="#portlet-config" data-toggle="modal" class="config" data-original-title=""
                                    title=""> </a>
                                <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                            </div>
                        </div>
                        <div class="portlet-body">

                            <div class="table-scrollable">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Năm</th>
                                            <th>Tháng</th>
                                            <th>Ngày</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            <select class="" name="nam">
                                              <option value="">Chọn năm</option>
                                              <?php for ($i=2017; $i <2021 ; $i++) { ?>
                                                <option value="{{$i}}">{{$i}}</option>
                                              <?php } ?>
                                            </select></td>
                                            <td><select class="" name="thang">
                                              <option value="">Chọn tháng</option>
                                              <?php for ($i=1; $i <13 ; $i++) { ?>
                                                <option value="{{$i}}">{{$i}}</option>
                                              <?php } ?>
                                            </select></td>
                                            <td><select class="" name="ngay">
                                              <option value="">Chọn ngày</option>
                                              <?php for ($i=1; $i <32 ; $i++) { ?>
                                                <option value="{{$i}}">{{$i}}</option>
                                              <?php } ?>
                                            </select></td>
                                            <td>5555</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="portlet box margin-page">
                      <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">LỊCH SỬ GIAO DỊCH</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>STT</th>
                              <th>ID GIAO DỊCH</th>
                              <th>LOẠI GIAO DỊCH</th>
                              <th>THỜI GIAN</th>
                              <th>data</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php $n=1; ?>
                              @foreach($trans as $tran)
                            <tr>
                              <td>{{$n}}</td>
                              <td>{{$tran->transactionId}}</td>
                              <td>{{substr($tran->transactionType,32)}}</td>
                              <td>{{$tran->transactionTimestamp}}</td>
                              <td></td>
                            </tr>
                            <?php $n+=1; ?>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>STT</th>
                              <th>ID GIAO DỊCH</th>
                              <th>LOẠI GIAO DỊCH</th>
                              <th>THỜI GIAN</th>
                            </tr>
                            </tfoot>
                          </table>

                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT -->
        @endsection
