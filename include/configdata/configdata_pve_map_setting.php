<?php
namespace configdata;
/**
* gen by zeus.php
*/
class configdata_pve_map_setting {
const k_stageid = "stageid";
const k_stagetype = "stagetype";
const k_mapid = "mapid";
const k_orderid = "orderid";
const k_level = "level";
const k_needopenstageid = "needopenstageid";
const k_nextstageid = "nextstageid";
const k_attackdailycount = "attackdailycount";
const k_ticket = "ticket";
const k_awarditem = "awarditem";
private static $_data = NULL;
public static function data() {
if (is_null ( self::$_data )) {
self::$_data = [
['stageid'=>'1','stagetype'=>'1','mapid'=>'1','orderid'=>'1','level'=>'0','nextstageid'=>'2','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'1'],
['stageid'=>'2','stagetype'=>'3','mapid'=>'1','orderid'=>'2','level'=>'0','needopenstageid'=>'1','nextstageid'=>'3','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'3','stagetype'=>'1','mapid'=>'1','orderid'=>'3','level'=>'0','needopenstageid'=>'2','nextstageid'=>'4','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'1'],
['stageid'=>'4','stagetype'=>'4','mapid'=>'1','orderid'=>'4','level'=>'0','needopenstageid'=>'3','nextstageid'=>'5','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'5','stagetype'=>'1','mapid'=>'1','orderid'=>'5','level'=>'0','needopenstageid'=>'4','nextstageid'=>'6','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'1'],
['stageid'=>'6','stagetype'=>'3','mapid'=>'1','orderid'=>'6','level'=>'0','needopenstageid'=>'5','nextstageid'=>'7','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'7','stagetype'=>'1','mapid'=>'1','orderid'=>'7','level'=>'0','needopenstageid'=>'6','nextstageid'=>'8','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'1'],
['stageid'=>'8','stagetype'=>'4','mapid'=>'1','orderid'=>'8','level'=>'0','needopenstageid'=>'7','nextstageid'=>'9','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'9','stagetype'=>'2','mapid'=>'1','orderid'=>'9','level'=>'0','needopenstageid'=>'8','nextstageid'=>'10','attackdailycount'=>'0','ticket'=>'4'],
['stageid'=>'10','stagetype'=>'4','mapid'=>'1','orderid'=>'10','level'=>'0','needopenstageid'=>'9','nextstageid'=>'101','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'10001','stagetype'=>'1','mapid'=>'1','orderid'=>'1','level'=>'1','nextstageid'=>'10002','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'1'],
['stageid'=>'10002','stagetype'=>'3','mapid'=>'1','orderid'=>'2','level'=>'1','needopenstageid'=>'10001','nextstageid'=>'10003','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10003','stagetype'=>'1','mapid'=>'1','orderid'=>'3','level'=>'1','needopenstageid'=>'10002','nextstageid'=>'10004','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'1'],
['stageid'=>'10004','stagetype'=>'4','mapid'=>'1','orderid'=>'4','level'=>'1','needopenstageid'=>'10003','nextstageid'=>'10005','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10005','stagetype'=>'1','mapid'=>'1','orderid'=>'5','level'=>'1','needopenstageid'=>'10004','nextstageid'=>'10006','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'1'],
['stageid'=>'10006','stagetype'=>'3','mapid'=>'1','orderid'=>'6','level'=>'1','needopenstageid'=>'10005','nextstageid'=>'10007','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10007','stagetype'=>'1','mapid'=>'1','orderid'=>'7','level'=>'1','needopenstageid'=>'10006','nextstageid'=>'10008','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'1'],
['stageid'=>'10008','stagetype'=>'4','mapid'=>'1','orderid'=>'8','level'=>'1','needopenstageid'=>'10007','nextstageid'=>'10009','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10009','stagetype'=>'2','mapid'=>'1','orderid'=>'9','level'=>'1','needopenstageid'=>'10008','nextstageid'=>'10010','attackdailycount'=>'0','ticket'=>'8'],
['stageid'=>'10010','stagetype'=>'4','mapid'=>'1','orderid'=>'10','level'=>'1','needopenstageid'=>'10009','nextstageid'=>'10011','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'101','stagetype'=>'1','mapid'=>'2','orderid'=>'1','level'=>'0','needopenstageid'=>'10','nextstageid'=>'102','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'2'],
['stageid'=>'102','stagetype'=>'3','mapid'=>'2','orderid'=>'2','level'=>'0','needopenstageid'=>'101','nextstageid'=>'103','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'103','stagetype'=>'1','mapid'=>'2','orderid'=>'3','level'=>'0','needopenstageid'=>'102','nextstageid'=>'104','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'2'],
['stageid'=>'104','stagetype'=>'4','mapid'=>'2','orderid'=>'4','level'=>'0','needopenstageid'=>'103','nextstageid'=>'105','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'105','stagetype'=>'1','mapid'=>'2','orderid'=>'5','level'=>'0','needopenstageid'=>'104','nextstageid'=>'106','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'2'],
['stageid'=>'106','stagetype'=>'3','mapid'=>'2','orderid'=>'6','level'=>'0','needopenstageid'=>'105','nextstageid'=>'107','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'107','stagetype'=>'1','mapid'=>'2','orderid'=>'7','level'=>'0','needopenstageid'=>'106','nextstageid'=>'108','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'2'],
['stageid'=>'108','stagetype'=>'4','mapid'=>'2','orderid'=>'8','level'=>'0','needopenstageid'=>'107','nextstageid'=>'109','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'109','stagetype'=>'2','mapid'=>'2','orderid'=>'9','level'=>'0','needopenstageid'=>'108','nextstageid'=>'110','attackdailycount'=>'0','ticket'=>'4'],
['stageid'=>'110','stagetype'=>'4','mapid'=>'2','orderid'=>'10','level'=>'0','needopenstageid'=>'109','nextstageid'=>'201','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'10011','stagetype'=>'1','mapid'=>'2','orderid'=>'1','level'=>'1','needopenstageid'=>'10010','nextstageid'=>'10012','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'2'],
['stageid'=>'10012','stagetype'=>'3','mapid'=>'2','orderid'=>'2','level'=>'1','needopenstageid'=>'10011','nextstageid'=>'10013','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10013','stagetype'=>'1','mapid'=>'2','orderid'=>'3','level'=>'1','needopenstageid'=>'10012','nextstageid'=>'10014','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'2'],
['stageid'=>'10014','stagetype'=>'4','mapid'=>'2','orderid'=>'4','level'=>'1','needopenstageid'=>'10013','nextstageid'=>'10015','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10015','stagetype'=>'1','mapid'=>'2','orderid'=>'5','level'=>'1','needopenstageid'=>'10014','nextstageid'=>'10016','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'2'],
['stageid'=>'10016','stagetype'=>'3','mapid'=>'2','orderid'=>'6','level'=>'1','needopenstageid'=>'10015','nextstageid'=>'10017','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10017','stagetype'=>'1','mapid'=>'2','orderid'=>'7','level'=>'1','needopenstageid'=>'10016','nextstageid'=>'10018','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'2'],
['stageid'=>'10018','stagetype'=>'4','mapid'=>'2','orderid'=>'8','level'=>'1','needopenstageid'=>'10017','nextstageid'=>'10019','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10019','stagetype'=>'2','mapid'=>'2','orderid'=>'9','level'=>'1','needopenstageid'=>'10018','nextstageid'=>'10020','attackdailycount'=>'0','ticket'=>'8'],
['stageid'=>'10020','stagetype'=>'4','mapid'=>'2','orderid'=>'10','level'=>'1','needopenstageid'=>'10019','nextstageid'=>'10021','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'201','stagetype'=>'1','mapid'=>'3','orderid'=>'1','level'=>'0','needopenstageid'=>'110','nextstageid'=>'202','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'3'],
['stageid'=>'202','stagetype'=>'3','mapid'=>'3','orderid'=>'2','level'=>'0','needopenstageid'=>'201','nextstageid'=>'203','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'203','stagetype'=>'1','mapid'=>'3','orderid'=>'3','level'=>'0','needopenstageid'=>'202','nextstageid'=>'204','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'3'],
['stageid'=>'204','stagetype'=>'4','mapid'=>'3','orderid'=>'4','level'=>'0','needopenstageid'=>'203','nextstageid'=>'205','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'205','stagetype'=>'1','mapid'=>'3','orderid'=>'5','level'=>'0','needopenstageid'=>'204','nextstageid'=>'206','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'3'],
['stageid'=>'206','stagetype'=>'3','mapid'=>'3','orderid'=>'6','level'=>'0','needopenstageid'=>'205','nextstageid'=>'207','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'207','stagetype'=>'1','mapid'=>'3','orderid'=>'7','level'=>'0','needopenstageid'=>'206','nextstageid'=>'208','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'3'],
['stageid'=>'208','stagetype'=>'4','mapid'=>'3','orderid'=>'8','level'=>'0','needopenstageid'=>'207','nextstageid'=>'209','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'209','stagetype'=>'2','mapid'=>'3','orderid'=>'9','level'=>'0','needopenstageid'=>'208','nextstageid'=>'210','attackdailycount'=>'0','ticket'=>'4'],
['stageid'=>'210','stagetype'=>'4','mapid'=>'3','orderid'=>'10','level'=>'0','needopenstageid'=>'209','nextstageid'=>'301','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'10021','stagetype'=>'1','mapid'=>'3','orderid'=>'1','level'=>'1','needopenstageid'=>'10020','nextstageid'=>'10022','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'3'],
['stageid'=>'10022','stagetype'=>'3','mapid'=>'3','orderid'=>'2','level'=>'1','needopenstageid'=>'10021','nextstageid'=>'10023','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10023','stagetype'=>'1','mapid'=>'3','orderid'=>'3','level'=>'1','needopenstageid'=>'10022','nextstageid'=>'10024','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'3'],
['stageid'=>'10024','stagetype'=>'4','mapid'=>'3','orderid'=>'4','level'=>'1','needopenstageid'=>'10023','nextstageid'=>'10025','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10025','stagetype'=>'1','mapid'=>'3','orderid'=>'5','level'=>'1','needopenstageid'=>'10024','nextstageid'=>'10026','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'3'],
['stageid'=>'10026','stagetype'=>'3','mapid'=>'3','orderid'=>'6','level'=>'1','needopenstageid'=>'10025','nextstageid'=>'10027','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10027','stagetype'=>'1','mapid'=>'3','orderid'=>'7','level'=>'1','needopenstageid'=>'10026','nextstageid'=>'10028','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'3'],
['stageid'=>'10028','stagetype'=>'4','mapid'=>'3','orderid'=>'8','level'=>'1','needopenstageid'=>'10027','nextstageid'=>'10029','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10029','stagetype'=>'2','mapid'=>'3','orderid'=>'9','level'=>'1','needopenstageid'=>'10028','nextstageid'=>'10030','attackdailycount'=>'0','ticket'=>'8'],
['stageid'=>'10030','stagetype'=>'4','mapid'=>'3','orderid'=>'10','level'=>'1','needopenstageid'=>'10029','nextstageid'=>'10031','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'301','stagetype'=>'1','mapid'=>'4','orderid'=>'1','level'=>'0','needopenstageid'=>'210','nextstageid'=>'302','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'4'],
['stageid'=>'302','stagetype'=>'3','mapid'=>'4','orderid'=>'2','level'=>'0','needopenstageid'=>'301','nextstageid'=>'303','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'303','stagetype'=>'1','mapid'=>'4','orderid'=>'3','level'=>'0','needopenstageid'=>'302','nextstageid'=>'304','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'4'],
['stageid'=>'304','stagetype'=>'4','mapid'=>'4','orderid'=>'4','level'=>'0','needopenstageid'=>'303','nextstageid'=>'305','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'305','stagetype'=>'1','mapid'=>'4','orderid'=>'5','level'=>'0','needopenstageid'=>'304','nextstageid'=>'306','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'4'],
['stageid'=>'306','stagetype'=>'3','mapid'=>'4','orderid'=>'6','level'=>'0','needopenstageid'=>'305','nextstageid'=>'307','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'307','stagetype'=>'1','mapid'=>'4','orderid'=>'7','level'=>'0','needopenstageid'=>'306','nextstageid'=>'308','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'4'],
['stageid'=>'308','stagetype'=>'4','mapid'=>'4','orderid'=>'8','level'=>'0','needopenstageid'=>'307','nextstageid'=>'309','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'309','stagetype'=>'2','mapid'=>'4','orderid'=>'9','level'=>'0','needopenstageid'=>'308','nextstageid'=>'310','attackdailycount'=>'0','ticket'=>'4'],
['stageid'=>'310','stagetype'=>'4','mapid'=>'4','orderid'=>'10','level'=>'0','needopenstageid'=>'309','nextstageid'=>'401','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'10031','stagetype'=>'1','mapid'=>'4','orderid'=>'1','level'=>'1','needopenstageid'=>'10030','nextstageid'=>'10032','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'4'],
['stageid'=>'10032','stagetype'=>'3','mapid'=>'4','orderid'=>'2','level'=>'1','needopenstageid'=>'10031','nextstageid'=>'10033','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10033','stagetype'=>'1','mapid'=>'4','orderid'=>'3','level'=>'1','needopenstageid'=>'10032','nextstageid'=>'10034','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'4'],
['stageid'=>'10034','stagetype'=>'4','mapid'=>'4','orderid'=>'4','level'=>'1','needopenstageid'=>'10033','nextstageid'=>'10035','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10035','stagetype'=>'1','mapid'=>'4','orderid'=>'5','level'=>'1','needopenstageid'=>'10034','nextstageid'=>'10036','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'4'],
['stageid'=>'10036','stagetype'=>'3','mapid'=>'4','orderid'=>'6','level'=>'1','needopenstageid'=>'10035','nextstageid'=>'10037','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10037','stagetype'=>'1','mapid'=>'4','orderid'=>'7','level'=>'1','needopenstageid'=>'10036','nextstageid'=>'10038','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'4'],
['stageid'=>'10038','stagetype'=>'4','mapid'=>'4','orderid'=>'8','level'=>'1','needopenstageid'=>'10037','nextstageid'=>'10039','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10039','stagetype'=>'2','mapid'=>'4','orderid'=>'9','level'=>'1','needopenstageid'=>'10038','nextstageid'=>'10040','attackdailycount'=>'0','ticket'=>'8'],
['stageid'=>'10040','stagetype'=>'4','mapid'=>'4','orderid'=>'10','level'=>'1','needopenstageid'=>'10039','nextstageid'=>'10041','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'401','stagetype'=>'1','mapid'=>'5','orderid'=>'1','level'=>'0','needopenstageid'=>'310','nextstageid'=>'402','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'5'],
['stageid'=>'402','stagetype'=>'3','mapid'=>'5','orderid'=>'2','level'=>'0','needopenstageid'=>'401','nextstageid'=>'403','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'403','stagetype'=>'1','mapid'=>'5','orderid'=>'3','level'=>'0','needopenstageid'=>'402','nextstageid'=>'404','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'5'],
['stageid'=>'404','stagetype'=>'4','mapid'=>'5','orderid'=>'4','level'=>'0','needopenstageid'=>'403','nextstageid'=>'405','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'405','stagetype'=>'1','mapid'=>'5','orderid'=>'5','level'=>'0','needopenstageid'=>'404','nextstageid'=>'406','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'5'],
['stageid'=>'406','stagetype'=>'3','mapid'=>'5','orderid'=>'6','level'=>'0','needopenstageid'=>'405','nextstageid'=>'407','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'407','stagetype'=>'1','mapid'=>'5','orderid'=>'7','level'=>'0','needopenstageid'=>'406','nextstageid'=>'408','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'5'],
['stageid'=>'408','stagetype'=>'4','mapid'=>'5','orderid'=>'8','level'=>'0','needopenstageid'=>'407','nextstageid'=>'409','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'409','stagetype'=>'2','mapid'=>'5','orderid'=>'9','level'=>'0','needopenstageid'=>'408','nextstageid'=>'410','attackdailycount'=>'0','ticket'=>'4'],
['stageid'=>'410','stagetype'=>'4','mapid'=>'5','orderid'=>'10','level'=>'0','needopenstageid'=>'409','nextstageid'=>'501','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'10041','stagetype'=>'1','mapid'=>'5','orderid'=>'1','level'=>'1','needopenstageid'=>'10040','nextstageid'=>'10042','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'5'],
['stageid'=>'10042','stagetype'=>'3','mapid'=>'5','orderid'=>'2','level'=>'1','needopenstageid'=>'10041','nextstageid'=>'10043','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10043','stagetype'=>'1','mapid'=>'5','orderid'=>'3','level'=>'1','needopenstageid'=>'10042','nextstageid'=>'10044','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'5'],
['stageid'=>'10044','stagetype'=>'4','mapid'=>'5','orderid'=>'4','level'=>'1','needopenstageid'=>'10043','nextstageid'=>'10045','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10045','stagetype'=>'1','mapid'=>'5','orderid'=>'5','level'=>'1','needopenstageid'=>'10044','nextstageid'=>'10046','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'5'],
['stageid'=>'10046','stagetype'=>'3','mapid'=>'5','orderid'=>'6','level'=>'1','needopenstageid'=>'10045','nextstageid'=>'10047','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10047','stagetype'=>'1','mapid'=>'5','orderid'=>'7','level'=>'1','needopenstageid'=>'10046','nextstageid'=>'10048','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'5'],
['stageid'=>'10048','stagetype'=>'4','mapid'=>'5','orderid'=>'8','level'=>'1','needopenstageid'=>'10047','nextstageid'=>'10049','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10049','stagetype'=>'2','mapid'=>'5','orderid'=>'9','level'=>'1','needopenstageid'=>'10048','nextstageid'=>'10050','attackdailycount'=>'0','ticket'=>'8'],
['stageid'=>'10050','stagetype'=>'4','mapid'=>'5','orderid'=>'10','level'=>'1','needopenstageid'=>'10049','nextstageid'=>'10051','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'501','stagetype'=>'1','mapid'=>'6','orderid'=>'1','level'=>'0','needopenstageid'=>'410','nextstageid'=>'502','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'6'],
['stageid'=>'502','stagetype'=>'3','mapid'=>'6','orderid'=>'2','level'=>'0','needopenstageid'=>'501','nextstageid'=>'503','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'503','stagetype'=>'1','mapid'=>'6','orderid'=>'3','level'=>'0','needopenstageid'=>'502','nextstageid'=>'504','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'6'],
['stageid'=>'504','stagetype'=>'4','mapid'=>'6','orderid'=>'4','level'=>'0','needopenstageid'=>'503','nextstageid'=>'505','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'505','stagetype'=>'1','mapid'=>'6','orderid'=>'5','level'=>'0','needopenstageid'=>'504','nextstageid'=>'506','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'6'],
['stageid'=>'506','stagetype'=>'3','mapid'=>'6','orderid'=>'6','level'=>'0','needopenstageid'=>'505','nextstageid'=>'507','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'507','stagetype'=>'1','mapid'=>'6','orderid'=>'7','level'=>'0','needopenstageid'=>'506','nextstageid'=>'508','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'6'],
['stageid'=>'508','stagetype'=>'4','mapid'=>'6','orderid'=>'8','level'=>'0','needopenstageid'=>'507','nextstageid'=>'509','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'509','stagetype'=>'2','mapid'=>'6','orderid'=>'9','level'=>'0','needopenstageid'=>'508','nextstageid'=>'510','attackdailycount'=>'0','ticket'=>'4'],
['stageid'=>'510','stagetype'=>'4','mapid'=>'6','orderid'=>'10','level'=>'0','needopenstageid'=>'509','nextstageid'=>'601','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'10051','stagetype'=>'1','mapid'=>'6','orderid'=>'1','level'=>'1','needopenstageid'=>'10050','nextstageid'=>'10052','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'6'],
['stageid'=>'10052','stagetype'=>'3','mapid'=>'6','orderid'=>'2','level'=>'1','needopenstageid'=>'10051','nextstageid'=>'10053','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10053','stagetype'=>'1','mapid'=>'6','orderid'=>'3','level'=>'1','needopenstageid'=>'10052','nextstageid'=>'10054','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'6'],
['stageid'=>'10054','stagetype'=>'4','mapid'=>'6','orderid'=>'4','level'=>'1','needopenstageid'=>'10053','nextstageid'=>'10055','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10055','stagetype'=>'1','mapid'=>'6','orderid'=>'5','level'=>'1','needopenstageid'=>'10054','nextstageid'=>'10056','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'6'],
['stageid'=>'10056','stagetype'=>'3','mapid'=>'6','orderid'=>'6','level'=>'1','needopenstageid'=>'10055','nextstageid'=>'10057','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10057','stagetype'=>'1','mapid'=>'6','orderid'=>'7','level'=>'1','needopenstageid'=>'10056','nextstageid'=>'10058','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'6'],
['stageid'=>'10058','stagetype'=>'4','mapid'=>'6','orderid'=>'8','level'=>'1','needopenstageid'=>'10057','nextstageid'=>'10059','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10059','stagetype'=>'2','mapid'=>'6','orderid'=>'9','level'=>'1','needopenstageid'=>'10058','nextstageid'=>'10060','attackdailycount'=>'0','ticket'=>'8'],
['stageid'=>'10060','stagetype'=>'4','mapid'=>'6','orderid'=>'10','level'=>'1','needopenstageid'=>'10059','nextstageid'=>'10061','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'601','stagetype'=>'1','mapid'=>'7','orderid'=>'1','level'=>'0','needopenstageid'=>'510','nextstageid'=>'602','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'7'],
['stageid'=>'602','stagetype'=>'3','mapid'=>'7','orderid'=>'2','level'=>'0','needopenstageid'=>'601','nextstageid'=>'603','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'603','stagetype'=>'1','mapid'=>'7','orderid'=>'3','level'=>'0','needopenstageid'=>'602','nextstageid'=>'604','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'7'],
['stageid'=>'604','stagetype'=>'4','mapid'=>'7','orderid'=>'4','level'=>'0','needopenstageid'=>'603','nextstageid'=>'605','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'605','stagetype'=>'1','mapid'=>'7','orderid'=>'5','level'=>'0','needopenstageid'=>'604','nextstageid'=>'606','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'7'],
['stageid'=>'606','stagetype'=>'3','mapid'=>'7','orderid'=>'6','level'=>'0','needopenstageid'=>'605','nextstageid'=>'607','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'607','stagetype'=>'1','mapid'=>'7','orderid'=>'7','level'=>'0','needopenstageid'=>'606','nextstageid'=>'608','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'7'],
['stageid'=>'608','stagetype'=>'4','mapid'=>'7','orderid'=>'8','level'=>'0','needopenstageid'=>'607','nextstageid'=>'609','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'609','stagetype'=>'2','mapid'=>'7','orderid'=>'9','level'=>'0','needopenstageid'=>'608','nextstageid'=>'610','attackdailycount'=>'0','ticket'=>'4'],
['stageid'=>'610','stagetype'=>'4','mapid'=>'7','orderid'=>'10','level'=>'0','needopenstageid'=>'609','nextstageid'=>'701','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'10061','stagetype'=>'1','mapid'=>'7','orderid'=>'1','level'=>'1','needopenstageid'=>'10060','nextstageid'=>'10062','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'7'],
['stageid'=>'10062','stagetype'=>'3','mapid'=>'7','orderid'=>'2','level'=>'1','needopenstageid'=>'10061','nextstageid'=>'10063','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10063','stagetype'=>'1','mapid'=>'7','orderid'=>'3','level'=>'1','needopenstageid'=>'10062','nextstageid'=>'10064','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'7'],
['stageid'=>'10064','stagetype'=>'4','mapid'=>'7','orderid'=>'4','level'=>'1','needopenstageid'=>'10063','nextstageid'=>'10065','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10065','stagetype'=>'1','mapid'=>'7','orderid'=>'5','level'=>'1','needopenstageid'=>'10064','nextstageid'=>'10066','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'7'],
['stageid'=>'10066','stagetype'=>'3','mapid'=>'7','orderid'=>'6','level'=>'1','needopenstageid'=>'10065','nextstageid'=>'10067','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10067','stagetype'=>'1','mapid'=>'7','orderid'=>'7','level'=>'1','needopenstageid'=>'10066','nextstageid'=>'10068','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'7'],
['stageid'=>'10068','stagetype'=>'4','mapid'=>'7','orderid'=>'8','level'=>'1','needopenstageid'=>'10067','nextstageid'=>'10069','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10069','stagetype'=>'2','mapid'=>'7','orderid'=>'9','level'=>'1','needopenstageid'=>'10068','nextstageid'=>'10070','attackdailycount'=>'0','ticket'=>'8'],
['stageid'=>'10070','stagetype'=>'4','mapid'=>'7','orderid'=>'10','level'=>'1','needopenstageid'=>'10069','nextstageid'=>'10071','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'701','stagetype'=>'1','mapid'=>'8','orderid'=>'1','level'=>'0','needopenstageid'=>'610','nextstageid'=>'702','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'8'],
['stageid'=>'702','stagetype'=>'3','mapid'=>'8','orderid'=>'2','level'=>'0','needopenstageid'=>'701','nextstageid'=>'703','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'703','stagetype'=>'1','mapid'=>'8','orderid'=>'3','level'=>'0','needopenstageid'=>'702','nextstageid'=>'704','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'8'],
['stageid'=>'704','stagetype'=>'4','mapid'=>'8','orderid'=>'4','level'=>'0','needopenstageid'=>'703','nextstageid'=>'705','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'705','stagetype'=>'1','mapid'=>'8','orderid'=>'5','level'=>'0','needopenstageid'=>'704','nextstageid'=>'706','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'8'],
['stageid'=>'706','stagetype'=>'3','mapid'=>'8','orderid'=>'6','level'=>'0','needopenstageid'=>'705','nextstageid'=>'707','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'707','stagetype'=>'1','mapid'=>'8','orderid'=>'7','level'=>'0','needopenstageid'=>'706','nextstageid'=>'708','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'8'],
['stageid'=>'708','stagetype'=>'4','mapid'=>'8','orderid'=>'8','level'=>'0','needopenstageid'=>'707','nextstageid'=>'709','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'709','stagetype'=>'2','mapid'=>'8','orderid'=>'9','level'=>'0','needopenstageid'=>'708','nextstageid'=>'710','attackdailycount'=>'0','ticket'=>'4'],
['stageid'=>'710','stagetype'=>'4','mapid'=>'8','orderid'=>'10','level'=>'0','needopenstageid'=>'709','nextstageid'=>'801','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'10071','stagetype'=>'1','mapid'=>'8','orderid'=>'1','level'=>'1','needopenstageid'=>'10070','nextstageid'=>'10072','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'8'],
['stageid'=>'10072','stagetype'=>'3','mapid'=>'8','orderid'=>'2','level'=>'1','needopenstageid'=>'10071','nextstageid'=>'10073','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10073','stagetype'=>'1','mapid'=>'8','orderid'=>'3','level'=>'1','needopenstageid'=>'10072','nextstageid'=>'10074','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'8'],
['stageid'=>'10074','stagetype'=>'4','mapid'=>'8','orderid'=>'4','level'=>'1','needopenstageid'=>'10073','nextstageid'=>'10075','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10075','stagetype'=>'1','mapid'=>'8','orderid'=>'5','level'=>'1','needopenstageid'=>'10074','nextstageid'=>'10076','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'8'],
['stageid'=>'10076','stagetype'=>'3','mapid'=>'8','orderid'=>'6','level'=>'1','needopenstageid'=>'10075','nextstageid'=>'10077','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10077','stagetype'=>'1','mapid'=>'8','orderid'=>'7','level'=>'1','needopenstageid'=>'10076','nextstageid'=>'10078','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'8'],
['stageid'=>'10078','stagetype'=>'4','mapid'=>'8','orderid'=>'8','level'=>'1','needopenstageid'=>'10077','nextstageid'=>'10079','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10079','stagetype'=>'2','mapid'=>'8','orderid'=>'9','level'=>'1','needopenstageid'=>'10078','nextstageid'=>'10080','attackdailycount'=>'0','ticket'=>'8'],
['stageid'=>'10080','stagetype'=>'4','mapid'=>'8','orderid'=>'10','level'=>'1','needopenstageid'=>'10079','nextstageid'=>'10081','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'801','stagetype'=>'1','mapid'=>'9','orderid'=>'1','level'=>'0','needopenstageid'=>'710','nextstageid'=>'802','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'9'],
['stageid'=>'802','stagetype'=>'3','mapid'=>'9','orderid'=>'2','level'=>'0','needopenstageid'=>'801','nextstageid'=>'803','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'803','stagetype'=>'1','mapid'=>'9','orderid'=>'3','level'=>'0','needopenstageid'=>'802','nextstageid'=>'804','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'9'],
['stageid'=>'804','stagetype'=>'4','mapid'=>'9','orderid'=>'4','level'=>'0','needopenstageid'=>'803','nextstageid'=>'805','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'805','stagetype'=>'1','mapid'=>'9','orderid'=>'5','level'=>'0','needopenstageid'=>'804','nextstageid'=>'806','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'9'],
['stageid'=>'806','stagetype'=>'3','mapid'=>'9','orderid'=>'6','level'=>'0','needopenstageid'=>'805','nextstageid'=>'807','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'807','stagetype'=>'1','mapid'=>'9','orderid'=>'7','level'=>'0','needopenstageid'=>'806','nextstageid'=>'808','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'9'],
['stageid'=>'808','stagetype'=>'4','mapid'=>'9','orderid'=>'8','level'=>'0','needopenstageid'=>'807','nextstageid'=>'809','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'809','stagetype'=>'2','mapid'=>'9','orderid'=>'9','level'=>'0','needopenstageid'=>'808','nextstageid'=>'810','attackdailycount'=>'0','ticket'=>'4'],
['stageid'=>'810','stagetype'=>'4','mapid'=>'9','orderid'=>'10','level'=>'0','needopenstageid'=>'809','nextstageid'=>'901','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'10081','stagetype'=>'1','mapid'=>'9','orderid'=>'1','level'=>'1','needopenstageid'=>'10080','nextstageid'=>'10082','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'9'],
['stageid'=>'10082','stagetype'=>'3','mapid'=>'9','orderid'=>'2','level'=>'1','needopenstageid'=>'10081','nextstageid'=>'10083','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10083','stagetype'=>'1','mapid'=>'9','orderid'=>'3','level'=>'1','needopenstageid'=>'10082','nextstageid'=>'10084','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'9'],
['stageid'=>'10084','stagetype'=>'4','mapid'=>'9','orderid'=>'4','level'=>'1','needopenstageid'=>'10083','nextstageid'=>'10085','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10085','stagetype'=>'1','mapid'=>'9','orderid'=>'5','level'=>'1','needopenstageid'=>'10084','nextstageid'=>'10086','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'9'],
['stageid'=>'10086','stagetype'=>'3','mapid'=>'9','orderid'=>'6','level'=>'1','needopenstageid'=>'10085','nextstageid'=>'10087','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10087','stagetype'=>'1','mapid'=>'9','orderid'=>'7','level'=>'1','needopenstageid'=>'10086','nextstageid'=>'10088','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'9'],
['stageid'=>'10088','stagetype'=>'4','mapid'=>'9','orderid'=>'8','level'=>'1','needopenstageid'=>'10087','nextstageid'=>'10089','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10089','stagetype'=>'2','mapid'=>'9','orderid'=>'9','level'=>'1','needopenstageid'=>'10088','nextstageid'=>'10090','attackdailycount'=>'0','ticket'=>'8'],
['stageid'=>'10090','stagetype'=>'4','mapid'=>'9','orderid'=>'10','level'=>'1','needopenstageid'=>'10089','nextstageid'=>'10091','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'901','stagetype'=>'1','mapid'=>'10','orderid'=>'1','level'=>'0','needopenstageid'=>'810','nextstageid'=>'902','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'10'],
['stageid'=>'902','stagetype'=>'3','mapid'=>'10','orderid'=>'2','level'=>'0','needopenstageid'=>'901','nextstageid'=>'903','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'903','stagetype'=>'1','mapid'=>'10','orderid'=>'3','level'=>'0','needopenstageid'=>'902','nextstageid'=>'904','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'10'],
['stageid'=>'904','stagetype'=>'4','mapid'=>'10','orderid'=>'4','level'=>'0','needopenstageid'=>'903','nextstageid'=>'905','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'905','stagetype'=>'1','mapid'=>'10','orderid'=>'5','level'=>'0','needopenstageid'=>'904','nextstageid'=>'906','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'10'],
['stageid'=>'906','stagetype'=>'3','mapid'=>'10','orderid'=>'6','level'=>'0','needopenstageid'=>'905','nextstageid'=>'907','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'11'],
['stageid'=>'907','stagetype'=>'1','mapid'=>'10','orderid'=>'7','level'=>'0','needopenstageid'=>'906','nextstageid'=>'908','attackdailycount'=>'0','ticket'=>'4','awarditem'=>'10'],
['stageid'=>'908','stagetype'=>'4','mapid'=>'10','orderid'=>'8','level'=>'0','needopenstageid'=>'907','nextstageid'=>'909','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'909','stagetype'=>'2','mapid'=>'10','orderid'=>'9','level'=>'0','needopenstageid'=>'908','nextstageid'=>'910','attackdailycount'=>'0','ticket'=>'4'],
['stageid'=>'910','stagetype'=>'4','mapid'=>'10','orderid'=>'10','level'=>'0','needopenstageid'=>'909','attackdailycount'=>'5','ticket'=>'6'],
['stageid'=>'10091','stagetype'=>'1','mapid'=>'10','orderid'=>'1','level'=>'1','needopenstageid'=>'10090','nextstageid'=>'10092','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'10'],
['stageid'=>'10092','stagetype'=>'3','mapid'=>'10','orderid'=>'2','level'=>'1','needopenstageid'=>'10091','nextstageid'=>'10093','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10093','stagetype'=>'1','mapid'=>'10','orderid'=>'3','level'=>'1','needopenstageid'=>'10092','nextstageid'=>'10094','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'10'],
['stageid'=>'10094','stagetype'=>'4','mapid'=>'10','orderid'=>'4','level'=>'1','needopenstageid'=>'10093','nextstageid'=>'10095','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10095','stagetype'=>'1','mapid'=>'10','orderid'=>'5','level'=>'1','needopenstageid'=>'10094','nextstageid'=>'10096','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'10'],
['stageid'=>'10096','stagetype'=>'3','mapid'=>'10','orderid'=>'6','level'=>'1','needopenstageid'=>'10095','nextstageid'=>'10097','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'11'],
['stageid'=>'10097','stagetype'=>'1','mapid'=>'10','orderid'=>'7','level'=>'1','needopenstageid'=>'10096','nextstageid'=>'10098','attackdailycount'=>'0','ticket'=>'8','awarditem'=>'10'],
['stageid'=>'10098','stagetype'=>'4','mapid'=>'10','orderid'=>'8','level'=>'1','needopenstageid'=>'10097','nextstageid'=>'10099','attackdailycount'=>'5','ticket'=>'10'],
['stageid'=>'10099','stagetype'=>'2','mapid'=>'10','orderid'=>'9','level'=>'1','needopenstageid'=>'10098','nextstageid'=>'10100','attackdailycount'=>'0','ticket'=>'8'],
['stageid'=>'10100','stagetype'=>'4','mapid'=>'10','orderid'=>'10','level'=>'1','needopenstageid'=>'10099','attackdailycount'=>'5','ticket'=>'10']
];
}
 return self::$_data;
}
}
