@extends('layouts.app')
@section('title','PSU Email')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8" style="margin-left:200px">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="panel panel-default">
                            <h4 class="panel-heading" style="margin:15px;">PSU Email</h4>
                            <form style="margin:15px;" method="post" action="/sendData">
                                    {{csrf_field()}}
                                <div class="form-group">
                                <label for="nameofReceiver">ถึง</label>
                                <input type="text" class="form-control"name="nameofReceiver" placeholder="ชื่อผู้รับ">
                                </div>
                                <div class="form-group">
                                <label for="emailofReceiver">อีเมลล์</label>
                                <input type="email" class="form-control" name="emailofReceiver" placeholder="อีเมลล์ผู้รับ">
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control" name="topic_message" placeholder="หัวข้อเรื่อง">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="10"  name="textArea" placeholder="ข้อความ"></textarea>
                                </div>
                                {{-- <div class="form-group">
                                <label for="exampleInputFile">อัปโหลดไฟล์ภาพ</label>
                                <input type="file" name="file_picture"id="exampleInputFile"> --}}
                                <p class="help-block">ตรวจสอบข้อมูลก่อนส่ง</p>
                                {{-- </div> --}}
                                <div style="text-align:center">
                                        <p>@ CoE#4 Riduwan Soolaeh 5835512044</p>
                                </div>
                                <button type="submit" class="btn btn-default" >ส่ง</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>

@endsection



