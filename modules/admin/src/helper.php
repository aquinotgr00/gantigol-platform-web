<?php

if (!function_exists('merge_config')) {
    /**
    * merge configuration array with custom configuration
    *
    * @param array $defaultConfig
    * @param array $customConfig
    * @return array
    */
    function merge_config(array $defaultConfig, array $customConfig): array
    {
        $merged = [];
        foreach ($defaultConfig as $key => $value) {
            $merged[$key] = $value;
            if (isset($customConfig[$key])) {
                $merged[$key] = array_merge($value, $customConfig[$key]);
            }
        }

        return $merged;
    }
}

if (!function_exists('redirect_success')) {
    /**
    * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
    */
    function redirect_success(string $routeName, string $messageTitle, string $messageBody)
    {
        return redirect()->route($routeName)->with('notify', [
            'type'=>'success',
            'title'=>$messageTitle,
            'body'=>$messageBody
        ]);
    }
}
