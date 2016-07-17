<?php
namespace configdata;
/**
* gen by zeus.php
*/
class configdata_recharge_setting {
const k_goodsid = "goodsid";
const k_orderid = "orderid";
const k_channelid = "channelid";
const k_isfirstrecharge = "isfirstrecharge";
const k_rmbnum = "rmbnum";
const k_diamondnum = "diamondnum";
const k_awardvipexp = "awardvipexp";
const k_firstrebatediamond = "firstrebatediamond";
const k_rebatediamond = "rebatediamond";
const k_ismonth = "ismonth";
private static $_data = NULL;
public static function data() {
if (is_null ( self::$_data )) {
self::$_data = [
['goodsid'=>'com.tomatofuns.ctgame.item1','orderid'=>'2','channelid'=>'0','isfirstrecharge'=>'0','rmbnum'=>'600','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'6','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item2','orderid'=>'3','channelid'=>'0','isfirstrecharge'=>'0','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'15','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item3','orderid'=>'4','channelid'=>'0','isfirstrecharge'=>'0','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'80','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item4','orderid'=>'5','channelid'=>'0','isfirstrecharge'=>'0','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'0','rebatediamond'=>'240','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item5','orderid'=>'6','channelid'=>'0','isfirstrecharge'=>'0','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'600','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item6','orderid'=>'7','channelid'=>'0','isfirstrecharge'=>'0','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'0','rebatediamond'=>'1600','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item7','orderid'=>'1','channelid'=>'0','isfirstrecharge'=>'0','rmbnum'=>'2500','diamondnum'=>'250','awardvipexp'=>'250','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item8','orderid'=>'9','channelid'=>'0','isfirstrecharge'=>'1','rmbnum'=>'600','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item9','orderid'=>'10','channelid'=>'0','isfirstrecharge'=>'1','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item10','orderid'=>'11','channelid'=>'0','isfirstrecharge'=>'1','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item11','orderid'=>'12','channelid'=>'0','isfirstrecharge'=>'1','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'990','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item12','orderid'=>'13','channelid'=>'0','isfirstrecharge'=>'1','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item13','orderid'=>'14','channelid'=>'0','isfirstrecharge'=>'1','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'3240','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item14','orderid'=>'8','channelid'=>'0','isfirstrecharge'=>'1','rmbnum'=>'2500','diamondnum'=>'250','awardvipexp'=>'250','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item15','orderid'=>'2','channelid'=>'1','isfirstrecharge'=>'0','rmbnum'=>'600','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'6','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item16','orderid'=>'3','channelid'=>'1','isfirstrecharge'=>'0','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'15','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item17','orderid'=>'4','channelid'=>'1','isfirstrecharge'=>'0','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'80','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item18','orderid'=>'5','channelid'=>'1','isfirstrecharge'=>'0','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'0','rebatediamond'=>'240','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item19','orderid'=>'6','channelid'=>'1','isfirstrecharge'=>'0','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'600','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item20','orderid'=>'7','channelid'=>'1','isfirstrecharge'=>'0','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'0','rebatediamond'=>'1600','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item21','orderid'=>'1','channelid'=>'1','isfirstrecharge'=>'0','rmbnum'=>'2500','diamondnum'=>'250','awardvipexp'=>'250','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item22','orderid'=>'9','channelid'=>'1','isfirstrecharge'=>'1','rmbnum'=>'600','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item23','orderid'=>'10','channelid'=>'1','isfirstrecharge'=>'1','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item24','orderid'=>'11','channelid'=>'1','isfirstrecharge'=>'1','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item25','orderid'=>'12','channelid'=>'1','isfirstrecharge'=>'1','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'990','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item26','orderid'=>'13','channelid'=>'1','isfirstrecharge'=>'1','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item27','orderid'=>'14','channelid'=>'1','isfirstrecharge'=>'1','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'3240','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item28','orderid'=>'8','channelid'=>'1','isfirstrecharge'=>'1','rmbnum'=>'2500','diamondnum'=>'250','awardvipexp'=>'250','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item29','orderid'=>'2','channelid'=>'2','isfirstrecharge'=>'0','rmbnum'=>'600','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'6','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item30','orderid'=>'3','channelid'=>'2','isfirstrecharge'=>'0','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'15','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item31','orderid'=>'4','channelid'=>'2','isfirstrecharge'=>'0','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'80','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item32','orderid'=>'5','channelid'=>'2','isfirstrecharge'=>'0','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'0','rebatediamond'=>'240','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item33','orderid'=>'6','channelid'=>'2','isfirstrecharge'=>'0','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'600','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item34','orderid'=>'7','channelid'=>'2','isfirstrecharge'=>'0','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'0','rebatediamond'=>'1600','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item35','orderid'=>'1','channelid'=>'2','isfirstrecharge'=>'0','rmbnum'=>'2500','diamondnum'=>'250','awardvipexp'=>'250','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item36','orderid'=>'9','channelid'=>'2','isfirstrecharge'=>'1','rmbnum'=>'600','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item37','orderid'=>'10','channelid'=>'2','isfirstrecharge'=>'1','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item38','orderid'=>'11','channelid'=>'2','isfirstrecharge'=>'1','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item39','orderid'=>'12','channelid'=>'2','isfirstrecharge'=>'1','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'990','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item40','orderid'=>'13','channelid'=>'2','isfirstrecharge'=>'1','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item41','orderid'=>'14','channelid'=>'2','isfirstrecharge'=>'1','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'3240','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item42','orderid'=>'8','channelid'=>'2','isfirstrecharge'=>'1','rmbnum'=>'2500','diamondnum'=>'250','awardvipexp'=>'250','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item343','orderid'=>'1','channelid'=>'3','isfirstrecharge'=>'0','rmbnum'=>'1800','diamondnum'=>'180','awardvipexp'=>'180','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item344','orderid'=>'2','channelid'=>'3','isfirstrecharge'=>'0','rmbnum'=>'600','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item345','orderid'=>'3','channelid'=>'3','isfirstrecharge'=>'0','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'50','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item346','orderid'=>'4','channelid'=>'3','isfirstrecharge'=>'0','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'120','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item347','orderid'=>'5','channelid'=>'3','isfirstrecharge'=>'0','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'0','rebatediamond'=>'350','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item348','orderid'=>'6','channelid'=>'3','isfirstrecharge'=>'0','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'800','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item349','orderid'=>'7','channelid'=>'3','isfirstrecharge'=>'0','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'0','rebatediamond'=>'2500','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item350','orderid'=>'8','channelid'=>'3','isfirstrecharge'=>'1','rmbnum'=>'1800','diamondnum'=>'180','awardvipexp'=>'180','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item351','orderid'=>'9','channelid'=>'3','isfirstrecharge'=>'1','rmbnum'=>'600','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item352','orderid'=>'10','channelid'=>'3','isfirstrecharge'=>'1','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item353','orderid'=>'11','channelid'=>'3','isfirstrecharge'=>'1','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item354','orderid'=>'12','channelid'=>'3','isfirstrecharge'=>'1','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'990','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item355','orderid'=>'13','channelid'=>'3','isfirstrecharge'=>'1','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item356','orderid'=>'14','channelid'=>'3','isfirstrecharge'=>'1','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'3240','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item57','orderid'=>'2','channelid'=>'4','isfirstrecharge'=>'0','rmbnum'=>'600','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'6','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item58','orderid'=>'3','channelid'=>'4','isfirstrecharge'=>'0','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'15','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item59','orderid'=>'4','channelid'=>'4','isfirstrecharge'=>'0','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'80','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item60','orderid'=>'5','channelid'=>'4','isfirstrecharge'=>'0','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'0','rebatediamond'=>'240','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item61','orderid'=>'6','channelid'=>'4','isfirstrecharge'=>'0','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'600','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item62','orderid'=>'7','channelid'=>'4','isfirstrecharge'=>'0','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'0','rebatediamond'=>'1600','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item63','orderid'=>'1','channelid'=>'4','isfirstrecharge'=>'0','rmbnum'=>'2500','diamondnum'=>'250','awardvipexp'=>'250','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item64','orderid'=>'9','channelid'=>'4','isfirstrecharge'=>'1','rmbnum'=>'600','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item65','orderid'=>'10','channelid'=>'4','isfirstrecharge'=>'1','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item66','orderid'=>'11','channelid'=>'4','isfirstrecharge'=>'1','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item67','orderid'=>'12','channelid'=>'4','isfirstrecharge'=>'1','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'990','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item68','orderid'=>'13','channelid'=>'4','isfirstrecharge'=>'1','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item69','orderid'=>'14','channelid'=>'4','isfirstrecharge'=>'1','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'3240','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item70','orderid'=>'8','channelid'=>'4','isfirstrecharge'=>'1','rmbnum'=>'2500','diamondnum'=>'250','awardvipexp'=>'250','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item71','orderid'=>'2','channelid'=>'5','isfirstrecharge'=>'0','rmbnum'=>'600','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'6','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item72','orderid'=>'3','channelid'=>'5','isfirstrecharge'=>'0','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'15','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item73','orderid'=>'4','channelid'=>'5','isfirstrecharge'=>'0','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'80','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item74','orderid'=>'5','channelid'=>'5','isfirstrecharge'=>'0','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'0','rebatediamond'=>'240','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item75','orderid'=>'6','channelid'=>'5','isfirstrecharge'=>'0','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'600','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item76','orderid'=>'7','channelid'=>'5','isfirstrecharge'=>'0','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'0','rebatediamond'=>'1600','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item77','orderid'=>'1','channelid'=>'5','isfirstrecharge'=>'0','rmbnum'=>'2500','diamondnum'=>'250','awardvipexp'=>'250','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item78','orderid'=>'9','channelid'=>'5','isfirstrecharge'=>'1','rmbnum'=>'600','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item79','orderid'=>'10','channelid'=>'5','isfirstrecharge'=>'1','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item80','orderid'=>'11','channelid'=>'5','isfirstrecharge'=>'1','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item81','orderid'=>'12','channelid'=>'5','isfirstrecharge'=>'1','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'990','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item82','orderid'=>'13','channelid'=>'5','isfirstrecharge'=>'1','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item83','orderid'=>'14','channelid'=>'5','isfirstrecharge'=>'1','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'3240','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item84','orderid'=>'8','channelid'=>'5','isfirstrecharge'=>'1','rmbnum'=>'2500','diamondnum'=>'250','awardvipexp'=>'250','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item85','orderid'=>'2','channelid'=>'6','isfirstrecharge'=>'0','rmbnum'=>'600','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'6','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item86','orderid'=>'3','channelid'=>'6','isfirstrecharge'=>'0','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'15','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item87','orderid'=>'4','channelid'=>'6','isfirstrecharge'=>'0','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'80','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item88','orderid'=>'5','channelid'=>'6','isfirstrecharge'=>'0','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'0','rebatediamond'=>'240','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item89','orderid'=>'6','channelid'=>'6','isfirstrecharge'=>'0','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'600','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item90','orderid'=>'7','channelid'=>'6','isfirstrecharge'=>'0','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'0','rebatediamond'=>'1600','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item91','orderid'=>'1','channelid'=>'6','isfirstrecharge'=>'0','rmbnum'=>'2500','diamondnum'=>'250','awardvipexp'=>'250','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item92','orderid'=>'9','channelid'=>'6','isfirstrecharge'=>'1','rmbnum'=>'600','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item93','orderid'=>'10','channelid'=>'6','isfirstrecharge'=>'1','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item94','orderid'=>'11','channelid'=>'6','isfirstrecharge'=>'1','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item95','orderid'=>'12','channelid'=>'6','isfirstrecharge'=>'1','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'990','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item96','orderid'=>'13','channelid'=>'6','isfirstrecharge'=>'1','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item97','orderid'=>'14','channelid'=>'6','isfirstrecharge'=>'1','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'3240','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item98','orderid'=>'8','channelid'=>'6','isfirstrecharge'=>'1','rmbnum'=>'2500','diamondnum'=>'250','awardvipexp'=>'250','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item99','orderid'=>'2','channelid'=>'999','isfirstrecharge'=>'0','rmbnum'=>'600','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'6','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item100','orderid'=>'3','channelid'=>'999','isfirstrecharge'=>'0','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'15','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item101','orderid'=>'4','channelid'=>'999','isfirstrecharge'=>'0','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'80','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item102','orderid'=>'5','channelid'=>'999','isfirstrecharge'=>'0','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'0','rebatediamond'=>'240','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item103','orderid'=>'6','channelid'=>'999','isfirstrecharge'=>'0','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'600','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item104','orderid'=>'7','channelid'=>'999','isfirstrecharge'=>'0','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'0','rebatediamond'=>'1600','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item105','orderid'=>'1','channelid'=>'999','isfirstrecharge'=>'0','rmbnum'=>'2500','diamondnum'=>'250','awardvipexp'=>'250','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item106','orderid'=>'9','channelid'=>'999','isfirstrecharge'=>'1','rmbnum'=>'600','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item107','orderid'=>'10','channelid'=>'999','isfirstrecharge'=>'1','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item108','orderid'=>'11','channelid'=>'999','isfirstrecharge'=>'1','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item109','orderid'=>'12','channelid'=>'999','isfirstrecharge'=>'1','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'990','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item110','orderid'=>'13','channelid'=>'999','isfirstrecharge'=>'1','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item111','orderid'=>'14','channelid'=>'999','isfirstrecharge'=>'1','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'3240','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item112','orderid'=>'8','channelid'=>'999','isfirstrecharge'=>'1','rmbnum'=>'2500','diamondnum'=>'250','awardvipexp'=>'250','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item113','orderid'=>'2','channelid'=>'7','isfirstrecharge'=>'0','rmbnum'=>'600','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'6','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item114','orderid'=>'3','channelid'=>'7','isfirstrecharge'=>'0','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'15','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item115','orderid'=>'4','channelid'=>'7','isfirstrecharge'=>'0','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'80','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item116','orderid'=>'5','channelid'=>'7','isfirstrecharge'=>'0','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'0','rebatediamond'=>'240','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item117','orderid'=>'6','channelid'=>'7','isfirstrecharge'=>'0','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'600','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item118','orderid'=>'7','channelid'=>'7','isfirstrecharge'=>'0','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'0','rebatediamond'=>'1600','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item119','orderid'=>'1','channelid'=>'7','isfirstrecharge'=>'0','rmbnum'=>'2500','diamondnum'=>'250','awardvipexp'=>'250','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item120','orderid'=>'9','channelid'=>'7','isfirstrecharge'=>'1','rmbnum'=>'600','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item121','orderid'=>'10','channelid'=>'7','isfirstrecharge'=>'1','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item122','orderid'=>'11','channelid'=>'7','isfirstrecharge'=>'1','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item123','orderid'=>'12','channelid'=>'7','isfirstrecharge'=>'1','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'990','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item124','orderid'=>'13','channelid'=>'7','isfirstrecharge'=>'1','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item125','orderid'=>'14','channelid'=>'7','isfirstrecharge'=>'1','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'3240','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item126','orderid'=>'8','channelid'=>'7','isfirstrecharge'=>'1','rmbnum'=>'2500','diamondnum'=>'250','awardvipexp'=>'250','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item127','orderid'=>'1','channelid'=>'9','isfirstrecharge'=>'0','rmbnum'=>'1800','diamondnum'=>'180','awardvipexp'=>'180','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item128','orderid'=>'2','channelid'=>'9','isfirstrecharge'=>'0','rmbnum'=>'1','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item129','orderid'=>'3','channelid'=>'9','isfirstrecharge'=>'0','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'50','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item130','orderid'=>'4','channelid'=>'9','isfirstrecharge'=>'0','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'120','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item131','orderid'=>'5','channelid'=>'9','isfirstrecharge'=>'0','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'0','rebatediamond'=>'350','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item132','orderid'=>'6','channelid'=>'9','isfirstrecharge'=>'0','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'800','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item133','orderid'=>'7','channelid'=>'9','isfirstrecharge'=>'0','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'0','rebatediamond'=>'2500','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item134','orderid'=>'8','channelid'=>'9','isfirstrecharge'=>'1','rmbnum'=>'1800','diamondnum'=>'180','awardvipexp'=>'180','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'1'],
['goodsid'=>'com.tomatofuns.ctgame.item135','orderid'=>'9','channelid'=>'9','isfirstrecharge'=>'1','rmbnum'=>'1','diamondnum'=>'60','awardvipexp'=>'60','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item136','orderid'=>'10','channelid'=>'9','isfirstrecharge'=>'1','rmbnum'=>'3000','diamondnum'=>'300','awardvipexp'=>'300','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item137','orderid'=>'11','channelid'=>'9','isfirstrecharge'=>'1','rmbnum'=>'6800','diamondnum'=>'680','awardvipexp'=>'680','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item138','orderid'=>'12','channelid'=>'9','isfirstrecharge'=>'1','rmbnum'=>'19800','diamondnum'=>'1980','awardvipexp'=>'1980','firstrebatediamond'=>'990','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item139','orderid'=>'13','channelid'=>'9','isfirstrecharge'=>'1','rmbnum'=>'32800','diamondnum'=>'3280','awardvipexp'=>'3280','firstrebatediamond'=>'0','rebatediamond'=>'0','ismonth'=>'0'],
['goodsid'=>'com.tomatofuns.ctgame.item140','orderid'=>'14','channelid'=>'9','isfirstrecharge'=>'1','rmbnum'=>'64800','diamondnum'=>'6480','awardvipexp'=>'6480','firstrebatediamond'=>'3240','rebatediamond'=>'0','ismonth'=>'0']
];
}
 return self::$_data;
}
}
