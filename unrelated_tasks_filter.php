<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Dropdown Unrelated Tasks Filter
Description: Adds an opt-in unrelated tasks rule to saved task filters.
Version: 1.2.1
Author: WebPlover
Requires at least: 2.3.2
*/

define('DROPDOWN_UNRELATED_TASKS_MODULE_NAME', 'unrelated_tasks_filter');

hooks()->add_filter('table_tasks_rules', 'unrelated_tasks_filter_add_rule');
function unrelated_tasks_filter_add_rule($rules)
{
    $rules[] = App_table_filter::new('unrelated_tasks_only', 'BooleanRule')
        ->label('Unrelated Tasks')
        ->raw(function ($value) {
            if ((string) $value !== '1') {
                return '1 = 1';
            }

            $tasks = db_prefix() . 'tasks';

            return "({$tasks}.rel_id IS NULL OR {$tasks}.rel_id = 0 OR {$tasks}.rel_type IS NULL OR {$tasks}.rel_type = '')";
        });

    return $rules;
}
