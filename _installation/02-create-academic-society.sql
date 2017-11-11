-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-11-11 13:28:47
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academic-society`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE `article` (
  `article_id` int(10) UNSIGNED NOT NULL,
  `article_type_id` int(10) UNSIGNED DEFAULT NULL,
  `article_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `article_content` text COLLATE utf8_unicode_ci NOT NULL,
  `article_user_id` int(10) UNSIGNED DEFAULT NULL,
  `article_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`article_id`, `article_type_id`, `article_title`, `article_content`, `article_user_id`, `article_time`) VALUES
(1, 1, '2017年家庭教育国际论坛在杭州圆满落幕', '<p style="line-height: 2em;">　　10月28日，由中国教育学会主办，中国教育学会家庭教育专业委员会、杭州市上城区教育局承办，新教育研究院协办的2017年家庭教育国际论坛在杭州举行。党的十九大报告提出“幼有所育”的新理念和新要求，本次论坛的主题为“新家庭\r\n 智慧爱”，众多国内外业界专家齐聚一堂，共同探讨新时代下家庭教育的理念与经验。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　如今，一直备受关注的家庭教育受到了前所未有的挑战。那么，新时期下，什么是新家庭？什么是智慧爱？如何建设新家庭？如何给予孩子智慧爱？<br/></p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　全国政协常委、副秘书长、民进中央副主席、中国教育学会家庭教育专业委员会理事长、新教育实验发起人朱永新，芬兰赫尔辛基大学师资教育系客座讲师、芬兰儿童和青少年基金会顾问、戈登国际培训父母效能训练、青少年效能训练、教师效能训练课程讲师培训督导Kai\r\n Markus Talvio，约翰霍普金斯大学学校社会组织教育研究中心副研究员、副教授Steven Benjamin \r\nSheldon，新西兰教育部鲁道夫斯坦纳/华德福早教中心代表、新西兰斯坦纳/华德福教育国际代表Kathy \r\nMacFarlane，中国青少年研究中心家庭教育首席专家孙云晓，中国少年儿童新闻出版总社首席教育专家、原总编辑、著名“知心姐姐”卢勤，台湾嘉义大学教授曾迎新等国内外的教育专家齐聚现场，与千余名与会者和数万收看直播的网友共同探讨家庭教育。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　一、现代家庭教育需要爱与智慧同行</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　朱永新说，前两届论坛的主题分别是“教育从家庭开始”和“与孩子一起成长”，本次论坛的主题之所以确定为“新家庭·智慧爱”，主要考虑到家庭教育所处的时代，以及所遇到的问题。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　“如何在新时期构建新家庭教育，如何用智慧的方式去爱孩子，这是当下非常值得思考的问题。”对于“新家庭”这个概念，朱永新解释说，新家庭从不同的维度来看有不同的意义。从外在而言，是新时代背景下的家庭；从内在而言，是在传统家庭基础之上有着新变化的家庭；从方向上而言，是拥有符合时代发展、社会需求，具有新文化、新理念和新行动的家庭。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　家庭教育需要爱与智慧同行，这不仅是父母与教师成长的不二法门，也是我们在任何教育活动中必须的选择。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　二、智慧爱是新家庭的本质体现</p><p style="line-height: 2em;"><br/>　　要提高孩子的素质，首先要提高父母的素质，这种前素质教育是教子成功的关键。会上，孙云晓提出了五元家教法：即合乎规律的教育理念、科学的教育方法、健康的心理、良好的生活方式、平等和谐的关系。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　孙云晓认为，新家庭与智慧爱是相辅相成的，也是互为前提的。实现智慧爱离不开建设新家庭，建设新家庭必然追求智慧爱。新家庭之新并非新组建的家庭，而是具有与时俱进的价值观的家庭，是具有平等和谐关系的家庭，智慧爱是新家庭的本质体现。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　三、新家庭教育需要六种“爱的智慧”</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　当下许多父母常处于焦虑中，生怕孩子输在起跑线上，一心想让孩子更加优秀，对孩子管束有加，却从未倾听孩子内心的感受，从而导致孩子心理压力过大，甚至酿成悲剧，这是家庭教育中的一大误区。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　在父母应该如何爱孩子才是科学这一问题上，卢勤与大家分享了六种“爱的智慧”：即智慧的爱，知道使用孩子；智慧的爱，喜欢激励孩子；智慧的爱，注意让孩子分享；智慧的爱，事事相信孩子；智慧的爱，善于管教孩子；智慧的爱，看重过程。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　父母的智慧实质上就是放平心态，永远用乐观、积极的心态去面对人生。想让孩子快乐成长，让孩子拥有幸福的人生，父母就应该把孩子放下，用智慧的眼光认识孩子，用智慧的方式走进孩子的世界，和孩子建立亲密、温暖的关系。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　四、父母也需要提高社交技巧</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　父母是家庭中的关键人物，因此也需要提高社交技巧。Markus在论坛中提出三点建议，一是给予孩子自主权，提高儿童的自我意识和自我管理能力，父母需要运用倾听技巧，并尽可能帮助孩子做出自己的选择。二是提升孩子自我效能感，通过传播孩子能理解并能够接受且现实的与自身相关的积极信息，让孩子知道自己擅长什么。三是提高孩子关联感，父母需要为孩子提供改变决策的机会，让孩子承担家庭事务的相关责任，并做到积极倾听避免非建设性的沟通方式。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　五、家校共育才能创造更好的成长环境</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　充满爱的温暖与引导的氛围可以促进儿童的快乐感、好奇心和敬畏心的健康发展。幼儿工作中最重要的是教育者的心态，他们为孩子的模仿提供了榜样作用。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　论坛上，Kathy\r\n \r\nMacFarlane介绍了华德福儿童早期教育的本质特征，并指出在儿童与父母、教师和同伴之间有着健康社会关系的社区环境中，儿童的健康发育最容易得以实现。华德福教育工作者考虑到儿童特定年龄的发展需要，努力为孩子们建立自觉、合作的社区。他指出，研究者越来越强调把关于家校伙伴关系（家校合作）的研究结果应用于学校的政策改进，但政策只能告诉校长和老师们要做什么，却没有告诉他们该如何去具体实施。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　天津社科院研究员关颖指出，家庭教育是发生在家庭中的教育活动，体现家庭的本质特征，是家庭的重要功能。家庭教育指导应从引领父母学习基础知识开始，借势移动互联时代多媒体融合的有利条件，为父母搭建平台、提供帮助。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　六、家庭教育典型样本推动父母升级</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　多个极具公信力、信息量丰富的研究报告的发布，助力家长科学培养孩子。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　上海社会科学院社会学研究所所长杨雄发布的《上海家长教育期望、家庭教育支出及“择校”行为》报告，指出过高的教育期望导致了父母的择校行为与补习行为。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　江西省教育科学研究所所长吴重涵在《学校里的家长志愿者：现状、群体特征与效用》报告中指出，提高父母志愿者参与的比率不仅要考虑学校的需要，也要从满足多样化、个性化的父母意愿入手。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　中国青少年研究中心少年儿童研究所所长孙宏艳在论坛上作了《关注健康生活方式的基础工程——体育运动》的主题分享，他希望能通过全社会持续不断的努力，使少年儿童对运动有正确的认知，并养成良好的运动习惯，最终形成健康的生活方式。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　中国教育学会家庭教育专业委员会副秘书长岳坤作了《中国城市家庭教养中的祖辈参与问题调查报告》。</p><p style="line-height: 2em;"><br/>　　在以“家庭建设”“家庭教育的智慧”“家庭教育专业化”“传统文化在家庭中的传承”为主题的四个分论坛上，入选论文的作者与专家各抒己见，碰撞观点。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　据悉，本次论坛还展示了“中国家庭教育知识传播激励计划家校合作优秀案例”，表彰了山东淄博系统构建“互联网+”教学测评管家校共育新机制、杭州市上城区推出“星级家长执照”认证改善教育生态、江苏昆山构建“共育、共建、共享、共生”家校合作模式等“十佳”案例。教育局长、中小学校长和父母、专家还围绕家庭教育的“道”与“术”、家校合作的困境和家庭教育如何应对人工智能的步步逼近进行了对话。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　此次论坛既是一次全球范围的理念和观点分享与碰撞的盛会，也是一次培育下一代的智慧的集中展现，更是一次对家庭教育议题的全面刷新。家庭教育是一门可以学习和提高的“功课”，需要社会、组织、企业的合力，而家庭教育整体水平的提高，也会对整个社会的发展起到推动作用。</p><p style="line-height: 2em;"><br/></p><p>　　据了解，论坛闭幕式上，苏州市教育局接过举办下一届论坛的“接力棒”， 2018年家庭教育国际论坛将在苏州召开。</p><p><br/></p>', 1, '2017-11-11 13:12:45'),
(2, 1, '“第三届中小学心理健康教育课堂教学观摩研讨活动”在杭州举办', '<p>　　2017年10月24日至27日，“第三届中小学心理健康教育课堂教学观摩研讨活动”在杭州举办。浙江省教育厅副厅长朱鑫杰、杭州师范大学副校长何俊、浙江省教育科学研究院院长朱永祥，以及中国教育学会学校教育心理学分会50余位理事和专家出席活动。来自全国28个省市自治区的中小学相关学校领导、教研员、心理健康教师1400余人参加了活动。</p><p><br/></p><p>　　本次活动由中国教育学会学校教育心理学分会主办，北京师范大学发展心理研究院、杭州师范大学心理科学研究院、浙江省中小学心理健康教育指导中心、杭州市中小学心理健康教育指导中心、杭州经济技术开发区社会发展局、杭州第四中学、杭州市文海实验学校、杭州经济技术开发区学正小学协办，杭州圣鼎文化创意有限公司（ATOB青少年教育）提供会务支持。</p><p><br/></p><p>　　会议期间，北京师范大学资深教授林崇德、浙江师范大学心理咨询首席专家钟思嘉、南京晓庄学院心理健康教育与研究中心陶勑恒、浙江省中小学心理健康教育指导中心办公室主任庞红卫四位专家作大会主题报告。来自全国中小学心理健康教育工作优秀单位的12位代表作了交流分享。</p><p><br/></p><p>　　本次活动经过严格审核，最终选出小学组22位教师，初中组22位教师，高中组24位教师有资格参与展示，教师的课堂展示采用借班上课的形式，就情绪管理、压力应对、同伴关系、心理品质、学习技能等分享了各自经验。</p><p>&nbsp;&nbsp;</p><p style="text-align: center;"><img src="http://www.cse.edu.cn/upload/upload/image/20171103/1509696585924929.png" title="1509696585924929.png" alt="各省优秀中小学心理健康教师在借班展示优质课程.png"/></p><p style="text-align: center;">各省优秀中小学心理健康教师在借班展示优质课程&nbsp;<br/></p><p>&nbsp;</p><p>　　据了解，本次活动最终评选出优质观摩课程，小学组一等奖9个、二等奖13个，初中组一等奖9个、二等奖12个，高中组一等奖10个、二等奖14个。评选出优秀论文一等奖10个、二等奖19个、三等奖32个。此外，浙江省中小学心理健康教育指导中心等7家单位获得本次活动“最佳组织奖”、庞红卫等7位教师获得“特殊贡献奖”。</p><p><br/></p><p>　　本次活动，得到了学生和教师的一致好评，参会者表示活动不仅为晒课老师提供了展示的平台，也为全国中小学心理健康教师搭建了互相学习交流的平台，活动的举办对我国中小学心理健康教育工作更好的发展起到了促进作用。</p><p>27日下午，中国教育学会学校教育心理学分会副理事长兼秘书长伍新春作精彩总结，为期三天的活动圆满结束。</p><p><br/></p><p style="text-align: center;"><img src="http://www.cse.edu.cn/upload/upload/image/20171103/1509696567504498.jpg" title="1509696567504498.jpg" alt="大会现场_副本.jpg"/>&nbsp;</p><p style="text-align: center;">大会现场</p><p><br/></p>', 1, '2017-11-11 13:13:50'),
(6, 1, '第四届“中国未来教育家成长论坛”在天津举行', '<h1 style="text-align: center; line-height: 2em;">“面向2030——创建一所未来学校”</h1><h2 style="text-align: center; line-height: 2em;">——第四届“中国未来教育家成长论坛”“教育家成长联盟”全国三次会议暨京津冀三区市教育合作与发展论坛在天津举行</h2><p><br/></p><p><br/></p><p style="text-align: center; line-height: 2em;"><img src="http://www.cse.edu.cn/upload/upload/image/20171029/1509255723868734.jpg" title="1509255723868734.jpg" alt="会议现场1.jpg"/></p><p style="text-align: center; line-height: 2em;">大会现场<br/></p><p><br/></p><p style="line-height: 2em;">　　2017年10月28日，第四届“中国未来教育家成长论坛”\r\n \r\n“教育家成长联盟”全国三次会议暨京津冀三区市教育合作与发展论坛在天津拉开帷幕。会议由由中国教育学会主办，《未来教育家》杂志、天津市北辰区教育局、北京市大兴区教育委员会、河北省廊坊市教育局、中国知网承办。本届论坛的主题为“面向2030——创建一所未来学校”。</p><p><br/></p><p style="white-space: normal; text-align: center; line-height: 2em;"><img src="http://www.cse.edu.cn/upload/upload/image/20171029/1509255773429114.jpg" title="1509255773429114.jpg" alt="中国教育学会常务副会长戴家干致开幕词.jpg"/></p><p style="white-space: normal; text-align: center; line-height: 2em;">中国教育学会常务副会长戴家干致开幕词</p><p><br/></p><p style="line-height: 2em;">　　会议开幕式由中国教育学会副秘书长游森主持，中国教育学会常务副会长戴家干致开幕词，天津市教委副主任孙惠玲、天津市北辰区人民政府副区长马希荣分别致欢迎词。中国教育学会顾问、国家教育咨询委员会委员、国家总督学顾问陶西平，中国教育学会副会长、北京市十一学校校长李希贵作主旨报告。</p><p><br/></p><p style="text-align: center; line-height: 2em;"><img src="http://www.cse.edu.cn/upload/upload/image/20171029/1509255859683564.jpg" title="1509255859683564.jpg" alt="国家总督学顾问陶西平.jpg"/></p><p style="text-align: center; line-height: 2em;">国家总督学顾问陶西平<span style="text-align: center;">做主旨报告</span></p><p><br/></p><p style="text-align: center; line-height: 2em;"><img src="http://www.cse.edu.cn/upload/upload/image/20171029/1509255893803933.jpg" title="1509255893803933.jpg" alt="北京市十一学校校长李希贵做主旨报告.jpg"/></p><p style="text-align: center; line-height: 2em;">北京市十一学校校长李希贵做主旨报告</p><p><br/></p><p style="line-height: 2em;">　　开幕式上，由中国教育学会《未来教育家》杂志和天津市北辰区教育局共建的“津派教育家成长研究基地”揭牌，中国教育学会常务副会长刘堂江为天津市北辰区教育局党委书记黄福义、天津市北辰区教育局党委副书记、局长郭建新授牌并讲话。</p><p><br/></p><p style="text-align: center; line-height: 2em;"><img src="http://www.cse.edu.cn/upload/upload/image/20171029/1509255938220642.jpg" title="1509255938220642.jpg" alt="刘堂江为天津市北辰区教育局党委书记黄福义、天津市北辰区教育局党委副书记、局长郭建新授牌.jpg"/></p><p style="text-align: center; line-height: 2em;">刘堂江为天津市北辰区教育局党委书记黄福义、天津市北辰区教育局党委副书记、局长郭建新授牌</p><p><br/></p><p style="text-align: center; line-height: 2em;"><img src="http://www.cse.edu.cn/upload/upload/image/20171029/1509256121946722.jpg" title="1509256121946722.jpg" alt="中国教育学会常务副会长刘堂江.jpg"/></p><p style="text-align: center; line-height: 2em;">中国教育学会常务副会长刘堂江</p><p><br/></p><p style="line-height: 2em;">　　作为中国教育学会的三大学术品牌活动之一，“中国未来教育家成长论坛”\r\n \r\n旨在探讨、研究教育家成长与教育家办学的理论和实践问题。2012年、2014年、2016年先后开展了以“时代呼唤教育家成长”“营造教育家成长的自由生态”“创新是当代教育家办学的神圣使命”为主题的论坛。\r\n \r\n“教育家成长联盟”2014年5月于青岛隆重成立后，全国一次会议在重庆举行，二次会议开始与“中国未来教育家成长论坛”同时举行。两大盛会均受到了广大教育工作者的热烈欢迎，并获得专家的高度认同。</p><p><br/></p><p style="text-align: center; line-height: 2em;"><img src="http://www.cse.edu.cn/upload/upload/image/20171029/1509256004889859.jpg" title="1509256004889859.jpg" alt="天津市教委副主任孙惠玲.jpg"/></p><p style="text-align: center; line-height: 2em;">天津市教委副主任孙惠玲</p><p><br/></p><p style="text-align: center; line-height: 2em;"><img src="http://www.cse.edu.cn/upload/upload/image/20171029/1509256064197651.jpg" title="1509256064197651.jpg" alt="天津市北辰区人民政府副区长马希荣.jpg"/></p><p style="text-align: center; line-height: 2em;">天津市北辰区人民政府副区长马希荣</p><p><br/></p><p style="line-height: 2em;">　　在致词中，戴家干表示，未来学校的建设一是要遵循成长规律。未来学校的师资队伍建设，要充分尊重教师成长规律，挖掘教师潜能，助力教师提升。激发教师活力，教师有了活力，学校才能有生机。未来学校的教书育人活动，要充分尊重学生成长规律，学生的成长好比一棵树的生长，一方面禁止揠苗助长，要倡导顺其自然；一方面也禁止不管不顾，要倡导适当修剪。未来学校的组织架构搭建，要充分尊重组织成长规律，扁平化管理方式、金字塔式管理方式，都各有其利弊，如何在实践中科学把握学校组织的成长规律，是摆在新时代教育工作者面前的一项重要课题。</p><p><br/></p><p style="line-height: 2em;">　　二是要遵循依法治教和依法治校。从宏观层面来看，教育治理体系的完善必须“依法治教”。教育管理部门在制定政策过程中应符合法定的程序，体现法治的内容，确保依法行使教育行政管理权。从中观层面来看，学校制度建设的推进必须“依法治校”，章程，是一所学校的“宪法”，我们很期待看到“一校一章程，依章程治校”的教育法治新气象。从微观层面来看，具体教学活动的开展必须“依法治学”，要进一步提高一线教育工作者的法制意识与素养，确保具体教学活动的开展不以牺牲学生各项合法权利为代价。</p><p><br/></p><p style="line-height: 2em;">　　三是要有利于发展素质教育。未来学校的教育，应当是启发式而非灌输式的教育，是唤醒式而非填鸭式的教育，是激励式而非惩罚式的教育。如何真正践行素质教育？最佳的答案，在于一线教育工作者的日常教育教学活动中。中国教育学会要做的就是搭建一个教育交流的平台，帮助一线教育工作者实现理论上的升华，进而把更好的教育智慧成熟运用于教育实践中，落地生根，开花结果。</p><p><br/></p><p style="line-height: 2em;">　　为期两天的会议，四十余位有影响力的嘉宾分别通过主题分论坛和特别访谈分享他们的理念与实践。分论坛的主题主要围绕\r\n \r\n“面向2030的未来学校”建设构想展开，如，创建教师发展中心，着眼于教师成长、队伍建设；学生发展中心，关注核心素养、个性发展；信息化中心，讨论教育信息化、现代化的问题；资源管理中心，致力于品牌建设、宣传设计；课程与教学中心，从课程构建、教学设计方面展开；规划建设发展中心，关注空间规划环境育人等。此外，局长圆桌论坛，来自不同地区的教育局长共同探讨“让教育家办学的种子落地生根”；特色学校建设论坛由天津市北辰区教育局、北京市大兴区教育委员会和河北省廊坊市教育局联合举办，共同探讨京津冀三区市教育合作与发展。</p><p><br/></p><p style="text-align: center; line-height: 2em;"><img src="http://www.cse.edu.cn/upload/upload/image/20171029/1509265971974723.jpg" title="1509265971974723.jpg" alt="JOSE1080_副本_副本.jpg"/></p><p style="text-align: center; line-height: 2em;">特别访谈环节<br/></p><p><br/></p><p style="line-height: 2em;">　　10月29日下午，论坛接近尾声，中国教育学会常务副会长、《未来教育家》杂志总编辑刘堂江主持的特别访谈是每届大会的又一大亮点。围绕“地域学派教育家成长研究”这个主题，五位特约嘉宾——中国人民大学教授程方平、江苏省丹阳市教师发展中心部门主任笪红梅、湖南省株洲市荷塘区教育局教研室原主任蔡建平、天津市北辰区教育局局长郭建新、江西省南昌市教育局局长谢为民为与会者带来精彩的观点碰撞和思想分享。</p><p><br/></p><p style="text-align: center; line-height: 2em;"><img src="http://www.cse.edu.cn/upload/upload/image/20171029/1509256369450768.jpg" title="1509256369450768.jpg" alt="中国教育学会副秘书长游森.jpg"/></p><p style="text-align: center; line-height: 2em;">中国教育学会副秘书长　游森</p><p><br/></p><p><br/></p>', 1, '2017-11-11 13:22:44'),
(4, 1, '中国教育学会教育政策与法律研究分会第十届学术年会在西安顺利召开', '<p style="line-height: 2em;">　　2017年10月20日至22日，由中国教育学会教育政策与法律研究分会与陕西师范大学教育学院联合主办的中国教育学会教育政策与法律研究分会第十届学术年会在西安隆重召开。本届年会的主题为“教育立法与教育政策变革研究”，来自海内外60余所高校、研究机构、出版社和期刊编辑部的300多位专家学者与学生代表参加了大会。</p><p><br/></p><p style="line-height: 2em;">　　10月21日上午，开幕式由中国教育学会教育政策与法律研究分会副理事长、中国教育政策研究院副院长、西北师范大学副校长刘复兴教授主持。陕师大副校长党怀兴教授、教育学院院长陈鹏教授、中国教育学会教育政策与法律分会理事长劳凯声教授分别致开幕辞。应邀出席开幕式的嘉宾还有沈阳师范大学张维平教授、北京大学湛中乐教授、华南师范大学胡劲松教授、东北师范大学杨颖秀教授、西南大学陈恩伦教授、北京师范大学余雅风教授、华中师范大学李晓燕教授、浙江大学吴华教授、辽宁师范大学孙绵涛教授、台湾成功大学许育典教授、加拿大布鲁克大学Li\r\n Xiao bin教授、中国教育学会代表许倩倩女士等。</p><p><br/></p><p style="line-height: 2em;">　　陕师大副校长党怀兴教授对年会的隆重召开表示祝贺。他指出，各位与会来宾的真知灼见必将推动我国教育政策和法律研究进入新阶段。陕师大教育学院院长陈鹏教授代表东道主对参会嘉宾和代表的莅临表示热烈欢迎，并对年会的召开献上由衷的祝福。</p><p><br/></p><p style="line-height: 2em;">　　中国教育学会教育政策与法律分会理事长劳凯声教授在致辞中对主办方教育学院的精心组织表示衷心感谢。他指出，教育政策和法律的学科地位越来越受到广泛重视，开展教育立法与教育政策的变革研究对中国社会和教育的发展具有重大现实意义和理论价值，并预祝大会圆满成功。</p><p><br/></p><p style="line-height: 2em;">　　开幕式之后，中国教育学会教育政策与法律分会副理事长张维平教授、胡劲松教授分别主持了上午的大会报告。劳凯声教授、湛中乐教授、刘复兴教授、杨颖秀教授、陈鹏教授、吴华教授和余雅风教授分别就依法治教、依法治校、教育结构性变革、“双一流”政策供给、西部高等教育以及民办教育等多个主题内容作了精彩报告。</p><p><br/></p><p style="line-height: 2em;">　　各位与会专家围绕大会主题纷纷表达了自己的学术观点，为教育政策与法律未来的发展提供理论和学术的引领。首都师范大学劳凯声教授以“依法律而治校，寻大道而革新”为题，以公私二分法、国家与民间关系、国家教育权与家庭教育权三个方面为例，对教育法研究方法、教育权利（权力）等的历史演变进行了深入分析。依法治校是依法治教的重要组成部分，北京大学湛中乐教授作了题为“依法治校&nbsp;\r\n \r\n任重道远：于艳茹北大案之启示”的报告，概述了于燕茹诉北京大学案，分别分析了一审判决和二审判决的内在逻辑。基于我国教育正在发生结构性变革的现实情况，西北师范大学副校长、北京师范大学刘复兴教授提出需要在教育方针与教育目的、培养目标、素养结构、学校体系等方面进行重新配置。“双一流”建设体现了国家意志和国家责任，习近平同志在十九大报告中指出，要加快一流大学和一流学科建设。东北师范大学的杨颖秀教授以“建设‘双一流’我们需要什么样的政策”为题，采用实证研究的方法，对中国建设“双一流”过程中需要怎样的的配套政策进行了深入浅出的讲解。陕西师范大学陈鹏教授从中国西部高等教育的百年变迁、现实挑战和未来政策供给三方面论述西部高等教育的繁荣发展离不开国家的战略支持。民办教育作为社会主义教育事业的组成部分，需要社会各界的支持和帮助。浙江大学吴华教授从“比什么？如何比？”、“事实与分析”、“新发展模式”三个方面来阐述为什么民办教育比公办教育更加出色，并且提出民办教育发展新的制度框架。北京师范大学余雅风教授从《民促法》对营利性民办学校和非营利性民办学校两类民办学校的激励策略和限制措施的设定、政府扶持、收费办法以及对营利性民办高校的影响出发，论证了民办学校分类及其规范的理论基础问题。</p><p><br/></p><p style="line-height: 2em;">　　为广泛交流学习，21日下午，本次年会还围绕大会主题，设置了五场分论坛。五个分论坛的与会代表就基础教育政策与法律、高等教育政策与法律、教育政策的理论与实践、“双一流”建设的理论与实践、教育治理现代化与教育法治等主题介绍了各自的最新研究成果，并进行了深入探讨和广泛交流，呈现和分享了相关领域的最新研究和实践成果。</p><p><br/></p><p style="line-height: 2em;">　　10月22日上午，北京大学湛中乐教授主持大会主题报告。许育典教授、孙绵涛教授、张新民教授、李晓燕教授、胡劲松教授和陈恩伦教授分别就身心障碍学生教育基本权、教育政策前瞻性、教师职业年金立法、考试立法、校企合作法律制度建构、信息化时代教育法律制度变革等议题作了精彩讲演，赢得了在场听众的满堂喝彩。在分会场代表依次向大会现场听众汇报各组交流情况之后，陈鹏教授作大会总结。他对本届学术年会的成功举办给予了高度评价，对此次会议与会者的精彩发言给予了肯定。他指出，在大会秘书处、中国教育学会教育政策与法律研究分会和陕师大全体师生的共同努力下，本届学术年会主题涉及面广、参与度高、学术氛围浓厚，开辟了教育政策与法律学科发展的新时代。最后，伴随着全场热烈的掌声，年会落下帷幕。</p><p><br/></p><p style="line-height: 2em;">　　中国教育学会教育政策与法律研究分会已连续成功举办了十届年会，是推动我国教育政策与法律学科建设，开展国内外专业领域学术交流的重要平台。本届年会专家云集，内容丰富多彩，人数规模大、会议水平高、人员参与度多、整体效果较好，达到了预期的效果。这是教育政策和法律领域的一次学术盛会，必将有力地推进教育政策与法律学科的不断发展，为中国特色社会主义教育政策与法治建设作出积极地贡献。</p><p><br/></p>', 1, '2017-11-11 13:18:29'),
(5, 1, '中国教育学会发布培训行业教师职前培训教材切片库与服务体系', '<p style="line-height: 2em;">　　11月1日，中国教育学会在京召开基于第三方专业认证的民办培训教育人才培养工作会。中国教育学会副秘书长游森、学会相关部门领导与多家培训行业相关知名院校、企事业单位代表出席了本次会议，共同围绕培教认证项目开展下的教师培养展开讨论。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em; text-align: center;"><img src="http://www.cse.edu.cn/upload/upload/image/20171101/1509528327519950.jpg" title="1509528327519950.jpg" alt="工作会现场_副本.jpg"/></p><p style="line-height: 2em; text-align: center;">工作会现场<br/></p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em; text-align: center;"><img src="http://www.cse.edu.cn/upload/upload/image/20171101/1509528388461120.jpg" title="1509528388461120.jpg" alt="中国教育学会副秘书长游森_副本.jpg"/></p><p style="line-height: 2em; text-align: center;">中国教育学会副秘书长游森</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　会上，中国教育学会发布了培训行业教师职前教育培训教材切片库与服务体系。中国教育学会相关人员详细介绍了中国教育学会围绕着民办非学历教育培训机构教师专业水平等级认证（简称“培教认证”）搭建的三级培训课程方案。目前，学会正在组织专家录制培训课程教学示范视频。</p><p><br/></p><p style="text-align: center;"><img src="http://www.cse.edu.cn/upload/upload/image/20171101/1509528404737199.jpg" title="1509528404737199.jpg" alt="培训行业教师职前教育培训教材切片库与服务体系_副本.jpg"/></p><p style="line-height: 2em; text-align: center;">培训行业教师职前教育培训教材切片库与服务体系</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　2018年培教认证现正处于开放报名阶段。为严格落实国家相关要求，实行考培分离，保证培训行业教师培训工作的顺利实施并达到良好的培训效果，中国教育学会经过资质审核、复审、考察等环节，从申报培教认证首批考试基地的200余家相关单位中，优先选择了8家开展相关培训与考务工作，分别是：好未来教育、精锐教育、吉林中小学教学研究会、优胜教育、昕弘教育、知金楚才、奥鹏远程教育中心和ATA（全美在线）。中国教育学会将提供完善的学术服务支持，与考试基地单位开展合作，共同促进基于培教认证的教师培训工作，提升培训行业人才队伍专业水平，加强培训行业师资力量。</p><p><br/></p><p style="line-height: 2em; text-align: center;"><img src="http://www.cse.edu.cn/upload/upload/image/20171101/1509528420809882.jpg" title="1509528420809882.jpg" alt="培教认证首批考试基地合作单位_副本.jpg"/></p><p style="line-height: 2em; text-align: center;">培教认证首批考试基地合作单位</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　中国教育学会副秘书长游森表示，随着培教认证工作的逐步开展，各项工作的顺利落实，中国教育学会接下来将在艺体、科创、营地等方面开展相关工作，与中央音乐学院、中国音乐学院等专业院校合作，研制民办非学历教育培训机构非学科类的教师专业标准，教育培训机构教学管理规范和专业等级标准系列内容也将陆续颁布实施。中央音乐学院现代远程音乐教育学院院长修子建会上强调了对非学科教师进行专业认证的必要性，并对与学会今后的合作进行了展望。</p><p style="line-height: 2em;"><br/></p><p style="line-height: 2em;">　　基于本次会议的主题——“基于第三方专业认证的民办培训教育人才培养”，多家单位代表进行了交流分享。优胜教育、辽宁教育人才培训中心、好未来教育、精锐教育、圣桥教育集团和上海德稻教育相关领导分别梳理了教辅行业教师培训需求的演变，分享教辅行业教师培训经验，并对今后教师培训市场未来发展趋势进行了深入探讨及全方位剖析。</p><p><br/></p>', 1, '2017-11-11 13:20:11');

-- --------------------------------------------------------

--
-- 表的结构 `article_type`
--

CREATE TABLE `article_type` (
  `type_id` int(10) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `article_type`
--

INSERT INTO `article_type` (`type_id`, `type_name`) VALUES
(1, '学会新闻'),
(2, '通知公告'),
(3, '文章类型3'),
(4, '文章类型4'),
(5, '文章类型5'),
(6, '文章类型6'),
(7, '文章类型7'),
(8, '文章类型8');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `user_type` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password_hash`, `user_email`, `user_type`) VALUES
(1, 'admin', '$2y$10$I.D86APbZ3QjzQSefAUVnOb3OFoHKJovDc34GRDbsnSTl0BWXNvCu', 'admin@qq.com', 1),
(2, 'user1', '$2y$10$uNcIyqviqTMizw0bFJzGUeADhk4Ir878NbFS3NurY0377WZsKPahG', 'user1@qq.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `article_user_id` (`article_user_id`),
  ADD KEY `article` (`article_type_id`);

--
-- Indexes for table `article_type`
--
ALTER TABLE `article_type`
  ADD PRIMARY KEY (`type_id`),
  ADD UNIQUE KEY `type` (`type_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `article_type`
--
ALTER TABLE `article_type`
  MODIFY `type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
