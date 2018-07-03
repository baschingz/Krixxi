@extends('layout.main')
@section('import')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
@endsection
@section('body')
<div class="containerSearch" hidden id="search">
    <div class="panelSearch" >
        <div class="panel-headingSearch form-center">ค้นหา</div>
            <div class="panel-body">
                <div class="containerSearch">
                    <div class="form-center">
                        <div class="col-sm-12" >
                            <div class="form-group">
                                <div class="col-sm-6 form-center1">
                                <label class="col-sm-5" for="sel1">สถานที่:</label>
                                    <select  class="form-control col-sm-7" id="sel1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-center1">
                                <label class="col-sm-5" for="sel1">ราคา:</label>
                                    <select  class="form-control col-sm-7" id="sel1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>    
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-center">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6 form-center1">
                                <label class="col-sm-5" for="sel1">รูปแบบ:</label>
                                    <select  class="form-control col-sm-7" id="sel1">
                                        <option>เต็มวัน</option>
                                        <option>ครึ่งวัน</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-center1">
                                <label class="col-sm-5" for="sel1">วัน-เวลา:</label>
                                <input type="text" class="form-control col-sm-7" id="datePicker" readonly="readonly">
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>        
        <div class="panel-footerSearch form-center"  >
            <div>
                <button class="btnSearch" type="button">
                    <i class="glyphicon glyphicon-search"></i>
                    ค้นหา
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script src="{{asset('js/Search/SearchJS.js')}}"></script>
@endsection