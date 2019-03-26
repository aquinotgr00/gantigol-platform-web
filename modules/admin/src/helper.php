<?php

/**
 * merge configuration array with custom configuration
 *
 * @param array $defaultConfig
 * @param array $customConfig
 * @return array
 */
if (!function_exists('merge_config')) {
    function merge_config(array $defaultConfig, array $customConfig)
    {
        $merged = [];
        foreach ($defaultConfig as $key => $value) {
            if (isset($customConfig[$key])) {
                $merged[$key] = array_merge($value, $customConfig[$key]);
            } else {
                $merged[$key] = $value;
            }
        }

        return $merged;
    }
}

if (!function_exists('redirect_success')) {
    function redirect_success($routeName, $messageTitle, $messageBody)
    {
        return redirect()->route($routeName)->with('notify',[
            'type'=>'success',
            'title'=>$messageTitle,
            'body'=>$messageBody
        ]);
    }
}