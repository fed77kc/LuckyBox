<?
header("Content-type:application/json; charset=utf-8");
$t1 = 20.00;
$t1 = $t1 + $_GET["t"];
$json = '{
	"process":{"allow":2,"number":0},
	"sensors":[
	{"t1":{"value":'.$t1.',"name":"В царге","color":7905,"member":0,"priority":0,"allertValue":50.00}},
	{"t2":{"value":35.25,"name":"В узле отбора","color":65504,"member":0,"priority":0,"allertValue":55.35}},
	{"t3":{"value":50.00,"name":"В кубе","color":64588,"member":0,"priority":0,"allertValue":91}},
	{"t4":{"value":25.00,"name":"Вода на выходе","color":16799,"member":0,"priority":0,"allertValue":30}},
	{"t5":{"value":150.00,"name":"","color":0,"member":0,"priority":0,"allertValue":0}},
	{"t6":{"value":150.00,"name":"","color":0,"member":0,"priority":0,"allertValue":0}},
	{"t7":{"value":150.00,"name":"","color":0,"member":0,"priority":0,"allertValue":0}},
	{"t8":{"value":150.00,"name":"","color":0,"member":0,"priority":0,"allertValue":0}},
	{"p1":{"value":760.00,"color":0,"member":0}}
],
	"devices":[
	{"out1":{"value":0,"member":0}},
	{"out2":{"value":0,"member":0}},
	{"out3":{"value":0,"member":0}},
	{"out4":{"value":0,"member":0}},
	{"out5":{"value":0,"member":0}},
	{"out6":{"value":0,"member":0}},
	{"out7":{"value":0,"member":0}},
	{"out8":{"value":0,"member":0}}
],
	"safety":[
	{"in1":{"value":0,"allert":0}},
	{"in2":{"value":0,"allert":0}},
	{"in3":{"value":0,"allert":0}},
	{"in4":{"value":0,"allert":0}}
],
	"power":80,
	"temperatureAlcoholBoil":78.15,
	"temperatureStartPressure":78.00
}';
echo $json;