<?php

$one_line_addresses = array(
	'36-26 Main St. 2X, Flushing NY 11354',
	'',
	'',
);

$school_names = array(
	'en' => array(
		'Flushing School',
		'Chinatown',
		'Brooklyn',
	),
	'zh-hans' => array(
		'法拉盛',
		'',
		'',
	),
);

$table_header  = array(
	'en' => array(
		'Thursday',
		'Friday',
		'Saturday',
		'Sunday',
	),
	'zh-hans' => array(
		'星期四',
		'星期五',
		'星期六',
		'星期天',
	),
);

$times = array(
	'9:30AM - 11:00AM',
	'11:00AM - 12:30PM',
	'1:00PM - 2:30PM',
	'2:30PM - 4:00PM',
	'4:00PM - 5:30PM',
	'5:30PM - 7:00PM',
);

$page_jump_link = array(
	'#flushing-schedule-table',
	'#chinatown-schedule-table',
	'#brooklyn-schedule-table',
);

$page_icon = array(
	'sevenTrain.jpg',
	'',
	'',
);

/* 0:Thursday 1:Friday 2:Saturday 3:Sunday*/
$flushing_time_slot = array(
	array(
		'B',
		'B',
		'B',
		'T',
		'T',
		'T',
	),
	array(
		'B',
		'B',
		'B',
		'B',
		'B',
		'B',
	),
	array(
		'T',
		'T',
		'T',
		'T',
		'T',
		'B',
	),
	array(
		'T',
		'T',
		'T',
		'T',
		'T',
		'B',
	),
);

$chinatown_time_slot = array(
	'0' => array(
		'B',
		'B',
		'B',
		'B',
		'B',
		'B',
	),
	'1' => array(
		'B',
		'B',
		'B',
		'B',
		'B',
		'B',
	),
	'2' => array(
		'T',
		'T',
		'T',
		'T',
		'T',
		'B',
	),
	'3' => array(
		'B',
		'B',
		'B',
		'B',
		'B',
		'B',
	),
);

$brooklyn_time_slot = array(
	'0' => array(
		'B',
		'B',
		'B',
		'B',
		'B',
		'B',
	),
	'1' => array(
		'B',
		'B',
		'B',
		'B',
		'B',
		'B',
	),
	'2' => array(
		'B',
		'B',
		'B',
		'B',
		'B',
		'B',
	),
	'3' => array(
		'T',
		'T',
		'T',
		'T',
		'B',
		'B',
	),
);

$schedules = array(
	$flushing_time_slot,
	$chinatown_time_slot,
	$brooklyn_time_slot,
);