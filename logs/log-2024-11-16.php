<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-16 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'user_id' of non-object C:\wamp64\www\bsc.localhost\application\core\MY_Controller.php 514
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'user_id' of non-object C:\wamp64\www\bsc.localhost\application\core\MY_Controller.php 517
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'user_id' of non-object C:\wamp64\www\bsc.localhost\application\core\MY_Controller.php 514
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'user_id' of non-object C:\wamp64\www\bsc.localhost\application\core\MY_Controller.php 517
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'user_id' of non-object C:\wamp64\www\bsc.localhost\application\core\MY_Controller.php 514
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'user_id' of non-object C:\wamp64\www\bsc.localhost\application\core\MY_Controller.php 517
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\user_management\index.php 28
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'user_id' of non-object C:\wamp64\www\bsc.localhost\application\core\MY_Controller.php 514
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'user_id' of non-object C:\wamp64\www\bsc.localhost\application\core\MY_Controller.php 517
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\vendor\index.php 26
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/EOD_Inventory/index
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to undefined method EOD_Inventory::loadViews() C:\wamp64\www\bsc.localhost\application\controllers\admin\EOD_Inventory.php 20
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to undefined method EOD_Inventory::loadViews() C:\wamp64\www\bsc.localhost\application\controllers\admin\EOD_Inventory.php 20
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to undefined method EOD_Inventory::loadViews() C:\wamp64\www\bsc.localhost\application\controllers\admin\EOD_Inventory.php 20
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to undefined method EOD_Inventory::loadViews() C:\wamp64\www\bsc.localhost\application\controllers\admin\EOD_Inventory.php 20
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to undefined method EOD_Inventory::loadViews() C:\wamp64\www\bsc.localhost\application\controllers\admin\EOD_Inventory.php 20
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to undefined method EOD_Inventory::loadViews() C:\wamp64\www\bsc.localhost\application\controllers\admin\EOD_Inventory.php 20
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to undefined method EOD_Inventory::loadViews() C:\wamp64\www\bsc.localhost\application\controllers\admin\EOD_Inventory.php 20
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT `ts`.`manager_id`, `us`.`user_name` as `monitoring`
FROM `hrm_task` `ts`
LEFT JOIN `hrm_user` `us` ON `us`.`user_id` = `ts`.`manager_id`
WHERE `ts`.`actual_closing_date` != 'NULL'
AND DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '1'
AND `ts`.`is_deleted` = 'NO'
AND `ts`.`status` NOT IN('COMPLETED', 'CLOSED')
GROUP BY `ts`.`manager_id`
ORDER BY `ts`.`manager_id` DESC
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` NOT IN('COMPLETED', 'CLOSED')
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'CLOSED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'OPENED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'HOLD'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'FOLLOWUP'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Query error: Incorrect DATE value: 'NULL' - Invalid query: SELECT *
FROM `hrm_task`
WHERE `actual_closing_date` != 'NULL'
AND DATEDIFF(actual_closing_date,estimated_closing_date) >= '1'
AND `is_deleted` = 'NO'
AND `status` = 'COMPLETED'
ERROR - 2024-11-16 --> Database error! Error Code [1525] Error: Incorrect DATE value: 'NULL'
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 84
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 128
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 128
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 171
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 171
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 171
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 171
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 171
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 171
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 171
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 171
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 73
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 117
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 117
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 73
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 117
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 117
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 73
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 117
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 117
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 73
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 117
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 117
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 77
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 121
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 121
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 164
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 164
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 164
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 164
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 164
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 164
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 164
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 164
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 73
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 117
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 117
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 160
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 69
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 113
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 113
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 154
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 154
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 154
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 154
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 154
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 154
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'id' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 154
ERROR - 2024-11-16 --> Severity: Notice --> Trying to get property 'name' of non-object C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 154
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 64
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 108
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 108
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 64
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 108
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 108
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 64
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 108
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 108
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 57
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 101
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 101
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 57
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 101
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 101
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 57
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 101
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 101
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 57
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 101
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 101
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 52
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 96
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 96
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 52
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 96
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 96
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 52
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 96
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 96
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 52
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 96
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 96
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 40
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 84
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 84
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 40
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 84
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 84
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 40
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 84
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 84
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Query error: Table 'arcelo6_bsc.requisitions' doesn't exist - Invalid query: SELECT *
FROM `requisitions`
WHERE `status` = 'pending'
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\wamp64\www\bsc.localhost\application\models\Inventory_Notifications_model.php 18
ERROR - 2024-11-16 --> Severity: Notice --> Undefined property: Inventory_Notifications::$Inventory_Notifications_model C:\wamp64\www\bsc.localhost\application\controllers\admin\Inventory_Notifications.php 15
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to a member function getPendingRequisitions() on null C:\wamp64\www\bsc.localhost\application\controllers\admin\Inventory_Notifications.php 15
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to undefined method Inventory_Notifications::loadViews() C:\wamp64\www\bsc.localhost\application\controllers\admin\Inventory_Notifications.php 19
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to undefined method Inventory_Notifications::loadViews() C:\wamp64\www\bsc.localhost\application\controllers\admin\Inventory_Notifications.php 19
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Query error: Table 'arcelo6_bsc.requisitions' doesn't exist - Invalid query: SELECT *
FROM `requisitions`
WHERE `status` = 'pending'
ERROR - 2024-11-16 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\wamp64\www\bsc.localhost\application\models\Inventory_Notifications_model.php 18
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: data C:\wamp64\www\bsc.localhost\application\controllers\admin\Inventory_Notifications.php 19
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 93
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 137
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 137
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 177
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 177
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 93
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 137
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 137
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 177
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 177
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 93
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 137
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 137
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 177
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 177
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 93
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 137
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 137
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 177
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 177
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 97
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 185
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 185
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 97
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 185
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 185
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 97
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 186
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 186
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 66
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 156
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 156
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 66
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 156
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 156
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 66
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 156
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 156
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 46
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 46
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 46
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 46
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 46
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 46
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\user_management\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\user_management\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 46
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\user_management\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\quotation\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\user_management\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\user_management\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\user_management\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\vendor\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\vendor\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\quotation\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 46
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\vendor\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 46
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\vendor\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\quotation\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 46
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 46
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 46
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\user_management\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: city C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 132
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: state C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 149
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: country C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\customer\index.php 165
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\vendor\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\quotation\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\vendor\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\vendor\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\quotation\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\quotation\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\quotation\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 74
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 74
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 114
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 114
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\vendor\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\vendor\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\quotation\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 74
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 74
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 114
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 114
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 74
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 74
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\quotation\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\quotation\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 43
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\vendor\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\vendor\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\vendor\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\vendor\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\quotation\index.php 27
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\quotation\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 71
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 71
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 111
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 111
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\quotation\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\quotation\index.php 28
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 70
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: inventory_items C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\toolkit_management\index.php 112
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 74
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 74
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 26
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 27
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 27
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 27
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\inventory_notifications\index.php 27
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: pageTitle C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 26
ERROR - 2024-11-16 --> Severity: Notice --> Undefined variable: technicians C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\bsc.localhost\application\views\admin\eod_inventory\index.php 70
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a7.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/a4.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: admin/Img/profile.jpg
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 --> 404 Page Not Found: Assets/css
