
<div class="ui grid stackable">
    <div class="three wide column">
        <div class="ui segment piled">
            <div class="ui list divided">
                <div class="item">
                    <select class="ui dropdown search fluid">
                        <option value="2559">2559</option>
                        <option value="2558">2558</option>
                        <option value="2557">2557</option>
                        <option value="2556">2556</option>
                        <option value="2555">2555</option>
                        <option value="2554">2554</option>
                        <option value="2553">2553</option>
                        <option value="2552">2552</option>
                    </select>
                </div>
                <div class="item"><i class="selected radio icon"></i>งวด วันที่  xxxx</div>
                <div class="item"><i class="selected radio icon"></i>งวด วันที่  xxxx</div>
                <div class="item"><i class="selected radio icon"></i>งวด วันที่  xxxx</div>
                <div class="item"><i class="selected radio icon"></i>งวด วันที่  xxxx</div>
                <div class="item"><i class="selected radio icon"></i>งวด วันที่  xxxx</div>
            </div>
        </div>
    </div>
    <div class="thirteen wide column">
        <h5 class="ui top attached header">
            เงื่อนไข 
        </h5>
        <div class="ui attached segment">
            <div class="ui stackable three column grid">
                <div class="column ui form">
                    <div class="field">
                        <label>เลือกเลขท้าย</label>
                        <div class="inline fields">
                            <div class="field">
                                <div class="ui checkbox">
                                    <input tabindex="0" name="fruit" type="checkbox" checked>
                                    <label>2 ตัว</label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui checkbox">
                                    <input tabindex="1" name="fruit" type="checkbox" checked>
                                    <label>3 ตัว</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column ui form">
                    <div class="field">
                        <label>เลือกวัน</label>
                        <select class="ui dropdown search fluid">
                            <?php foreach ($week as $index => $day) { ?>
                                <option value="<?= $index ?>"><?= $day['th'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="column ui form">
                    <div class="field">
                        <label>งวด</label>
                        <select class="ui dropdown search fluid">
                            <option value="0">ต้นเดือน (วันที่ 1)</option>
                            <option value="1">กลางเดือน (วันที่ 16)</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="ui top attached header">
            วิเคราะห์ทางสถิติ งวดวันที่  01/01/2016
        </h5>
        <div class="ui attached segment">
            <div class="ui grid stackable">
                <div class="two wide column center aligned">
                    <h1 class="ui label blue">1</h1>
                </div>
                <div class="seven wide column">
                    <h5 class="ui top attached header">
                        สถิติ
                    </h5>
                    <div class="ui attached segment">
                        จำนวนที่ออกทั้งหมด  500 ครั้ง
                        ออกติดต่อกันมากที่สุด  3 ครั้ง
                        ไม่ออกติดต่อกันมากที่สุด 5 ครั้ง
                    </div>
                    <h5 class="ui top attached header">
                        คาดการณ์
                    </h5>
                    <div class="ui attached segment">                       
                        ความเป็นไปได้ที่จะออก  70 %
                    </div>
                </div>
                <div class="seven wide column">
                    <h5 class="ui top attached header">
                        ปัจจุบัน (แสดงอย่างใดอย่างหนึ่ง)
                    </h5>
                    <div class="ui attached segment">
                        ออกติดต่อกันมาแล้ว 2 ครั้ง  
                        งวด  16/01/2016  , 01/02/2016
                        ไม่ออกติดต่อกันมาแล้ว 3  ครั้ง
                        ออกครั้งสุดท้ายเมื่อ งวด  16/01/2016
                    </div>
                </div>
            </div>
            <div class="ui divider"></div>
            <div class="ui grid stackable">
                <div class="two wide column center aligned">
                    <h1 class="ui label blue">2</h1>
                </div>
                <div class="seven wide column">
                    <h5 class="ui top attached header">
                        สถิติ
                    </h5>
                    <div class="ui attached segment">
                        จำนวนที่ออกทั้งหมด  500 ครั้ง
                        ออกติดต่อกันมากที่สุด  3 ครั้ง
                        ไม่ออกติดต่อกันมากที่สุด 5 ครั้ง
                    </div>
                    <h5 class="ui top attached header">
                        คาดการณ์
                    </h5>
                    <div class="ui attached segment">                       
                        ความเป็นไปได้ที่จะออก  70 %
                    </div>
                </div>
                <div class="seven wide column">
                    <h5 class="ui top attached header">
                        ปัจจุบัน (แสดงอย่างใดอย่างหนึ่ง)
                    </h5>
                    <div class="ui attached segment">
                        ออกติดต่อกันมาแล้ว 2 ครั้ง  
                        งวด  16/01/2016  , 01/02/2016
                        ไม่ออกติดต่อกันมาแล้ว 3  ครั้ง
                        ออกครั้งสุดท้ายเมื่อ งวด  16/01/2016
                    </div>
                </div>
            </div>
        </div>


        <div class="ui piled segment">
            <p>สรุปตัวเลขที่น่าสนใจ :  1 ,  8</p>
        </div>        
    </div>
</div>
<div class="ui divider"></div>
