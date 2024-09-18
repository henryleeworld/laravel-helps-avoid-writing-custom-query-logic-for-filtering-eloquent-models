# Laravel 11 協助避免為過濾 Eloquent 模型撰寫自訂查詢邏輯

引入 indexzer0 的 eloquent-filtering 套件來擴增協助避免為過濾 Eloquent 模型撰寫自訂查詢邏輯，從 HTTP 請求參數過濾模型的主要使用案例是透過簡單地在模型上定義允許的過濾器並將過濾器從 HTTP 請求傳遞到模型來實現的。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/users` 來進行特定使用者過濾。

----

## 畫面截圖
![](https://i.imgur.com/wwxn5EF.png)
> 不用手動連結查詢條件，而是抽象化流程，進而實現可讀性和可維護性
