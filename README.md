# php CodeIgniter框架结合smarty

### 简介
**CodeIgniter中国**[http://codeigniter.org.cn/](http://codeigniter.org.cn/)
- **php CodeIgniter框架**是一个小巧但功能强大的 PHP 框架，作为一个简单而“优雅”的工具包，它可以为 PHP 程序员建立功能完善的 Web 应用程序。如果你是一个使用共享主机，并且为客户所要求的期限而烦恼的开发人员，如果你已经厌倦了那些傻大笨粗的框架现在国内很多大型公司都是使用的CI框架，有兴趣的可以去研究一下

**smarty**[http://www.smarty.net/](http://www.smarty.net/)
- **smarty**是一个使用PHP写出来的模板引擎，是目前业界最著名的PHP模板引擎之一。它分离了逻辑代码和外在的内容，提供了一种易于管理和使用的方法，用来将原本与HTML代码混杂在一起PHP代码逻辑分离。简单的讲，目的就是要使PHP程序员同前端人员分离，使程序员改变程序的逻辑内容不会影响到前端人员的页面设计，前端人员重新修改页面不会影响到程序的程序逻辑，这在多人合作的项目中显的尤为重要。他最大的特点就是把前端和后端的内容分开来！（可能是因为是smarty的老用户，所以还是想用smarty~）

### 配置

> 这里你只需要配置db模块就行了，db的config放在 application/config/db.php 里面

##Code

```
$config['DBHOST']    = '127.0.0.1';
$config['DBUSER'] 	 = 'root';
$config['DBPW'] 	 = '12345';
$config['DBCHARSET'] = 'utf8';
```

> 如果你需要配置smarty，那么请求改 application/config/smarty.php

##Code

```
$config['theme']        	= 'default';
$config['left_delimiter'] 	= "<!--{";
$config['right_delimiter'] 	= "}-->";
$config['template_dir'] 	= APPPATH . 'views';
$config['compile_dir']  	= APPPATH . 'include/smarty/templates_c';
$config['cache_dir']    	= APPPATH . 'include/smarty/cache';
$config['error_reporting'] 	= E_ALL & ~E_NOTICE;
$config['debugging']      	= false;
$config['caching']      	= false;
$config['cache_lifetime']  	= 60*60;
$config['static_dir']  		= "static/";
```