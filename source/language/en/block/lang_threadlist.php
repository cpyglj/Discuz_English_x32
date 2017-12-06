<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_threadlist.php by Valery Votintsev, codersclub.org
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'threadlist_fids'			=> 'Forums',//'所在版块',
	'threadlist_fids_comment'		=> 'Set the forums can be called, you can use CTRL to select forums',//'设置允许参与新帖调用的版块，可以按住 CTRL 多选，全选或全不选均为不做限制',
	'threadlist_uids'			=> 'Author UID',//'楼主UID',
	'threadlist_uids_comment'		=> 'Set the user you want to display, use "," to seperate UIDs',//'设置要楼主UID，多个UID请用半角逗号“,”隔开。',
	'threadlist_startrow'			=> 'Start Row',//'起始数据行数',
	'threadlist_startrow_comment'		=> 'If you need to set start row, please enter a number, 0 is the first row',//'如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'threadlist_items'			=> 'Rows',//'显示数据条数',
	'threadlist_items_comment'		=> 'Set the numbers of rows you want to display, it must integer and larger than 0',//'设置一次显示的主题条目数，请设置为大于 0 的整数',
	'threadlist_titlelength'		=> 'Title length',//'标题最大字节数',
	'threadlist_titlelength_comment'	=> 'Set the max length of title, when the title is longer than this valuse, it will be cutted automatically, 0 is disable',//'设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'threadlist_fnamelength'		=> 'Forum Title Length',//'标题最大字节数包含版块名称',
	'threadlist_fnamelength_comment'	=> 'Set the title max length including the forum name',//'设置标题长度是否将所在版块名称的长度一同计算在内',
	'threadlist_summarylength'		=> 'Summary Length',//'主题简短内容文字数',
	'threadlist_summarylength_comment'	=> 'Set the length of summary, 0 equal to default value (255)',//'设置主题简短内容的文字数，0 为使用默认值 255',
	'threadlist_tids'			=> 'Specified threads',//'指定主题',
	'threadlist_tids_comment'		=> 'Set the specified threads tid you want to display, use "," to seperate tids',//'设置要指定显示的主题 tid ，多个 tid 请用半角逗号“,”隔开。注意: 留空为不进行任何过滤',
	'threadlist_keyword'			=> 'Keywords',//'标题关键字',
	'threadlist_keyword_comment'		=> 'Set the keywords used.<br />You can use wildcard "*" in keywords.<br />If you want to use some keywords at same time, you can use "AND". Example: win32 AND unix.<br />If you want to use just one of keywords, you can use "|" or "OR". Example: win32 OR unix',//'设置标题包含的关键字。注意: 留空为不进行任何过滤； 关键字中可使用通配符 *； 匹配多个关键字全部，可用空格或 AND 连接。如 win32 AND unix； 匹配多个关键字其中部分，可用 | 或 OR 连接。如 win32 OR unix',
	'threadlist_tagkeyword'			=> 'Tags',//'TAG标签',
	'threadlist_tagkeyword_comment' 	=> 'Choose Tags (keywords). Note: Leave blank for no filtering; keywords can use wildcards *; For match one or more keywords use | or "OR" separator, i.e. "win32 OR unix"',//'TAG标签关键字。注意: 留空为不进行任何过滤； 关键字中可使用通配符 *； 匹配多个关键字其中部分，可用 | 或 OR 连接。如 win32 OR unix',
	'threadlist_typeids'			=> 'Thread types',//'主题分类ID',
	'threadlist_typeids_comment'		=> 'Select specific thread type. Note: Select All or Clear All for disable any filtering.',//'输入主题分类ID，多个 ID 之间用半角逗号“,”隔开。',
	'threadlist_typeids_all'		=> 'All thread types',//'全部的主题分类',
	'threadlist_sortids'			=> 'Sort IDs(Categories?)',//'分类信息',
	'threadlist_sortids_comment'		=> 'Set the thread classification. Note: Select All or None for disable filtering',//'设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'threadlist_sortids_all'		=> 'All categories',//'全部的分类信息',
	'threadlist_digest'			=> 'Digest Filter',//'精华主题过滤',
	'threadlist_digest_comment'		=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'threadlist_digest_0'			=> 'General thread',//'普通主题',
	'threadlist_digest_1'			=> 'Digest I',//'精华 I',
	'threadlist_digest_2'			=> 'Digest II',//'精华 II',
	'threadlist_digest_3'			=> 'Digest III',//'精华 III',
	'threadlist_stick'			=> 'Stick filter',//'置顶主题过滤',
	'threadlist_stick_comment'		=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'threadlist_stick_0'			=> 'General thread',//'普通主题',
	'threadlist_stick_1'			=> 'Stick I',//'置顶 I',
	'threadlist_stick_2'			=> 'Stick II',//'置顶 II',
	'threadlist_stick_3'			=> 'Stick III',//'置顶 III',
	'threadlist_special'			=> 'Special thread filter',//'特殊主题过滤',
	'threadlist_special_comment'		=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'threadlist_special_1'			=> 'Poll thread',//'投票主题',
	'threadlist_special_2'			=> 'Market thread',//'商品主题',
	'threadlist_special_3'			=> 'Award thread',//'悬赏主题',
	'threadlist_special_4'			=> 'Event thread',//'活动主题',
	'threadlist_special_5'			=> 'Debate thread',//'辩论主题',
	'threadlist_special_0'			=> 'General thread',//'普通主题',
	'threadlist_special_reward'		=> 'Reward Filter',//'悬赏主题过滤',
	'threadlist_special_reward_comment'	=> 'Select specific types of reward',//'设置特定类型的悬赏主题',
	'threadlist_special_reward_0'		=> 'All',//'全部',
	'threadlist_special_reward_1'		=> 'Finished',//'已解决',
	'threadlist_special_reward_2'		=> 'Active',//'未解决',
	'threadlist_recommend'			=> 'Recommended thread filter',//'推荐主题过滤',
	'threadlist_viewmod'			=> 'Portal view mode',//'文章模式查看',
	'threadlist_recommend_comment'		=> 'Display only recommended threads',//'设置是否只显示推荐的主题',
	'threadlist_picrequired'		=> 'Image attachment required',//'必须含图片附件',
	'threadlist_picrequired_comment'	=> 'Set only to display threads contain image attachments',//'设置是否只显示含有图片附件的主题',
	'threadlist_orderby'			=> 'Order by',//'主题排序方式',
	'threadlist_orderby_comment'		=> 'Set the ordering of threads',//'设置以哪一字段或方式对主题进行排序',
	'threadlist_orderby_lastpost'		=> 'Last post',//'按最后回复时间倒序排序',
	'threadlist_orderby_dateline'		=> 'Start time',//'按发布时间倒序排序',
	'threadlist_orderby_replies'		=> 'Replies',//'按回复数倒序排序',
	'threadlist_orderby_views'		=> 'Views',//'按浏览次数倒序排序',
	'threadlist_orderby_heats'		=> 'Hot',//'按热度倒序排序',
	'threadlist_orderby_recommends'		=> 'Recommends',//'按主题评价倒序排序',
	'threadlist_orderby_hourviews'		=> 'Views within the specified time',//'按指定时间内浏览次数倒序排序',
	'threadlist_orderby_todayviews'		=> 'Views today',//'按当天浏览次数倒序排序',
	'threadlist_orderby_weekviews'		=> 'Views last week',//'按本周浏览次数倒序排序',
	'threadlist_orderby_monthviews'		=> 'Views last month',//'按当月浏览次数倒序排序',
	'threadlist_orderby_hours'		=> 'Select time (hours)',//'指定时间(小时)',
	'threadlist_orderby_hours_comment'	=> 'Set the specific time of views in',//'指定时间内浏览次数倒序排序的时间值',
	'threadlist_orderby_todayhots'		=> 'Hots today',//'按当天累计售出数倒序排序',
	'threadlist_orderby_weekhots'		=> 'Hots last week',//'按本周累计售出数倒序排序',
	'threadlist_orderby_monthhots'		=> 'Hots last month',//'按当月累计售出数倒序排序',
	'threadlist_lastpost'			=> 'Last post',//'最后更新时间',
	'threadlist_postdateline'		=> 'Publish time',//'主题发布时间',
	'threadlist_postdateline_nolimit'	=> 'Any',//'不限制',
	'threadlist_postdateline_hour'		=> 'Last Hour',//'1小时内',
	'threadlist_postdateline_day'		=> 'Last Day',//'24小时内',
	'threadlist_postdateline_week'		=> 'Last Week',//'7天内',
	'threadlist_postdateline_month'		=> 'Last Month',//'1个月内',
	'threadlist_lastpost_nolimit'		=> 'No limit',//'不限制',
	'threadlist_lastpost_hour'		=> 'Last hour',//'1小时内',
	'threadlist_lastpost_day'		=> 'Last day',//'24小时内',
	'threadlist_lastpost_week'		=> 'Last week',//'7天内',
	'threadlist_lastpost_month'		=> 'Last month',//'1个月内',
	'threadlist_price_add'			=> ' Additional ',//' 附加 ',
	'threadlist_place'			=> 'Places',//'活动地点',
	'threadlist_class'			=> 'Type',//'活动类型',
	'threadlist_gender'			=> 'Gender',//'性别要求',
	'threadlist_gender_0'			=> 'Any',//'不限',
	'threadlist_gender_1'			=> 'Male',//'男',
	'threadlist_gender_2'			=> 'Female',//'女',
	'threadlist_orderby_weekstart'		=> 'Started last week',//'按一周内活动开始时间排序',
	'threadlist_orderby_monthstart'		=> 'Started last month',//'按一月内活动开始时间排序',
	'threadlist_orderby_weekexp'		=> 'Expired last week',//'按一周内报名截止时间排序',
	'threadlist_orderby_monthexp'		=> 'Expired last month',//'按一月内报名截止时间排序',
	'threadlist_highlight'			=> 'Highlight found words',//'获得高亮值',
);
