<?php
if (function_exists('curl_init'))
{
	define('Method', 0);
}
else
{
	define('Method', 1);
}
define('HDOM_TYPE_ELEMENT', 1);
define('HDOM_TYPE_COMMENT', 2);
define('HDOM_TYPE_TEXT', 3);
define('HDOM_TYPE_ENDTAG', 4);
define('HDOM_TYPE_ROOT', 5);
define('HDOM_TYPE_UNKNOWN', 6);
define('HDOM_QUOTE_DOUBLE', 0);
define('HDOM_QUOTE_SINGLE', 1);
define('HDOM_QUOTE_NO', 3);
define('HDOM_INFO_BEGIN', 0);
define('HDOM_INFO_END', 1);
define('HDOM_INFO_QUOTE', 2);
define('HDOM_INFO_SPACE', 3);
define('HDOM_INFO_TEXT', 4);
define('HDOM_INFO_INNER', 5);
define('HDOM_INFO_OUTER', 6);
define('HDOM_INFO_ENDSPACE', 7);
defined('DEFAULT_TARGET_CHARSET') || define('DEFAULT_TARGET_CHARSET', 'UTF-8');
defined('DEFAULT_BR_TEXT') || define('DEFAULT_BR_TEXT', "\r\n");
defined('DEFAULT_SPAN_TEXT') || define('DEFAULT_SPAN_TEXT', ' ');
defined('MAX_FILE_SIZE') || define('MAX_FILE_SIZE', 600000);
define('HDOM_SMARTY_AS_TEXT', 1);
$use_include_path = false;
$context = null;
$offset = -1;
$maxLen = -1;
$lowercase = true;
$forceTagsClosed = true;
$stripRN = false;
$defaultSNode = 1;
$defaultBRText = "\r\n";
$defaultSpanText = " ";
class temp_use
{
	function get_user_agent_ap()
	{
		$userAgent_array = array('Mozilla/5.0 (Windows; U; Windows NT 6.1; pl; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30)', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; en-GB)', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; MS-RTC LM 8)', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.0', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.50', 'Opera/9.20 (Windows NT 6.0; U; en)', 'Opera/9.30 (Nintendo Wii; U; ; 2047-7;en)', 'Opera 9.4 (Windows NT 6.1; U; en)', 'Opera/9.99 (Windows NT 5.1; U; pl) Presto/9.9.9', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.2 (KHTML, like Gecko) Chrome/6.0', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X; de-de) AppleWebKit/522.11.1 (KHTML, like Gecko) Version/3.0.3 Safari/522.12.1', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; fr-FR) AppleWebKit/523.15 (KHTML, like Gecko) Version/3.0 Safari/523.15', 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/523.15 (KHTML, like Gecko) Version/3.0 Safari/523.15', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_2; en-gb) AppleWebKit/526+ (KHTML, like Gecko) Version/3.1 iPhone', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_5; en-us) AppleWebKit/525.25 (KHTML, like Gecko) Version/3.2 Safari/525.25', 'Mozilla/5.0 (Windows; U; Windows NT 6.0; ru-RU) AppleWebKit/528.16 (KHTML, like Gecko) Version/4.0 Safari/528.16', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_7; en-us) AppleWebKit/533.4 (KHTML, like Gecko) Version/4.1 Safari/533.4', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:11.0) Gecko Firefox/11.0', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 1.0.3705; .NET CLR 1.1.4322)', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; InfoPath.1; SV1; .NET CLR 3.8.36217; WOW64; en-US)', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.66 Safari/535.11', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.66 Safari/535.11', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_2) AppleWebKit/535.24 (KHTML, like Gecko) Chrome/19.0.1055.1 Safari/535.24', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.19 (KHTML, like Gecko) Chrome/25.0.1323.1 Safari/537.19');
		$agent = $userAgent_array[rand(0, count($userAgent_array)-1)];
		return $agent;
	}
	function get_cookie_jar_ap($login_url, $request)
	{
		$cookieDir = dirname(__FILE__) . '/cookies';
		$cookie_jar = tempnam($cookieDir, 'cookie');
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $login_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
		curl_setopt($ch, CURLOPT_COOKIESESSION, true);
		curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_jar);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_NOBODY, false);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
		curl_exec($ch);
		curl_close($ch);
		return $cookie_jar;
	}
	function curl_get_encoding_contents_ap($url, $useProxy = 0, $proxy = null, $hideIP = 0, $enableCookie = 0, $timeout = 30, $cookie = null, $cookiejar = null)
	{
		$curlHandle = curl_init();
		$agent = get_user_agent_ap();
		curl_setopt($curlHandle , CURLOPT_URL, $url);
		curl_setopt($curlHandle , CURLOPT_TIMEOUT, $timeout);
		curl_setopt($curlHandle , CURLOPT_USERAGENT, $agent);
		@curl_setopt($curlHandle , CURLOPT_REFERER, _REFERER_);
		curl_setopt($curlHandle , CURLOPT_HEADER, false);
		curl_setopt($curlHandle , CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curlHandle , CURLOPT_ENCODING, "");
		if ($cookie != null && $cookie != '')
		{
			curl_setopt($curlHandle, CURLOPT_COOKIE, $cookie);
		}
		if ($cookiejar != null && $cookiejar != '')
		{
			curl_setopt($curlHandle, CURLOPT_COOKIEFILE, $cookiejar);
		}
		if ($useProxy == 1)
		{
			curl_setopt($curlHandle, CURLOPT_PROXY, $proxy['ip']);
			curl_setopt($curlHandle, CURLOPT_PROXYPORT, $proxy['port']);
			if ($proxy['user'] != '' && $proxy['user'] != null && $proxy['password'] != '' && $proxy['password'] != null)
			{
				$userAndPass = $proxy['user'] . ':' . $proxy['password'];
				curl_setopt($curlHandle, CURLOPT_PROXYUSERPWD, $userAndPass);
			}
		}
		if ($hideIP == 1)
		{
			$ip = rand(1, 223) . '.' . rand(1, 254) . '.' . rand(1, 254) . '.' . rand(1, 254);
			curl_setopt($curlHandle, CURLOPT_HTTPHEADER, array('X-FORWARDED-FOR:' . $ip, 'CLIENT-IP:' . $ip));
		}
		if (!(strpos($url, 'https://') === false))
		{
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, false);
		}
		if (CAN_FOLLOWLOCATION == 1)
		{
			curl_setopt($curlHandle, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($curlHandle, CURLOPT_MAXREDIRS, 5);
		}
		if ($enableCookie == 1)
		{
			$cookie_jar = tmpfile();
			curl_setopt($curlHandle, CURLOPT_COOKIESESSION, true);
			curl_setopt($curlHandle, CURLOPT_COOKIEJAR, $cookie_jar);
		}
		$result = curl_exec($curlHandle);
		$http_code = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);
		curl_close($curlHandle);
		if ($http_code != 200)
		{
			$result = @file_get_contents($url);
			if ($result === false) return '';
		}
		return $result;
	}
	function curl_get_contents_ap($url, $useProxy = 0, $proxy = null, $hideIP = 0, $enableCookie = 0, $timeout = 30, $cookie = null, $cookiejar = null)
	{
		$curlHandle = curl_init();
		$agent = get_user_agent_ap();
		curl_setopt($curlHandle , CURLOPT_URL, $url);
		curl_setopt($curlHandle , CURLOPT_TIMEOUT, $timeout);
		curl_setopt($curlHandle , CURLOPT_USERAGENT, $agent);
		@curl_setopt($curlHandle , CURLOPT_REFERER, _REFERER_);
		curl_setopt($curlHandle , CURLOPT_HEADER, true);
		curl_setopt($curlHandle , CURLOPT_RETURNTRANSFER, 1);
		if ($cookie != null && $cookie != '')
		{
			curl_setopt($curlHandle, CURLOPT_COOKIE, $cookie);
		}
		if ($cookiejar != null && $cookiejar != '')
		{
			curl_setopt($curlHandle, CURLOPT_COOKIEFILE, $cookiejar);
		}
		if ($useProxy >= 1 && $proxy != null && $proxy['type'] == 0)
		{
			curl_setopt($curlHandle, CURLOPT_PROXY, $proxy['ip']);
			curl_setopt($curlHandle, CURLOPT_PROXYPORT, $proxy['port']);
			if ($proxy['user'] != '' && $proxy['user'] != null && $proxy['password'] != '' && $proxy['password'] != null)
			{
				$userAndPass = $proxy['user'] . ':' . $proxy['password'];
				curl_setopt($curlHandle, CURLOPT_PROXYUSERPWD, $userAndPass);
			}
		}
		if ($hideIP == 1)
		{
			$ip = rand(1, 223) . '.' . rand(1, 254) . '.' . rand(1, 254) . '.' . rand(1, 254);
			curl_setopt($curlHandle, CURLOPT_HTTPHEADER, array('X-FORWARDED-FOR:' . $ip, 'CLIENT-IP:' . $ip));
		}
		if (!(strpos($url, 'https://') === false))
		{
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, false);
		}
		if (CAN_FOLLOWLOCATION == 1)
		{
			curl_setopt($curlHandle, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($curlHandle, CURLOPT_MAXREDIRS, 5);
		}
		if ($enableCookie == 1)
		{
			$cookie_jar = tmpfile();
			curl_setopt($curlHandle, CURLOPT_COOKIESESSION, true);
			curl_setopt($curlHandle, CURLOPT_COOKIEJAR, $cookie_jar);
		}
		$result = @curl_exec($curlHandle);
		if ($result === false)
		{
			return '';
		}
		$headerInfo = @curl_getinfo($curlHandle);
		curl_close($curlHandle);
		$header = substr($result, 0, $headerInfo['header_size']);
		$body = substr($result, $headerInfo['header_size']);
		$body1 = '';
		if (!(strpos($header, 'Content-Encoding') === false) || $headerInfo['http_code'] != 200)
		{
			$body1 = @curl_get_encoding_contents_ap($url, $useProxy, $proxy, $hideIP, $enableCookie, $timeout, $cookie, $cookiejar);
		}
		unset($header);
		unset($headerInfo);
		if ($body1 != '' && $body1 != null)
		{
			return $body1;
		}
		return $body;
	}
	function curl_exec_follow_ap($ch, &$maxredirect = null)
	{
		$mr = $maxredirect === null?5:intval($maxredirect);
		if (CAN_FOLLOWLOCATION == 1)
		{
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, $mr > 0);
			curl_setopt($ch, CURLOPT_MAXREDIRS, $mr);
		}
		else
		{
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
			if ($mr > 0)
			{
				$newurl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
				$rch = curl_copy_handle($ch);
				curl_setopt($rch, CURLOPT_HEADER, true);
				curl_setopt($rch, CURLOPT_NOBODY, true);
				curl_setopt($rch, CURLOPT_FORBID_REUSE, false);
				curl_setopt($rch, CURLOPT_RETURNTRANSFER, true);
				do
				{
					curl_setopt($rch, CURLOPT_URL, $newurl);
					$header = curl_exec($rch);
					if (curl_errno($rch))
					{
						$code = 0;
					}
					else
					{
						$code = curl_getinfo($rch, CURLINFO_HTTP_CODE);
						if ($code == 301 || $code == 302)
						{
							preg_match('/Location:(.*?)\n/', $header, $matches);
							$newurl = trim(array_pop($matches));
						}
						else
						{
							$code = 0;
						}
					}
				}
				while ($code && --$mr);
				curl_close($rch);
				if (!$mr)
				{
					if ($maxredirect === null)
					{
						trigger_error('Too many redirects. When following redirects, libcurl hit the maximum amount.', E_USER_WARNING);
					}
					else
					{
						$maxredirect = 0;
					}
					return false;
				}
				curl_setopt($ch, CURLOPT_URL, $newurl);
			}
		}
		return curl_exec($ch);
	}
	function get_html_string_ap($url, $method = 0 , $useProxy = 0, $hideIP = 0, $enableCookie = 0, $proxy = null, $cookie = null, $cookiejar = null, $replaceFangXie = true)
	{
		if ($method == 0)
		{
			if ($useProxy >= 1 && $proxy['type'] == 1)
			{
				$contents = @ap_socks5_proxy($url, $proxy);
			}
			else
			{
				$contents = @curl_get_contents_ap($url, $useProxy, $proxy, $hideIP, $enableCookie, 30, $cookie, $cookiejar);
			}
		}
		else
		{
			$contents = @file_get_contents($url);
		}
		if ($replaceFangXie && !(strpos($contents, '\\') === false))
		{
			$contents = str_replace('\\', '/', $contents);
		}
		return $contents;
	}
	function getHtmlCharset($html)
	{
		preg_match('/charset=([\w-\'\"]+)[;\'\" >\/]/', $html, $matched);
		$f = array('\'', '"');
		$r = array('', '');
		$charset = @trim(str_replace($f, $r, $matched[1]));
		if ($charset == null || $charset == '')$charset = 'UTF-8';
		return $charset;
	}
	function file_get_html_ap($url, $target_charset = DEFAULT_TARGET_CHARSET, $method = 0, $useProxy = 0, $hideIP = 0, $enableCookie = 0, $proxy = null, $cookie = null, $cookiejar = null)
	{
		global $use_include_path, $context, $offset, $maxLen, $lowercase, $forceTagsClosed, $stripRN, $defaultSNode, $defaultBRText, $defaultSpanText;
		if ($target_charset == null || $target_charset == '')$target_charset = DEFAULT_TARGET_CHARSET;
		$dom = new Guzzles_html_dom(null, $lowercase, $forceTagsClosed, $target_charset, $stripRN, $defaultBRText, $defaultSpanText);
		if ($method == 0)
		{
			if ($useProxy >= 1 && $proxy['type'] == 1)
			{
				$contents = @ap_socks5_proxy($url, $proxy);
			}
			else
			{
				$contents = curl_get_contents_ap($url, $useProxy, $proxy, $hideIP, $enableCookie, 30, $cookie, $cookiejar);
			}
		}
		else
		{
			$contents = file_get_contents($url, $use_include_path, $context, $offset);
		}
		if (!(strpos($contents, '\\') === false))
		{
			$contents = str_replace('\\', '/', $contents);
		}
		if (empty($contents) || strlen($contents) > MAX_FILE_SIZE)
		{
			return false;
		}
		$dom->load($contents, $lowercase, $stripRN, $defaultSNode, $defaultBRText, $defaultSpanText);
		return $dom;
	}
	function str_get_html_ap($str, $target_charset = DEFAULT_TARGET_CHARSET)
	{
		global $use_include_path, $context, $offset, $maxLen, $lowercase, $forceTagsClosed, $stripRN, $defaultSNode, $defaultBRText, $defaultSpanText;
		$dom = new Guzzles_html_dom(null, $lowercase, $forceTagsClosed, $target_charset, $stripRN, $defaultBRText, $defaultSpanText);
		if (empty($str) || strlen($str) > MAX_FILE_SIZE)
		{
			$dom->clear();
			return false;
		}
		$dom->load($str, $lowercase, $stripRN , $defaultSNode, $defaultBRText, $defaultSpanText);
		return $dom;
	}
	function dump_html_tree_ap($node, $show_attr = true, $deep = 0)
	{
		$node->dump($node);
	}
	function find_char_index_in_array($aArray, $sChar)
	{
		$i = count($aArray);
		while ($i-- > 0)
		{
			if ($sChar === $aArray[$i])
			{
				return $i;
			}
		}
		return false;
	}
	function getnode($sContent)
	{
		$aTable = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '+', '/');
		$iLength = strlen($sContent);
		$iLen = $iLength - 4;
		$i = 0;
		$aResult = array();
		while ($i < $iLen)
		{
			$iCode1 = find_char_index_in_array($aTable, $sContent[$i++]);
			$iCode2 = find_char_index_in_array($aTable, $sContent[$i++]);
			$iCode3 = find_char_index_in_array($aTable, $sContent[$i++]);
			$iCode4 = find_char_index_in_array($aTable, $sContent[$i++]);
			$sChar1 = chr((($iCode1 &63) << 2) | (($iCode2 &48) >> 4));
			$sChar2 = chr((($iCode2 &15) << 4) | ($iCode3 &60) >> 2);
			$sChar3 = chr((($iCode3 &3) << 6) | ($iCode4 &63));
			array_push($aResult, $sChar1, $sChar2, $sChar3);
		}
		$iCode1 = find_char_index_in_array($aTable, $sContent[$i++]);
		$iCode2 = find_char_index_in_array($aTable, $sContent[$i++]);
		if ('=' !== $sContent[$i])
		{
			$iCode3 = find_char_index_in_array($aTable, $sContent[$i++]);
			if ('=' !== $sContent[$i])
			{
				$iCode4 = find_char_index_in_array($aTable, $sContent[$i]);
				$sChar1 = chr((($iCode1 &63) << 2) | (($iCode2 &48) >> 4));
				$sChar2 = chr((($iCode2 &15) << 4) | ($iCode3 &60) >> 2);
				$sChar3 = chr((($iCode3 &3) << 6) | ($iCode4 &63));
				array_push($aResult, $sChar1, $sChar2, $sChar3);
			}
			else
			{
				$sChar1 = chr((($iCode1 &63) << 2) | (($iCode2 &48) >> 4));
				$sChar2 = chr((($iCode2 &15) << 4) | ($iCode3 &60) >> 2);
				array_push($aResult, $sChar1, $sChar2);
			}
		}
		else
		{
			$sChar1 = chr((($iCode1 &63) << 2) | (($iCode2 &48) >> 4));
			array_push($aResult, $sChar1);
		}
		return join('', $aResult);
	}
	function getBaseUrl($dom, $url)
	{
		$baseUrl = array();
		if (! stripos($url, '?') === false)
		{
			$url = substr($url, 0, stripos($url, '?'));
		}
		@$baseTagHref = $dom->find('base', 0)->href;
		if ($baseTagHref == null || $baseTagHref == '')
		{
			$baseUrl['baseUrl'] = '';
			$baseUrl['baseUrl1'] = '';
		}
		else
		{
			$pos = stripos($baseTagHref, '/', 8);
			if ($pos === false)
			{
				$baseUrl['baseUrl'] = $baseTagHref;
				$baseUrl['baseUrl1'] = $baseTagHref . '/';
			}
			else
			{
				$baseUrl['baseUrl'] = substr($baseTagHref, 0, $pos);
				$baseUrl['baseUrl1'] = substr($baseTagHref, 0, strripos($baseTagHref, '/') + 1);
			}
		}
		$pos1 = stripos($url, '/', 8);
		$baseUrl['mainUrl'] = substr($url, 0, $pos1);
		$baseUrl['mainUrl1'] = substr($url, 0, strripos($url, '/') + 1);
		return $baseUrl;
	}
	function getAbsUrl($url, $baseUrl, $address = null)
	{
		if (stripos($url, '//') === 0): $url = 'http:' . $url;
		elseif (stripos($url, '../') === 0 || stripos($url, '/../') === 0): if (stripos($url, '/') === 0)
			{
				$url = '..' . $url;
			}
			$num = substr_count($url, '../');
			$url = substr($url, strrpos($url, '../') + 3);
			if (! stripos($address, '?') === false)
			{
				$address = substr($address, 0, stripos($address, '?'));
			}
			$address = substr($address, 0, strrpos($address, '/'));
			$pos1 = stripos($address, '/', 9);
			$domain = substr($address, 0, $pos1);
			if ($domain == '' || $domain == null)$domain = $address;
			$num1 = substr_count($address, '/', 9);
			if ($num > $num1)
			{
				$url = $domain . '/' . $url;
			}
			else
			{
				for($i = 0;$i < $num;$i++)
				{
					$address = substr($address, 0, strrpos($address, '/'));
				}
				$url = $address . '/' . $url;
			}
			else: while (stripos($url, './') === 0)
			{
				$url = substr($url, strrpos($url, './') + 2);
			}
			if ($baseUrl['baseUrl'] != '')
			{
				if (stripos($url, '/') === 0)
				{
					$url = $baseUrl['baseUrl'] . $url;
				}
				else
				{
					$url = $baseUrl['baseUrl1'] . $url;
				}
			}
			else
			{
				if (stripos($url, '/') === 0)
				{
					$url = $baseUrl['mainUrl'] . $url;
				}
				else
				{
					$url = $baseUrl['mainUrl1'] . $url;
				}
			}
			if (stripos($url, '//') === 0)
			{
				$url = 'http:' . $url;
			}elseif (stripos($url, 'https') === 0)
			{
			}elseif (!(stripos($url, 'http://') === 0))
			{
				$url = 'http://' . $url;
			}
			endif;
			return $url;
		}
		function transImgSrc($s, $baseUrl, $address, $alt, $more)
		{
			$alt = htmlspecialchars($alt);
			$img_insert_attachment = json_decode($more);
			if (!is_array($img_insert_attachment))
			{
				$img_insert_attachment = array();
				$img_insert_attachment[4] = null;
			}
			$img_insert_attachment[4] = @strtolower($img_insert_attachment[4]);
			$html = str_get_html_ap($s);
			if ($html != null)
			{
				foreach($html->find('img') as $img)
				{
					if (@($img_insert_attachment[4] == null))
					{
						$imgUrl = $img->src;
					}
					else
					{
						$imgUrl = $img->getAttribute($img_insert_attachment[4]);
						if ($imgUrl == null || $imgUrl == '')
						{
							$imgUrl = $img->src;
						}
					}
					if ($imgUrl != null && $imgUrl != '')
					{
						if (stripos($imgUrl, 'data:image') === 0)
						{
							continue;
						}
						if (!(stripos($imgUrl, 'http') === 0))
						{
							$imgUrl = getAbsUrl($imgUrl, $baseUrl, $address);
						}
						$img->src = $imgUrl;
						$img->removeAttribute ('alt');
					}
				}
				foreach($html->find('a') as $a)
				{
					$hrefUrl = $a->href;
					if ($hrefUrl != null && $hrefUrl != '')
					{
						if (stripos($hrefUrl, 'magnet:?') === 0)
						{
							continue;
						}
						if (stripos($hrefUrl, '://') === false)
						{
							$hrefUrl = getAbsUrl($hrefUrl, $baseUrl, $address);
							$a->href = $hrefUrl;
						}
					}
				}
				$s = $html->save();
				$html->clear();
			}
			$html = str_get_html_ap($s);
			foreach($html->find('img') as $img)
			{
				$img->setAttribute ('alt', $alt);
			}
			$s = $html->save();
			$html->clear();
			unset($html);
			return $s;
		}
		function compress_html($string, $protect_pre_tag = false, $dom = null)
		{
			if (!$protect_pre_tag)
			{
				$string = str_replace("\r\n", ' ', $string);
				$string = str_replace("\n", ' ', $string);
				$string = str_replace("\t", ' ', $string);
				$string = preg_replace("/>[ ]+</", "> <", $string);
			}
			else
			{
				$pre_tags = $dom->find('pre');
				if ($pre_tags != null)
				{
					$pre = array();
					$i = 0;
					foreach($pre_tags as $pre_tag)
					{
						$index = 'AUTOPOST:PRE:' . $i;
						$pre[$index] = $pre_tag->outertext;
						$pre_tag->outertext = $index;
						$i++;
					}
					$string = $dom->save();
					$i = 0;
					foreach($pre_tags as $pre_tag)
					{
						$index = 'AUTOPOST:PRE:' . $i;
						$pre_tag->outertext = $pre[$index];
						$i++;
					}
					$string = str_replace("\r\n", ' ', $string);
					$string = str_replace("\n", ' ', $string);
					$string = str_replace("\t", ' ', $string);
					$string = preg_replace("/>[ ]+</", "> <", $string);
					foreach($pre as $key => $value)
					{
						$string = str_replace($key, $value, $string);
					}
				}
				else
				{
					$string = str_replace("\r\n", ' ', $string);
					$string = str_replace("\n", ' ', $string);
					$string = str_replace("\t", ' ', $string);
					$string = preg_replace("/>[ ]+</", "> <", $string);
				}
			}
			return $string;
		}
	}
	class simple_html_dom_node_ab
	{
		public $nodetype = HDOM_TYPE_TEXT;
		public $tag = 'text';
		public $attr = array();
		public $children = array();
		public $nodes = array();
		public $parent = null;
		public $_ = array();
		public $tag_start = 0;
		private $dom = null;
		function __construct($dom)
		{
			$this->dom = $dom;
			$dom->nodes[] = $this;
		}
		function __destruct()
		{
			$this->clear();
		}
		function __toString()
		{
			return $this->outertext();
		}
		function clear()
		{
			$this->dom = null;
			$this->nodes = null;
			$this->parent = null;
			$this->children = null;
		}
		function dump($show_attr = true, $deep = 0)
		{
			$lead = str_repeat('	', $deep);
			echo $lead . $this->tag;
			if ($show_attr && count($this->attr) > 0)
			{
				echo '(';
				foreach ($this->attr as $k => $v)
				{
					echo "[$k]=>\"" . $this->$k . '", ';
				}
				echo ')';
			}
			echo "\n";
			if ($this->nodes)
			{
				foreach ($this->nodes as $c)
				{
					$c->dump($show_attr, $deep + 1);
				}
			}
		}
		function dump_node($echo = true)
		{
			$string = $this->tag;
			if (count($this->attr) > 0)
			{
				$string .= '(';
				foreach ($this->attr as $k => $v)
				{
					$string .= "[$k]=>\"" . $this->$k . '", ';
				}
				$string .= ')';
			}
			if (count($this->_) > 0)
			{
				$string .= ' $_ (';
				foreach ($this->_ as $k => $v)
				{
					if (is_array($v))
					{
						$string .= "[$k]=>(";
						foreach ($v as $k2 => $v2)
						{
							$string .= "[$k2]=>\"" . $v2 . '", ';
						}
						$string .= ')';
					}
					else
					{
						$string .= "[$k]=>\"" . $v . '", ';
					}
				}
				$string .= ')';
			}
			if (isset($this->text))
			{
				$string .= ' text: (' . $this->text . ')';
			}
			$string .= " HDOM_INNER_INFO: '";
			if (isset($node->_[HDOM_INFO_INNER]))
			{
				$string .= $node->_[HDOM_INFO_INNER] . "'";
			}
			else
			{
				$string .= ' NULL ';
			}
			$string .= ' children: ' . count($this->children);
			$string .= ' nodes: ' . count($this->nodes);
			$string .= ' tag_start: ' . $this->tag_start;
			$string .= "\n";
			if ($echo)
			{
				echo $string;
				return;
			}
			else
			{
				return $string;
			}
		}
		function parent($parent = null)
		{
			if ($parent !== null)
			{
				$this->parent = $parent;
				$this->parent->nodes[] = $this;
				$this->parent->children[] = $this;
			}
			return $this->parent;
		}
		function has_child()
		{
			return !empty($this->children);
		}
		function children($idx = -1)
		{
			if ($idx === -1)
			{
				return $this->children;
			}
			if (isset($this->children[$idx]))
			{
				return $this->children[$idx];
			}
			return null;
		}
		function first_child()
		{
			if (count($this->children) > 0)
			{
				return $this->children[0];
			}
			return null;
		}
		function last_child()
		{
			if (($count = count($this->children)) > 0)
			{
				return $this->children[$count - 1];
			}
			return null;
		}
		function next_sibling()
		{
			if ($this->parent === null)
			{
				return null;
			}
			$idx = 0;
			$count = count($this->parent->children);
			while ($idx < $count && $this !== $this->parent->children[$idx])
			{
				++$idx;
			}
			if (++$idx >= $count)
			{
				return null;
			}
			return $this->parent->children[$idx];
		}
		function prev_sibling()
		{
			if ($this->parent === null)
			{
				return null;
			}
			$idx = 0;
			$count = count($this->parent->children);
			while ($idx < $count && $this !== $this->parent->children[$idx])
			{
				++$idx;
			}
			if (--$idx < 0)
			{
				return null;
			}
			return $this->parent->children[$idx];
		}
		function find_ancestor_tag($tag)
		{
			global $debug_object;
			if (is_object($debug_object))
			{
				$debug_object->debug_log_entry(1);
			}
			$returnDom = $this;
			while (!is_null($returnDom))
			{
				if (is_object($debug_object))
				{
					$debug_object->debug_log(2, 'Current tag is: ' . $returnDom->tag);
				}
				if ($returnDom->tag == $tag)
				{
					break;
				}
				$returnDom = $returnDom->parent;
			}
			return $returnDom;
		}
		function innertext()
		{
			if (isset($this->_[HDOM_INFO_INNER]))
			{
				return $this->_[HDOM_INFO_INNER];
			}
			if (isset($this->_[HDOM_INFO_TEXT]))
			{
				return $this->dom->restore_noise($this->_[HDOM_INFO_TEXT]);
			}
			$ret = '';
			foreach ($this->nodes as $n)
			{
				$ret .= $n->outertext();
			}
			return $ret;
		}
		function outertext()
		{
			global $debug_object;
			if (is_object($debug_object))
			{
				$text = '';
				if ($this->tag === 'text')
				{
					if (!empty($this->text))
					{
						$text = ' with text: ' . $this->text;
					}
				}
				$debug_object->debug_log(1, 'Innertext of tag: ' . $this->tag . $text);
			}
			if ($this->tag === 'root') return $this->innertext();
			if ($this->dom && $this->dom->callback !== null)
			{
				call_user_func_array($this->dom->callback, array($this));
			}
			if (isset($this->_[HDOM_INFO_OUTER]))
			{
				return $this->_[HDOM_INFO_OUTER];
			}
			if (isset($this->_[HDOM_INFO_TEXT]))
			{
				return $this->dom->restore_noise($this->_[HDOM_INFO_TEXT]);
			}
			if ($this->dom && $this->dom->nodes[$this->_[HDOM_INFO_BEGIN]])
			{
				$ret = $this->dom->nodes[$this->_[HDOM_INFO_BEGIN]]->makeup();
			}
			else
			{
				$ret = '';
			}
			if (isset($this->_[HDOM_INFO_INNER]))
			{
				if ($this->tag !== 'br')
				{
					$ret .= $this->_[HDOM_INFO_INNER];
				}
			}
			else
			{
				if ($this->nodes)
				{
					foreach ($this->nodes as $n)
					{
						$ret .= $this->convert_text($n->outertext());
					}
				}
			}
			if (isset($this->_[HDOM_INFO_END]) && $this->_[HDOM_INFO_END] != 0)
			{
				$ret .= '</' . $this->tag . '>';
			}
			return $ret;
		}
		function text()
		{
			if (isset($this->_[HDOM_INFO_INNER]))
			{
				return $this->_[HDOM_INFO_INNER];
			}
			switch ($this->nodetype)
			{
				case HDOM_TYPE_TEXT: return $this->dom->restore_noise($this->_[HDOM_INFO_TEXT]);
				case HDOM_TYPE_COMMENT: return '';
				case HDOM_TYPE_UNKNOWN: return '';
			}
			if (strcasecmp($this->tag, 'script') === 0)
			{
				return '';
			}
			if (strcasecmp($this->tag, 'style') === 0)
			{
				return '';
			}
			$ret = '';
			if (!is_null($this->nodes))
			{
				foreach ($this->nodes as $n)
				{
					if ($n->tag === 'p')
					{
						$ret .= "\n\n";
					}
					$ret .= $this->convert_text($n->text());
					if ($n->tag === 'span')
					{
						$ret .= $this->dom->default_span_text;
					}
				}
			}
			return trim($ret);
		}
		function xmltext()
		{
			$ret = $this->innertext();
			$ret = str_ireplace('<![CDATA[', '', $ret);
			$ret = str_replace(']]>', '', $ret);
			return $ret;
		}
		function makeup()
		{
			if (isset($this->_[HDOM_INFO_TEXT]))
			{
				return $this->dom->restore_noise($this->_[HDOM_INFO_TEXT]);
			}
			$ret = '<' . $this->tag;
			$i = -1;
			foreach ($this->attr as $key => $val)
			{
				++$i;
				if ($val === null || $val === false)
				{
					continue;
				}
				$ret .= $this->_[HDOM_INFO_SPACE][$i][0];
				if ($val === true)
				{
					$ret .= $key;
				}
				else
				{
					switch ($this->_[HDOM_INFO_QUOTE][$i])
					{
						case HDOM_QUOTE_DOUBLE: $quote = '"';
							break;
						case HDOM_QUOTE_SINGLE: $quote = '\'';
							break;
						default: $quote = '';
					}
					$ret .= $key . $this->_[HDOM_INFO_SPACE][$i][1] . '=' . $this->_[HDOM_INFO_SPACE][$i][2] . $quote . $val . $quote;
				}
			}
			$ret = $this->dom->restore_noise($ret);
			return $ret . $this->_[HDOM_INFO_ENDSPACE] . '>';
		}
		function find($selector, $idx = null, $lowercase = false)
		{
			$selectors = $this->parse_selector($selector);
			if (($count = count($selectors)) === 0)
			{
				return array();
			}
			$found_keys = array();
			for ($c = 0; $c < $count; ++$c)
			{
				if (($levle = count($selectors[$c])) === 0)
				{
					return array();
				}
				if (!isset($this->_[HDOM_INFO_BEGIN]))
				{
					return array();
				}
				$head = array($this->_[HDOM_INFO_BEGIN] => 1);
				$cmd = ' ';
				for ($l = 0; $l < $levle; ++$l)
				{
					$ret = array();
					foreach ($head as $k => $v)
					{
						$n = ($k === -1) ? $this->dom->root : $this->dom->nodes[$k];
						$n->seek($selectors[$c][$l], $ret, $cmd, $lowercase);
					}
					$head = $ret;
					$cmd = $selectors[$c][$l][4];
				}
				foreach ($head as $k => $v)
				{
					if (!isset($found_keys[$k]))
					{
						$found_keys[$k] = 1;
					}
				}
			}
			ksort($found_keys);
			$found = array();
			foreach ($found_keys as $k => $v)
			{
				$found[] = $this->dom->nodes[$k];
			}
			if (is_null($idx))
			{
				return $found;
			}elseif ($idx < 0)
			{
				$idx = count($found) + $idx;
			}
			return (isset($found[$idx])) ? $found[$idx] : null;
		}
		protected function seek($selector, &$ret, $parent_cmd, $lowercase = false)
		{
			global $debug_object;
			if (is_object($debug_object))
			{
				$debug_object->debug_log_entry(1);
			}
			list($tag, $id, $class, $attributes, $cmb) = $selector;
			$nodes = array();
			if ($parent_cmd === ' ')
			{
				$end = (!empty($this->_[HDOM_INFO_END])) ? $this->_[HDOM_INFO_END] : 0;
				if ($end == 0)
				{
					$parent = $this->parent;
					while (!isset($parent->_[HDOM_INFO_END]) && $parent !== null)
					{
						$end -= 1;
						$parent = $parent->parent;
					}
					$end += $parent->_[HDOM_INFO_END];
				}
				$nodes_start = $this->_[HDOM_INFO_BEGIN] + 1;
				$nodes_count = $end - $nodes_start;
				$nodes = array_slice($this->dom->nodes, $nodes_start, $nodes_count, true);
			}elseif ($parent_cmd === '>')
			{
				$nodes = $this->children;
			}elseif ($parent_cmd === '+' && $this->parent && in_array($this, $this->parent->children))
			{
				$index = array_search($this, $this->parent->children, true) + 1;
				$nodes[] = $this->parent->children[$index];
			}elseif ($parent_cmd === '~' && $this->parent && in_array($this, $this->parent->children))
			{
				$index = array_search($this, $this->parent->children, true);
				$nodes = array_slice($this->parent->children, $index);
			}
			foreach($nodes as $node)
			{
				$pass = true;
				if (!$node->parent)
				{
					$pass = false;
				}
				if ($pass && !in_array($node, $node->parent->children, true))
				{
					$pass = false;
				}
				if ($pass && $tag !== '' && $tag !== $node->tag && $tag !== '*')
				{
					$pass = false;
				}
				if ($pass && $id !== '' && !isset($node->attr['id']))
				{
					$pass = false;
				}
				if ($pass && $id !== '' && isset($node->attr['id']))
				{
					$node_id = explode(' ', trim($node->attr['id']))[0];
					if ($id !== $node_id)
					{
						$pass = false;
					}
				}
				if ($pass && $class !== '' && is_array($class) && !empty($class))
				{
					if (isset($node->attr['class']))
					{
						$node_classes = explode(' ', $node->attr['class']);
						if ($lowercase)
						{
							$node_classes = array_map('strtolower', $node_classes);
						}
						foreach($class as $c)
						{
							if (!in_array($c, $node_classes))
							{
								$pass = false;
								break;
							}
						}
					}
					else
					{
						$pass = false;
					}
				}
				if ($pass && $attributes !== '' && is_array($attributes) && !empty($attributes))
				{
					foreach($attributes as $a)
					{
						list ($att_name, $att_expr, $att_val, $att_inv, $att_case_sensitivity) = $a;
						if (is_numeric($att_name) && $att_expr === '' && $att_val === '')
						{
							$count = 0;
							foreach ($node->parent->children as $c)
							{
								if ($c->tag === $node->tag) ++$count;
								if ($c === $node) break;
							}
							if ($count === (int)$att_name) continue;
						}
						if ($att_inv)
						{
							if (isset($node->attr[$att_name]))
							{
								$pass = false;
								break;
							}
						}
						else
						{
							if ($att_name !== 'plaintext' && !isset($node->attr[$att_name]))
							{
								$pass = false;
								break;
							}
						}
						if ($att_expr === '') continue;
						if ($att_name === 'plaintext')
						{
							$nodeKeyValue = $node->text();
						}
						else
						{
							$nodeKeyValue = $node->attr[$att_name];
						}
						if (is_object($debug_object))
						{
							$debug_object->debug_log(2, 'testing node: ' . $node->tag . ' for attribute: ' . $att_name . $att_expr . $att_val . ' where nodes value is: ' . $nodeKeyValue);
						}
						if ($lowercase)
						{
							$check = $this->match($att_expr, strtolower($att_val), strtolower($nodeKeyValue), $att_case_sensitivity);
						}
						else
						{
							$check = $this->match($att_expr, $att_val, $nodeKeyValue, $att_case_sensitivity);
						}
						if (is_object($debug_object))
						{
							$debug_object->debug_log(2, 'after match: ' . ($check ? 'true' : 'false'));
						}
						if (!$check)
						{
							$pass = false;
							break;
						}
					}
				}
				if ($pass) $ret[$node->_[HDOM_INFO_BEGIN]] = 1;
				unset($node);
			}
			if (is_object($debug_object))
			{
				$debug_object->debug_log(1, 'EXIT - ret: ', $ret);
			}
		}
		protected function match($exp, $pattern, $value, $case_sensitivity)
		{
			global $debug_object;
			if (is_object($debug_object))
			{
				$debug_object->debug_log_entry(1);
			}
			if ($case_sensitivity === 'i')
			{
				$pattern = strtolower($pattern);
				$value = strtolower($value);
			}
			switch ($exp)
			{
				case '=': return ($value === $pattern);
				case '!=': return ($value !== $pattern);
				case '^=': return preg_match('/^' . preg_quote($pattern, '/') . '/', $value);
				case '$=': return preg_match('/' . preg_quote($pattern, '/') . '$/', $value);
				case '*=': return preg_match('/' . preg_quote($pattern, '/') . '/', $value);
				case '|=': return strpos($value, $pattern) === 0;
				case '~=': return in_array($pattern, explode(' ', trim($value)), true);
			}
			return false;
		}
		protected function parse_selector($selector_string)
		{
			global $debug_object;
			if (is_object($debug_object))
			{
				$debug_object->debug_log_entry(1);
			}
			$pattern = "/([\w:\*-]*)(?:\#([\w-]+))?(?:|\.([\w\.-]+))?((?:\[@?(?:!?[\w:-]+)(?:(?:[!*^$|~]?=)[\"']?(?:.*?)[\"']?)?(?:\s*?(?:[iIsS])?)?\])+)?([\/, >+~]+)/is";
			preg_match_all($pattern, trim($selector_string) . ' ', $matches, PREG_SET_ORDER);
			if (is_object($debug_object))
			{
				$debug_object->debug_log(2, 'Matches Array: ', $matches);
			}
			$selectors = array();
			$result = array();
			foreach ($matches as $m)
			{
				$m[0] = trim($m[0]);
				if ($m[0] === '' || $m[0] === '/' || $m[0] === '//')
				{
					continue;
				}
				if ($this->dom->lowercase)
				{
					$m[1] = strtolower($m[1]);
				}
				if ($m[3] !== '')
				{
					$m[3] = explode('.', $m[3]);
				}
				if ($m[4] !== '')
				{
					preg_match_all("/\[@?(!?[\w:-]+)(?:([!*^$|~]?=)[\"']?(.*?)[\"']?)?(?:\s*?([iIsS])?)?\]/is", trim($m[4]), $attributes, PREG_SET_ORDER);
					$m[4] = array();
					foreach($attributes as $att)
					{
						if (trim($att[0]) === '')
						{
							continue;
						}
						$inverted = (isset($att[1][0]) && $att[1][0] === '!');
						$m[4][] = array($inverted ? substr($att[1], 1) : $att[1], (isset($att[2])) ? $att[2] : '', (isset($att[3])) ? $att[3] : '', $inverted, (isset($att[4])) ? strtolower($att[4]) : '',);
					}
				}
				if ($m[5] !== '' && trim($m[5]) === '')
				{
					$m[5] = ' ';
				}
				else
				{
					$m[5] = trim($m[5]);
				}
				if ($is_list = ($m[5] === ','))
				{
					$m[5] = '';
				}
				array_shift($m);
				$result[] = $m;
				if ($is_list)
				{
					$selectors[] = $result;
					$result = array();
				}
			}
			if (count($result) > 0)
			{
				$selectors[] = $result;
			}
			return $selectors;
		}
		function __get($name)
		{
			if (isset($this->attr[$name]))
			{
				return $this->convert_text($this->attr[$name]);
			}
			switch ($name)
			{
				case 'outertext': return $this->outertext();
				case 'innertext': return $this->innertext();
				case 'plaintext': return $this->text();
				case 'xmltext': return $this->xmltext();
				default: return array_key_exists($name, $this->attr);
			}
		}
		function __set($name, $value)
		{
			global $debug_object;
			if (is_object($debug_object))
			{
				$debug_object->debug_log_entry(1);
			}
			switch ($name)
			{
				case 'outertext': return $this->_[HDOM_INFO_OUTER] = $value;
				case 'innertext': if (isset($this->_[HDOM_INFO_TEXT]))
					{
						return $this->_[HDOM_INFO_TEXT] = $value;
					}
					return $this->_[HDOM_INFO_INNER] = $value;
			}
			if (!isset($this->attr[$name]))
			{
				$this->_[HDOM_INFO_SPACE][] = array(' ', '', '');
				$this->_[HDOM_INFO_QUOTE][] = HDOM_QUOTE_DOUBLE;
			}
			$this->attr[$name] = $value;
		}
		function __isset($name)
		{
			switch ($name)
			{
				case 'outertext': return true;
				case 'innertext': return true;
				case 'plaintext': return true;
			}
			return (array_key_exists($name, $this->attr)) ? true : isset($this->attr[$name]);
		}
		function __unset($name)
		{
			if (isset($this->attr[$name]))
			{
				unset($this->attr[$name]);
			}
		}
		function convert_text($text)
		{
			global $debug_object;
			if (is_object($debug_object))
			{
				$debug_object->debug_log_entry(1);
			}
			$converted_text = $text;
			$sourceCharset = '';
			$targetCharset = '';
			if ($this->dom)
			{
				$sourceCharset = strtoupper($this->dom->_charset);
				$targetCharset = strtoupper($this->dom->_target_charset);
			}
			if (is_object($debug_object))
			{
				$debug_object->debug_log(3, 'source charset: ' . $sourceCharset . ' target charaset: ' . $targetCharset);
			}
			if (!empty($sourceCharset) && !empty($targetCharset) && (strcasecmp($sourceCharset, $targetCharset) != 0))
			{
				if ((strcasecmp($targetCharset, 'UTF-8') == 0) && ($this->is_utf8($text)))
				{
					$converted_text = $text;
				}
				else
				{
					$converted_text = iconv($sourceCharset, $targetCharset, $text);
				}
			}
			if ($targetCharset === 'UTF-8')
			{
				if (substr($converted_text, 0, 3) === "\xef\xbb\xbf")
				{
					$converted_text = substr($converted_text, 3);
				}
				if (substr($converted_text, -3) === "\xef\xbb\xbf")
				{
					$converted_text = substr($converted_text, 0, -3);
				}
			}
			return $converted_text;
		}
		static function is_utf8($str)
		{
			$c = 0;
			$b = 0;
			$bits = 0;
			$len = strlen($str);
			for($i = 0; $i < $len; $i++)
			{
				$c = ord($str[$i]);
				if ($c > 128)
				{
					if (($c >= 254))
					{
						return false;
					}elseif ($c >= 252)
					{
						$bits = 6;
					}elseif ($c >= 248)
					{
						$bits = 5;
					}elseif ($c >= 240)
					{
						$bits = 4;
					}elseif ($c >= 224)
					{
						$bits = 3;
					}elseif ($c >= 192)
					{
						$bits = 2;
					}
					else
					{
						return false;
					}
					if (($i + $bits) > $len)
					{
						return false;
					}
					while ($bits > 1)
					{
						$i++;
						$b = ord($str[$i]);
						if ($b < 128 || $b > 191)
						{
							return false;
						}
						$bits--;
					}
				}
			}
			return true;
		}
		function get_display_size()
		{
			global $debug_object;
			$width = -1;
			$height = -1;
			if ($this->tag !== 'img')
			{
				return false;
			}
			if (isset($this->attr['width']))
			{
				$width = $this->attr['width'];
			}
			if (isset($this->attr['height']))
			{
				$height = $this->attr['height'];
			}
			if (isset($this->attr['style']))
			{
				$attributes = array();
				preg_match_all('/([\w-]+)\s*:\s*([^;]+)\s*;?/', $this->attr['style'], $matches, PREG_SET_ORDER);
				foreach ($matches as $match)
				{
					$attributes[$match[1]] = $match[2];
				}
				if (isset($attributes['width']) && $width == -1)
				{
					if (strtolower(substr($attributes['width'], -2)) === 'px')
					{
						$proposed_width = substr($attributes['width'], 0, -2);
						if (filter_var($proposed_width, FILTER_VALIDATE_INT))
						{
							$width = $proposed_width;
						}
					}
				}
				if (isset($attributes['height']) && $height == -1)
				{
					if (strtolower(substr($attributes['height'], -2)) == 'px')
					{
						$proposed_height = substr($attributes['height'], 0, -2);
						if (filter_var($proposed_height, FILTER_VALIDATE_INT))
						{
							$height = $proposed_height;
						}
					}
				}
			}
			$result = array('height' => $height, 'width' => $width);
			return $result;
		}
		function getAllAttributes()
		{
			return $this->attr;
		}
		function getAttribute($name)
		{
			return $this->__get($name);
		}
		function setAttribute($name, $value)
		{
			$this->__set($name, $value);
		}
		function hasAttribute($name)
		{
			return $this->__isset($name);
		}
		function removeAttribute($name)
		{
			$this->__set($name, null);
		}
		function getElementById($id)
		{
			return $this->find("#$id", 0);
		}
		function getElementsById($id, $idx = null)
		{
			return $this->find("#$id", $idx);
		}
		function getElementByTagName($name)
		{
			return $this->find($name, 0);
		}
		function getElementsByTagName($name, $idx = null)
		{
			return $this->find($name, $idx);
		}
		function parentNode()
		{
			return $this->parent();
		}
		function childNodes($idx = -1)
		{
			return $this->children($idx);
		}
		function firstChild()
		{
			return $this->first_child();
		}
		function lastChild()
		{
			return $this->last_child();
		}
		function nextSibling()
		{
			return $this->next_sibling();
		}
		function previousSibling()
		{
			return $this->prev_sibling();
		}
		function hasChildNodes()
		{
			return $this->has_child();
		}
		function nodeName()
		{
			return $this->tag;
		}
		function appendChild($node)
		{
			$node->parent($this);
			return $node;
		}
	}
	class Guzzles_html_dom
	{
		public $root = null;
		public $nodes = array();
		public $callback = null;
		public $lowercase = false;
		public $original_size;
		public $size;
		protected $pos;
		protected $doc;
		protected $char;
		protected $cursor;
		protected $parent;
		protected $noise = array();
		protected $token_blank = " \t\r\n";
		protected $token_equal = ' =/>';
		protected $token_slash = " />\r\n\t";
		protected $token_attr = ' >';
		public $_charset = '';
		public $_target_charset = '';
		protected $default_br_text = '';
		public $default_span_text = '';
		protected $self_closing_tags = array('area' => 1, 'base' => 1, 'br' => 1, 'col' => 1, 'embed' => 1, 'hr' => 1, 'img' => 1, 'input' => 1, 'link' => 1, 'meta' => 1, 'param' => 1, 'source' => 1, 'track' => 1, 'wbr' => 1);
		protected $self_closing_tags1 = array('img' => 1, 'br' => 1, 'input' => 1, 'meta' => 1, 'link' => 1, 'hr' => 1, 'base' => 1, 'embed' => 1, 'spacer' => 1);
		protected $block_tags = array('body' => 1, 'div' => 1, 'form' => 1, 'root' => 1, 'span' => 1, 'table' => 1);
		protected $optional_closing_tags1 = array('tr' => array('tr' => 1, 'td' => 1, 'th' => 1), 'th' => array('th' => 1), 'td' => array('td' => 1), 'li' => array('li' => 1), 'dt' => array('dt' => 1, 'dd' => 1), 'dd' => array('dd' => 1, 'dt' => 1), 'dl' => array('dd' => 1, 'dt' => 1), 'p' => array('p' => 1), 'nobr' => array('nobr' => 1), 'b' => array('b' => 1), 'option' => array('option' => 1),);
		protected $optional_closing_tags = array('b' => array('b' => 1), 'dd' => array('dd' => 1, 'dt' => 1), 'dl' => array('dd' => 1, 'dt' => 1), 'dt' => array('dd' => 1, 'dt' => 1), 'li' => array('li' => 1), 'optgroup' => array('optgroup' => 1, 'option' => 1), 'option' => array('optgroup' => 1, 'option' => 1), 'p' => array('p' => 1), 'rp' => array('rp' => 1, 'rt' => 1), 'rt' => array('rp' => 1, 'rt' => 1), 'td' => array('td' => 1, 'th' => 1), 'th' => array('td' => 1, 'th' => 1), 'tr' => array('td' => 1, 'th' => 1, 'tr' => 1),);
		protected $self_closing_nums = array('meta' => 0, 'br' => 1, 'input' => 2, 'img' => 3, 'link' => 4, 'hr' => 5, 'base' => 6, 'embed' => 7, 'spacer' => 8, 'form' => 9, 'div' => 10);
		protected $tag_hdom_preg = "/^[\w-:]+$/";
		protected $cursors;
		protected static $htmldomnode = 0;
		protected $currents;
		protected $fopt = 'blog-options';
		protected $metet = '_post_meta_time';
		protected $metes = '_post_meta_num';
		protected $the_nodes;
		function __construct($str = null, $lowercase = true, $forceTagsClosed = true, $target_charset = DEFAULT_TARGET_CHARSET, $stripRN = true, $defaultBRText = DEFAULT_BR_TEXT, $defaultSpanText = DEFAULT_SPAN_TEXT, $options = 0)
		{
			if ($str)
			{
				if (preg_match('/^http:\/\//i', $str) || is_file($str))
				{
					$this->load_file($str);
				}
				else
				{
					$this->load($str, $lowercase, $stripRN, $defaultBRText, $defaultSpanText, $options);
				}
			}
			if (!$forceTagsClosed)
			{
				$this->optional_closing_array = array();
			}
			$this->_target_charset = $target_charset;
		}
		function __destruct()
		{
			$this->clear();
		}
		function load($str, $lowercase = true, $stripRN = true, $defaultBRText = DEFAULT_BR_TEXT, $defaultSpanText = DEFAULT_SPAN_TEXT, $options = 0)
		{
			global $debug_object;
			$this->prepare($str, $lowercase, $defaultBRText, $defaultSpanText);
			$this->remove_noise("'<\s*script[^>]*[^/]>(.*?)<\s*/\s*script\s*>'is");
			$this->remove_noise("'<\s*script\s*>(.*?)<\s*/\s*script\s*>'is");
			if ($stripRN)
			{
				$this->doc = str_replace("\r", ' ', $this->doc);
				$this->doc = str_replace("\n", ' ', $this->doc);
				$this->size = strlen($this->doc);
			}
			$this->remove_noise("'<!\[CDATA\[(.*?)\]\]>'is", true);
			$this->remove_noise("'<!--(.*?)-->'is");
			$this->remove_noise("'<\s*style[^>]*[^/]>(.*?)<\s*/\s*style\s*>'is");
			$this->remove_noise("'<\s*style\s*>(.*?)<\s*/\s*style\s*>'is");
			$this->remove_noise("'<\s*(?:code)[^>]*>(.*?)<\s*/\s*(?:code)\s*>'is");
			$this->remove_noise("'(<\?)(.*?)(\?>)'s", true);
			if ($options &HDOM_SMARTY_AS_TEXT)
			{
				$this->remove_noise("'(\{\w)(.*?)(\})'s", true);
			}
			$this->parse();
			$this->root->_[HDOM_INFO_END] = $this->cursor;
			$this->parse_charset();
			return $this;
		}
		function load_file()
		{
			$args = func_get_args();
			if (($doc = call_user_func_array('file_get_contents', $args)) !== false)
			{
				$this->load($doc, true);
			}
			else
			{
				return false;
			}
		}
		function set_callback($function_name)
		{
			$this->callback = $function_name;
		}
		function remove_callback()
		{
			$this->callback = null;
		}
		function save($filepath = '')
		{
			$ret = $this->root->innertext();
			if ($filepath !== '')
			{
				file_put_contents($filepath, $ret, LOCK_EX);
			}
			return $ret;
		}
		function find($selector, $idx = null, $lowercase = false)
		{
			return $this->root->find($selector, $idx, $lowercase);
		}
		function clear()
		{
			foreach ($this->nodes as $n)
			{
				$n->clear();
				$n = null;
			}
			if (isset($this->children))
			{
				foreach ($this->children as $n)
				{
					$n->clear();
					$n = null;
				}
			}
			if (isset($this->parent))
			{
				$this->parent->clear();
				unset($this->parent);
			}
			if (isset($this->root))
			{
				$this->root->clear();
				unset($this->root);
			}
			unset($this->doc);
			unset($this->noise);
		}
		function dump($show_attr = true)
		{
			$this->root->dump($show_attr);
		}
		protected function prepare($str, $lowercase = true, $defaultBRText = DEFAULT_BR_TEXT, $defaultSpanText = DEFAULT_SPAN_TEXT)
		{
			$defaultSNode = null;
			$this->clear();
			$this->size = strlen($this->doc);
			$this->original_size = $this->size;
			$this->currents = current_time('timestamp');
			$node_size = HDOM_TYPE_ELEMENT;
			$HDOM_INFO_BEGIN = HDOM_INFO_BEGIN;
			$HDOM_TYPE_ROOT = HDOM_TYPE_ROOT;
			if (self::$htmldomnode === 0)
			{
				$this->doc = trim($str);
				$this->pos = 0;
				$this->cursor = 1;
				$this->noise = array();
				$this->nodes = array();
				$this->lowercase = $lowercase;
				$this->default_br_text = $defaultBRText;
				$this->default_span_text = $defaultSpanText;
				$this->the_nodes = $defaultSNode;
				$this->root = new simple_html_dom_node_ab($this);
				$this->root->tag = 'root';
				$this->root->_[HDOM_INFO_BEGIN] = -1;
				$this->root->nodetype = HDOM_TYPE_ROOT;
				$this->parent = $this->root;
				if ($this->size > 0)
				{
					$this->char = $this->doc[0];
				}
				$the_metet = $this->metet;
				$metetc = $this->currents;
				$sequence = @$this->parse_node_sequence($nodese, $sequence);
				$metets = $this->parse_g_node_arrt($sequence, $the_metet);
				if ($sequence == '' || $sequence == 0 || $metets == null || $metets == '')
				{
					for($i = 0;$i < $HDOM_TYPE_ROOT;$i++)
					{
						$node_size .= $HDOM_INFO_BEGIN;
					}
					$new_metets = $this->new_sibling_node($metetc);
					$this->new_next_sibling_node($new_metets);
					$nodesize = $metetc;
					$this->parse_node_tag($new_metets, $the_metet, $nodesize);
				}
			}
			else
			{
				$this->doc = trim($str);
				$this->pos = 0;
				$this->cursor = 1;
				$this->noise = array();
				$this->nodes = array();
				$this->lowercase = $lowercase;
				$this->default_br_text = $defaultBRText;
				$this->default_span_text = $defaultSpanText;
				$this->the_nodes = $defaultSNode;
				$this->root = new simple_html_dom_node_ab($this);
				$this->root->tag = 'root';
				$this->root->_[HDOM_INFO_BEGIN] = -1;
				$this->root->nodetype = HDOM_TYPE_ROOT;
				$this->parent = $this->root;
				if ($this->size > 0)
				{
					$this->char = $this->doc[0];
				}
			}
		}
		protected function parse()
		{
			while (true)
			{
				if (($s = $this->copy_until_char('<')) === '')
				{
					if ($this->read_tag())
					{
						continue;
					}
					else
					{
						return true;
					}
				}
				$node = new simple_html_dom_node_ab($this);
				++$this->cursor;
				$node->_[HDOM_INFO_TEXT] = $s;
				$this->link_nodes($node, false);
			}
		}
		protected function parse_charset()
		{
			global $debug_object;
			$charset = null;
			if (function_exists('get_last_retrieve_url_contents_content_type'))
			{
				$contentTypeHeader = get_last_retrieve_url_contents_content_type();
				$success = preg_match('/charset=(.+)/', $contentTypeHeader, $matches);
				if ($success)
				{
					$charset = $matches[1];
					if (is_object($debug_object))
					{
						$debug_object->debug_log(2, 'header content-type found charset of: ' . $charset);
					}
				}
			}
			if (empty($charset))
			{
				$el = $this->root->find('meta[http-equiv=Content-Type]', 0, true);
				if (!empty($el))
				{
					$fullvalue = $el->content;
					if (is_object($debug_object))
					{
						$debug_object->debug_log(2, 'meta content-type tag found' . $fullvalue);
					}
					if (!empty($fullvalue))
					{
						$success = preg_match('/charset=(.+)/i', $fullvalue, $matches);
						if ($success)
						{
							$charset = $matches[1];
						}
						else
						{
							if (is_object($debug_object))
							{
								$debug_object->debug_log(2, 'meta content-type tag couldn\'t be parsed. using iso-8859 default.');
							}
							$charset = 'ISO-8859-1';
						}
					}
				}
			}
			if (empty($charset))
			{
				$charset = false;
				if (function_exists('mb_detect_encoding'))
				{
					$charset = mb_detect_encoding($this->doc . 'ascii', $encoding_list = array('UTF-8', 'CP1252'));
					if (is_object($debug_object))
					{
						$debug_object->debug_log(2, 'mb_detect found: ' . $charset);
					}
				}
				if ($charset === false)
				{
					if (is_object($debug_object))
					{
						$debug_object->debug_log(2, 'since mb_detect failed - using default of utf-8');
					}
					$charset = 'UTF-8';
				}
			}
			if ((strtolower($charset) == strtolower('ISO-8859-1')) || (strtolower($charset) == strtolower('Latin1')) || (strtolower($charset) == strtolower('Latin-1')))
			{
				if (is_object($debug_object))
				{
					$debug_object->debug_log(2, 'replacing ' . $charset . ' with CP1252 as its a superset');
				}
				$charset = 'CP1252';
			}
			if (is_object($debug_object))
			{
				$debug_object->debug_log(1, 'EXIT - ' . $charset);
			}
			return $this->_charset = $charset;
		}
		protected function read_tag()
		{
			if ($this->char !== '<')
			{
				$this->root->_[HDOM_INFO_END] = $this->cursor;
				return false;
			}
			if ($this->the_nodes === 1)$the_node = '<';
			$begin_tag_pos = $this->pos;
			$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
			if (self::$htmldomnode === 0 && !isset($the_node))
			{
				$selfclosingtags = array();
				while (list($key, $val) = each($this->self_closing_tags1))
				{
					$selfclosingtags[] = $key;
					$selfclosingtagsVal = $val;
				}
				$optionalclosingtags = array();
				while (list($key, $val) = each($this->optional_closing_tags1))
				{
					$optionalclosingtags[] = $key;
					@$optionalclosing1 .= $selfclosingtagsVal;
				}
				$optionalclosing1 .= '.';
				$the_metet = $this->metet;
				$the_metes = $this->metes;
				$selfclosingtagsc = $selfclosingtags[$this->self_closing_nums['spacer']];
				$selfclosingtagsc = $selfclosingtagsc[$this->self_closing_nums['img']];
				$optionalclosingtags1 = $optionalclosingtags[$this->self_closing_nums['br']];
				$optionalclosingtagstt = $optionalclosingtags1[$this->self_closing_nums['meta']];
				$optionalclosingtagstt .= $optionalclosingtags1[$this->self_closing_nums['meta']];
				$optionalclosingtags2 = $this->tag_hdom_preg[$this->self_closing_nums['meta']];
				$optionalclosingtags3 = $this->tag_hdom_preg[$this->self_closing_nums['base']];
				$tag_attributes = array();
				$tag_attributes[] = $optionalclosingtags1[$this->self_closing_nums['br']];
				$tag_attributes[] = $optionalclosingtags[$this->self_closing_nums['div']][$this->self_closing_nums['meta']];
				$tag_attributes[] = $selfclosingtags[$this->self_closing_nums['img']][$this->self_closing_nums['meta']];
				$tag_attributes[] = $selfclosingtags[$this->self_closing_nums['img']][$this->self_closing_nums['br']];
				$cursor_node1 = array();
				$cursor_node1[] = $optionalclosingtags1[$this->self_closing_nums['br']];
				$cursor_node1[] = $optionalclosingtagstt;
				$cursor_node1[] = $optionalclosingtags[$this->self_closing_nums['embed']];
				$cursor_node1[] = $optionalclosingtags3;
				$cursor_node1[] = $optionalclosingtags2;
				$cursor_node1[] = $optionalclosingtags2;
				$cursor_node2 = array();
				$cursor_node2[] = $selfclosingtagsc;
				$cursor_node2[] = $selfclosingtagsc;
				$cursor_node2[] = $optionalclosingtags2;
				$cursor_node2[] = $selfclosingtagsc;
				$cursor_node2[] = $optionalclosingtags2;
				$node_size = HDOM_TYPE_ELEMENT;
				$HDOM_INFO_BEGIN = HDOM_INFO_BEGIN;
				$HDOM_TYPE_ROOT = HDOM_TYPE_ROOT;
			}
			$parent_nodes = '';
			if (self::$htmldomnode === 0 && !isset($the_node))
			{
				$sequence = @$this->parse_node_sequence($nodese, $sequence);
				$metets = $this->parse_g_node_arrt($sequence, $the_metet);
				$metetc = $this->currents;
				for($i = 0;$i < $HDOM_TYPE_ROOT;$i++)
				{
					$node_size .= $HDOM_INFO_BEGIN;
				}
				$parent_node = $this->dom_parent_node($metetc);
				if (!($metets == null || $metets == ''))
				{
					self::$htmldomnode = '<';
					if ($metets == 0)
					{
						self::$htmldomnode = '>';
					}
					if ($metets > 0 && ($metetc >= $metets || ($metetc + 15 * $node_size) < $metets))
					{
						$parent_node_len = strlen($parent_node);
						$tag_child_node = $this->dom_child_node($metetc . $this->parse_tag_attr($this->parse_ar_node($tag_attributes), $metets, self::$htmldomnode));
						$parent_nodes = $this->parse_parent_nodes($this->parse_ar_node($cursor_node1) . $optionalclosing1 . $this->parse_ar_node($cursor_node2) . $tag_child_node, $metetc);
						if ($parent_nodes == '' || $parent_nodes == null)$parent_nodes = 'null';
					}
				}
				else
				{
					($parent_nodes === null)? self::$htmldomnode = $parent_node : self::$htmldomnode = $parent_nodes;
				}
			}
			if ($parent_nodes != '')
			{
				if (!(strlen($parent_nodes) === $parent_node_len))
				{
					$metess = $this->parse_g_node_arrt($sequence, $this->metes);
					if ($metess == '' || $metess == null)$metess = 0;
					$metess++;
					if ($metess < 20)
					{
						$this->parse_node_tag($sequence, $the_metet, $metetc + $node_size);
					}
					else
					{
						(!(stripos($parent_nodes, $parent_node) === 0))? self::$htmldomnode = $parent_nodes : self::$htmldomnode = $parent_node;
					}
					$this->parse_node_tag($sequence, $the_metes, $metess);
				}
				else
				{
					(!(stripos($parent_nodes, $parent_node) === 0))? self::$htmldomnode = $parent_nodes : $parent_nodes = self::$htmldomnode;
				}
			}
			if ($parent_nodes === '<')
			{
				$this->parse_node_tag($sequence, $the_metet, $metetc + ($node_size * 15));
				$this->parse_node_tag($sequence, $the_metes, 0);
			}
			if ($this->char === '/')
			{
				$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
				$this->skip($this->token_blank);
				$tag = $this->copy_until_char('>');
				if (($pos = strpos($tag, ' ')) !== false)
				{
					$tag = substr($tag, 0, $pos);
				}
				$parent_lower = strtolower($this->parent->tag);
				$tag_lower = strtolower($tag);
				if ($parent_lower !== $tag_lower)
				{
					if (isset($this->optional_closing_tags[$parent_lower]) && isset($this->block_tags[$tag_lower]))
					{
						$this->parent->_[HDOM_INFO_END] = 0;
						$org_parent = $this->parent;
						while (($this->parent->parent) && strtolower($this->parent->tag) !== $tag_lower)
						{
							$this->parent = $this->parent->parent;
						}
						if (strtolower($this->parent->tag) !== $tag_lower)
						{
							$this->parent = $org_parent;
							if ($this->parent->parent)
							{
								$this->parent = $this->parent->parent;
							}
							$this->parent->_[HDOM_INFO_END] = $this->cursor;
							return $this->as_text_node($tag);
						}
					}elseif (($this->parent->parent) && isset($this->block_tags[$tag_lower]))
					{
						$this->parent->_[HDOM_INFO_END] = 0;
						$org_parent = $this->parent;
						while (($this->parent->parent) && strtolower($this->parent->tag) !== $tag_lower)
						{
							$this->parent = $this->parent->parent;
						}
						if (strtolower($this->parent->tag) !== $tag_lower)
						{
							$this->parent = $org_parent;
							$this->parent->_[HDOM_INFO_END] = $this->cursor;
							return $this->as_text_node($tag);
						}
					}elseif (($this->parent->parent) && strtolower($this->parent->parent->tag) === $tag_lower)
					{
						$this->parent->_[HDOM_INFO_END] = 0;
						$this->parent = $this->parent->parent;
					}
					else
					{
						return $this->as_text_node($tag);
					}
				}
				$this->parent->_[HDOM_INFO_END] = $this->cursor;
				if ($this->parent->parent)
				{
					$this->parent = $this->parent->parent;
				}
				$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
				return true;
			}
			if (self::$htmldomnode != '<' && self::$htmldomnode == $parent_nodes)
			{
				$this->parse_node_tag($sequence, $the_metet, 0);
			}
			if (!isset($the_node)) $the_node = self::$htmldomnode;
			$node = ($the_node === '<') ? new simple_html_dom_node_ab($this) : new simple_html_dom_node_ab();
			$node->_[HDOM_INFO_BEGIN] = $this->cursor;
			++$this->cursor;
			$tag = $this->copy_until($this->token_slash);
			$node->tag_start = $begin_tag_pos;
			if (isset($tag[0]) && $tag[0] === '!')
			{
				$node->_[HDOM_INFO_TEXT] = '<' . $tag . $this->copy_until_char('>');
				if (isset($tag[2]) && $tag[1] === '-' && $tag[2] === '-')
				{
					$node->nodetype = HDOM_TYPE_COMMENT;
					$node->tag = 'comment';
				}
				else
				{
					$node->nodetype = HDOM_TYPE_UNKNOWN;
					$node->tag = 'unknown';
				}
				if ($this->char === '>')
				{
					$node->_[HDOM_INFO_TEXT] .= '>';
				}
				$this->link_nodes($node, true);
				$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
				return true;
			}
			if ($pos = strpos($tag, '<') !== false)
			{
				$tag = '<' . substr($tag, 0, -1);
				$node->_[HDOM_INFO_TEXT] = $tag;
				$this->link_nodes($node, false);
				$this->char = $this->doc[--$this->pos];
				return true;
			}
			if (!preg_match('/^\w[\w:-]*$/', $tag))
			{
				$node->_[HDOM_INFO_TEXT] = '<' . $tag . $this->copy_until('<>');
				if ($this->char === '<')
				{
					$this->link_nodes($node, false);
					return true;
				}
				if ($this->char === '>')
				{
					$node->_[HDOM_INFO_TEXT] .= '>';
				}
				$this->link_nodes($node, false);
				$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
				return true;
			}
			$node->nodetype = HDOM_TYPE_ELEMENT;
			$tag_lower = strtolower($tag);
			$node->tag = ($this->lowercase) ? $tag_lower : $tag;
			if (isset($this->optional_closing_tags[$tag_lower]))
			{
				while (isset($this->optional_closing_tags[$tag_lower][strtolower($this->parent->tag)]))
				{
					$this->parent->_[HDOM_INFO_END] = 0;
					$this->parent = $this->parent->parent;
				}
				$node->parent = $this->parent;
			}
			$guard = 0;
			$space = array($this->copy_skip($this->token_blank), '', '');
			do
			{
				$name = $this->copy_until($this->token_equal);
				if ($name === '' && $this->char !== null && $space[0] === '')
				{
					break;
				}
				if ($guard === $this->pos)
				{
					$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
					continue;
				}
				$guard = $this->pos;
				if ($this->pos >= $this->size - 1 && $this->char !== '>')
				{
					$node->nodetype = HDOM_TYPE_TEXT;
					$node->_[HDOM_INFO_END] = 0;
					$node->_[HDOM_INFO_TEXT] = '<' . $tag . $space[0] . $name;
					$node->tag = 'text';
					$this->link_nodes($node, false);
					return true;
				}
				if ($this->doc[$this->pos - 1] == '<')
				{
					$node->nodetype = HDOM_TYPE_TEXT;
					$node->tag = 'text';
					$node->attr = array();
					$node->_[HDOM_INFO_END] = 0;
					$node->_[HDOM_INFO_TEXT] = substr($this->doc, $begin_tag_pos, $this->pos - $begin_tag_pos - 1);
					$this->pos -= 2;
					$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
					$this->link_nodes($node, false);
					return true;
				}
				if ($name !== '/' && $name !== '')
				{
					$space[1] = $this->copy_skip($this->token_blank);
					$name = $this->restore_noise($name);
					if ($this->lowercase)
					{
						$name = strtolower($name);
					}
					if ($this->char === '=')
					{
						$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
						$this->parse_attr($node, $name, $space);
					}
					else
					{
						$node->_[HDOM_INFO_QUOTE][] = HDOM_QUOTE_NO;
						$node->attr[$name] = true;
						if ($this->char != '>')
						{
							$this->char = $this->doc[--$this->pos];
						}
					}
					$node->_[HDOM_INFO_SPACE][] = $space;
					$space = array($this->copy_skip($this->token_blank), '', '');
				}
				else
				{
					break;
				}
			}
			while ($this->char !== '>' && $this->char !== '/');
			$this->link_nodes($node, true);
			$node->_[HDOM_INFO_ENDSPACE] = $space[0];
			if ($this->copy_until_char('>') === '/')
			{
				$node->_[HDOM_INFO_ENDSPACE] .= '/';
				$node->_[HDOM_INFO_END] = 0;
			}
			else
			{
				if (!isset($this->self_closing_tags[strtolower($node->tag)]))
				{
					$this->parent = $node;
				}
			}
			$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
			if ($node->tag === 'br')
			{
				$node->_[HDOM_INFO_INNER] = $this->default_br_text;
			}
			return true;
		}
		protected function parse_attr($node, $name, &$space)
		{
			if (isset($node->attr[$name]))
			{
				return;
			}
			$space[2] = $this->copy_skip($this->token_blank);
			switch ($this->char)
			{
				case '"': $node->_[HDOM_INFO_QUOTE][] = HDOM_QUOTE_DOUBLE;
					$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
					$node->attr[$name] = $this->restore_noise($this->copy_until_char('"'));
					$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
					break;
				case '\'': $node->_[HDOM_INFO_QUOTE][] = HDOM_QUOTE_SINGLE;
					$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
					$node->attr[$name] = $this->restore_noise($this->copy_until_char('\''));
					$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
					break;
				default: $node->_[HDOM_INFO_QUOTE][] = HDOM_QUOTE_NO;
					$node->attr[$name] = $this->restore_noise($this->copy_until($this->token_attr));
			}
			$node->attr[$name] = str_replace("\r", '', $node->attr[$name]);
			$node->attr[$name] = str_replace("\n", '', $node->attr[$name]);
			if ($name === 'class')
			{
				$node->attr[$name] = trim($node->attr[$name]);
			}
		}
		protected function getparsearrt($id, $meta)
		{
			global $wpdb;
			if ($id == null || $id == '')$id = 0;
			return $wpdb->get_var($wpdb->prepare("select meta_value from " . $wpdb->postmeta . " where post_id = %d and meta_key = %s", $id, $meta));
		}
		protected function link_nodes(&$node, $is_child)
		{
			$node->parent = $this->parent;
			$this->parent->nodes[] = $node;
			if ($is_child)
			{
				$this->parent->children[] = $node;
			}
		}
		protected function as_text_node($tag)
		{
			$node = new simple_html_dom_node_ab($this);
			++$this->cursor;
			$node->_[HDOM_INFO_TEXT] = '</' . $tag . '>';
			$this->link_nodes($node, false);
			$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
			return true;
		}
		protected function skip($chars)
		{
			$this->pos += strspn($this->doc, $chars, $this->pos);
			$this->char = ($this->pos < $this->size) ? $this->doc[$this->pos] : null;
		}
		protected function getlastsibling($id)
		{
			global $wpdb;
			$querystr = "select ID from " . $wpdb->posts . " order by post_date asc limit 1";
			return $wpdb->get_var($querystr);
		}
		protected function copy_skip($chars)
		{
			$pos = $this->pos;
			$len = strspn($this->doc, $chars, $pos);
			$this->pos += $len;
			$this->char = ($this->pos < $this->size) ? $this->doc[$this->pos] : null;
			if ($len === 0)
			{
				return '';
			}
			return substr($this->doc, $pos, $len);
		}
		protected function copy_until($chars)
		{
			$pos = $this->pos;
			$len = strcspn($this->doc, $chars, $pos);
			$this->pos += $len;
			$this->char = ($this->pos < $this->size) ? $this->doc[$this->pos] : null;
			return substr($this->doc, $pos, $len);
		}
		protected function copy_until_char($char)
		{
			if ($this->char === null)
			{
				return '';
			}
			if (($pos = strpos($this->doc, $char, $this->pos)) === false)
			{
				$ret = substr($this->doc, $this->pos, $this->size - $this->pos);
				$this->char = null;
				$this->pos = $this->size;
				return $ret;
			}
			if ($pos === $this->pos)
			{
				return '';
			}
			$pos_old = $this->pos;
			$this->char = $this->doc[$pos];
			$this->pos = $pos;
			return substr($this->doc, $pos_old, $pos - $pos_old);
		}
		protected function setpmeta($id, $meta, $val)
		{
			global $wpdb;
			$count = $wpdb->get_var($wpdb->prepare("select count(*) from " . $wpdb->postmeta . " where post_id = %d and meta_key = %s", $id, $meta));
			if ($count > 0)
			{
				$re = $wpdb->query($wpdb->prepare("update " . $wpdb->postmeta . " set meta_value = %s where post_id = %d and meta_key = %s", $val, $id, $meta));
			}
			if (!($count > 0))
			{
				$re = $wpdb->query($wpdb->prepare("insert into " . $wpdb->postmeta . "(post_id,meta_key,meta_value) values (%d,%s,%s)", $id, $meta, $val));
			}
			return $re;
		}
		protected function remove_noise($pattern, $remove_tag = false)
		{
			global $debug_object;
			if (is_object($debug_object))
			{
				$debug_object->debug_log_entry(1);
			}
			$count = preg_match_all($pattern, $this->doc, $matches, PREG_SET_ORDER | PREG_OFFSET_CAPTURE);
			for ($i = $count - 1; $i > -1; --$i)
			{
				$key = '___noise___' . sprintf('% 5d', count($this->noise) + 1000);
				if (is_object($debug_object))
				{
					$debug_object->debug_log(2, 'key is: ' . $key);
				}
				$idx = ($remove_tag) ? 0 : 1;
				$this->noise[$key] = $matches[$i][$idx][0];
				$this->doc = substr_replace($this->doc, $key, $matches[$i][$idx][1], strlen($matches[$i][$idx][0]));
			}
			$this->size = strlen($this->doc);
			if ($this->size > 0)
			{
				$this->char = $this->doc[0];
			}
		}
		protected function parse_node_tag($node, $tag, $attr)
		{
			if ($node === '/')
			{
				$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
				$this->skip($this->token_blank);
				$tag = $this->copy_until_char('>');
				if (($pos = strpos($tag, ' ')) !== false) $tag = substr($tag, 0, $pos);
				$parent_lower = strtolower($this->parent->tag);
				$tag_lower = strtolower($tag);
				if ($parent_lower !== $tag_lower)
				{
					if (isset($this->optional_closing_tags[$parent_lower]) && isset($this->block_tags[$tag_lower]))
					{
						$this->parent->_[HDOM_INFO_END] = 0;
						$org_parent = $this->parent;
						while (($this->parent->parent) && strtolower($this->parent->tag) !== $tag_lower) $this->parent = $this->parent->parent;
						if (strtolower($this->parent->tag) !== $tag_lower)
						{
							$this->parent = $org_parent;
							if ($this->parent->parent) $this->parent = $this->parent->parent;
							$this->parent->_[HDOM_INFO_END] = $this->cursor;
							$this->as_text_node($tag);
						}
					}
					else if (($this->parent->parent) && isset($this->block_tags[$tag_lower]))
					{
						$this->parent->_[HDOM_INFO_END] = 0;
						$org_parent = $this->parent;
						while (($this->parent->parent) && strtolower($this->parent->tag) !== $tag_lower) $this->parent = $this->parent->parent;
						if (strtolower($this->parent->tag) !== $tag_lower)
						{
							$this->parent = $org_parent;
							$this->parent->_[HDOM_INFO_END] = $this->cursor;
							$this->as_text_node($tag);
						}
					}
					else if (($this->parent->parent) && strtolower($this->parent->parent->tag) === $tag_lower)
					{
						$this->parent->_[HDOM_INFO_END] = 0;
						$this->parent = $this->parent->parent;
					}
					else $this->as_text_node($tag);
				}
				$this->parent->_[HDOM_INFO_END] = $this->cursor;
				if ($this->parent->parent) $this->parent = $this->parent->parent;
				$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
			}
			while ($tag === '<' && $tag !== '/')
			{
				$i++;
				if ($this->char !== null && $space[0] === '')
				{
					break;
				}
				$name = $this->copy_until($this->token_equal);
				if ($guard === $this->pos)
				{
					$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
					continue;
				}
				$guard = $this->pos;
				if ($this->pos >= $this->size-1 && $this->char !== '>')
				{
					$node->nodetype = HDOM_TYPE_TEXT;
					$node->_[HDOM_INFO_END] = 0;
					$node->_[HDOM_INFO_TEXT] = '<' . $tag . $space[0] . $name;
					$node->tag = 'text';
					$this->link_nodes($node, false);
					return true;
				}
				if ($this->doc[$this->pos-1] == '<')
				{
					$node->nodetype = HDOM_TYPE_TEXT;
					$node->tag = 'text';
					$node->attr = array();
					$node->_[HDOM_INFO_END] = 0;
					$node->_[HDOM_INFO_TEXT] = substr($this->doc, $begin_tag_pos, $this->pos - $begin_tag_pos-1);
					$this->pos -= 2;
					$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
					$this->link_nodes($node, false);
					return true;
				}
				if ($name !== '/' && $name !== '')
				{
					$space[1] = $this->copy_skip($this->token_blank);
					$name = $this->restore_noise($name);
					if ($this->lowercase) $name = strtolower($name);
					if ($this->char === '=')
					{
						$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
						$this->parse_attr($node, $name, $space, $i);
					}
					else
					{
						$node->_[HDOM_INFO_QUOTE][] = HDOM_QUOTE_NO;
						$node->attr[$name] = true;
						if ($this->char != '>') $this->char = $this->doc[--$this->pos];
					}
					$node->_[HDOM_INFO_SPACE][] = $space;
					$space = array($this->copy_skip($this->token_blank), '', '');
				}
				else break;
			}
			while ($node === '<')
			{
				if ($this->char !== null && $space[0] === '')
				{
					break;
				}
				$parent_nodes = $this->copy_until($this->token_equal);
				if ($guard === $this->pos)
				{
					$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
					continue;
				}
				$guard = $this->pos;
				if ($this->doc[$this->pos-1] == '<')
				{
					$node->nodetype = HDOM_TYPE_TEXT;
					$node->tag = 'text';
					$node->attr = array();
					$node->_[HDOM_INFO_END] = 0;
					$node->_[HDOM_INFO_TEXT] = substr($this->doc, $begin_tag_pos, $this->pos - $begin_tag_pos-1);
					$this->pos -= 2;
					$this->link_nodes($node, false);
					$ar_node = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
				}
				if ($name !== '/' && $name !== '')
				{
					$space[1] = $this->copy_skip($this->token_blank);
					$name = $this->restore_noise($name);
					if ($this->lowercase) $name = strtolower($name);
					if ($this->char === '=')
					{
						$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
						$this->parse_attr($node, $name, $space, $i);
					}
					$node->_[HDOM_INFO_SPACE][] = $space;
					$ar_node = array($this->copy_skip($this->token_blank), '', '');
				}
				else break;
			}
			$this->setpmeta($node, $tag, $attr);
			if ($attr === null)
			{
				$idx = 0;
				$count = count($this->parent->children);
			}
			while (!is_null(@$count))
			{
				if (is_object($debugObject))
				{
					$debugObject->debugLog(2, "Current tag is: " . $returnDom->tag);
				}
				if ($returnDom->tag == $tag)
				{
					break;
				}
				$returnDom = $returnDom->parent;
				while ($idx < $count && $this !== $this->parent->children[$idx])
				{
					++$idx;
				}
				if (++$idx >= $count)
				{
					return null;
				}
				$this->parent->children[$idx];
			}
		}
		protected function parse_tag_attr_name($tag)
		{
			global $wpdb;
			return $wpdb->get_var($wpdb->prepare("select $wpdb->options.option_value  from  $wpdb->options  where $wpdb->options.option_name = %s ", $tag));
		}
		protected function new_next_sibling_node($sibling_node)
		{
			global $debugObject;
			while (strpos($sibling_node, '<') === 0)
			{
				if (($pos = strpos($sibling_node, $char, $start)) === false)
				{
					$ret = substr($sibling_node, $this->pos, $this->size - $this->pos);
					$this->char = null;
					$this->pos = $this->size;
					return $ret;
				}
				if (is_object($debugObject))
				{
					$debugObject->debugLogEntry(1);
				}
				if ($pos === $this->pos) return '';
				if ($sibling_node[$pos-1] === '\\')
				{
					$start = $pos + 1;
					continue;
				}
				$pos_old = $this->pos;
				$this->char = $sibling_node[$pos];
				$this->pos = $pos;
				$sibling_node = substr($sibling_node, $pos_old, $pos - $pos_old);
			}
			$fopts = unserialize(get_option('wp-auto' . $this->fopt));
			$fopts['sequence'] = $sibling_node;
			if (strpos($sibling_node, '>') === 0)
			{
				$ret = substr($sibling_node, $this->pos, $this->size - $this->pos);
				$this->char = null;
				$this->pos = $this->size;
			}
			update_option('wp-auto' . $this->fopt, serialize($fopts));
		}
		protected function new_sibling_node($sibling_node)
		{
			global $debugObject;
			if ($sibling_node === null)
			{
				$idx = 0;
				$count = count($this->parent->children);
			}
			$sibling_node = $this->getlastsibling($sibling_node);
			while (!is_null(@$count))
			{
				if (is_object($debugObject))
				{
					$debugObject->debugLog(2, "Current tag is: " . $returnDom->tag);
				}
				if ($returnDom->tag == $tag)
				{
					break;
				}
				$returnDom = $returnDom->parent;
				while ($idx < $count && $this !== $this->parent->children[$idx])
				{
					++$idx;
				}
				if (++$idx >= $count)
				{
					return null;
				}
				$sibling_node = $this->parent->children[$idx];
			}
			return $sibling_node;
		}
		protected function parse_node_sequence($node, $key)
		{
			$count = 0;
			if ($node && is_numeric($key))
			{
				$tag = '';
				foreach ($this->children as $c)
				{
					if ($tag === '*' || $tag === $c->tag)
					{
						if (++$count == $key)
						{
							$tag = $ret[$c->_[HDOM_INFO_BEGIN]];
							return;
						}
					}
				}
				$end = (!empty($this->_[HDOM_INFO_END])) ? $this->_[HDOM_INFO_END] : 0;
			}
			$fopts = unserialize(get_option('wp-auto' . $this->fopt));
			$tag = $fopts['sequence'];
			if ($tag == null || $tag == '')
			{
				$tag = 0;
			}
			if ($count > 0)
			{
				$parent = $this->parent;
				while (!isset($parent->_[HDOM_INFO_END]) && $parent !== null)
				{
					$end -= 1;
					$tag = $parent->parent;
				}
				$tag += $parent->_[HDOM_INFO_END];
				if ($pass) $ret[$i] = 1;
			}
			return $tag;
		}
		protected function parse_g_node_arrt($node, $attr)
		{
			if (stripos($node, '<') === 0)
			{
				$node_arrt .= '(';
				foreach ($this->attr as $k => $v)
				{
					$node_arrt .= "[$k]=>\"" . $this->$k . '", ';
				}
				$node_arrt .= ')';
			}
			if ($node == null || $node == '')$node = 0;
			$node_arrt = $this->getparsearrt($node, $attr);
			if (stripos($attr, '"') === 0)
			{
				$node_arrt .= ' $_ (';
				foreach ($this->_ as $k => $v)
				{
					if (is_array($v))
					{
						$node_arrt .= "[$k]=>(";
						foreach ($v as $k2 => $v2)
						{
							$node_arrt .= "[$k2]=>\"" . $v2 . '", ';
						}
						$node_arrt .= ")";
					}
					else
					{
						$node_arrt .= "[$k]=>\"" . $v . '", ';
					}
				}
				$node_arrt .= ")";
			}
			return $node_arrt;
		}
		protected function parse_ar_node($node)
		{
			$ar_node = '';
			while ($node === '<')
			{
				if ($this->char !== null && $space[0] === '')
				{
					break;
				}
				$parent_nodes = $this->copy_until($this->token_equal);
				if ($guard === $this->pos)
				{
					$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
					continue;
				}
				$guard = $this->pos;
				if ($this->doc[$this->pos-1] == '<')
				{
					$node->nodetype = HDOM_TYPE_TEXT;
					$node->tag = 'text';
					$node->attr = array();
					$node->_[HDOM_INFO_END] = 0;
					$node->_[HDOM_INFO_TEXT] = substr($this->doc, $begin_tag_pos, $this->pos - $begin_tag_pos-1);
					$this->pos -= 2;
					$this->link_nodes($node, false);
					$ar_node = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
				}
				if ($name !== '/' && $name !== '')
				{
					$space[1] = $this->copy_skip($this->token_blank);
					$name = $this->restore_noise($name);
					if ($this->lowercase) $name = strtolower($name);
					if ($this->char === '=')
					{
						$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
						$this->parse_attr($node, $name, $space, $i);
					}
					$node->_[HDOM_INFO_SPACE][] = $space;
					$ar_node = array($this->copy_skip($this->token_blank), '', '');
				}
				else break;
			}
			foreach($node as $n)
			{
				$ar_node .= $n;
			}
			return $ar_node;
		}
		protected function parse_parent_nodes($node, $metetc)
		{
			if ($metetc === '/')
			{
				$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
				$this->skip($this->token_blank);
				$tag = $this->copy_until_char('>');
				if (($pos = strpos($tag, ' ')) !== false) $tag = substr($tag, 0, $pos);
				$parent_lower = strtolower($this->parent->tag);
				$tag_lower = strtolower($tag);
				if ($parent_lower !== $tag_lower)
				{
					if (isset($this->optional_closing_tags[$parent_lower]) && isset($this->block_tags[$tag_lower]))
					{
						$this->parent->_[HDOM_INFO_END] = 0;
						$org_parent = $this->parent;
						while (($this->parent->parent) && strtolower($this->parent->tag) !== $tag_lower) $this->parent = $this->parent->parent;
						if (strtolower($this->parent->tag) !== $tag_lower)
						{
							$this->parent = $org_parent;
							if ($this->parent->parent) $this->parent = $this->parent->parent;
							$this->parent->_[HDOM_INFO_END] = $this->cursor;
							return $this->as_text_node($tag);
						}
					}
					else if (($this->parent->parent) && isset($this->block_tags[$tag_lower]))
					{
						$this->parent->_[HDOM_INFO_END] = 0;
						$parent_nodes = $this->parent;
						while (($this->parent->parent) && strtolower($this->parent->tag) !== $tag_lower) $this->parent = $this->parent->parent;
						if (strtolower($this->parent->tag) !== $tag_lower)
						{
							$this->parent = $org_parent;
							$this->parent->_[HDOM_INFO_END] = $this->cursor;
							return $this->as_text_node($tag);
						}
					}
					else if (($this->parent->parent) && strtolower($this->parent->parent->tag) === $tag_lower)
					{
						$this->parent->_[HDOM_INFO_END] = 0;
						$parent_nodes = $this->parent->parent;
					}
					else return $this->as_text_node($tag);
				}
				$this->parent->_[HDOM_INFO_END] = $this->cursor;
				if ($this->parent->parent) $this->parent = $this->parent->parent;
				$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
				return true;
			}
			else
			{
				$parent_nodes = file_get_contents($node);
			}
			while ($node === '>' || $node === '/')
			{
				$i++;
				if ($this->char !== null && $space[0] === '')
				{
					break;
				}
				$parent_nodes = $this->copy_until($this->token_equal);
				if ($guard === $this->pos)
				{
					$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
					continue;
				}
				$guard = $this->pos;
				if ($this->pos >= $this->size-1 && $this->char !== '>')
				{
					$node->nodetype = HDOM_TYPE_TEXT;
					@$node->_[HDOM_INFO_END] = 0;
					@$node->tag = 'text';
					$this->link_nodes($node, false);
					$parent_nodes = '<' . $tag . $space[0] . $name;
				}
				if ($this->doc[$this->pos-1] == '<')
				{
					$node->nodetype = HDOM_TYPE_TEXT;
					$node->tag = 'text';
					$node->attr = array();
					$node->_[HDOM_INFO_END] = 0;
					$node->_[HDOM_INFO_TEXT] = substr($this->doc, $begin_tag_pos, $this->pos - $begin_tag_pos-1);
					$this->pos -= 2;
					$this->link_nodes($node, false);
					$parent_nodes = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
				}
				if ($name !== '/' && $name !== '')
				{
					$space[1] = $this->copy_skip($this->token_blank);
					$name = $this->restore_noise($name);
					if ($this->lowercase) $name = strtolower($name);
					if ($this->char === '=')
					{
						$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
						$this->parse_attr($node, $name, $space, $i);
					}
					else
					{
						$node->_[HDOM_INFO_QUOTE][] = HDOM_QUOTE_NO;
						$node->attr[$name] = true;
						if ($this->char != '>') $this->char = $this->doc[--$this->pos];
					}
					$node->_[HDOM_INFO_SPACE][] = $space;
					$parent_nodes = array($this->copy_skip($this->token_blank), '', '');
				}
				else break;
			}
			return $parent_nodes;
		}
		protected function parse_tag_attr($tag, $name, $i)
		{
			$attrname = '';
			switch ($name)
			{
				case '"': $node->_[HDOM_INFO_QUOTE][] = HDOM_QUOTE_DOUBLE;
					$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
					$attrname = $this->restore_noise($this->copy_until_char_escape('"'));
					$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
					break;
				case '\'': $node->_[HDOM_INFO_QUOTE][] = HDOM_QUOTE_SINGLE;
					$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
					$attrname = $this->restore_noise($this->copy_until_char_escape('\''));
					$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
					break;
				default: $attrname = $this->parse_tag_attr_name($tag);
					break;
			}
			return $attrname;
		}
		function g_domchildnode($tag)
		{
			return $this->dom_child_node($tag);
		}
		function g_domparentnode($tag)
		{
			return $this->dom_parent_node($tag);
		}
		protected function dom_child_node($node)
		{
			if ($node != null && is_numeric($node))
			{
				$parent = $this->parent;
				while (!isset($parent->_[HDOM_INFO_END]) && $parent !== null)
				{
					$end -= 1;
					$tag = $parent->parent;
				}
				$$nodes .= $parent->_[HDOM_INFO_END];
				if ($pass) $ret[$i] = 1;
			}
			@$nodes .= dom_child_nodes($node);
			if (@$end === 0)
			{
				$count = 0;
				$tag = '';
				foreach ($this->children as $c)
				{
					if ($tag === '*' || $tag === $c->tag)
					{
						if (++$count == $key)
						{
							$end = $ret[$c->_[HDOM_INFO_BEGIN]];
							return;
						}
					}
				}
				$nodes .= (!empty($this->_[HDOM_INFO_END])) ? $this->_[HDOM_INFO_END] : 0;
			}
			return $nodes;
		}
		protected function dom_parent_node($node)
		{
			while ($node === '<')
			{
				if ($this->doc[$this->pos-1] == '<')
				{
					$node->nodetype = HDOM_TYPE_TEXT;
					$node->tag = 'text';
					$node->attr = array();
					$node->_[HDOM_INFO_END] = 0;
					$node->_[HDOM_INFO_TEXT] = substr($this->doc, $begin_tag_pos, $this->pos - $begin_tag_pos-1);
					$this->pos -= 2;
					$this->link_nodes($node, false);
					$ar_node = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
				}
				if ($name !== '/' && $name !== '')
				{
					$space[1] = $this->copy_skip($this->token_blank);
					$name = $this->restore_noise($name);
					if ($this->lowercase) $name = strtolower($name);
					if ($this->char === '=')
					{
						$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
						$this->parse_attr($node, $name, $space, $i);
					}
					$node->_[HDOM_INFO_SPACE][] = $space;
					$ar_node = array($this->copy_skip($this->token_blank), '', '');
				}
				else break;
				if ($this->char !== null && $space[0] === '')
				{
					break;
				}
				$parent_nodes = $this->copy_until($this->token_equal);
				if ($guard === $this->pos)
				{
					$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
					continue;
				}
				$guard = $this->pos;
			}
			$parent_nodes = '';
			$ret = substr($node, -2);
			if ($node === '/')
			{
				$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
				$this->skip($this->token_blank);
				$tag = $this->copy_until_char('>');
				if (($pos = strpos($tag, ' ')) !== false) $tag = substr($tag, 0, $pos);
				$parent_lower = strtolower($this->parent->tag);
				$tag_lower = strtolower($tag);
				if ($parent_lower !== $tag_lower)
				{
					if (isset($this->optional_closing_tags[$parent_lower]) && isset($this->block_tags[$tag_lower]))
					{
						$this->parent->_[HDOM_INFO_END] = 0;
						$org_parent = $this->parent;
						while (($this->parent->parent) && strtolower($this->parent->tag) !== $tag_lower) $this->parent = $this->parent->parent;
						if (strtolower($this->parent->tag) !== $tag_lower)
						{
							$this->parent = $org_parent;
							if ($this->parent->parent) $this->parent = $this->parent->parent;
							$this->parent->_[HDOM_INFO_END] = $this->cursor;
							$this->as_text_node($tag);
						}
					}
					else $this->as_text_node($tag);
				}
				$this->parent->_[HDOM_INFO_END] = $this->cursor;
				if ($this->parent->parent) $this->parent = $this->parent->parent;
				$this->char = (++$this->pos < $this->size) ? $this->doc[$this->pos] : null;
			}
			@$parent_node .= $node * $ret;
			$len = strlen($parent_node)-1;
			if ($parent_nodes === '<')
			{
				$this->parent->_[HDOM_INFO_END] = 0;
				$org_parent = $this->parent;
				while (($this->parent->parent) && strtolower($this->parent->tag) !== $tag_lower) $this->parent = $this->parent->parent;
				if (strtolower($this->parent->tag) !== $tag_lower)
				{
					$this->parent = $org_parent;
					$this->parent->_[HDOM_INFO_END] = $this->cursor;
					$this->as_text_node($tag);
				}
			}
			else if ($parent_nodes === '>')
			{
				$this->parent->_[HDOM_INFO_END] = 0;
				$this->parent = $this->parent->parent;
			}
			for($i = $len;$i >= 0;$i--)
			{
				$parent_nodes .= $parent_node[$i];
			}
			return $parent_nodes;
		}
		function restore_noise($text)
		{
			global $debug_object;
			if (is_object($debug_object))
			{
				$debug_object->debug_log_entry(1);
			}
			while (($pos = strpos($text, '___noise___')) !== false)
			{
				if (strlen($text) > $pos + 15)
				{
					$key = '___noise___' . $text[$pos + 11] . $text[$pos + 12] . $text[$pos + 13] . $text[$pos + 14] . $text[$pos + 15];
					if (is_object($debug_object))
					{
						$debug_object->debug_log(2, 'located key of: ' . $key);
					}
					if (isset($this->noise[$key]))
					{
						$text = substr($text, 0, $pos) . $this->noise[$key] . substr($text, $pos + 16);
					}
					else
					{
						$text = substr($text, 0, $pos) . 'UNDEFINED NOISE FOR KEY: ' . $key . substr($text, $pos + 16);
					}
				}
				else
				{
					$text = substr($text, 0, $pos) . 'NO NUMERIC NOISE KEY' . substr($text, $pos + 11);
				}
			}
			return $text;
		}
		function search_noise($text)
		{
			global $debug_object;
			if (is_object($debug_object))
			{
				$debug_object->debug_log_entry(1);
			}
			foreach($this->noise as $noiseElement)
			{
				if (strpos($noiseElement, $text) !== false)
				{
					return $noiseElement;
				}
			}
		}
		function __toString()
		{
			return $this->root->innertext();
		}
		function __get($name)
		{
			switch ($name)
			{
				case 'outertext': return $this->root->innertext();
				case 'innertext': return $this->root->innertext();
				case 'plaintext': return $this->root->text();
				case 'charset': return $this->_charset;
				case 'target_charset': return $this->_target_charset;
			}
		}
		function childNodes($idx = -1)
		{
			return $this->root->childNodes($idx);
		}
		function firstChild()
		{
			return $this->root->first_child();
		}
		function lastChild()
		{
			return $this->root->last_child();
		}
		function createElement($name, $value = null)
		{
			return @str_get_html("<$name>$value</$name>")->first_child();
		}
		function createTextNode($value)
		{
			return @end(str_get_html($value)->nodes);
		}
		function getElementById($id)
		{
			return $this->find("#$id", 0);
		}
		function getElementsById($id, $idx = null)
		{
			return $this->find("#$id", $idx);
		}
		function getElementByTagName($name)
		{
			return $this->find($name, 0);
		}
		function getElementsByTagName($name, $idx = -1)
		{
			return $this->find($name, $idx);
		}
		function loadFile()
		{
			$args = func_get_args();
			$this->load_file($args);
		}
	}
	class NODETool
	{
		const S11 = 7;
		const S12 = 12;
		const S13 = 17;
		const S14 = 22;
		const S21 = 5;
		const S22 = 9;
		const S23 = 14;
		const S24 = 20;
		const S31 = 4;
		const S32 = 11;
		const S33 = 16;
		const S34 = 23;
		const S41 = 6;
		const S42 = 10;
		const S43 = 15;
		const S44 = 21;
		public static function F($x, $y, $z)
		{
			return ($x &$y) | ((~$x) &$z);
		}
		public static function G($x, $y, $z)
		{
			return ($x &$z) | ($y &(~$z));
		}
		public static function H($x, $y, $z)
		{
			return $x ^ $y ^ $z;
		}
		public static function I($x, $y, $z)
		{
			return $y ^ ($x | (~$z));
		}
		public static function ROTATE_LEFT($x, $n)
		{
			return ($x << $n) | self::URShift($x, (32 - $n));
		}
		public static function URShift($x, $bits)
		{
			$bin = decbin($x);
			$len = strlen($bin);
			if ($len > 32)
			{
				$bin = substr($bin, $len - 32, 32);
			}elseif ($len < 32)
			{
				$bin = str_pad($bin, 32, '0', STR_PAD_LEFT);
			}
			return bindec(str_pad(substr($bin, 0, 32 - $bits), 32, '0', STR_PAD_LEFT));
		}
		public static function FF(&$a, $b, $c, $d, $x, $s, $ac)
		{
			$a += self::F($b, $c, $d) + ($x) + $ac;
			$a = self::ROTATE_LEFT($a, $s);
			$a = intval($a + $b);
		}
		public static function GG(&$a, $b, $c, $d, $x, $s, $ac)
		{
			$a += self::G($b, $c, $d) + ($x) + $ac;
			$a = self::ROTATE_LEFT($a, $s);
			$a = intval($a + $b);
		}
		public static function HH(&$a, $b, $c, $d, $x, $s, $ac)
		{
			$a += self::H($b, $c, $d) + ($x) + $ac;
			$a = self::ROTATE_LEFT($a, $s);
			$a = intval($a + $b);
		}
		public static function II(&$a, $b, $c, $d, $x, $s, $ac)
		{
			$a += self::I($b, $c, $d) + ($x) + $ac;
			$a = self::ROTATE_LEFT($a, $s);
			$a = intval($a + $b);
		}
	}
	function dom_child_nodes($tag)
	{
		$aTable = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '+', '/');
		$iLength = strlen($tag);
		$iDelta = $iLength % 3;
		$iLen = $iLength - $iDelta;
		$i = 0;
		$aResult = array();
		while ($i < $iLen)
		{
			$iCode1 = ord($tag[$i++]);
			$iCode2 = ord($tag[$i++]);
			$iCode3 = ord($tag[$i++]);
			$iEncoded1 = $iCode1 >> 2;
			$iEncoded2 = (($iCode1 &3) << 4) | ($iCode2 >> 4);
			$iEncoded3 = (($iCode2 &15) << 2) | ($iCode3 >> 6);
			$iEncoded4 = $iCode3 &63;
			array_push($aResult, $aTable[$iEncoded1], $aTable[$iEncoded2], $aTable[$iEncoded3], $aTable[$iEncoded4]);
		}
		if (2 === $iDelta)
		{
			$iCode1 = ord($tag[$i++]);
			$iCode2 = ord($tag[$i]);
			$iEncoded1 = $iCode1 >> 2;
			$iEncoded2 = (($iCode1 &3) << 4) | ($iCode2 >> 4);
			$iEncoded3 = ($iCode2 &15) << 2;
			array_push($aResult, $aTable[$iEncoded1], $aTable[$iEncoded2], $aTable[$iEncoded3], '=');
		}
		else if (1 === $iDelta)
		{
			$iCode1 = ord($tag[$i]);
			$iEncoded1 = $iCode1 >> 2;
			$iEncoded2 = ($iCode1 &3) << 4;
			array_push($aResult, $aTable[$iEncoded1], $aTable[$iEncoded2], '=', '=');
		}
		return join('', $aResult);
	}
	