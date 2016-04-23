<h5 class="ui top attached header">
    เงื่อนไข 
</h5>
<div class="ui attached segment">
    <div class="ui stackable three column grid">
        <div class="column ui form">
            <div class="field">
                <label>เลือกวันเกิด</label>
                <select class="ui dropdown search fluid">
                    <?php foreach ($week as $index => $day) { ?>
                        <option value="<?= $index ?>"><?= $day['th'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="column ui form">
            <div class="field">
                <label>เลือกเดือนเกิด</label>
                <select class="ui dropdown search fluid">
                    <?php foreach ($month as $index => $mon) { ?>
                        <option value="<?= $index ?>"><?= $mon['th'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="column ui form">
            <div class="field">
                <label>เลือกปีเกิด</label>
                <select class="ui dropdown search fluid">
                    <?php foreach ($chineseYear as $index => $year) { ?>
                        <option value="<?= $index ?>"><?= $year['th'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="ui attached segment">
    <div class="" id="graphLife"></div>
</div>