  <?php
/**************************************************************************************
* Class: Pager
* Methods:
* findStart
* findPages
* pageList
* nextPrev
* Redistribute as you see fit.
**************************************************************************************/
class Pager
{
/***********************************************************************************
* Ham int findStart (int limit)
* Tra ve dong bat dau cua page duoc chon dua tren page lay duoc va bien limit
***********************************************************************************/
	function findStart($limit)
	{
		if ((!isset($_GET['page'])) || ($_GET['page'] == "1"))
		{
			$start = 0;
			$_GET['page'] = 1;
		}
		else
		{
			$start = ($_GET['page']-1) * $limit;
		}
		
		return $start;
	}
/***********************************************************************************
* Ham int findPages (int count, int limit)
* Tra ve so luong page can thiet dua tren tong so dong co trong table va limit
***********************************************************************************/
	function findPages($count, $limit)
	{
		$pages = ceil($count / $limit);
		return $pages;
	}
/***********************************************************************************
* Ham: string pageList (int curpage, int pages)
* Tra ve danh sach page theo dinh dang "page dau tien  < [cac page] > page cuoi cung"
***********************************************************************************/
	function pageList($curpage, $pages,$dk=NULL)
	{
		
		/* In page dau tien va nhung link toi page truoc neu can */
		if (($curpage != 1) && ($curpage))
		{
			$page_list .= " <a href=\"".$_SERVER['PHP_SELF']."?page=1&{$dk}\" title=\"page đầu\"><<</a> ";
		}
	
		if (($curpage-1) > 0)
		{
			$page_list .= "<a href=\"".$_SERVER['PHP_SELF']."?page=".($curpage-1)."&{$dk}\" title=\"Về page trước\"><</a> ";
		}
	
		/* In ra danh sach cac page va lam cho page hien tai dam hon va mat link o chan*/
		for ($i=1; $i<=$pages; $i++)
		{
			if ($i == $curpage)
			{
				$page_list .= "<b>".$i."</b>";
			}
			else
			{
				$page_list .= "<a href=\"".$_SERVER['PHP_SELF']."?page=".$i."&{$dk}\" title=\"page ".$i."\">".$i."</a>";
			}
			$page_list .= " ";
		}

		/* In linh cua page tiep theo va page cuoi cung neu can*/
		if (($curpage+1) <= $pages)
		{
			$page_list .= "<a href=\"".$_SERVER['PHP_SELF']."?page=".($curpage+1)."&{$dk}\" title=\"Dến page sau\">></a> ";
		}
		
		if (($curpage != $pages) && ($pages != 0))
		{
			$page_list .= "<a href=\"".$_SERVER['PHP_SELF']."?page=".$pages."&{$dk}\" title=\"page cuối\">>></a> ";
		}
		$page_list .= "</td>\n";

	return $page_list;
	}
/***********************************************************************************
* Ham string nextPrev (int curpage, int pages)
* Returns "Previous | Next" string for individual pagination (it's a word!)
***********************************************************************************/
	function nextPrev($curpage, $pages,$dk=NULL)
	{
		$next_prev = "";
		$query_string = "?";
		//xét xem page cần xử lý phân page có tham số hay chưa
		//ví dụ: page_the_loai đã có tham số: http://localhost/do_an/page_the_loai.php?ma_linh_vuc=2
		//if(!empty($_SERVER['QUERY_STRING']))
			//$query_string = "?{$_SERVER['QUERY_STRING']}&";
		$Back='<img src="./public/css_js/images/restart-1.png "  width="50px" />';
        $Next='<img src=".//public/css_js/images/Next-icon.png"  width="50px"/>';
		if (($curpage-1) <= 0)
		{

		}
		else
		{
			$next_prev .= "<a href=\"".$_SERVER['PHP_SELF']."?page=".($curpage-1)."&{$dk}\">$Back</a>";
		}

		
		if (($curpage+1) > $pages)
		{

		}
		else
		{
			$next_prev .= "<a href=\"".$_SERVER['PHP_SELF']."?page=".($curpage+1)."&{$dk}\">$Next</a>";
		}
		return $next_prev;
	}
}
?>