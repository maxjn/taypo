<?php

/**
 * ACF Settings
 *
 * @package Taypo
 */

namespace TAYPO_THEME\Inc;

use TAYPO_THEME\Inc\Traits\Singleton;

class ACF_Settings
{

    use Singleton;

    protected function __construct()
    {

        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {

        /**
         * Actions.
         */
        add_filter('acf/settings/save_json', [$this, 'taypo_acf_save_point']);
        add_filter('acf/settings/load_json', [$this, 'taypo_acf_load_point']);
    }

    /**
     * ACF Save Points
     *
     * @package Taypo
     *
     * @return  string | path
     */
    public function taypo_acf_save_point($path)
    {

        // update path
        $path = TAYPO_DIR_URI . '/acf-json';


        // return
        return $path;
    }

    /**
     * Register the path to load the ACF json files so that they are version controlled.
     * @param $paths The default relative path to the folder where ACF saves the files.
     * @return string The new relative path to the folder where we are saving the files.
     */
    public function taypo_acf_load_point($paths)
    {

        // remove original path (optional)
        unset($paths[0]);


        // append path
        $paths[] = TAYPO_DIR_URI . '/acf-json';


        // return
        return $paths;
    }
}