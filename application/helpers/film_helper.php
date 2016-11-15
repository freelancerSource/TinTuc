<?php

// admin url
if (!function_exists('getLinkPhim')) {

    function getLinkPhim($filmName, $filmID) {
        $CI = & get_instance();
        return base_url() . 'phim/' . replace(strtolower(convert_accented_characters(vn_str_filter($filmName)))) . '-' . $filmID . '/';
    }

}
if (!function_exists('replace')) {

    function replace($string) {
        $string = preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), htmlspecialchars_decode($string));
        return $string;
    }

}

if (!function_exists('filmLang')) {

    function filmLang($id) {
        if ($id == 1) {
            $type = 'Phụ đề Việt';
        } elseif ($id == 2) {
            $type = 'Thuyết minh';
        } elseif ($id == 3) {
            $type = 'Lồng tiếng';
        } else
            $type = 'Đang cập nhật';
        return $type;
    }

}

if (!function_exists('get_words')) {

    function get_words($str, $num) {
        $limit = $num - 1;
        $str_tmp = '';
        $arrstr = explode(" ", $str);
        if (count($arrstr) <= $num)
            return $str;

        if (!empty($arrstr)) {
            for ($j = 0; $j < count($arrstr); $j++) {
                $str_tmp .= " " . $arrstr[$j];
                if ($j == $limit)
                    break;
            }
        }
        return $str_tmp . '';
    }

}

if (!function_exists('thumbimg')) {

    function thumbimg($url) {
        if ($url == '')
            $url = "/public/asset/img/no_img.gif";
        if (strpos($url, '/film/') !== false)
            $u = str_replace('/film/', '/film/thumb/', $url);
        elseif (strpos($url, '/info/') !== false)
            $u = str_replace('/info/', '/info/thumb/', $url);
        else
            $u = $url;
        return ($u);
    }

}

if (!function_exists('getLinkTag')) {

    function getLinkTag($tag_name_kd) {
        return base_url() . 'tag/' . $tag_name_kd;
    }

}

if (!function_exists('securityFromInput')) {

    function securityFromInput($str) {
        $CI = & get_instance();
        return strtolower(convert_accented_characters(vn_str_filter($CI->security->xss_clean(trim($str)))));
    }

}

if (!function_exists('filmQuality')) {

    function filmQuality($fQuality) {
        $result = '';
        if ($fQuality == '')
            $result = 'SD';
        else if (strtolower(convert_accented_characters($fQuality)) == 'hd')
            $result = 'HD 720';
        else
            $result = 'Đang cập nhật';
        return $result;
    }

}

if (!function_exists('rating_img')) {

    function rating_img($rate, $rate_tt) {
        global $r_s_img;
        if ($rate_tt == '0')
            $rating = 0;
        else
            $rating = @($rate / $rate_tt);
        if ($rating <= 0) {
            $star1 = "none";
            $star2 = "none";
            $star3 = "none";
            $star4 = "none";
            $star5 = "none";
        }
        if ($rating >= 0.5) {
            $star1 = "half";
            $star2 = "none";
            $star3 = "none";
            $star4 = "none";
            $star5 = "none";
        }
        if ($rating >= 1) {
            $star1 = "full";
            $star2 = "none";
            $star3 = "none";
            $star4 = "none";
            $star5 = "none";
        }
        if ($rating >= 1.5) {
            $star1 = "full";
            $star2 = "half";
            $star3 = "none";
            $star4 = "none";
            $star5 = "none";
        }
        if ($rating >= 2) {
            $star1 = "full";
            $star2 = "full";
            $star3 = "none";
            $star4 = "none";
            $star5 = "none";
        }
        if ($rating >= 2.5) {
            $star1 = "full";
            $star2 = "full";
            $star3 = "half";
            $star4 = "none";
            $star5 = "none";
        }

        if ($rating >= 3) {
            $star1 = "full";
            $star2 = "full";
            $star3 = "full";
            $star4 = "none";
            $star5 = "none";
        }

        if ($rating >= 3.5) {
            $star1 = "full";
            $star2 = "full";
            $star3 = "full";
            $star4 = "half";
            $star5 = "none";
        }

        if ($rating >= 4) {
            $star1 = "full";
            $star2 = "full";
            $star3 = "full";
            $star4 = "full";
            $star5 = "none";
        }

        if ($rating >= 4.5) {
            $star1 = "full";
            $star2 = "full";
            $star3 = "full";
            $star4 = "full";
            $star5 = "half";
        }

        if ($rating >= 5) {
            $star1 = "full";
            $star2 = "full";
            $star3 = "full";
            $star4 = "full";
            $star5 = "full";
        }

        if ($type == 1)
            $r_s_img = ' <ul id="rating_container_video">'
                    . '<li><a href="javascript:void(0);" onclick="return rating(' . $film_id . ',1);" title="1 Star" id="star_video_1_' . $film_id . '" class="' . $star1 . '">&nbsp;</a></li>'
                    . '<li><a href="javascript:void(0);" onclick="return rating(' . $film_id . ',2);" title="2 Stars" id="star_video_2_' . $film_id . '" class="' . $star2 . '">&nbsp;</a></li>'
                    . '<li><a href="javascript:void(0);" onclick="return rating(' . $film_id . ',3);" title="3 Stars" id="star_video_3_' . $film_id . '" class="' . $star3 . '">&nbsp;</a></li>'
                    . '<li><a href="javascript:void(0);" onclick="return rating(' . $film_id . ',4);" title="4 Stars" id="star_video_4_' . $film_id . '" class="' . $star4 . '">&nbsp;</a></li>'
                    . '<li><a href="javascript:void(0);" onclick="return rating(' . $film_id . ',5);" title="5 Stars" id="star_video_5_' . $film_id . '" class="' . $star5 . '">&nbsp;</a></li>'
                    . '</ul>';
        elseif ($type == 2)
            $r_s_img = ' <ul id="rating_container_video">'
                    . '<li><a href="javascript:void(0);"  class="' . $star1 . '">&nbsp;</a></li>'
                    . '<li><a href="javascript:void(0);"  class="' . $star2 . '">&nbsp;</a></li>'
                    . '<li><a href="javascript:void(0);"  class="' . $star3 . '">&nbsp;</a></li>'
                    . '<li><a href="javascript:void(0);"  class="' . $star4 . '">&nbsp;</a></li>'
                    . '<li><a href="javascript:void(0);"   class="' . $star5 . '">&nbsp;</a></li>'
                    . '</ul>';
        $r_s_img = "<span class=" . $star1 . "></span>"
                . "<span class=" . $star2 . "></span>"
                . "<span class=" . $star3 . "></span>"
                . "<span class=" . $star4 . "></span>"
                . "<span class=" . $star5 . "></span>";
    }

}

