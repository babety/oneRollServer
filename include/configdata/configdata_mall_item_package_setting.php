<?php
namespace configdata;
/**
* gen by zeus.php
*/
class configdata_mall_item_package_setting {
const k_id = "id";
const k_packageid = "packageid";
const k_itemid = "itemid";
const k_itemcount = "itemcount";
private static $_data = NULL;
public static function data() {
if (is_null ( self::$_data )) {
self::$_data = [
['id'=>'18','packageid'=>'10001','itemid'=>'301165','itemcount'=>'3'],
['id'=>'19','packageid'=>'10001','itemid'=>'301081','itemcount'=>'2'],
['id'=>'20','packageid'=>'10001','itemid'=>'301015','itemcount'=>'1'],
['id'=>'21','packageid'=>'10001','itemid'=>'301016','itemcount'=>'1'],
['id'=>'22','packageid'=>'10001','itemid'=>'301106','itemcount'=>'1'],
['id'=>'23','packageid'=>'10001','itemid'=>'401007','itemcount'=>'2'],
['id'=>'24','packageid'=>'10001','itemid'=>'401008','itemcount'=>'1'],
['id'=>'25','packageid'=>'10001','itemid'=>'401009','itemcount'=>'2'],
['id'=>'32','packageid'=>'10001','itemid'=>'801004','itemcount'=>'1'],
['id'=>'33','packageid'=>'10001','itemid'=>'802001','itemcount'=>'1'],
['id'=>'34','packageid'=>'10001','itemid'=>'803009','itemcount'=>'1'],
['id'=>'35','packageid'=>'10001','itemid'=>'806004','itemcount'=>'1'],
['id'=>'124','packageid'=>'20001','itemid'=>'601001','itemcount'=>'1'],
['id'=>'125','packageid'=>'20001','itemid'=>'209002','itemcount'=>'10'],
['id'=>'126','packageid'=>'20001','itemid'=>'110001','itemcount'=>'1'],
['id'=>'127','packageid'=>'20002','itemid'=>'1','itemcount'=>'288'],
['id'=>'128','packageid'=>'20002','itemid'=>'209001','itemcount'=>'10'],
['id'=>'129','packageid'=>'20002','itemid'=>'113003','itemcount'=>'1'],
['id'=>'130','packageid'=>'20002','itemid'=>'117001','itemcount'=>'1'],
['id'=>'131','packageid'=>'20003','itemid'=>'1','itemcount'=>'888'],
['id'=>'132','packageid'=>'20003','itemid'=>'105002','itemcount'=>'1'],
['id'=>'133','packageid'=>'20003','itemid'=>'401008','itemcount'=>'1'],
['id'=>'134','packageid'=>'20003','itemid'=>'401009','itemcount'=>'2'],
['id'=>'135','packageid'=>'20004','itemid'=>'1000005','itemcount'=>'1'],
['id'=>'136','packageid'=>'20004','itemid'=>'1000006','itemcount'=>'1'],
['id'=>'137','packageid'=>'20004','itemid'=>'1000007','itemcount'=>'1'],
['id'=>'138','packageid'=>'20004','itemid'=>'1000008','itemcount'=>'1'],
['id'=>'139','packageid'=>'20005','itemid'=>'1000009','itemcount'=>'1'],
['id'=>'140','packageid'=>'20005','itemid'=>'1000010','itemcount'=>'1'],
['id'=>'141','packageid'=>'20005','itemid'=>'1000014','itemcount'=>'1'],
['id'=>'142','packageid'=>'20005','itemid'=>'1000015','itemcount'=>'1'],
['id'=>'143','packageid'=>'20006','itemid'=>'1000016','itemcount'=>'1'],
['id'=>'144','packageid'=>'20006','itemid'=>'1000017','itemcount'=>'1'],
['id'=>'145','packageid'=>'20006','itemid'=>'1000018','itemcount'=>'1'],
['id'=>'146','packageid'=>'20006','itemid'=>'1000019','itemcount'=>'1'],
['id'=>'147','packageid'=>'20007','itemid'=>'1000020','itemcount'=>'1'],
['id'=>'148','packageid'=>'20007','itemid'=>'1000021','itemcount'=>'1'],
['id'=>'149','packageid'=>'20007','itemid'=>'1000022','itemcount'=>'1'],
['id'=>'150','packageid'=>'20007','itemid'=>'1000023','itemcount'=>'1'],
['id'=>'151','packageid'=>'20008','itemid'=>'1000024','itemcount'=>'1'],
['id'=>'152','packageid'=>'20008','itemid'=>'1000025','itemcount'=>'1'],
['id'=>'153','packageid'=>'20008','itemid'=>'1000026','itemcount'=>'1'],
['id'=>'154','packageid'=>'20008','itemid'=>'1000027','itemcount'=>'1'],
['id'=>'155','packageid'=>'20009','itemid'=>'1000028','itemcount'=>'1'],
['id'=>'156','packageid'=>'20009','itemid'=>'1000029','itemcount'=>'1'],
['id'=>'157','packageid'=>'20009','itemid'=>'1000030','itemcount'=>'1'],
['id'=>'158','packageid'=>'20009','itemid'=>'1000031','itemcount'=>'1'],
['id'=>'159','packageid'=>'20010','itemid'=>'1000032','itemcount'=>'1'],
['id'=>'160','packageid'=>'20010','itemid'=>'1000033','itemcount'=>'1'],
['id'=>'161','packageid'=>'20010','itemid'=>'1000034','itemcount'=>'1'],
['id'=>'162','packageid'=>'20010','itemid'=>'1000035','itemcount'=>'1'],
['id'=>'163','packageid'=>'20011','itemid'=>'1000036','itemcount'=>'1'],
['id'=>'164','packageid'=>'20011','itemid'=>'1000037','itemcount'=>'1'],
['id'=>'165','packageid'=>'20011','itemid'=>'1000038','itemcount'=>'1'],
['id'=>'166','packageid'=>'20011','itemid'=>'1000039','itemcount'=>'1'],
['id'=>'167','packageid'=>'20012','itemid'=>'1000040','itemcount'=>'1'],
['id'=>'168','packageid'=>'20012','itemid'=>'1000041','itemcount'=>'1'],
['id'=>'169','packageid'=>'20012','itemid'=>'1000047','itemcount'=>'1'],
['id'=>'170','packageid'=>'20012','itemid'=>'1000048','itemcount'=>'1'],
['id'=>'171','packageid'=>'20013','itemid'=>'1000049','itemcount'=>'1'],
['id'=>'172','packageid'=>'20013','itemid'=>'1000050','itemcount'=>'1'],
['id'=>'173','packageid'=>'20013','itemid'=>'1000051','itemcount'=>'1'],
['id'=>'174','packageid'=>'20013','itemid'=>'1000052','itemcount'=>'1'],
['id'=>'175','packageid'=>'20014','itemid'=>'1000053','itemcount'=>'1'],
['id'=>'176','packageid'=>'20014','itemid'=>'1000054','itemcount'=>'1'],
['id'=>'177','packageid'=>'20014','itemid'=>'1000055','itemcount'=>'1'],
['id'=>'178','packageid'=>'20014','itemid'=>'1000056','itemcount'=>'1'],
['id'=>'179','packageid'=>'20015','itemid'=>'1000057','itemcount'=>'1'],
['id'=>'180','packageid'=>'20015','itemid'=>'1000058','itemcount'=>'1'],
['id'=>'181','packageid'=>'20015','itemid'=>'1000059','itemcount'=>'1'],
['id'=>'182','packageid'=>'20015','itemid'=>'1000060','itemcount'=>'1'],
['id'=>'183','packageid'=>'20016','itemid'=>'1000061','itemcount'=>'1'],
['id'=>'184','packageid'=>'20016','itemid'=>'1000062','itemcount'=>'1'],
['id'=>'185','packageid'=>'20016','itemid'=>'1000063','itemcount'=>'1'],
['id'=>'186','packageid'=>'20016','itemid'=>'1000064','itemcount'=>'1'],
['id'=>'187','packageid'=>'20017','itemid'=>'1000065','itemcount'=>'1'],
['id'=>'188','packageid'=>'20017','itemid'=>'1000066','itemcount'=>'1'],
['id'=>'189','packageid'=>'20017','itemid'=>'1000067','itemcount'=>'1'],
['id'=>'190','packageid'=>'20017','itemid'=>'1000068','itemcount'=>'1'],
['id'=>'191','packageid'=>'20018','itemid'=>'1000069','itemcount'=>'1'],
['id'=>'192','packageid'=>'20018','itemid'=>'1000070','itemcount'=>'1'],
['id'=>'193','packageid'=>'20018','itemid'=>'1000071','itemcount'=>'1'],
['id'=>'194','packageid'=>'20018','itemid'=>'1000072','itemcount'=>'1'],
['id'=>'195','packageid'=>'20019','itemid'=>'1000073','itemcount'=>'1'],
['id'=>'196','packageid'=>'20019','itemid'=>'1000074','itemcount'=>'1'],
['id'=>'197','packageid'=>'20019','itemid'=>'1000075','itemcount'=>'1'],
['id'=>'198','packageid'=>'20019','itemid'=>'1000076','itemcount'=>'1'],
['id'=>'199','packageid'=>'20020','itemid'=>'1000077','itemcount'=>'1'],
['id'=>'200','packageid'=>'20020','itemid'=>'1000078','itemcount'=>'1'],
['id'=>'201','packageid'=>'20020','itemid'=>'1000079','itemcount'=>'1'],
['id'=>'202','packageid'=>'20020','itemid'=>'1000080','itemcount'=>'1'],
['id'=>'203','packageid'=>'20021','itemid'=>'1000081','itemcount'=>'1'],
['id'=>'204','packageid'=>'20021','itemid'=>'1000082','itemcount'=>'1'],
['id'=>'205','packageid'=>'20021','itemid'=>'1000083','itemcount'=>'1'],
['id'=>'206','packageid'=>'20021','itemid'=>'1000084','itemcount'=>'1'],
['id'=>'207','packageid'=>'20022','itemid'=>'1000085','itemcount'=>'1'],
['id'=>'208','packageid'=>'20022','itemid'=>'1000086','itemcount'=>'1'],
['id'=>'209','packageid'=>'20022','itemid'=>'1000087','itemcount'=>'1'],
['id'=>'210','packageid'=>'20022','itemid'=>'1000088','itemcount'=>'1'],
['id'=>'211','packageid'=>'20023','itemid'=>'1000089','itemcount'=>'1'],
['id'=>'212','packageid'=>'20023','itemid'=>'1000090','itemcount'=>'1'],
['id'=>'213','packageid'=>'20023','itemid'=>'1000091','itemcount'=>'1'],
['id'=>'214','packageid'=>'20023','itemid'=>'1000092','itemcount'=>'1'],
['id'=>'215','packageid'=>'20024','itemid'=>'1000093','itemcount'=>'1'],
['id'=>'216','packageid'=>'20024','itemid'=>'1000094','itemcount'=>'1'],
['id'=>'217','packageid'=>'20024','itemid'=>'1000095','itemcount'=>'1'],
['id'=>'218','packageid'=>'20024','itemid'=>'1000096','itemcount'=>'1'],
['id'=>'219','packageid'=>'20025','itemid'=>'1000097','itemcount'=>'1'],
['id'=>'220','packageid'=>'20025','itemid'=>'1000098','itemcount'=>'1'],
['id'=>'221','packageid'=>'20025','itemid'=>'1000099','itemcount'=>'1'],
['id'=>'222','packageid'=>'20025','itemid'=>'1000100','itemcount'=>'1'],
['id'=>'223','packageid'=>'20026','itemid'=>'1000101','itemcount'=>'1'],
['id'=>'224','packageid'=>'20026','itemid'=>'1000102','itemcount'=>'1'],
['id'=>'225','packageid'=>'20026','itemid'=>'1000103','itemcount'=>'1'],
['id'=>'226','packageid'=>'20026','itemid'=>'1000104','itemcount'=>'1'],
['id'=>'227','packageid'=>'20027','itemid'=>'1000105','itemcount'=>'1'],
['id'=>'228','packageid'=>'20027','itemid'=>'1000106','itemcount'=>'1'],
['id'=>'229','packageid'=>'20027','itemid'=>'1000107','itemcount'=>'1'],
['id'=>'230','packageid'=>'20027','itemid'=>'1000011','itemcount'=>'1'],
['id'=>'231','packageid'=>'20028','itemid'=>'1000012','itemcount'=>'1'],
['id'=>'232','packageid'=>'20028','itemid'=>'1000013','itemcount'=>'1'],
['id'=>'233','packageid'=>'20028','itemid'=>'1000179','itemcount'=>'1'],
['id'=>'234','packageid'=>'20028','itemid'=>'1000180','itemcount'=>'1'],
['id'=>'235','packageid'=>'20029','itemid'=>'1000181','itemcount'=>'1'],
['id'=>'236','packageid'=>'20029','itemid'=>'1000182','itemcount'=>'1'],
['id'=>'237','packageid'=>'20029','itemid'=>'1000183','itemcount'=>'1'],
['id'=>'238','packageid'=>'20029','itemid'=>'1000184','itemcount'=>'1'],
['id'=>'239','packageid'=>'20030','itemid'=>'1000185','itemcount'=>'1'],
['id'=>'240','packageid'=>'20030','itemid'=>'1000186','itemcount'=>'1'],
['id'=>'241','packageid'=>'20030','itemid'=>'1000187','itemcount'=>'1'],
['id'=>'242','packageid'=>'20030','itemid'=>'1000188','itemcount'=>'1'],
['id'=>'243','packageid'=>'20031','itemid'=>'1000124','itemcount'=>'1'],
['id'=>'244','packageid'=>'20031','itemid'=>'1000125','itemcount'=>'1'],
['id'=>'245','packageid'=>'20031','itemid'=>'1000126','itemcount'=>'1'],
['id'=>'246','packageid'=>'20031','itemid'=>'1000127','itemcount'=>'1'],
['id'=>'247','packageid'=>'20032','itemid'=>'1000128','itemcount'=>'1'],
['id'=>'248','packageid'=>'20032','itemid'=>'1000129','itemcount'=>'1'],
['id'=>'249','packageid'=>'20032','itemid'=>'1000130','itemcount'=>'1'],
['id'=>'250','packageid'=>'20032','itemid'=>'1000131','itemcount'=>'1'],
['id'=>'251','packageid'=>'20033','itemid'=>'1000132','itemcount'=>'1'],
['id'=>'252','packageid'=>'20033','itemid'=>'1000133','itemcount'=>'1'],
['id'=>'253','packageid'=>'20033','itemid'=>'1000134','itemcount'=>'1'],
['id'=>'254','packageid'=>'20033','itemid'=>'1000135','itemcount'=>'1'],
['id'=>'255','packageid'=>'20034','itemid'=>'1000136','itemcount'=>'1'],
['id'=>'256','packageid'=>'20034','itemid'=>'1000137','itemcount'=>'1'],
['id'=>'257','packageid'=>'20034','itemid'=>'1000138','itemcount'=>'1'],
['id'=>'258','packageid'=>'20034','itemid'=>'1000139','itemcount'=>'1'],
['id'=>'259','packageid'=>'20035','itemid'=>'1000140','itemcount'=>'1'],
['id'=>'260','packageid'=>'20035','itemid'=>'1000141','itemcount'=>'1'],
['id'=>'261','packageid'=>'20035','itemid'=>'1000142','itemcount'=>'1'],
['id'=>'262','packageid'=>'20035','itemid'=>'1000143','itemcount'=>'1'],
['id'=>'263','packageid'=>'20036','itemid'=>'1000144','itemcount'=>'1'],
['id'=>'264','packageid'=>'20036','itemid'=>'1000145','itemcount'=>'1'],
['id'=>'265','packageid'=>'20036','itemid'=>'1000146','itemcount'=>'1'],
['id'=>'266','packageid'=>'20036','itemid'=>'1000147','itemcount'=>'1'],
['id'=>'267','packageid'=>'20037','itemid'=>'1000148','itemcount'=>'1'],
['id'=>'268','packageid'=>'20037','itemid'=>'1000149','itemcount'=>'1'],
['id'=>'269','packageid'=>'20037','itemid'=>'1000150','itemcount'=>'1'],
['id'=>'270','packageid'=>'20037','itemid'=>'1000151','itemcount'=>'1'],
['id'=>'271','packageid'=>'20038','itemid'=>'1000152','itemcount'=>'1'],
['id'=>'272','packageid'=>'20038','itemid'=>'1000153','itemcount'=>'1'],
['id'=>'273','packageid'=>'20038','itemid'=>'1000154','itemcount'=>'1'],
['id'=>'274','packageid'=>'20038','itemid'=>'1000155','itemcount'=>'1'],
['id'=>'275','packageid'=>'20039','itemid'=>'1000156','itemcount'=>'1'],
['id'=>'276','packageid'=>'20039','itemid'=>'1000157','itemcount'=>'1'],
['id'=>'277','packageid'=>'20039','itemid'=>'1000158','itemcount'=>'1'],
['id'=>'278','packageid'=>'20039','itemid'=>'1000159','itemcount'=>'1'],
['id'=>'279','packageid'=>'20040','itemid'=>'1000160','itemcount'=>'1'],
['id'=>'280','packageid'=>'20040','itemid'=>'1000161','itemcount'=>'1'],
['id'=>'281','packageid'=>'20040','itemid'=>'1000162','itemcount'=>'1'],
['id'=>'282','packageid'=>'20040','itemid'=>'1000163','itemcount'=>'1'],
['id'=>'283','packageid'=>'20041','itemid'=>'1000164','itemcount'=>'1'],
['id'=>'284','packageid'=>'20041','itemid'=>'1000165','itemcount'=>'1'],
['id'=>'285','packageid'=>'20041','itemid'=>'1000166','itemcount'=>'1'],
['id'=>'286','packageid'=>'20041','itemid'=>'1000167','itemcount'=>'1'],
['id'=>'287','packageid'=>'20042','itemid'=>'1000168','itemcount'=>'1'],
['id'=>'288','packageid'=>'20042','itemid'=>'1000169','itemcount'=>'1'],
['id'=>'289','packageid'=>'20042','itemid'=>'1000170','itemcount'=>'1'],
['id'=>'290','packageid'=>'20042','itemid'=>'1000171','itemcount'=>'1'],
['id'=>'291','packageid'=>'20043','itemid'=>'1000172','itemcount'=>'1'],
['id'=>'292','packageid'=>'20043','itemid'=>'1000173','itemcount'=>'1'],
['id'=>'293','packageid'=>'20043','itemid'=>'1000174','itemcount'=>'1'],
['id'=>'294','packageid'=>'20043','itemid'=>'1000175','itemcount'=>'1'],
['id'=>'295','packageid'=>'20044','itemid'=>'1000176','itemcount'=>'1'],
['id'=>'296','packageid'=>'20044','itemid'=>'1000177','itemcount'=>'1'],
['id'=>'297','packageid'=>'20044','itemid'=>'1000178','itemcount'=>'1'],
['id'=>'298','packageid'=>'20045','itemid'=>'105001','itemcount'=>'1'],
['id'=>'299','packageid'=>'20046','itemid'=>'1000189','itemcount'=>'1'],
['id'=>'300','packageid'=>'20046','itemid'=>'1000190','itemcount'=>'1'],
['id'=>'301','packageid'=>'20046','itemid'=>'1000191','itemcount'=>'1'],
['id'=>'302','packageid'=>'20046','itemid'=>'1000192','itemcount'=>'1'],
['id'=>'303','packageid'=>'20047','itemid'=>'1000193','itemcount'=>'1'],
['id'=>'304','packageid'=>'20047','itemid'=>'1000194','itemcount'=>'1'],
['id'=>'305','packageid'=>'20047','itemid'=>'1000195','itemcount'=>'1'],
['id'=>'306','packageid'=>'20047','itemid'=>'1000196','itemcount'=>'1'],
['id'=>'307','packageid'=>'20048','itemid'=>'1000197','itemcount'=>'1'],
['id'=>'308','packageid'=>'20048','itemid'=>'1000198','itemcount'=>'1'],
['id'=>'309','packageid'=>'20048','itemid'=>'1000199','itemcount'=>'1'],
['id'=>'310','packageid'=>'20048','itemid'=>'1000200','itemcount'=>'1'],
['id'=>'311','packageid'=>'20049','itemid'=>'1000201','itemcount'=>'1'],
['id'=>'312','packageid'=>'20049','itemid'=>'1000202','itemcount'=>'1'],
['id'=>'313','packageid'=>'20049','itemid'=>'1000203','itemcount'=>'1'],
['id'=>'314','packageid'=>'20049','itemid'=>'1000601','itemcount'=>'1'],
['id'=>'315','packageid'=>'20050','itemid'=>'1000602','itemcount'=>'1'],
['id'=>'316','packageid'=>'20050','itemid'=>'1000603','itemcount'=>'1'],
['id'=>'317','packageid'=>'20050','itemid'=>'1000604','itemcount'=>'1'],
['id'=>'318','packageid'=>'20050','itemid'=>'1000605','itemcount'=>'1'],
['id'=>'319','packageid'=>'20051','itemid'=>'1000606','itemcount'=>'1'],
['id'=>'320','packageid'=>'20051','itemid'=>'1000607','itemcount'=>'1'],
['id'=>'321','packageid'=>'20051','itemid'=>'1000608','itemcount'=>'1'],
['id'=>'322','packageid'=>'20051','itemid'=>'1000609','itemcount'=>'1'],
['id'=>'323','packageid'=>'20052','itemid'=>'1000610','itemcount'=>'1'],
['id'=>'324','packageid'=>'20052','itemid'=>'1000611','itemcount'=>'1'],
['id'=>'325','packageid'=>'20052','itemid'=>'1000612','itemcount'=>'1'],
['id'=>'326','packageid'=>'20052','itemid'=>'1000613','itemcount'=>'1'],
['id'=>'327','packageid'=>'20053','itemid'=>'1000614','itemcount'=>'1'],
['id'=>'328','packageid'=>'20053','itemid'=>'1000615','itemcount'=>'1'],
['id'=>'329','packageid'=>'20053','itemid'=>'1000616','itemcount'=>'1'],
['id'=>'330','packageid'=>'20053','itemid'=>'1000617','itemcount'=>'1'],
['id'=>'331','packageid'=>'20054','itemid'=>'1000618','itemcount'=>'1'],
['id'=>'332','packageid'=>'20054','itemid'=>'1000619','itemcount'=>'1'],
['id'=>'333','packageid'=>'20054','itemid'=>'1000620','itemcount'=>'1'],
['id'=>'334','packageid'=>'20054','itemid'=>'1000621','itemcount'=>'1'],
['id'=>'335','packageid'=>'20055','itemid'=>'1000622','itemcount'=>'1'],
['id'=>'336','packageid'=>'20055','itemid'=>'1000623','itemcount'=>'1'],
['id'=>'337','packageid'=>'20055','itemid'=>'1000624','itemcount'=>'1'],
['id'=>'338','packageid'=>'20055','itemid'=>'1000625','itemcount'=>'1'],
['id'=>'339','packageid'=>'20056','itemid'=>'1000626','itemcount'=>'1'],
['id'=>'340','packageid'=>'20056','itemid'=>'1000627','itemcount'=>'1'],
['id'=>'341','packageid'=>'20057','itemid'=>'1000628','itemcount'=>'1'],
['id'=>'342','packageid'=>'20057','itemid'=>'1000629','itemcount'=>'1'],
['id'=>'343','packageid'=>'20057','itemid'=>'1000630','itemcount'=>'1'],
['id'=>'344','packageid'=>'20057','itemid'=>'1000631','itemcount'=>'1'],
['id'=>'345','packageid'=>'20058','itemid'=>'1000632','itemcount'=>'1'],
['id'=>'346','packageid'=>'20058','itemid'=>'1000633','itemcount'=>'1'],
['id'=>'347','packageid'=>'20058','itemid'=>'1000634','itemcount'=>'1'],
['id'=>'348','packageid'=>'20058','itemid'=>'1000635','itemcount'=>'1'],
['id'=>'349','packageid'=>'20059','itemid'=>'1000204','itemcount'=>'1'],
['id'=>'350','packageid'=>'20059','itemid'=>'1000205','itemcount'=>'1'],
['id'=>'351','packageid'=>'20059','itemid'=>'1000206','itemcount'=>'1'],
['id'=>'352','packageid'=>'20060','itemid'=>'1000207','itemcount'=>'1'],
['id'=>'353','packageid'=>'20060','itemid'=>'1000208','itemcount'=>'1'],
['id'=>'354','packageid'=>'20060','itemid'=>'1000209','itemcount'=>'1'],
['id'=>'355','packageid'=>'20060','itemid'=>'1000210','itemcount'=>'1'],
['id'=>'356','packageid'=>'20061','itemid'=>'1000211','itemcount'=>'1'],
['id'=>'357','packageid'=>'20061','itemid'=>'1000212','itemcount'=>'1'],
['id'=>'358','packageid'=>'20061','itemid'=>'1000213','itemcount'=>'1'],
['id'=>'359','packageid'=>'20061','itemid'=>'1000214','itemcount'=>'1'],
['id'=>'360','packageid'=>'20062','itemid'=>'1000215','itemcount'=>'1'],
['id'=>'361','packageid'=>'20062','itemid'=>'1000216','itemcount'=>'1'],
['id'=>'362','packageid'=>'20062','itemid'=>'1000217','itemcount'=>'1'],
['id'=>'363','packageid'=>'20062','itemid'=>'1000218','itemcount'=>'1'],
['id'=>'364','packageid'=>'20063','itemid'=>'1000219','itemcount'=>'1'],
['id'=>'365','packageid'=>'20063','itemid'=>'1000220','itemcount'=>'1'],
['id'=>'366','packageid'=>'20063','itemid'=>'1000221','itemcount'=>'1'],
['id'=>'367','packageid'=>'20063','itemid'=>'1000222','itemcount'=>'1'],
['id'=>'368','packageid'=>'20064','itemid'=>'1000223','itemcount'=>'1'],
['id'=>'369','packageid'=>'20064','itemid'=>'1000224','itemcount'=>'1'],
['id'=>'370','packageid'=>'20064','itemid'=>'1000225','itemcount'=>'1'],
['id'=>'371','packageid'=>'20064','itemid'=>'1000226','itemcount'=>'1'],
['id'=>'372','packageid'=>'20065','itemid'=>'1000227','itemcount'=>'1'],
['id'=>'373','packageid'=>'20065','itemid'=>'1000228','itemcount'=>'1'],
['id'=>'374','packageid'=>'20065','itemid'=>'1000229','itemcount'=>'1'],
['id'=>'375','packageid'=>'20065','itemid'=>'1000230','itemcount'=>'1'],
['id'=>'376','packageid'=>'20066','itemid'=>'1000636','itemcount'=>'1'],
['id'=>'377','packageid'=>'20066','itemid'=>'1000637','itemcount'=>'1'],
['id'=>'378','packageid'=>'20066','itemid'=>'1000638','itemcount'=>'1'],
['id'=>'379','packageid'=>'20066','itemid'=>'1000639','itemcount'=>'1'],
['id'=>'380','packageid'=>'20067','itemid'=>'1000640','itemcount'=>'1'],
['id'=>'381','packageid'=>'20067','itemid'=>'1000641','itemcount'=>'1'],
['id'=>'382','packageid'=>'20067','itemid'=>'1000642','itemcount'=>'1'],
['id'=>'383','packageid'=>'20067','itemid'=>'1000643','itemcount'=>'1'],
['id'=>'384','packageid'=>'20068','itemid'=>'1000644','itemcount'=>'1'],
['id'=>'385','packageid'=>'20068','itemid'=>'1000645','itemcount'=>'1'],
['id'=>'386','packageid'=>'20068','itemid'=>'1000646','itemcount'=>'1'],
['id'=>'387','packageid'=>'20068','itemid'=>'1000647','itemcount'=>'1'],
['id'=>'388','packageid'=>'20069','itemid'=>'1000648','itemcount'=>'1'],
['id'=>'389','packageid'=>'20069','itemid'=>'1000649','itemcount'=>'1'],
['id'=>'390','packageid'=>'20069','itemid'=>'1000650','itemcount'=>'1'],
['id'=>'391','packageid'=>'20069','itemid'=>'1000651','itemcount'=>'1'],
['id'=>'392','packageid'=>'20070','itemid'=>'1000652','itemcount'=>'1'],
['id'=>'393','packageid'=>'20070','itemid'=>'1000653','itemcount'=>'1'],
['id'=>'394','packageid'=>'20070','itemid'=>'1000654','itemcount'=>'1'],
['id'=>'395','packageid'=>'20070','itemid'=>'1000655','itemcount'=>'1'],
['id'=>'396','packageid'=>'20071','itemid'=>'1000656','itemcount'=>'1'],
['id'=>'397','packageid'=>'20071','itemid'=>'1000657','itemcount'=>'1'],
['id'=>'398','packageid'=>'20071','itemid'=>'1000658','itemcount'=>'1'],
['id'=>'399','packageid'=>'20071','itemid'=>'1000659','itemcount'=>'1'],
['id'=>'400','packageid'=>'20072','itemid'=>'1000012','itemcount'=>'1'],
['id'=>'401','packageid'=>'20072','itemid'=>'1000231','itemcount'=>'1'],
['id'=>'402','packageid'=>'20072','itemid'=>'1000232','itemcount'=>'1'],
['id'=>'403','packageid'=>'20072','itemid'=>'1000233','itemcount'=>'1'],
['id'=>'404','packageid'=>'20073','itemid'=>'1000234','itemcount'=>'1'],
['id'=>'405','packageid'=>'20073','itemid'=>'1000235','itemcount'=>'1'],
['id'=>'406','packageid'=>'20073','itemid'=>'1000236','itemcount'=>'1'],
['id'=>'407','packageid'=>'20073','itemid'=>'1000237','itemcount'=>'1'],
['id'=>'408','packageid'=>'20074','itemid'=>'1000660','itemcount'=>'1'],
['id'=>'409','packageid'=>'20074','itemid'=>'1000661','itemcount'=>'1'],
['id'=>'410','packageid'=>'20074','itemid'=>'1000662','itemcount'=>'1'],
['id'=>'411','packageid'=>'20074','itemid'=>'1000663','itemcount'=>'1'],
['id'=>'412','packageid'=>'20075','itemid'=>'1000664','itemcount'=>'1'],
['id'=>'413','packageid'=>'20075','itemid'=>'1000665','itemcount'=>'1'],
['id'=>'414','packageid'=>'20075','itemid'=>'1000666','itemcount'=>'1'],
['id'=>'415','packageid'=>'20075','itemid'=>'1000667','itemcount'=>'1'],
['id'=>'416','packageid'=>'20076','itemid'=>'1000668','itemcount'=>'1'],
['id'=>'417','packageid'=>'20076','itemid'=>'1000669','itemcount'=>'1'],
['id'=>'418','packageid'=>'20076','itemid'=>'1000670','itemcount'=>'1'],
['id'=>'419','packageid'=>'20077','itemid'=>'1000671','itemcount'=>'1'],
['id'=>'420','packageid'=>'20077','itemid'=>'1000672','itemcount'=>'1'],
['id'=>'421','packageid'=>'20077','itemid'=>'1000673','itemcount'=>'1'],
['id'=>'422','packageid'=>'20077','itemid'=>'1000674','itemcount'=>'1'],
['id'=>'423','packageid'=>'20078','itemid'=>'1000675','itemcount'=>'1'],
['id'=>'424','packageid'=>'20078','itemid'=>'1000676','itemcount'=>'1']
];
}
 return self::$_data;
}
}
