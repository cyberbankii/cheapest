<!-- Modal -->
<div class="modal fade" id="inputForm">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/store" method="post" accept-charset="utf-8" class="form-horizontal" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">เพิ่มรายละเอียดโปรโมชัน</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="input" class="col-sm-2 control-label">หัวข้อ</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" id="title" class="form-control" required="required" placeholder="อธิบายให้เข้าใจภายใน 50 ตัวอักษร">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textarea" class="col-sm-2 control-label">รายละเอียด</label>
                        <div class="col-sm-10">
                            <textarea name="body" id="body" class="form-control" rows="3" required="required" placeholder="อธิบายขยายความเพิ่มเติมเกี่ยวกับโปรโมชัน"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textarea" class="col-sm-2 control-label">กลุ่ม</label>
                        <div class="col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="tags[]" value="1">Fashion
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="tags[]" value="2">IT
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="tags[]" value="3">Travel
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="tags[]" value="4">Transpot
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="tags[]" value="5">Food
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="tags[]" value="6">Other
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputStart" class="col-sm-2 control-label">เริ่ม</label>
                        <div class="col-sm-4">
                            <input type="date" name="start_at" id="start" class="form-control" required="required">
                        </div>
                        <label for="inputEnd" class="col-sm-2 control-label">สิ้นสุด</label>
                        <div class="col-sm-4">
                            <input type="date" name="end_at" id="end" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">เลือกไฟล์</label>
                        <div class="col-sm-10">
                            <input id="images" name="images[]" type="file" multiple>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPlace" class="col-sm-2 control-label">สถานที่</label>
                        <div class="col-sm-10">
                            <input type="place" name="place" id="place" class="form-control" required="required" placeholder="สถานที่จัดโปรโมชัน">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary">เพิ่ม</button>
                </div>
            </form>
        </div>
    </div>
</div>