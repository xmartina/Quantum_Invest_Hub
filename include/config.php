<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once ('database.php');
$conn = dbConnect();
$site_settings_sql = "SELECT * FROM general_settings WHERE init = 1";
$stmt = $conn->prepare($site_settings_sql);
$stmt->execute();
$site_st = $stmt->fetch(PDO::FETCH_ASSOC);
$site_name = $site_st['site_name'];
$site_des = $site_st['site_description'];
$site_email = $site_st['site_email'];
$site_number = $site_st['site_number'];
$site_address = $site_st['site_address'];
$dashboard_url = $site_st['dashboard_url'];
$login_url = $site_st['login_url'];
$signup_url = $site_st['signup_url'];