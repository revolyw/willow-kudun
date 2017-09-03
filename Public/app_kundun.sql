create table `kd_phone`(
	`id` int(11) not null auto_increment,
	`phone` varchar(32) not null default '' comment '手机号',
	`create_time` datetime not null default '1970-01-01 00:00:00' comment '记录时间',
	primary key(`id`)
)
