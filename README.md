<br/>
<p align="center">
  <a href="https://github.com/elyasbassir/Other-Lang">
    <img src="https://farta-aria.ir/wp-content/uploads/2023/09/cropped-Untitled-1.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">همه در یکی</h3>

  <p align="center">
    استفاده از بقیه زبان های برنامه نویسی کنار پی اچ پی
    <br/>
    <br/>
    <a href="https://github.com/elyasbassir/Other-Lang"><strong>Explore the docs »</strong></a>
    <br/>
    <br/>
    <a href="https://github.com/elyasbassir/Other-Lang">View Demo</a>
    .
    <a href="https://github.com/elyasbassir/Other-Lang/issues">Report Bug</a>
    .
    <a href="https://github.com/elyasbassir/Other-Lang/issues">Request Feature</a>
  </p>
</p>

![Contributors](https://img.shields.io/github/contributors/elyasbassir/Other-Lang?color=dark-green) ![Issues](https://img.shields.io/github/issues/elyasbassir/Other-Lang)

## درباره پروژه

سلام :)
این همه صحبت میشه که فلان زبان خوبه فلانی بده اونو کار کن اینو کار نکن اما ما هیچ وقت روی زبان ها تعصب نداریم و میدونیم که همشون عالین من سعی کردم با طراحی و توسعه این پکیج کمک کنم که شما بتونی از بقیه زبان های برنامه نویسی کناره لاراول و پی اچ پی به راحتی استفاده کنین.
البته جای کار خیلی داره امیدوارم که خوشتون بیاد.
)

## خب بیا شروع کنیم

:دوست خوبم اول به چند نکته توجه کن که میگم
1- اگر میخوای از این پکیج روی هاست اشتراکی استفاده کنید همین الان بیخیالش شو مگر اینکه دسترسی های لازمه رو بهت دادن
۲- اگر میخوای از زبان برنامه نویسی خاصی استفاده کنی اول دقت کن که پیش نیاز های اون زبان رو به درستی نصب کرده که توی کار اذیتت نکنه
۳- به امید خدا کار با پکیجو شروع کن :)




### نصب و راه انداری

اجرای دستور زیر داخل پروژه

```sh
composer require elyasbassir/other-lang:dev-main
```



## استفاده

هر جایی توصفحه میخوای از پکیج استفاده کنی این رو فراخونی کن
<br><br>
`
use elyasbassir\OtherLang\language;
`
<br>

<h2>python</h2>

استفاده از کد پایتون توی پروژه

```
$code = new language();

$response_python = $code->python(<<<EOT
////////////کد پایتون رو اینجا بنویسی
print("hello world!")

EOT)->response();

return $response_python;
```
<h3>پاس دادن متغییر</h3>

```
$code = new language();

$data = ["variable1"=>"سلام من یک متغییر هستم که از توی لاراول اومدم :)"];

$response_python = $code->python(<<<EOT

print(laravel['variable1'])

EOT)->send_data($data)->response();

return $response_python;
```

<h3>خروجی</h3>

سلام من یک متغییر هستم که از توی لاراول اومدم :)
