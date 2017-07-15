<p><H1>Tài Liệu Nhà Thiết Kế</H1></p>
<p>Bước 1. Tải mã nguồn từ website WordPress.org
Trước tiên bạn hãy tải phiên bản mới nhất của mã nguồn WordPress tại địa chỉ https://wordpress.org/
</p>
<p><img src="https://scontent.fdad3-2.fna.fbcdn.net/v/t34.0-12/20067843_787720798065558_370997232_n.png?oh=14938eb4dce91a57e8fcfa82f727ddfd&oe=596C7D38 "></p>
<p>Sau đó bạn giải nén ra sẽ có được một thư mục mang tên “wordpress“. Có thể thư mục wordpress này sẽ được lồng trong một thư mục khác tên là wordpress-x (x ở đây là số phiên bản), nhưng nói chung bạn cứ vào sẽ có được một thư mục tên wordpress như hình dưới.</p>
<p>Bước 2. Copy mã nguồn WordPress vào Localhost:</p>
<p>Bây giờ, hãy copy toàn bộ file và thư mục này vào thư mục website của bạn trong localhost(Ví dụ E:\xampp1\htdocs\CuaHangBanGao )  , không copy cả thư mục wordpress vì chúng ta cần cài WordPress vào tên miền  http://localhost:8080/CuaHangBanGao/ nếu bạn copy cả thư mục wordpress vào thì website của bạn sẽ có đường dẫn là  </p>
<p><img src="https://scontent.fdad3-2.fna.fbcdn.net/v/t34.0-12/20121065_787721991398772_1869084018_n.png?oh=438e474347fbf49cca7a1445047346d3&oe=596CA11F"></p>
<p>Bước 3. Chạy website để cài đặt</p>
<p>Sau khi copy xong, hãy mở bảng điều khiển của XAMPP lên và khởi động Apache và MySQL. Sau đó truy cập vào website với đường dẫn  http://localhost:8080/CuaHangBanGao/.
Lúc này, nó sẽ hiện ra bảng chọn ngôn ngữ cần cài đặt cho WordPress, hãy chọn là Tiếng Việt và ấn Tiếp Tục.
</p>
<p><img src="https://scontent.fdad3-2.fna.fbcdn.net/v/t34.0-12/20068302_787723491398622_742241607_n.png?oh=281416b1b485ac202e096a7ffb947ff6&oe=596C5873"></p>
<p>Ở bước tiếp theo, nó sẽ nhắc nhở cho bạn là chưa tiến hành đổi file wp-config-sample.php thành wp-config.php và khai báo thông tin database vào đó. Hãy ấn  Thực hiện ngay để nó tự làm việc đó cho bạn.</p>
<p><img src="https://scontent.fdad3-2.fna.fbcdn.net/v/t34.0-12/20121016_787724008065237_333463038_n.png?oh=130a10594313cfef26833b38ac6260c7&oe=596C59B6"></p>
<p>Và bây giờ là nhập thông tin database..</p>
<p><img src="https://scontent.fdad3-2.fna.fbcdn.net/v/t34.0-12/20134509_787724904731814_2065028165_n.png?oh=dbdc5231d6ff331c396ee458f33c9be1&oe=596C9012"></p>
<p>Hãy luôn nhớ rằng trên localhost, Tên đăng nhập của database luôn là root, mật khẩu để trống (vẫn có cách thiết lập nhưng không cần thiết) và địa chỉ máy chủ cơ sở dữ liệu luôn là localhost.</p>
<p>Tiền tố bảng dữ liệu nghĩa là tiền tố của database chứa dữ liệu WordPress, mặc định nó sẽ là wp_, chúng ta có thể đổi nó thành bất cứ cái gì nhưng phải bắt buộc có _ đằng sau.</p>
<p>Khi nhập xong thông tin database, hãy ấn nút Gửi để làm bước kế tiếp. Nếu bước kế tiếp nó hiện ra như hình dưới thì nghĩa là bạn đã nhập thông tin database chính xác, hãy ấn nút Thực thi ngay để bắt đầu cài đặt.</p>
<p><img src "https://scontent.fdad3-2.fna.fbcdn.net/v/t34.0-12/20120900_787728068064831_1497355972_n.png?oh=2154ae15978a2aa70a650a63bfcc6d0c&oe=596C42A8"></p>
<p>Ở bước cài đặt này, các bạn sẽ cần phải thiết lập các thông tin quan trọng cho website như Tên của website, tên tài khoản admin cùng mật khẩu,…Nhập xong hãy ấn nút Install WordPress.</p>
<p> <img src ="https://scontent.fdad3-2.fna.fbcdn.net/v/t34.0-12/20121100_787726534731651_851084774_n.png?oh=aa612ac31462a8eef658cc506d95822f&oe=596C18F2"></p>
<p>Ở bước cài đặt này, các bạn sẽ cần phải thiết lập các thông tin quan trọng cho website như Tên của website, tên tài khoản admin cùng mật khẩu,…Nhập xong hãy ấn nút Install WordPress.</p>
<p> <img src="https://scontent.fdad3-2.fna.fbcdn.net/v/t34.0-12/20134697_787729284731376_33122939_n.png?oh=a3231f6fa4a21e1ad2ee062ec878b48c&oe=596C21B9"></p>
<p>Và nếu nó hiện chữ Thành công! như thế này là bạn đã cài đặt thành công, click vào nút đăng nhập để đăng nhập vào bảng quản trị WordPress.</p>
<p><img src ="https://scontent.fdad3-2.fna.fbcdn.net/v/t34.0-12/20067624_787730734731231_1704392644_n.png?oh=412ef6efe6290e9b78edf9e2e8b0672d&oe=596C8CCA"></p>
<p>Tiếp theo nhập tên đăng nhập , mật khẩu :</p>
<p><img src ="https://scontent.fdad3-2.fna.fbcdn.net/v/t34.0-12/20120819_787731031397868_930804096_n.png?oh=4b1654eb0f985b43b54a7cbc8f7a0aaa&oe=596C5EA6"></p>
