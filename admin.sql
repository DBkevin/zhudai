-- --------------------------------------------------------
-- 主机:                           192.168.100.204
-- 服务器版本:                        5.7.26 - MySQL Community Server (GPL)
-- 服务器操作系统:                      Linux
-- HeidiSQL 版本:                  10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 正在导出表  zhudai.admin_menu 的数据：~8 rows (大约)
/*!40000 ALTER TABLE `admin_menu` DISABLE KEYS */;
INSERT INTO `admin_menu` (`id`, `parent_id`, `order`, `title`, `icon`, `uri`, `permission`, `created_at`, `updated_at`) VALUES
	(1, 0, 1, '后台首页', 'fa-bar-chart', '/', NULL, NULL, '2019-10-31 17:16:50'),
	(2, 0, 5, '后台设置', 'fa-tasks', NULL, NULL, NULL, '2019-11-05 10:20:26'),
	(3, 0, 2, '管理员', 'fa-users', 'auth/users', NULL, NULL, '2019-11-05 09:45:58'),
	(4, 2, 6, '角色管理', 'fa-user', 'auth/roles', NULL, NULL, '2019-11-05 10:20:26'),
	(5, 2, 7, '权限管理', 'fa-ban', 'auth/permissions', NULL, NULL, '2019-11-05 10:20:26'),
	(6, 0, 3, '菜单设置', 'fa-bars', 'auth/menu', NULL, NULL, '2019-11-05 09:45:58'),
	(7, 2, 8, '日志管理', 'fa-history', 'auth/logs', NULL, NULL, '2019-11-05 10:20:26'),
	(8, 0, 4, '品类类别', 'fa-certificate', '/categories', NULL, '2019-11-05 10:20:23', '2019-11-05 10:20:26');
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;

-- 正在导出表  zhudai.admin_permissions 的数据：~5 rows (大约)
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
INSERT INTO `admin_permissions` (`id`, `name`, `slug`, `http_method`, `http_path`, `created_at`, `updated_at`) VALUES
	(1, 'All permission', '*', '', '*', NULL, NULL),
	(2, 'Dashboard', 'dashboard', 'GET', '/', NULL, NULL),
	(3, 'Login', 'auth.login', '', '/auth/login\r\n/auth/logout', NULL, NULL),
	(4, 'User setting', 'auth.setting', 'GET,PUT', '/auth/setting', NULL, NULL),
	(5, 'Auth management', 'auth.management', '', '/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs', NULL, NULL);
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;

-- 正在导出表  zhudai.admin_roles 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Administrator', 'administrator', '2019-10-31 16:44:34', '2019-10-31 16:44:34');
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;

-- 正在导出表  zhudai.admin_role_menu 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `admin_role_menu` DISABLE KEYS */;
INSERT INTO `admin_role_menu` (`role_id`, `menu_id`, `created_at`, `updated_at`) VALUES
	(1, 2, NULL, NULL);
/*!40000 ALTER TABLE `admin_role_menu` ENABLE KEYS */;

-- 正在导出表  zhudai.admin_role_permissions 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `admin_role_permissions` DISABLE KEYS */;
INSERT INTO `admin_role_permissions` (`role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
	(1, 1, NULL, NULL);
/*!40000 ALTER TABLE `admin_role_permissions` ENABLE KEYS */;

-- 正在导出表  zhudai.admin_role_users 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `admin_role_users` DISABLE KEYS */;
INSERT INTO `admin_role_users` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 1, NULL, NULL);
/*!40000 ALTER TABLE `admin_role_users` ENABLE KEYS */;

-- 正在导出表  zhudai.admin_users 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` (`id`, `username`, `password`, `name`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '$2y$10$k.7/5V5x2./VZnHqKrWpZeLJsT3h293oX6SplhB5XvdqqKHMNpCye', 'Administrator', NULL, 'YCHQHne5ckfNIu8MGrIeSWTzLXEQQl1NdEH0OoyP52UqiZK9jV4V6vs47WRs', '2019-10-31 16:44:34', '2019-10-31 16:44:34');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;

-- 正在导出表  zhudai.admin_user_permissions 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `admin_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_user_permissions` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
