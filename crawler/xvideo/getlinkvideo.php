<<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
    <script src="http://vjs.zencdn.net/c/video.js"></script>
</head>
<body>
<?php
function xVideos($url)
{
        $url = str_replace(' ', '', $url);
        if(!empty($url)):
                curl_setopt($curl = curl_init($url), CURLOPT_RETURNTRANSFER, 1);
                preg_match("/flv_url=(.+)url_bigthumb=([^&]+)/i", curl_exec($curl), $infos);
                curl_close($curl);
                echo "<video id=\"video1\" class=\"video-js vjs-default-skin\" width=\"640\" height=\"480\"
					        data-setup='{\"controls\" : true, \"autoplay\" : true, \"preload\" : \"auto\"}'>
					        <source src='".urldecode($infos[1])."'' type=\"video/x-flv\">
					    </video>";
				echo "<video width=\"320\" height=\"240\" controls>
					  <source src='".urldecode($infos[1])."' type=\"video/flv\">
					Your browser does not support the video tag.
					</video>";
                return "<a href='".urldecode($infos[1])."'><img src='".urldecode($infos[2])."' width='150' height='150' border=0 alt='Download'></a>";
        endif;
}

echo (!empty($_GET['url'])) ? xVideos($_GET['url']) : 'E o link ?';
?>
</body>
</html>
