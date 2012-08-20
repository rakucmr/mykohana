<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-20 10:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:20:50 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2012-08-20 10:20:50 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 D:\WebServer\home\mykohana\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 D:\WebServer\home\mykohana\system\classes\kohana\session.php(54): Kohana_Session->__construct(Array, NULL)
#2 D:\WebServer\home\mykohana\modules\captcha\classes\captcha.php(173): Kohana_Session::instance()
#3 D:\WebServer\home\mykohana\modules\captcha\classes\controller\captcha.php(37): Captcha->update_response_session()
#4 [internal function]: Controller_Captcha->after()
#5 D:\WebServer\home\mykohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Captcha))
#6 D:\WebServer\home\mykohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\WebServer\home\mykohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#9 {main}
2012-08-20 10:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:22:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:22:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL password_rescovery was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-20 10:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL password_rescovery was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\WebServer\home\mykohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\WebServer\home\mykohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#3 {main}
2012-08-20 10:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL password_rescovery was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-20 10:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL password_rescovery was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\WebServer\home\mykohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\WebServer\home\mykohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#3 {main}
2012-08-20 10:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:26:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL password_rescovery was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-20 10:26:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL password_rescovery was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\WebServer\home\mykohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\WebServer\home\mykohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#3 {main}
2012-08-20 10:26:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:26:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:26:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:26:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:26:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:26:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL password_recovery was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-20 10:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL password_recovery was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\WebServer\home\mykohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\WebServer\home\mykohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#3 {main}
2012-08-20 10:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:34:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:34:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:34:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:34:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:34:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:34:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:34:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL password_forgot was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-20 10:34:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL password_forgot was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\WebServer\home\mykohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\WebServer\home\mykohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#3 {main}
2012-08-20 10:34:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:34:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL passwordforgot was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-20 10:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL passwordforgot was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\WebServer\home\mykohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\WebServer\home\mykohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#3 {main}
2012-08-20 10:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:37:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\passwordforgot.php [ 19 ]
2012-08-20 10:37:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\passwordforgot.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-20 10:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:37:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:37:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:38:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:38:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:39:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:39:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:52:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:52:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:55:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:55:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:55:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:55:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 10:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 10:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:02:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:02:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:04:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:04:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:04:05 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2012-08-20 11:04:05 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 D:\WebServer\home\mykohana\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 D:\WebServer\home\mykohana\system\classes\kohana\session.php(54): Kohana_Session->__construct(Array, NULL)
#2 D:\WebServer\home\mykohana\modules\captcha\classes\captcha.php(173): Kohana_Session::instance()
#3 D:\WebServer\home\mykohana\modules\captcha\classes\controller\captcha.php(37): Captcha->update_response_session()
#4 [internal function]: Controller_Captcha->after()
#5 D:\WebServer\home\mykohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Captcha))
#6 D:\WebServer\home\mykohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\WebServer\home\mykohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#9 {main}
2012-08-20 11:04:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:04:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:05:04 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2012-08-20 11:05:04 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 D:\WebServer\home\mykohana\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 D:\WebServer\home\mykohana\system\classes\kohana\session.php(54): Kohana_Session->__construct(Array, NULL)
#2 D:\WebServer\home\mykohana\modules\captcha\classes\captcha.php(173): Kohana_Session::instance()
#3 D:\WebServer\home\mykohana\modules\captcha\classes\controller\captcha.php(37): Captcha->update_response_session()
#4 [internal function]: Controller_Captcha->after()
#5 D:\WebServer\home\mykohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Captcha))
#6 D:\WebServer\home\mykohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\WebServer\home\mykohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#9 {main}
2012-08-20 11:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:10:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:10:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:17:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:17:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:17:26 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2012-08-20 11:17:26 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 D:\WebServer\home\mykohana\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 D:\WebServer\home\mykohana\system\classes\kohana\session.php(54): Kohana_Session->__construct(Array, NULL)
#2 D:\WebServer\home\mykohana\modules\captcha\classes\captcha.php(173): Kohana_Session::instance()
#3 D:\WebServer\home\mykohana\modules\captcha\classes\controller\captcha.php(37): Captcha->update_response_session()
#4 [internal function]: Controller_Captcha->after()
#5 D:\WebServer\home\mykohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Captcha))
#6 D:\WebServer\home\mykohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\WebServer\home\mykohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#9 {main}
2012-08-20 11:17:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:17:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:18:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:18:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:25:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:25:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:26:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:26:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:26:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:26:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}
2012-08-20 11:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-20 11:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\WebServer\home\mykohana\index.php(108): Kohana_Request->execute()
#1 {main}