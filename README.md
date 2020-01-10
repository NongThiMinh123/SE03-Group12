
# 2NM Comestic Website Project
# Thành viên trong nhóm:
## Nguyễn Thị Hà My 
## Nông Thị Minh 
## Ngô Thị Diệu Ngân 
## Lê Quỳnh Nhi 
### Trưởng nhóm: Nguyễn Thị Hà My
### Thư Kí: Ngô Thị Diệu Ngân
# I. Mục tiêu và kết quả đạt được
## 1. Mục tiêu
* Hoàn thành dự án thi cuối kì đạt kết quả tốt nhất.
* Nâng cao khả năng teamwork.
* Nâng cao khả năng lập trình phát triển web.
## 2. Về giao diện
* Màu sắc chủ đạo của website phải hài hòa, dễ nhìn.
* Các quảng cáo và menu có kích cỡ phù hợp, cân đối.
* Cách thức thêm sản phẩm vào giỏ, đặt hàng,.... trên website phải được sắp xếp khoa học và dễ dàng sử dụng.
* Hình ảnh của sản phẩm cần rõ ràng, thông tin cơ bản đầy đủ.
## 3. Về tiện ích 
* Khi khách hàng ghé thăm web sẽ thấy thoải mái hơn nếu tìm sản phẩm nhanh, sản phẩm có đủ thông tin để lựa chọn, thêm bào giỏ hàng và mua hàng nhanh chóng … Như vậy mình thiết kế web phải chú ý đến cách sắp xếp danh mục sản phẩm. 
* Thông tin chi tiết sản phẩm cần đầy đủ rõ ràng để khách hàng dễ dàng lựa chọn, mua sắm.
## 4. Về công cụ và công nghệ sử dụng
### a) Công cụ
* Visual Studio Code
* phpMyAdmin
* MySQLServer

### b) Công nghệ
* Ngôn ngữ lập trình: PHP
* Framework: Laravel (sử dụng mô hình MVC)

# II. Công việc triển khai. 
* Tìm hiểu về HTML và CSS cơ bản. 
* Tìm hiểu về Boostrap cơ bản.
* Tìm hiểu về Laravel. 
* Tiến hành phân chia công việc cụ thể (làm đến đâu push lên đến đó, sai ở đâu sẽ cùng nhau tìm hiểu và giải quyết).
* Tiến hành bàn bạc và hoàn thành báo cáo bằng file Word.
# III. Hướng dẫn chạy chương trình 
## 1. Cài đặt comporser.exe
* Đầu tiên các bạn lên trang chủ  getcomposer.org và download file composer_setup.exe về.
* Sau đó mở file lên và cài đặt theo link sau: 
https://hocwebchuan.com/tutorial/laravel/install_composer.php
* CHÚ Ý: sau khi hoàn tất cài đặt, chạy câu lệnh ***composer require bumbummen99/shoppingcart*** tại **git bash** để có thể thực hiện các tính năng trong giỏ hàng.


## 2.Cài đặt laravel.
>
### a. Cấu hình yêu cầu khi cài đặt laravel.
* PHP >= 5.6.4
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
### b. cài laravel bằng comporser.exe
*  sử dụng command line để di chuyển đến thư mục cần tạo project laravel (của mình cài xammp lên mình sẽ cho trỏ đến htdocs) hoặc các bạn có thể vào thư mục muốn tạo project rồi ấn shift + chuột phải --> open command windows here
* Sau đó gõ lệnh composer create-project laravel/laravel lar-53 --prefer-dist.
Ở đây lar-53 là thư mục chứa laravel các bạn có thể tùy chỉnh thành thư mục của mình.
### c. Khởi chạy Laravel.
* Sau khi đã hoàn thành các bước cài đặt ở trên thì các bạn: tiếp tục mở command line lên mà gõ lệnh artisan serve để khởi động server cho project laravel. hoặc Nếu bạn dùng xammp hay các phầm khác thì có thể dẫn đến thư mục public của laravel. vd: localhost/lar-53/public

