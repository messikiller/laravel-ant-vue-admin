### Laravel-Ant-Vue-Admin

基于 Laravel + Vue Ant Deisgn 的后台管理系统脚手架，支持 Vue + Vue-router + Vuex

## 安装

```
git clone https://github.com/messikiller/laravel-ant-vue-admin.git
```

配置 laravel 相关：

```
cd laravel-ant-vue-admin
composer install
cp .env.example .env
php artisan key:generate
```

前端资源配置（推荐使用淘宝 npm 软件源）：

```
npm install
```

本地开发环境可以使用：

```
npm run watch

线上环境下使用：

```
npm run prod
```

Enjoy It !

## License

[MIT license](https://opensource.org/licenses/MIT).
