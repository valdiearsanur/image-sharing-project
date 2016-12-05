# Image Uploader & Sharing
#### Based On Book "CodeIgniter Web Application Blueprints"

> There are quite a few image-sharing websites around at the moment. They all share roughly the same structure: the user uploads an image and that image can be shared, allowing others to view that image.

The project in this repo contain a Image uploader & sharing project in CodeIgniter that can be used by anyone.

#### this project using
- codeigniter 3.1.2
- bower

#### how to clone this repo?
```sh
$ git clone https://github.com/valdiearsanur/image-sharing-project.git
```

#### how to install?
1. let's create database first
    ```sql
    CREATE DATABASE `codeigniter_imagesdb`;
    USE `codeigniter_imagesdb`;
    DROP TABLE IF EXISTS `images`;
    CREATE TABLE `images` (
        `img_id` int(11) NOT NULL AUTO_INCREMENT,
        `img_url_code` varchar(10) NOT NULL,
        `img_url_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
        `img_image_name` varchar(255) NOT NULL,
        `img_dir_name` varchar(8) NOT NULL,
        PRIMARY KEY (`img_id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
    ```

2. ensure your db setting is right. check on application/config/database.php

3. change upload directory in application/controller/Create.php
    ```php
    $upload_dir = '[root project dir]/uploads/';
    ```

4. change code below in application/config/config.php :
    ```php
    $config['base_url'] = 'http://valdie.ci-book.dev/ch4';
    ```
    to :
    ```php
    $config['base_url'] = '[your root url]';
    ```