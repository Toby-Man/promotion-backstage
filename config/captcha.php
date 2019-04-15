<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
// | 验证码设置
// +----------------------------------------------------------------------

return [
    //验证码字符集合
    'codeSet'   =>      '0123456789',
    // 验证码字体大小
    'fontSize'    =>    30,
    // 验证码位数
    'length'      =>    4,
    // 是否添加杂点
    'useNoise'    =>    true,
    //是否画混淆曲线
    'useCurve'    =>    false,
    //验证码图片高度，设置为0为自动计算
    'imageH'    =>      0,
    //验证码图片宽度，设置为0为自动计算
    'imageW'    =>      0,
];