if (!function_exists('get_link_total')) {

    function get_link_total($url = '', $id = 0, $type = 0) {
        if($url==''||  strlen($url)<7)$link=  base_url ().'public/film/video/black_screen.mp4';
        $link = $url;
        if (preg_match('#http:\/\/clip.vn\/watch\/([^/,]+),([^/]+)#', $url, $id_sr)) {
            $id = $id_sr[2];
            $url = 'http://clip.vn/embed/' . $id;
        } elseif (preg_match('#clip.vn#', $url, $id_sr)) {
            $clipvn = str_replace('http://clip.vn/w/', 'http://clip.vn/embed/', $url);
            $url = $clipvn;
        } elseif (preg_match("#video.google.com/(.*?)#", $url, $id_sr)) {
            $url = str_replace('http://video.google.com/videoplay', 'http://video.google.com/googleplayer.swf', $url);
        } elseif (preg_match("#http://www.truongxua.vn/video/video_detail/(.*?)#", $url, $id_sr)) {
            $data = get_by_curl($url);
            $file1 = explode("'url':'", $data);
            $file2 = explode("','", $file1[1]);
            $url = $file2[0];
        } elseif (preg_match('#nhaccuatui.com#', $url, $id_sr)) {
            $urlend = get_URL($url);
            //xac dinh url de lay id
            $data = get_by_curl($urlend);
            $urllayid = preg_match('/\[FLASH\](.*?)\[\/FLASH\]/', $data, $arr);
            $urllayid = $arr[1];
            // bat dau lay link xml
            $urlxml = get_URL($urllayid);
            $urlxml = preg_match('/file\=(.*?)&/', $urlxml, $brr);
            $urlxml = $brr[1];
            ////////////////////////////////get lay link mp4, flv, img
            $bdata = get_by_curl($urlxml);
            $linkfile = preg_match('/http([^>]*)\.mp4/U', $bdata, $crr);
            $linkfile = $crr[0];
            $url = $linkfile;
        } elseif (preg_match('#tv.zing.vn#', $url, $id_sr)) {
            $data = get_by_curl($url);
            $file1 = explode('<source src="', $data);
            $file2 = explode('"', $file1[1]);
            $url = $file2[0];
        } elseif (preg_match('#dailymotion.com#', $url, $id_sr)) {
            $embed = str_replace('http://www.dailymotion.com', 'http://www.dailymotion.com/embed', $url);
            $url = $embed;
        } else if (preg_match('#http://bang.vn/Du_Lieu/View/Video/(.*?)#s', $url, $id_sr)) {
            $id = cut_str('Video/', $url, 1);
            $link2 = 'http://xemphimon.com/server-bang/' . $id . '.mp4';
            $url = $link2;
        } else if (preg_match("#picasaweb.google.com/lh/photo/([^/]+)#", $url, $id_sr)) {
            $id = str_replace('?feat=directlink', '', cut_str('photo/', $url, 1));
            $id = str_replace('?feat=directlinks', '', $id);
            $mobilemp4 = "http://phim1v.com/server-picasa-mobile/" . $id . ".mp4";
            $url = $mobilemp4;
        }
        return $url;
    }

}

if (!function_exists('thumbimg')) {
    
}

if (!function_exists('thumbimg')) {
    
}

if (!function_exists('thumbimg')) {
    
}

if (!function_exists('thumbimg')) {
    
}

if (!function_exists('thumbimg')) {
    
}

if (!function_exists('thumbimg')) {
    
}
?>