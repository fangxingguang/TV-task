<?php
// 应用公共文件

//解析验证规则
function rulesToArr($rules){
    foreach ($rules as $key => $rule) {
        if (is_string($rule)) {
            $ruleArr = [];
            $rule = explode('|', $rule);
            foreach($rule as $item){
                if (strpos($item, ':')) {
                    list($subType, $subRule) = explode(':', $item, 2);
                    $ruleArr[$subType] = $subRule;
                }else{
                    $ruleArr[] = $item;
                }
            }
            $rule = $ruleArr;
        }
        $rules[$key] = $rule;
    }
    return $rules;
}
