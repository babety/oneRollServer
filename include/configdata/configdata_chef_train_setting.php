<?php
namespace configdata;
/**
* gen by zeus.php
*/
class configdata_chef_train_setting {
const k_level = "level";
const k_traintime = "traintime";
const k_jointraintime = "jointraintime";
const k_awardexp = "awardexp";
private static $_data = NULL;
public static function data() {
if (is_null ( self::$_data )) {
self::$_data = [
['level'=>'1','traintime'=>'600','jointraintime'=>'200','awardexp'=>'300'],
['level'=>'2','traintime'=>'660','jointraintime'=>'220','awardexp'=>'300'],
['level'=>'3','traintime'=>'720','jointraintime'=>'240','awardexp'=>'300'],
['level'=>'4','traintime'=>'780','jointraintime'=>'260','awardexp'=>'300'],
['level'=>'5','traintime'=>'840','jointraintime'=>'280','awardexp'=>'300'],
['level'=>'6','traintime'=>'900','jointraintime'=>'300','awardexp'=>'300'],
['level'=>'7','traintime'=>'960','jointraintime'=>'320','awardexp'=>'300'],
['level'=>'8','traintime'=>'1020','jointraintime'=>'340','awardexp'=>'300'],
['level'=>'9','traintime'=>'1080','jointraintime'=>'360','awardexp'=>'300'],
['level'=>'10','traintime'=>'1140','jointraintime'=>'380','awardexp'=>'310'],
['level'=>'11','traintime'=>'1200','jointraintime'=>'400','awardexp'=>'310'],
['level'=>'12','traintime'=>'1260','jointraintime'=>'420','awardexp'=>'310'],
['level'=>'13','traintime'=>'1320','jointraintime'=>'440','awardexp'=>'310'],
['level'=>'14','traintime'=>'1380','jointraintime'=>'460','awardexp'=>'310'],
['level'=>'15','traintime'=>'1440','jointraintime'=>'480','awardexp'=>'310'],
['level'=>'16','traintime'=>'1500','jointraintime'=>'500','awardexp'=>'310'],
['level'=>'17','traintime'=>'1560','jointraintime'=>'520','awardexp'=>'310'],
['level'=>'18','traintime'=>'1620','jointraintime'=>'540','awardexp'=>'310'],
['level'=>'19','traintime'=>'1680','jointraintime'=>'560','awardexp'=>'310'],
['level'=>'20','traintime'=>'1740','jointraintime'=>'580','awardexp'=>'310'],
['level'=>'21','traintime'=>'1800','jointraintime'=>'600','awardexp'=>'310'],
['level'=>'22','traintime'=>'1860','jointraintime'=>'620','awardexp'=>'310'],
['level'=>'23','traintime'=>'1920','jointraintime'=>'640','awardexp'=>'310'],
['level'=>'24','traintime'=>'1980','jointraintime'=>'660','awardexp'=>'310'],
['level'=>'25','traintime'=>'2040','jointraintime'=>'680','awardexp'=>'310'],
['level'=>'26','traintime'=>'2100','jointraintime'=>'700','awardexp'=>'310'],
['level'=>'27','traintime'=>'2160','jointraintime'=>'720','awardexp'=>'310'],
['level'=>'28','traintime'=>'2220','jointraintime'=>'740','awardexp'=>'310'],
['level'=>'29','traintime'=>'2280','jointraintime'=>'760','awardexp'=>'310'],
['level'=>'30','traintime'=>'2340','jointraintime'=>'780','awardexp'=>'310'],
['level'=>'31','traintime'=>'2400','jointraintime'=>'800','awardexp'=>'310'],
['level'=>'32','traintime'=>'2460','jointraintime'=>'820','awardexp'=>'310'],
['level'=>'33','traintime'=>'2520','jointraintime'=>'840','awardexp'=>'310'],
['level'=>'34','traintime'=>'2580','jointraintime'=>'860','awardexp'=>'310'],
['level'=>'35','traintime'=>'2640','jointraintime'=>'880','awardexp'=>'310'],
['level'=>'36','traintime'=>'2700','jointraintime'=>'900','awardexp'=>'310'],
['level'=>'37','traintime'=>'2760','jointraintime'=>'920','awardexp'=>'310'],
['level'=>'38','traintime'=>'2820','jointraintime'=>'940','awardexp'=>'310'],
['level'=>'39','traintime'=>'2880','jointraintime'=>'960','awardexp'=>'310'],
['level'=>'40','traintime'=>'2940','jointraintime'=>'980','awardexp'=>'310'],
['level'=>'41','traintime'=>'3000','jointraintime'=>'1000','awardexp'=>'310'],
['level'=>'42','traintime'=>'3060','jointraintime'=>'1020','awardexp'=>'310'],
['level'=>'43','traintime'=>'3120','jointraintime'=>'1040','awardexp'=>'310'],
['level'=>'44','traintime'=>'3180','jointraintime'=>'1060','awardexp'=>'310'],
['level'=>'45','traintime'=>'3240','jointraintime'=>'1080','awardexp'=>'310'],
['level'=>'46','traintime'=>'3300','jointraintime'=>'1100','awardexp'=>'310'],
['level'=>'47','traintime'=>'3360','jointraintime'=>'1120','awardexp'=>'310'],
['level'=>'48','traintime'=>'3420','jointraintime'=>'1140','awardexp'=>'310'],
['level'=>'49','traintime'=>'3480','jointraintime'=>'1160','awardexp'=>'310'],
['level'=>'50','traintime'=>'3540','jointraintime'=>'1180','awardexp'=>'310'],
['level'=>'51','traintime'=>'3600','jointraintime'=>'1200','awardexp'=>'310'],
['level'=>'52','traintime'=>'3660','jointraintime'=>'1220','awardexp'=>'310'],
['level'=>'53','traintime'=>'3720','jointraintime'=>'1240','awardexp'=>'310'],
['level'=>'54','traintime'=>'3780','jointraintime'=>'1260','awardexp'=>'310'],
['level'=>'55','traintime'=>'3840','jointraintime'=>'1280','awardexp'=>'320'],
['level'=>'56','traintime'=>'3900','jointraintime'=>'1300','awardexp'=>'320'],
['level'=>'57','traintime'=>'3960','jointraintime'=>'1320','awardexp'=>'320'],
['level'=>'58','traintime'=>'4020','jointraintime'=>'1340','awardexp'=>'320'],
['level'=>'59','traintime'=>'4080','jointraintime'=>'1360','awardexp'=>'320'],
['level'=>'60','traintime'=>'4140','jointraintime'=>'1380','awardexp'=>'320'],
['level'=>'61','traintime'=>'4200','jointraintime'=>'1400','awardexp'=>'320'],
['level'=>'62','traintime'=>'4260','jointraintime'=>'1420','awardexp'=>'320'],
['level'=>'63','traintime'=>'4320','jointraintime'=>'1440','awardexp'=>'320'],
['level'=>'64','traintime'=>'4380','jointraintime'=>'1460','awardexp'=>'320'],
['level'=>'65','traintime'=>'4440','jointraintime'=>'1480','awardexp'=>'320'],
['level'=>'66','traintime'=>'4500','jointraintime'=>'1500','awardexp'=>'320'],
['level'=>'67','traintime'=>'4560','jointraintime'=>'1520','awardexp'=>'320'],
['level'=>'68','traintime'=>'4620','jointraintime'=>'1540','awardexp'=>'320'],
['level'=>'69','traintime'=>'4680','jointraintime'=>'1560','awardexp'=>'320'],
['level'=>'70','traintime'=>'4740','jointraintime'=>'1580','awardexp'=>'320'],
['level'=>'71','traintime'=>'4800','jointraintime'=>'1600','awardexp'=>'320'],
['level'=>'72','traintime'=>'4860','jointraintime'=>'1620','awardexp'=>'320'],
['level'=>'73','traintime'=>'4920','jointraintime'=>'1640','awardexp'=>'320'],
['level'=>'74','traintime'=>'4980','jointraintime'=>'1660','awardexp'=>'320'],
['level'=>'75','traintime'=>'5040','jointraintime'=>'1680','awardexp'=>'320'],
['level'=>'76','traintime'=>'5100','jointraintime'=>'1700','awardexp'=>'320'],
['level'=>'77','traintime'=>'5160','jointraintime'=>'1720','awardexp'=>'320'],
['level'=>'78','traintime'=>'5220','jointraintime'=>'1740','awardexp'=>'320'],
['level'=>'79','traintime'=>'5280','jointraintime'=>'1760','awardexp'=>'320'],
['level'=>'80','traintime'=>'5340','jointraintime'=>'1780','awardexp'=>'320'],
['level'=>'81','traintime'=>'5400','jointraintime'=>'1800','awardexp'=>'320'],
['level'=>'82','traintime'=>'5460','jointraintime'=>'1820','awardexp'=>'320'],
['level'=>'83','traintime'=>'5520','jointraintime'=>'1840','awardexp'=>'320'],
['level'=>'84','traintime'=>'5580','jointraintime'=>'1860','awardexp'=>'320'],
['level'=>'85','traintime'=>'5640','jointraintime'=>'1880','awardexp'=>'320'],
['level'=>'86','traintime'=>'5700','jointraintime'=>'1900','awardexp'=>'320'],
['level'=>'87','traintime'=>'5760','jointraintime'=>'1920','awardexp'=>'320'],
['level'=>'88','traintime'=>'5820','jointraintime'=>'1940','awardexp'=>'320'],
['level'=>'89','traintime'=>'5880','jointraintime'=>'1960','awardexp'=>'320'],
['level'=>'90','traintime'=>'5940','jointraintime'=>'1980','awardexp'=>'320'],
['level'=>'91','traintime'=>'6000','jointraintime'=>'2000','awardexp'=>'320'],
['level'=>'92','traintime'=>'6060','jointraintime'=>'2020','awardexp'=>'320'],
['level'=>'93','traintime'=>'6120','jointraintime'=>'2040','awardexp'=>'320'],
['level'=>'94','traintime'=>'6180','jointraintime'=>'2060','awardexp'=>'320'],
['level'=>'95','traintime'=>'6240','jointraintime'=>'2080','awardexp'=>'330'],
['level'=>'96','traintime'=>'6300','jointraintime'=>'2100','awardexp'=>'330'],
['level'=>'97','traintime'=>'6360','jointraintime'=>'2120','awardexp'=>'330'],
['level'=>'98','traintime'=>'6420','jointraintime'=>'2140','awardexp'=>'330'],
['level'=>'99','traintime'=>'6480','jointraintime'=>'2160','awardexp'=>'330'],
['level'=>'100','traintime'=>'6540','jointraintime'=>'2180','awardexp'=>'330'],
['level'=>'101','traintime'=>'6600','jointraintime'=>'2200','awardexp'=>'330'],
['level'=>'102','traintime'=>'6660','jointraintime'=>'2220','awardexp'=>'330'],
['level'=>'103','traintime'=>'6720','jointraintime'=>'2240','awardexp'=>'330'],
['level'=>'104','traintime'=>'6780','jointraintime'=>'2260','awardexp'=>'330'],
['level'=>'105','traintime'=>'6840','jointraintime'=>'2280','awardexp'=>'330'],
['level'=>'106','traintime'=>'6900','jointraintime'=>'2300','awardexp'=>'330'],
['level'=>'107','traintime'=>'6960','jointraintime'=>'2320','awardexp'=>'330'],
['level'=>'108','traintime'=>'7020','jointraintime'=>'2340','awardexp'=>'330'],
['level'=>'109','traintime'=>'7080','jointraintime'=>'2360','awardexp'=>'330'],
['level'=>'110','traintime'=>'7140','jointraintime'=>'2380','awardexp'=>'330'],
['level'=>'111','traintime'=>'7200','jointraintime'=>'2400','awardexp'=>'330'],
['level'=>'112','traintime'=>'7260','jointraintime'=>'2420','awardexp'=>'330'],
['level'=>'113','traintime'=>'7320','jointraintime'=>'2440','awardexp'=>'330'],
['level'=>'114','traintime'=>'7380','jointraintime'=>'2460','awardexp'=>'330'],
['level'=>'115','traintime'=>'7440','jointraintime'=>'2480','awardexp'=>'340'],
['level'=>'116','traintime'=>'7500','jointraintime'=>'2500','awardexp'=>'340'],
['level'=>'117','traintime'=>'7560','jointraintime'=>'2520','awardexp'=>'340'],
['level'=>'118','traintime'=>'7620','jointraintime'=>'2540','awardexp'=>'340'],
['level'=>'119','traintime'=>'7680','jointraintime'=>'2560','awardexp'=>'340'],
['level'=>'120','traintime'=>'7740','jointraintime'=>'2580','awardexp'=>'340'],
['level'=>'121','traintime'=>'7800','jointraintime'=>'2600','awardexp'=>'340'],
['level'=>'122','traintime'=>'7860','jointraintime'=>'2620','awardexp'=>'340'],
['level'=>'123','traintime'=>'7920','jointraintime'=>'2640','awardexp'=>'340'],
['level'=>'124','traintime'=>'7980','jointraintime'=>'2660','awardexp'=>'340'],
['level'=>'125','traintime'=>'8040','jointraintime'=>'2680','awardexp'=>'340'],
['level'=>'126','traintime'=>'8100','jointraintime'=>'2700','awardexp'=>'340'],
['level'=>'127','traintime'=>'8160','jointraintime'=>'2720','awardexp'=>'340'],
['level'=>'128','traintime'=>'8220','jointraintime'=>'2740','awardexp'=>'340'],
['level'=>'129','traintime'=>'8280','jointraintime'=>'2760','awardexp'=>'340'],
['level'=>'130','traintime'=>'8340','jointraintime'=>'2780','awardexp'=>'340'],
['level'=>'131','traintime'=>'8400','jointraintime'=>'2800','awardexp'=>'340'],
['level'=>'132','traintime'=>'8460','jointraintime'=>'2820','awardexp'=>'340'],
['level'=>'133','traintime'=>'8520','jointraintime'=>'2840','awardexp'=>'340'],
['level'=>'134','traintime'=>'8580','jointraintime'=>'2860','awardexp'=>'350'],
['level'=>'135','traintime'=>'8640','jointraintime'=>'2880','awardexp'=>'350'],
['level'=>'136','traintime'=>'8700','jointraintime'=>'2900','awardexp'=>'350'],
['level'=>'137','traintime'=>'8760','jointraintime'=>'2920','awardexp'=>'350'],
['level'=>'138','traintime'=>'8820','jointraintime'=>'2940','awardexp'=>'350'],
['level'=>'139','traintime'=>'8880','jointraintime'=>'2960','awardexp'=>'350'],
['level'=>'140','traintime'=>'8940','jointraintime'=>'2980','awardexp'=>'350'],
['level'=>'141','traintime'=>'9000','jointraintime'=>'3000','awardexp'=>'350'],
['level'=>'142','traintime'=>'9060','jointraintime'=>'3020','awardexp'=>'350'],
['level'=>'143','traintime'=>'9120','jointraintime'=>'3040','awardexp'=>'350'],
['level'=>'144','traintime'=>'9180','jointraintime'=>'3060','awardexp'=>'350'],
['level'=>'145','traintime'=>'9240','jointraintime'=>'3080','awardexp'=>'350'],
['level'=>'146','traintime'=>'9300','jointraintime'=>'3100','awardexp'=>'350'],
['level'=>'147','traintime'=>'9360','jointraintime'=>'3120','awardexp'=>'350'],
['level'=>'148','traintime'=>'9420','jointraintime'=>'3140','awardexp'=>'350'],
['level'=>'149','traintime'=>'9480','jointraintime'=>'3160','awardexp'=>'350'],
['level'=>'150','traintime'=>'9540','jointraintime'=>'3180','awardexp'=>'350'],
['level'=>'151','traintime'=>'9600','jointraintime'=>'3200','awardexp'=>'350'],
['level'=>'152','traintime'=>'9660','jointraintime'=>'3220','awardexp'=>'350'],
['level'=>'153','traintime'=>'9720','jointraintime'=>'3240','awardexp'=>'350'],
['level'=>'154','traintime'=>'9780','jointraintime'=>'3260','awardexp'=>'350'],
['level'=>'155','traintime'=>'9840','jointraintime'=>'3280','awardexp'=>'360'],
['level'=>'156','traintime'=>'9900','jointraintime'=>'3300','awardexp'=>'360'],
['level'=>'157','traintime'=>'9960','jointraintime'=>'3320','awardexp'=>'360'],
['level'=>'158','traintime'=>'10020','jointraintime'=>'3340','awardexp'=>'360'],
['level'=>'159','traintime'=>'10080','jointraintime'=>'3360','awardexp'=>'360'],
['level'=>'160','traintime'=>'10140','jointraintime'=>'3380','awardexp'=>'360'],
['level'=>'161','traintime'=>'10200','jointraintime'=>'3400','awardexp'=>'360'],
['level'=>'162','traintime'=>'10260','jointraintime'=>'3420','awardexp'=>'360'],
['level'=>'163','traintime'=>'10320','jointraintime'=>'3440','awardexp'=>'360'],
['level'=>'164','traintime'=>'10380','jointraintime'=>'3460','awardexp'=>'360'],
['level'=>'165','traintime'=>'10440','jointraintime'=>'3480','awardexp'=>'360'],
['level'=>'166','traintime'=>'10500','jointraintime'=>'3500','awardexp'=>'360'],
['level'=>'167','traintime'=>'10560','jointraintime'=>'3520','awardexp'=>'360'],
['level'=>'168','traintime'=>'10620','jointraintime'=>'3540','awardexp'=>'360'],
['level'=>'169','traintime'=>'10680','jointraintime'=>'3560','awardexp'=>'360'],
['level'=>'170','traintime'=>'10740','jointraintime'=>'3580','awardexp'=>'360'],
['level'=>'171','traintime'=>'10800','jointraintime'=>'3600','awardexp'=>'360'],
['level'=>'172','traintime'=>'10860','jointraintime'=>'3620','awardexp'=>'360'],
['level'=>'173','traintime'=>'10920','jointraintime'=>'3640','awardexp'=>'370'],
['level'=>'174','traintime'=>'10980','jointraintime'=>'3660','awardexp'=>'370'],
['level'=>'175','traintime'=>'11040','jointraintime'=>'3680','awardexp'=>'370'],
['level'=>'176','traintime'=>'11100','jointraintime'=>'3700','awardexp'=>'370'],
['level'=>'177','traintime'=>'11160','jointraintime'=>'3720','awardexp'=>'370'],
['level'=>'178','traintime'=>'11220','jointraintime'=>'3740','awardexp'=>'370'],
['level'=>'179','traintime'=>'11280','jointraintime'=>'3760','awardexp'=>'370'],
['level'=>'180','traintime'=>'11340','jointraintime'=>'3780','awardexp'=>'370'],
['level'=>'181','traintime'=>'11400','jointraintime'=>'3800','awardexp'=>'370'],
['level'=>'182','traintime'=>'11460','jointraintime'=>'3820','awardexp'=>'370'],
['level'=>'183','traintime'=>'11520','jointraintime'=>'3840','awardexp'=>'370'],
['level'=>'184','traintime'=>'11580','jointraintime'=>'3860','awardexp'=>'370'],
['level'=>'185','traintime'=>'11640','jointraintime'=>'3880','awardexp'=>'370'],
['level'=>'186','traintime'=>'11700','jointraintime'=>'3900','awardexp'=>'370'],
['level'=>'187','traintime'=>'11760','jointraintime'=>'3920','awardexp'=>'370'],
['level'=>'188','traintime'=>'11820','jointraintime'=>'3940','awardexp'=>'370'],
['level'=>'189','traintime'=>'11880','jointraintime'=>'3960','awardexp'=>'370'],
['level'=>'190','traintime'=>'11940','jointraintime'=>'3980','awardexp'=>'370'],
['level'=>'191','traintime'=>'12000','jointraintime'=>'4000','awardexp'=>'370'],
['level'=>'192','traintime'=>'12060','jointraintime'=>'4020','awardexp'=>'370'],
['level'=>'193','traintime'=>'12120','jointraintime'=>'4040','awardexp'=>'370'],
['level'=>'194','traintime'=>'12180','jointraintime'=>'4060','awardexp'=>'370'],
['level'=>'195','traintime'=>'12240','jointraintime'=>'4080','awardexp'=>'370'],
['level'=>'196','traintime'=>'12300','jointraintime'=>'4100','awardexp'=>'370'],
['level'=>'197','traintime'=>'12360','jointraintime'=>'4120','awardexp'=>'370'],
['level'=>'198','traintime'=>'12420','jointraintime'=>'4140','awardexp'=>'370'],
['level'=>'199','traintime'=>'12480','jointraintime'=>'4160','awardexp'=>'370'],
['level'=>'200','traintime'=>'12540','jointraintime'=>'4180','awardexp'=>'380'],
['level'=>'201','traintime'=>'12600','jointraintime'=>'4200','awardexp'=>'380'],
['level'=>'202','traintime'=>'12660','jointraintime'=>'4220','awardexp'=>'380'],
['level'=>'203','traintime'=>'12720','jointraintime'=>'4240','awardexp'=>'380'],
['level'=>'204','traintime'=>'12780','jointraintime'=>'4260','awardexp'=>'380'],
['level'=>'205','traintime'=>'12840','jointraintime'=>'4280','awardexp'=>'380'],
['level'=>'206','traintime'=>'12900','jointraintime'=>'4300','awardexp'=>'380'],
['level'=>'207','traintime'=>'12960','jointraintime'=>'4320','awardexp'=>'380'],
['level'=>'208','traintime'=>'13020','jointraintime'=>'4340','awardexp'=>'380'],
['level'=>'209','traintime'=>'13080','jointraintime'=>'4360','awardexp'=>'380'],
['level'=>'210','traintime'=>'13140','jointraintime'=>'4380','awardexp'=>'380'],
['level'=>'211','traintime'=>'13200','jointraintime'=>'4400','awardexp'=>'380'],
['level'=>'212','traintime'=>'13260','jointraintime'=>'4420','awardexp'=>'380'],
['level'=>'213','traintime'=>'13320','jointraintime'=>'4440','awardexp'=>'380'],
['level'=>'214','traintime'=>'13380','jointraintime'=>'4460','awardexp'=>'380'],
['level'=>'215','traintime'=>'13440','jointraintime'=>'4480','awardexp'=>'380'],
['level'=>'216','traintime'=>'13500','jointraintime'=>'4500','awardexp'=>'380'],
['level'=>'217','traintime'=>'13560','jointraintime'=>'4520','awardexp'=>'380'],
['level'=>'218','traintime'=>'13620','jointraintime'=>'4540','awardexp'=>'380'],
['level'=>'219','traintime'=>'13680','jointraintime'=>'4560','awardexp'=>'380'],
['level'=>'220','traintime'=>'13740','jointraintime'=>'4580','awardexp'=>'380'],
['level'=>'221','traintime'=>'13800','jointraintime'=>'4600','awardexp'=>'380'],
['level'=>'222','traintime'=>'13860','jointraintime'=>'4620','awardexp'=>'380'],
['level'=>'223','traintime'=>'13920','jointraintime'=>'4640','awardexp'=>'380'],
['level'=>'224','traintime'=>'13980','jointraintime'=>'4660','awardexp'=>'380'],
['level'=>'225','traintime'=>'14040','jointraintime'=>'4680','awardexp'=>'380'],
['level'=>'226','traintime'=>'14100','jointraintime'=>'4700','awardexp'=>'380'],
['level'=>'227','traintime'=>'14160','jointraintime'=>'4720','awardexp'=>'380'],
['level'=>'228','traintime'=>'14220','jointraintime'=>'4740','awardexp'=>'380'],
['level'=>'229','traintime'=>'14280','jointraintime'=>'4760','awardexp'=>'380'],
['level'=>'230','traintime'=>'14340','jointraintime'=>'4780','awardexp'=>'380'],
['level'=>'231','traintime'=>'14400','jointraintime'=>'4800','awardexp'=>'380'],
['level'=>'232','traintime'=>'14460','jointraintime'=>'4820','awardexp'=>'380'],
['level'=>'233','traintime'=>'14520','jointraintime'=>'4840','awardexp'=>'380'],
['level'=>'234','traintime'=>'14580','jointraintime'=>'4860','awardexp'=>'380'],
['level'=>'235','traintime'=>'14640','jointraintime'=>'4880','awardexp'=>'380'],
['level'=>'236','traintime'=>'14700','jointraintime'=>'4900','awardexp'=>'380'],
['level'=>'237','traintime'=>'14760','jointraintime'=>'4920','awardexp'=>'380'],
['level'=>'238','traintime'=>'14820','jointraintime'=>'4940','awardexp'=>'380'],
['level'=>'239','traintime'=>'14880','jointraintime'=>'4960','awardexp'=>'380'],
['level'=>'240','traintime'=>'14940','jointraintime'=>'4980','awardexp'=>'380'],
['level'=>'241','traintime'=>'15000','jointraintime'=>'5000','awardexp'=>'380'],
['level'=>'242','traintime'=>'15060','jointraintime'=>'5020','awardexp'=>'380'],
['level'=>'243','traintime'=>'15120','jointraintime'=>'5040','awardexp'=>'380'],
['level'=>'244','traintime'=>'15180','jointraintime'=>'5060','awardexp'=>'380'],
['level'=>'245','traintime'=>'15240','jointraintime'=>'5080','awardexp'=>'380'],
['level'=>'246','traintime'=>'15300','jointraintime'=>'5100','awardexp'=>'380'],
['level'=>'247','traintime'=>'15360','jointraintime'=>'5120','awardexp'=>'380'],
['level'=>'248','traintime'=>'15420','jointraintime'=>'5140','awardexp'=>'380'],
['level'=>'249','traintime'=>'15480','jointraintime'=>'5160','awardexp'=>'380'],
['level'=>'250','traintime'=>'15540','jointraintime'=>'5180','awardexp'=>'390'],
['level'=>'251','traintime'=>'15600','jointraintime'=>'5200','awardexp'=>'390'],
['level'=>'252','traintime'=>'15660','jointraintime'=>'5220','awardexp'=>'390'],
['level'=>'253','traintime'=>'15720','jointraintime'=>'5240','awardexp'=>'390'],
['level'=>'254','traintime'=>'15780','jointraintime'=>'5260','awardexp'=>'390'],
['level'=>'255','traintime'=>'15840','jointraintime'=>'5280','awardexp'=>'390'],
['level'=>'256','traintime'=>'15900','jointraintime'=>'5300','awardexp'=>'390'],
['level'=>'257','traintime'=>'15960','jointraintime'=>'5320','awardexp'=>'390'],
['level'=>'258','traintime'=>'16020','jointraintime'=>'5340','awardexp'=>'390'],
['level'=>'259','traintime'=>'16080','jointraintime'=>'5360','awardexp'=>'390'],
['level'=>'260','traintime'=>'16140','jointraintime'=>'5380','awardexp'=>'390'],
['level'=>'261','traintime'=>'16200','jointraintime'=>'5400','awardexp'=>'390'],
['level'=>'262','traintime'=>'16260','jointraintime'=>'5420','awardexp'=>'390'],
['level'=>'263','traintime'=>'16320','jointraintime'=>'5440','awardexp'=>'390'],
['level'=>'264','traintime'=>'16380','jointraintime'=>'5460','awardexp'=>'390'],
['level'=>'265','traintime'=>'16440','jointraintime'=>'5480','awardexp'=>'390'],
['level'=>'266','traintime'=>'16500','jointraintime'=>'5500','awardexp'=>'390'],
['level'=>'267','traintime'=>'16560','jointraintime'=>'5520','awardexp'=>'390'],
['level'=>'268','traintime'=>'16620','jointraintime'=>'5540','awardexp'=>'390'],
['level'=>'269','traintime'=>'16680','jointraintime'=>'5560','awardexp'=>'390'],
['level'=>'270','traintime'=>'16740','jointraintime'=>'5580','awardexp'=>'390'],
['level'=>'271','traintime'=>'16800','jointraintime'=>'5600','awardexp'=>'390'],
['level'=>'272','traintime'=>'16860','jointraintime'=>'5620','awardexp'=>'390'],
['level'=>'273','traintime'=>'16920','jointraintime'=>'5640','awardexp'=>'390'],
['level'=>'274','traintime'=>'16980','jointraintime'=>'5660','awardexp'=>'390'],
['level'=>'275','traintime'=>'17040','jointraintime'=>'5680','awardexp'=>'390'],
['level'=>'276','traintime'=>'17100','jointraintime'=>'5700','awardexp'=>'390'],
['level'=>'277','traintime'=>'17160','jointraintime'=>'5720','awardexp'=>'390'],
['level'=>'278','traintime'=>'17220','jointraintime'=>'5740','awardexp'=>'390'],
['level'=>'279','traintime'=>'17280','jointraintime'=>'5760','awardexp'=>'390'],
['level'=>'280','traintime'=>'17340','jointraintime'=>'5780','awardexp'=>'390'],
['level'=>'281','traintime'=>'17400','jointraintime'=>'5800','awardexp'=>'390'],
['level'=>'282','traintime'=>'17460','jointraintime'=>'5820','awardexp'=>'390'],
['level'=>'283','traintime'=>'17520','jointraintime'=>'5840','awardexp'=>'390'],
['level'=>'284','traintime'=>'17580','jointraintime'=>'5860','awardexp'=>'390'],
['level'=>'285','traintime'=>'17640','jointraintime'=>'5880','awardexp'=>'390'],
['level'=>'286','traintime'=>'17700','jointraintime'=>'5900','awardexp'=>'390'],
['level'=>'287','traintime'=>'17760','jointraintime'=>'5920','awardexp'=>'390'],
['level'=>'288','traintime'=>'17820','jointraintime'=>'5940','awardexp'=>'390'],
['level'=>'289','traintime'=>'17880','jointraintime'=>'5960','awardexp'=>'390'],
['level'=>'290','traintime'=>'17940','jointraintime'=>'5980','awardexp'=>'390'],
['level'=>'291','traintime'=>'18000','jointraintime'=>'6000','awardexp'=>'390'],
['level'=>'292','traintime'=>'18060','jointraintime'=>'6020','awardexp'=>'390'],
['level'=>'293','traintime'=>'18120','jointraintime'=>'6040','awardexp'=>'390'],
['level'=>'294','traintime'=>'18180','jointraintime'=>'6060','awardexp'=>'390'],
['level'=>'295','traintime'=>'18240','jointraintime'=>'6080','awardexp'=>'390'],
['level'=>'296','traintime'=>'18300','jointraintime'=>'6100','awardexp'=>'390'],
['level'=>'297','traintime'=>'18360','jointraintime'=>'6120','awardexp'=>'390'],
['level'=>'298','traintime'=>'18420','jointraintime'=>'6140','awardexp'=>'390'],
['level'=>'299','traintime'=>'18480','jointraintime'=>'6160','awardexp'=>'390'],
['level'=>'300','traintime'=>'18540','jointraintime'=>'6180','awardexp'=>'390']
];
}
 return self::$_data;
}
}