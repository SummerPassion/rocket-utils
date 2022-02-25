<?php
declare (strict_types=1);

/**
 * Author:
 *
 *   ┏┛ ┻━━━━━┛ ┻┓
 *   ┃　　　━　　  ┃
 *   ┃　┳┛　  ┗┳  ┃
 *   ┃　　　-　　  ┃
 *   ┗━┓　　　┏━━━┛
 *     ┃　　　┗━━━━━━━━━┓
 *     ┗━┓ ┓ ┏━━━┳ ┓ ┏━┛
 *       ┗━┻━┛   ┗━┻━┛
 * DateTime: 2022-02-25 16:43:00
 */

namespace rocket;

use think\facade\Config;
use rocket\redis\Redis;

/**
 * 工具类
 * Class Utils
 * @package rocket
 * create_at: 2022-02-25 16:43:49
 * update_at: 2022-02-25 16:43:49
 */
class Utils
{
    /**
     * Redis
     * @return \Redis
     * create_at: 2022-02-25 18:11:20
     * update_at: 2022-02-25 18:11:20
     */
    public static function redis()
    {
        // 配置
        $conf = Config::get('redis');

        return Redis::getInstance($conf, $conf['db_id']);
    }
}
