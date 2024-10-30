<?php
/*
Plugin Name: IBNShortCode - IDBlogNetwork Ads
Plugin URI: http://wan.web.id/plugins
Description: Plugin Menyisipkan Iklan ID Blog Network di tengah Postingan Wordpress, Kunjungi <a href="http://wan.web.id" target="_blank">Website Saya</a> Untuk Penggunaan Lebih Lanjut.
Author: Iswan Febriyanto
Author URI: http://www.wan.web.id
Version: 0.1
*/

function ibn_kode($atts)
{
	extract(shortcode_atts(array(
			'blogID' => '4453',
			'format' => '',
	), $atts));
	
	switch($format)
	{
			case "1": //ads_ppa_static_120x600
			$iklan = '
					<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppa.php?id_blog='.$blogID.'&sz=120x600" width="130px" height="610px" marginwidth=0 marginheight=0 ></iframe>';	
			break;
			
			case "2": //ads_ppa_static_160x600
			$iklan = '
					<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppa.php?id_blog='.$blogID.'&sz=160x600" width="170px" height="610px" marginwidth=0 marginheight=0 ></iframe>';
			break;
			
			case "3": //ads_ppa_static_300x250
			$iklan = '
					<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppa.php?id_blog='.$blogID.'&sz=300x250" width="310px" height="260px" marginwidth=0 marginheight=0 ></iframe>';
			break;
			
			case "4": //ads_ppa_static_468x60
			$iklan = '
					<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppa.php?id_blog='.$blogID.'&sz=468x60" width="478px" height="70px" marginwidth=0 marginheight=0 ></iframe>';
			break;
			
			case "5": //ads_ppc_flash_120x600
			$iklan = '
					<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc_flash.php?b='.$blogID.'&sz=120x600" width="130px" height="610px" marginwidth=0 marginheight=0 ></iframe>';
			break;
			
			case "6": //ads_ppc_flash_160x600
			$iklan = '
					<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc_flash.php?b='.$blogID.'&sz=160x600" width="170px" height="610px" marginwidth=0 marginheight=0 ></iframe>';
			break;
			
			case "7": //ads_ppc_flash_300x250
			$iklan = '
					<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc_flash.php?b='.$blogID.'&sz=300x250" width="310px" height="260px" marginwidth=0 marginheight=0 ></iframe>';
			break;
			
			case "8": //ads_ppc_flash_468x60
			$iklan = '
					<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc_flash.php?b='.$blogID.'&sz=468x60" width="478px" height="70px" marginwidth=0 marginheight=0 ></iframe>';
			break;
			
			case "9": //ads_ppc_flash_728x90
			$iklan = '
					<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc_flash.php?b='.$blogID.'&sz=728x90" width="738px" height="100px" marginwidth=0 marginheight=0 ></iframe>';
			break;
			
			case "10": //ads_ppc_static_120x600
			$iklan = '
					<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc.php?b='.$blogID.'&sz=120x600" width="130px" height="610px" marginwidth=0 marginheight=0 ></iframe>';
			break;
			
			case "11": //ads_ppc_static_160x600
			$iklan = '
					<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc.php?b='.$blogID.'&sz=160x600" width="170px" height="610px" marginwidth=0 marginheight=0 ></iframe>';
			break;
			
			case "12": //ads_ppc_static_300x250
			$iklan = '
					<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc.php?b='.$blogID.'&sz=300x250" width="310px" height="260px" marginwidth=0 marginheight=0 ></iframe>';
			break;
			
			case "13": //ads_ppc_static_468x60
			$iklan = '
					<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc.php?b='.$blogID.'&sz=468x60" width="478px" height="70px" marginwidth=0 marginheight=0 ></iframe>';
			break;
			
			case "14": //ads_ppc_static_728x90
			$iklan = '
					<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc.php?b='.$blogID.'&sz=728x90" width="738px" height="100px" marginwidth=0 marginheight=0 ></iframe>';
			break;
		}
		
		$iklan = '
				<table>
				<tr>
				<td style="text-align:center">'.$iklan.'
				</tr>
				</table>';

		return $iklan;
}
add_shortcode('ibn', 'ibn_kode');
?>