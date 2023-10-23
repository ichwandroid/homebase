<form action="insertlomba.php" name="formName" id="altForm" method="post" enctype="multipart/form-data">
    <div class="modal-body">
        <div class="modal-body p-3">
            <div class="input-group">
                <input type="text" id="nis" name="nis" placeholder="Search..." aria-label="First name" class="form-control" autocomplete="off">
                <span class="input-group-text"><i class="bi bi-person-vcard"></i></span>
            </div>
            <ol class="list-group list-group-numbered" id="resultlist"></ol>
            <small><i>Silahkan ketik Nama Lengkap / Nama Panggilan / Kelas</i></small>
        </div>
        <div class="modal-body p-3 pt-0">
            <ul class="list-group">
                <li class="list-group-item list-group-item-action">
                    <input class="form-check-input me-1" type="checkbox" value='<span class="badge d-flex align-items-center p-1 pe-2 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-pill">Dijemput Orang Tua</span>' id="radio1" name="status" onclick="if(this.checked) {document.formName.radio2.checked=false;document.formName.radio3.checked=false;myFunction();}">
                    <label class="form-check-label stretched-link" for="radio1">Dijemput Orang Tua</label>
                </li>
                <li class="list-group-item list-group-item-action">
                    <input class="form-check-input me-1" type="checkbox" value='<span class="badge d-flex align-items-center p-1 pe-2 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-pill">Ditunggu Team Antar Jemput</span>' id="radio2" name="status" onclick="if(this.checked) {document.formName.radio1.checked=false;document.formName.radio3.checked=false;myFunction();}">
                    <label class="form-check-label stretched-link" for="radio2">Ditunggu Team Antar Jemput</label>
                </li>
                <li class="list-group-item list-group-item-action">
                    <input class="form-check-input me-1" type="checkbox" value='<span class="badge d-flex align-items-center p-1 pe-2 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-pill">Dijemput Ojek Online</span>' id="radio3" name="status" onclick="if(this.checked) {document.formName.radio2.checked=false;document.formName.radio1.checked=false;myFunction();}">
                    <label class="form-check-label stretched-link" for="radio3">Dijemput Ojek Online</label>
                </li>
            </ul>
        </div>
        <div id="formLomba" style="display: none;">
            <div class="modal-body p-3">
                <div class="input-group">
                    <select class="form-select" aria-label="Default select example" id="lomba" name="lomba">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="modal-body p-3 pt-0">
                <div class="input-group">
                    <select class="form-select" aria-label="Default select example" id="juara" name="juara">
                        <option value=""></option>
                    </select>
                </div>
            </div>
        </div>
        <div id="formUpacara">
            <div class="modal-body p-3">
                <div class="input-group">
                    <select class="form-select" aria-label="Default select example" id="tugas" name="tugas">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="modal-body p-3 pt-0">
                <div class="input-group">
                    <select class="form-select" aria-label="Default select example" id="poin" name="poin">
                        <option value=""></option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <input type="submit" value="Simpan" class="btn btn-primary"></input>
    </div>
</form>