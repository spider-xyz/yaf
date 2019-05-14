
yaf
=======

##### [介绍文档](https://github.com/jhao104/proxy_pool/blob/master/doc/introduce.md)

### 下载安装

* 需要环境
```shell
nginx
php7
mysql5.x
```

* 下载源码:

```shell
git clone https://github.com/spider-xyz/yaf.git
```

* 配置:

```shell
vim conf/application.ini

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
db.password = ''
db.port = 3306;
```
