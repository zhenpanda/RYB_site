<?php

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

$time_slots = array(
	'9:30AM - 11:00AM',
	'11:00AM - 12:30PM',
	'1:00PM - 2:30PM',
	'2:30PM - 4:00PM',
	'4:00PM - 5:30PM',
	'5:30PM - 7:00PM',
);

$flushing_time_slot = array(
	'Thursday' => array(
		'',
		'',
		'',
		'T',
		'T',
		'T',
	),
	'Friday' => array(
		'',
		'',
		'',
		'',
		'',
		'',
	),
	'Saturday' => array(
		'T',
		'T',
		'T',
		'T',
		'T',
		'T',
		'',
	),
	'Sunday' => array(
		'T',
		'T',
		'T',
		'T',
		'T',
		'T',
		'',
	),
);
