# wg

个人主页，适合个人信息展示

# 结构

- Application		-- 应用程序主目录
- Public			-- JS，CSS，IMAGE等资源文件
- ThinkPHP		-- ThinkPHP框架源码
- html			-- 网站前台的静态展示页面
- wg.sql			-- 网站运行需要的数据库文件

# 部署

1. 配置好Apache服务器和Mysql数据库。
2. 将`wg.sql`导入`Mysql`数据库
3. 在`Admin`和`Web`模块中的`config.php`中配置数据库连接信息

```php
'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'wg', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PARAMS' =>  array(), // 数据库连接参数
    'DB_PREFIX' => 'wg_', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
```

4. `Apache`配置重写模块，用来支持去掉URL中的`index.php`
5. 访问根目录的服务器地址，自动跳转到前台页面
- 前台地址：http://localhost/wg/Web/Homepage/homepage
- 后台地址：http://localhost/wg/Admin/Homepage/homepage
- 演示地址：https://ff120.github.io/wg/

# 生成静态演示网页
在`Web`模块中的`IndexController`中的`create_html`方法可以生成静态页面，只需要访问地址
[http://localhost/wg/Web/Index/create_html] 即可自动在项目中的html文件夹生成静态网页。
将html目录提交到GitHub的gh-pages分支，即可使用`username.github.io/wg`访问生成的静态页面。
