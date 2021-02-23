# Host: demo-tp51.sodevel.com  (Version: 5.5.60-log)
# Date: 2018-12-16 22:57:30
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "jave_admin"
#

CREATE TABLE `jave_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '账号',
  `pwd` varchar(100) NOT NULL DEFAULT '' COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='管理员账号表';

#
# Data for table "jave_admin"
#

INSERT INTO `jave_admin` VALUES (1,'管理员','123456'),(2,'张三','$2y$10$w.aW/Vs4Xib7HpmLqQBhL.vvJhvyFAGDaQv8JnHE/h5whEmPS/ISG'),(3,'aaa','aaa');

#
# Structure for table "jave_msg"
#

CREATE TABLE `jave_msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(100) NOT NULL DEFAULT '' COMMENT '留言内容',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '留言人',
  `pic` varchar(100) NOT NULL DEFAULT '' COMMENT '图片名称',
  `time` varchar(100) NOT NULL DEFAULT '' COMMENT '提交留言时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COMMENT='留言信息表';

#
# Data for table "jave_msg"
#

INSERT INTO `jave_msg` VALUES (1,'我是第One个留言的','张3','','20181129'),(2,'今天学习留言板写入数据库','李四','','1543579678'),(3,'我是正式留言','王五','','1543582761'),(4,'留言最二','张三','','1543582830'),(5,'正式留言来了','管理员','','2018-11-30 03:11:00'),(6,'留言测试','管理员','','2018-11-30 23:15:56'),(7,'测试留言二','张三','','2018-11-30 15:17:17'),(8,'留言测试3','王五','','2018-11-30 23:18:15'),(9,'留言测试4','李四','','2018-11-30 23:23:51'),(10,'帝都之战马上开始，你准备好了吗？','管理员','','2018-12-01 17:36:38'),(11,'读取数据库信息并显示测试1','张三','','2018-12-01 17:46:29'),(12,'读取数据库并显示测试2','管理员','','2018-12-01 18:27:01'),(13,'测试数据','李四','','2018-12-01 21:59:31'),(14,'反反复复反反复复','王五','','2018-12-02 00:40:45'),(15,'点点滴滴','管理员','5c038abb86c69.png','2018-12-02 15:33:15'),(16,'我发你','张三','5c038c4adceb3.png','2018-12-02 15:39:54'),(17,'分公司梵蒂冈','王五','','2018-12-02 15:42:04'),(18,'分公司梵蒂冈','王五','','2018-12-02 15:42:51'),(19,'哈哈哈哈哈哈哈哈哈哈哈','王五','','2018-12-02 15:44:55'),(20,'否定的事实','管理员','5c038df0dd70c.png','2018-12-02 15:46:56'),(21,'和干撒很高','王五','','2018-12-02 15:48:20'),(22,'坎坎坷坷坎坎坷坷看看坎坎坷坷','李四','5c038e962e80a.png','2018-12-02 15:49:42'),(23,'规范化的还是公司','管理员','5c038ed131861.png','2018-12-02 15:50:41'),(24,'大家看见','管理员','5c038fa532c67.png','2018-12-02 15:54:13'),(25,'领略到了','王五','5c0391cbbb5e9.png','2018-12-02 16:03:23'),(26,'没看没看过俄国革命了','张三','','2018-12-02 18:02:49'),(27,'观看了精功科技看','李四','5c03ae260a28f.png','2018-12-02 18:04:22'),(28,'结果i而gio卡热个哦归纳及诶跟那个人你家人给你那个男人焦恩俊让那个口难开给男方啃啃给你看热闹你如果慷慨的那个可能看过呢那个姑娘看热闹公开内容看那个那个可能看热闹可能看过人呐放得开给你看你看给你看个让','管理员','5c03ae7181ddd.png','2018-12-02 18:05:37'),(29,'光顾光顾光顾光顾光顾','王五','5c03b1cf90588.png','2018-12-02 18:19:59'),(30,'学习登录之后才能删除自己的留言','aaa','5c10f5e8ec12d.jpg','2018-12-12 19:50:01'),(31,'登录判断好难呀','张三','','2018-12-12 19:58:54'),(32,'删除按钮终于整好了，开心^~^','张三','5c11179a8e692.jpg','2018-12-12 22:13:46'),(33,'试试其他的','管理员','','2018-12-12 22:14:21');

#
# Structure for table "jave_users"
#

CREATE TABLE `jave_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(100) NOT NULL DEFAULT '' COMMENT '用户密码',
  `email` varchar(100) NOT NULL DEFAULT '' COMMENT '用户邮箱',
  `created_time` varchar(100) NOT NULL DEFAULT '' COMMENT '注册时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='注册信息表';

#
# Data for table "jave_users"
#

INSERT INTO `jave_users` VALUES (1,'璐璐','123','xiaofei2025@163.com','2018-12-14 16:23:19'),(2,'李四','1234567','123456@qq.com','2018-12-14 21:32:37'),(3,'王五','$2y$10$w.aW/Vs4Xib7HpmLqQBhL.vvJhvyFAGDaQv8JnHE/h5whEmPS/ISG','123456@126.com','2018-12-14 22:11:51'),(4,'赵丽颖','$2y$10$j6hT7OC5WGBz7F5/.ueJTeQUzxPdWcdQcUQeezNQPycKVMYz41eWa','liying@163.com','2018-12-16 22:29:56');
