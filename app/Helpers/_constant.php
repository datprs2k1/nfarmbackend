<?php
const SERVER_ERROR = 500;
const HTTP_VALIDATE_FAIL = 422;
const HTTP_FORBIDDEN_CODE = 403;
const HTTP_UNAUTHORIZED = 401;
const HTTP_SUCCESS_CODE = 200;
const HTTP_BAD_REQUEST = 400;
const HTTP_NOT_FOUND = 404;
const HTTP_FORBIDDEN = 403;
const HTTP_UNAUTHORIZED_CODE = 401;
const GUARD_ADMIN_API = "admin";
const ROLE_ADMIN = "admin";
const ROLE_CUSTOMER = "customer";

const DEFAULT_PAGINATE = 10;

const MENU = [
    [
        'name' => 'Trang chủ',
        'url' => 'admin.dashboard',
        'icon' => 'dashboard',
    ],
    [
        'name' => 'Danh mục',
        'url' => 'admin.category.index',
        'icon' => 'apps'
    ],
    [
        'name' => 'Bài viết',
        'url' => 'admin.post.index',
        'icon' => 'apps',
    ]
];

const SOURCE_IMAGE_POST = "public/posts";
const PATH_IMAGE_POST = "posts";

const SOURCE_IMAGE_PRODUCT = "public/products";
const PATH_IMAGE_PRODUCT = "products";

const SOURCE_IMAGE_PRICE = "public/prices";
const PATH_IMAGE_PRICE = "prices";
