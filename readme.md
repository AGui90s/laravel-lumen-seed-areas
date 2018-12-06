# 全国省市区三级

laravel、lumen 5.0 以上 ，本人使用的是lumen5.6

### 第一步
```
php artisan make:seeder AreasTableSeeder

```

### 第二步

数据往里拷贝到新创建的seeder

### 第三步

```
$this->call('AreasTableSeeder');
```

### 第四步

```
php artisan db:seed
```

大功告成，欢迎大家补充缺少数据


数据来源 摘自：https://blog.csdn.net/sln2432713617/article/details/79412896