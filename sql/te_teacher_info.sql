CREATE TABLE IF NOT EXISTS `te_teacher_info` (
  `ID` varchar(32) NOT NULL COMMENT '工号',
  `TEACHER_NAME` varchar(64) NOT NULL COMMENT '姓名',
  `BIRTHDAY` date NOT NULL COMMENT '出生年月',
  `ETHNIC` varchar(32) NOT NULL COMMENT '民族',
  `POLITICAL` varchar(32) NOT NULL COMMENT '政治面貌',
  `DISTRICT` varchar(32) NOT NULL COMMENT '国家地区',
  `CREDENTIAL_TYPE` varchar(16)  NOT NULL COMMENT '证件类型',
  `CREDENTIAL_NO` varchar(64)  NOT NULL COMMENT '证件号码',
  `NATIVE_PLACE` varchar(32) NOT NULL COMMENT '籍贯',
  `EMAIL` varchar(128) COMMENT '邮箱',
  `CELLPHONE` varchar(32) COMMENT '手机号码',
  `HOME_ADDR` varchar(256)  COMMENT '家庭地址',
  `HOME_PHONE` varchar(32) COMMENT '家庭电话',
  `OFFICE` varchar(64) COMMENT '办公室地址',
  `OFFICE_PHONE` varchar(32) COMMENT '办公室电话',
  `CAMPUS_DAY` date COMMENT '进校年月',
  `DEPARTMENT` varchar(32) COMMENT '所在部门',
  `POST_TYPE` varchar(32) COMMENT '岗位类别',
  `ZJZW` varchar(32) COMMENT '专技职务',
  `ZJZW_DAY` date COMMENT '专技职务确定时间',
  `ZJZWJB` varchar(32) COMMENT '专技职务级别',
  `ZJZWJB_DAY` date COMMENT '专技职务级别确定时间',
  `TUTOR_TYPE` varchar(32) COMMENT '导师类型',
  `TUTOR_DAY` date COMMENT '导师类型确定时间',
  `ADMIN_POST` varchar(32) COMMENT '行政职务',
  `ADMIN_DAY` date COMMENT '行政职务确定时间',
  `STATUS` int(11) COMMENT '在职状态'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;






ALTER TABLE `te_teacher_info` ADD PRIMARY KEY(`ID`);

INSERT INTO `te_teacher_info` (`ID`, `TEACHER_NAME`, `BIRTHDAY`, `ETHNIC`, `POLITICAL`, `DISTRICT`, `CREDENTIAL_TYPE`, `CREDENTIAL_NO`, `NATIVE_PLACE`, `EMAIL`, `CELLPHONE`, `HOME_ADDR`, `HOME_PHONE`, `OFFICE`, `OFFICE_PHONE`, `CAMPUS_DAY`, `DEPARTMENT`, `POST_TYPE`, `ZJZW`, `ZJZW_DAY`, `ZJZWJB`, `ZJZWJB_DAY`, `TUTOR_TYPE`, `TUTOR_DAY`, `ADMIN_POST`, `ADMIN_DAY`, `STATUS`) VALUES ('04303', '万熙琼', '1979-09-30', '苗族', '中共党员', '', '身份证', '433024197909300204', '', NULL, NULL, NULL, NULL, NULL, NULL, '2002-07-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1');