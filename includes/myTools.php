<?php

class myTools {

  const TIME_UNIT_SECOND = 1;
  const TIME_UNIT_MINIUTE = 2;
  const TIME_UNIT_HOUR = 3;
  const TIME_UNIT_DAY = 4;
  const TIME_UNIT_MONTH = 5;
  const TIME_UNIT_YEAR = 6;

  public static function getIPAddress() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
      $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
    }
    return $ip;
  }

  /**
   * @params $size in bytes
   */
  public static function getBytesHumanReadable($size) {
    if (intval($size) === 0) {
      return '0';
    }
    $si = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');

    $i = floor(log($size, 1024));
    $unit = $si[$i];

    if (in_array($unit, array('B', 'KB'))) {
      $precision = 1;
    } else {
      $precision = 2;
    }


    $size = round($size / pow(1024, $i), $precision);





    return $size . ' ' . $unit;
  }

  public static function escapeHtmlPlain($text, $addBr = true) {
    $text = htmlspecialchars($text);
    if ($addBr) {
      $text = nl2br($text);
    }
    return $text;
  }

  public static function __n($text, $default = '-') {
    if (strlen($text) == 0) {
      return $default;
    } else {
      return nl2br($text);
    }
  }

  public static function __sHtml($html) {
    return htmlspecialchars_decode($html);
  }

  /**
   * Escape / sanitise user input
   *
   * $data: array or string
   */
  public static function __e($data) {
    if (is_array($data) && count($data) > 0) {
      foreach ($data as $key => $val) {
        $data[$key] = self::__e($val);
      }
      return $data;
    } else {
      require_once sfConfig::get('sf_root_dir') . '/plugins/htmlpurifier/HTMLPurifier.standalone.php';
      $purificateur = new HTMLPurifier();
      return $purificateur->purify($data);
//			return htmlspecialchars(strip_tags($data, ENT_QUOTES));
    }
  }

  /**
   * Escape / stripe tags user input
   *
   * $data: array or string
   */
  public static function __escape($data) {
    if (is_array($data) && count($data) > 0) {
      foreach ($data as $key => $val) {
        $data[$key] = self::__escape($val);
      }
      return $data;
    } else {
      return htmlspecialchars($data, ENT_QUOTES);
    }
  }

  /**
   * Escape / stripe tags user input
   *
   * $data: array or string
   */
  public static function __stripe($data) {
    if (is_array($data) && count($data) > 0) {
      foreach ($data as $key => $val) {
        $data[$key] = self::__stripe($val);
      }
      return $data;
    } else {
      return htmlspecialchars(strip_tags($data), ENT_QUOTES);
    }
  }

  public static function formatSeconds($seconds) {
    $timeLeft = $seconds;
    $text = '';

    if ($timeLeft >= 86400) {
      $days = floor($timeLeft / 86400);
      $text .= myTools::__('%number_of_days%d ', array(
                  '%number_of_days%' => $days
              ));
    }

    $hoursLeft = $timeLeft % 86400;
    $hours = floor($hoursLeft / 3600);


    $text .= myTools::__('%number_of_hours%h', array(
                '%number_of_hours%' => $hours
            ));

    $minutesLeft = $hoursLeft % 3600;
    $minutes = floor($minutesLeft / 60);

    $text .= ( strlen($text) > 0 ? ':' : '') . myTools::__('%number_of_minutes%m', array(
                '%number_of_minutes%' => $minutes
            ));

    return $text;
  }

  public static function getNumber($val, $default = 0) {
    if (is_numeric($val)) {
      return $val;
    } else {
      return $default;
    }
  }

  /**
   * truncate string
   */
  public static function truncate($text, $limit = 25, $end = '...') {
    $text = (html_entity_decode(self::fixEncoding($text)));

    $encoding = mb_detect_encoding($text);
    $len = mb_strlen($text, $encoding);
    $return = '';

    if ($len <= $limit) {
      $return = $text;
    } else {
      $return = mb_substr($text, 0, $limit, $encoding) . $end;
// sfContext::getInstance()->getLogger()->log($len.'-'.$return);
    }
    return htmlspecialchars($return);
  }

  protected static function fixEncoding($in_str) {
    $cur_encoding = mb_detect_encoding($in_str);
    if ($cur_encoding == "UTF-8" && mb_check_encoding($in_str, "UTF-8"))
      return $in_str;
    else
      return utf8_encode($in_str);
  }

  protected static function timestampToLargestUnitReturn($value, $unit) {
    return array(
        'value' => intval($value),
        'unit' => ($unit)
    );
  }

  /**
   * convert timestamp to next largest adjacent unit
   */
  public static function timestampToLargestUnit($timeStamp) {
    $diff = time() - $timeStamp;

    if ($diff < 60) {
      return self::timestampToLargestUnitReturn($diff, self::TIME_UNIT_SECOND);
    } elseif ($diff < 3600) {
      $minutes = intval($diff / 60);
      return self::timestampToLargestUnitReturn($minutes, self::TIME_UNIT_MINIUTE);
    } elseif ($diff < 86400) {
      $hours = intval($diff / 3600);
      return self::timestampToLargestUnitReturn($hours, self::TIME_UNIT_HOUR);
    } elseif ($diff < 2592000) { //roughly a month
      $days = $diff / 86400;
      return self::timestampToLargestUnitReturn($days, self::TIME_UNIT_DAY);
    } elseif ($diff < 31536000) { //roughly a month
      $months = $diff / 2592000;
      return self::timestampToLargestUnitReturn($months, self::TIME_UNIT_MONTH);
    } else {
      $years = $diff / 31536000;
      return self::timestampToLargestUnitReturn($years, self::TIME_UNIT_YEAR);
    }
  }

  public static function formatDateAgo($timeStamp) {
    $time = self::timestampToLargestUnit($timeStamp);

    $str = $time['value'] . ' ';

    switch ($time['unit']) {
      case self::TIME_UNIT_SECOND:

        if ($time['value'] > 1) {
          $str = $str . 'seconds';
        } else {
          $str = $str . 'second';
        }
        break;
      case self::TIME_UNIT_MINIUTE:
        if ($time['value'] > 1) {
          $str = $str . 'minutes';
        } else {
          $str = $str . 'minute';
        }

        break;
      case self::TIME_UNIT_HOUR:

        if ($time['value'] > 1) {
          $str = $str . 'hours';
        } else {
          $str = $str . 'hour';
        }


        break;
      case self::TIME_UNIT_DAY:

        if ($time['value'] > 1) {
          $str = $str . 'days';
        } else {
          $str = $str . 'day';
        }



        break;
      case self::TIME_UNIT_MONTH:
        if ($time['value'] > 1) {
          $str = $str . 'months';
        } else {
          $str = $str . 'month';
        }


        break;
      case self::TIME_UNIT_YEAR:
        if ($time['value'] > 1) {
          $str = $str . 'years';
        } else {
          $str = $str . 'year';
        }
        break;
      default:
        throw new Exception('Unit ' . $time['unit'] . ' not handled.');
    }

    $str = $str . ' ago';

    return $str;
  }

}
