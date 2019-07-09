
yaf
=======

##### [介绍文档](https://github.com/jhao104/proxy_pool/blob/master/doc/introduce.md)

### 下载安装

* 需要环境
```shell
nginx
php7.0
mysql5.6
```

* 下载源码:

```shell
git clone https://github.com/spider-xyz/yaf.git
```

* 配置:

```shell
# vim /usr/local/php5/lib/php.ini

yaf.library = /data/html/Yaf/application/library
yaf.environ = 'develop'
yaf.use_spl_autoload = 1
yaf.use_namespace = 1

    	 
# vim conf/application.ini

[public]
application.directory = APPLICATION_PATH "/application/"

[develop:public]
db.host = '127.0.0.1'
db.username = 'root'
db.password = '123456'
db.port = 3306;

[product:public]
db.host = '127.0.0.1'
db.username = 'root'
db.password = '123456'
db.port = 3306;
```
