## 以 Laravel 框架为基础搭建 Restful Api

    目的：以后如果要使用的话可以直接拿来用

    Laravel 版本
        Laravel Framework version 5.1.26 (LTS)

    构建一个以 laravel 为基础的 restful api 基础程序，包括:
    1 集成 oauth2
    2 自定义异常处理，抛异常，返回 json
    3 客户端校验通过控制器去校验，而不是通过传统的通过模型
    4 增加中文语音包（校验错误提示， oauth2 校验错误提示）

### 依赖

    // 集成 oauth2 的包
    "lucadegasperi/oauth2-server-laravel": "5.0.*"
    // mongodb 数据库
    "jenssegers/mongodb": "2.2.*"
    // 增加验证码
    "mews/captcha": "^2.1"

