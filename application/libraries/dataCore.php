<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DataCore {

    public function week() {
        return array(
            array('th' => 'วันอาทิตย์', 'eng' => 'Sunday'),
            array('th' => 'วันจันทร์', 'eng' => 'Monday'),
            array('th' => 'วันอังคาร', 'eng' => 'Tuesday'),
            array('th' => 'วันพุธ', 'eng' => 'Wensday'),
            array('th' => 'วันพฤหัสบดี', 'eng' => 'Thursday'),
            array('th' => 'วันศุกร์', 'eng' => 'Friday'),
            array('th' => 'วันเสาร์', 'eng' => 'Saturday'),
        );
    }

    public function month() {
        return array(
            array('th' => 'มกราคม', 'th-short' => 'ม.ค.', 'eng' => 'Janurary'),
            array('th' => 'กุมภาพันธ์', 'th-short' => 'ก.พ.', 'eng' => 'Feburary'),
            array('th' => 'มีนาคม', 'th-short' => 'มี.ค.', 'eng' => 'March'),
            array('th' => 'เมษายน', 'th-short' => 'เม.ย.', 'eng' => 'Apile'),
            array('th' => 'พฤษภาคม', 'th-short' => 'พ.ค.', 'eng' => 'Mey'),
            array('th' => 'มิถุนายน', 'th-short' => 'มิ.ย.', 'eng' => 'June'),
            array('th' => 'กรกฎาคม', 'th-short' => 'ก.ค.', 'eng' => 'July'),
            array('th' => 'สิงหาคม', 'th-short' => 'ส.ค.', 'eng' => 'August'),
            array('th' => 'กันยายน', 'th-short' => 'ก.ย.', 'eng' => 'September'),
            array('th' => 'ตุลาคม', 'th-short' => 'ต.ค.', 'eng' => 'October'),
            array('th' => 'พฤศจิกายน', 'th-short' => 'พ.ย.', 'eng' => 'November'),
            array('th' => 'ธันวาคม', 'th-short' => 'ธ.ค.', 'eng' => 'December'),
        );
    }

    public function chineseYear() {
        return array(
            array('th' => 'ชวด', 'eng' => 'The Year of the Rat '),
            array('th' => 'ฉลู', 'eng' => 'The Year of the Cow'),
            array('th' => 'ขาล', 'eng' => 'The Year of the Tiger'),
            array('th' => 'เถาะ', 'eng' => 'The Year of the Rabbit'),
            array('th' => 'มะโรง', 'eng' => 'The Year of the Great Snake'),
            array('th' => 'มะเส็ง', 'eng' => 'The Year of the Small Snake'),
            array('th' => 'มะเมีย', 'eng' => 'The Year of the Horse'),
            array('th' => 'มะแม', 'eng' => 'The Year of the Goat'),
            array('th' => 'วอก', 'eng' => 'The Year of the Monkey'),
            array('th' => 'ละกา', 'eng' => 'The Year of the Cock'),
            array('th' => 'จอ', 'eng' => 'The Year of the Dog'),
            array('th' => 'กุน', 'eng' => 'The Year of the Pig '),
        );
    }

}
