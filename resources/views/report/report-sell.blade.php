@extends('layout.main')

@section('style')
    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('assets/examples/css/tables/basic.css')}}">

    <style>
        .icon-wrap > .icon {
            font-size: 65px;
        }

        .pointer {
            cursor: pointer;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: initial;
        }
        .table-striped tbody tr:nth-of-type(2n) {
            background-color: rgba(238,238,238,.3);
        }

        .form-group.row {
            margin-bottom: 0.5rem;
        }
    </style>
@endsection

@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">ยอดขาย</h1>
            <div class="breadcrumb">ย้อนหลัง 3 เดือน (1/1/2564 - 5/4/2564) </div>
        </div>
        <div class="page-content container-fluid">
            @include('report.modal')
            <div class="row">
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="white icon icon-circle md-shopping-cart bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">สรุปยอดขายรวม</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep">
                                <select class="form-control">
                                    <option value="1" selected>ยอดขายรวม</option>
                                    <option value="2">กำไรจากการขาย</option>
                                    <option value="3">กำไรรวม</option>
                                </select>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="text-center d-flex justify-content-center align-items-center" style="min-height:370px;">
                                    <h1 href="" class="blue-600 mt-4 mb-5">502,900</h1>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="white icon icon-circle md-chart bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">รายงาน</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep">
                                <select class="form-control">
                                    <option value="1">กำไรจากการขาย</option>
                                    <option value="2">กำไรรวม</option>
                                    <option value="3" selected>ยอดขายรวม</option>
                                    <option value="4">ยอดขายตามหมวดหมู่</option>
                                </select>
                            </div>
                        </div>
                        <div class="panel-body">
                            <img src="/assets/images/graph6.png" style="width: 100%">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="white icon icon-circle md-chart bg-blue-600" style="pointer-events: none;" aria-hidden="true"></i><span class="ml-10">ยอดขาย</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep d-flex">
                                <select class="form-control mr-2">
                                    <option value="1" selected>สินค้า</option>
                                    <option value="2">หมวดหมู่</option>
                                    <option value="11">สินค้าเป็นชุด</option>
                                    <option value="3">ช่องทางการขาย</option>
                                    <option value="4">ช่องทางการชำระเงิน</option>
                                    <option value="5">ลูกค้า</option>
                                    <option value="9">กลุ่มลูกค้า</option>
                                    <option value="8">ตัวแทนจำหน่าย</option>
                                    <option value="6">ผู้ใช้งาน</option>
                                    <option value="7">คลัง/สาขา</option>
                                </select>
                                <div class="input-search input-group-sm m-0" style="width: 100%;">
                                    <button type="submit" class="input-search-btn">
                                        <i class="icon md-search" aria-hidden="true"></i>
                                    </button>
                                    <input type="text" class="form-control" name="" placeholder="พิมพ์คำค้นหา...">
                                </div>
                            </div>
                        </div>
                        <div class="panel-body container-fluid p-0">
                            <div class="example-wrap">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0" data-role="content" data-plugin="selectable" data-row-selectable="true">
                                        <thead class="bg-grey-100">
                                        <tr>
                                            <th>รหัสสินค้า</th>
                                            <th>สินค้า</th>
                                            <th>จำนวน</th>
                                            <th class="text-right">ยอดขาย(บาท)</th>
                                            <th>ยอดขาย(%)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>P0001</td>
                                            <td>
                                                <div style="display: grid;">
                                                    <a href="">เสื้อ</a>
                                                    <small>หมวดหมู่: เครื่องแต่งกาย</small>
                                                </div>
                                            </td>
                                            <td>11</td>
                                            <td class="text-right">165,000</td>
                                            <td>
                                                <div class="progress progress-lg">
                                                    <div class="progress-bar progress-bar-primary" style="width: 73.33%;" role="progressbar">73.33%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>P0002</td>
                                            <td>
                                                <div style="display: grid;">
                                                    <a href="">เสื้อ</a>
                                                    <small>หมวดหมู่: เครื่องแต่งกาย</small>
                                                </div>
                                            </td>
                                            <td>10</td>
                                            <td class="text-right">60,000</td>
                                            <td>
                                                <div class="progress progress-lg">
                                                    <div class="progress-bar progress-bar-primary" style="width: 26.67%;" role="progressbar">26.67%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Page -->
    <script src="{{asset('global/js/Plugin/peity.js')}}"></script>
    <script src="{{asset('global/js/Plugin/asselectable.js')}}"></script>
    <script src="{{asset('global/js/Plugin/selectable.js')}}"></script>
    <script src="{{asset('global/js/Plugin/table.js')}}"></script>
@endsection