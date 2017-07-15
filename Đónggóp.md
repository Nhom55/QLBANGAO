<img src="http://i.imgur.com/PyjB9l6.png">		  <img src="http://i.imgur.com/PyjB9l6.png">
Dùng lệnh `clone` để lấy respo về máy :		 +Dùng lệnh `clone` để lấy repo về máy: 
 +
 +     $ git clone https://github.com/nhomubuntu/baitoan.git
 +
 +Sau khi thực hiện lệnh này, một directory tên là **nhom55** xuất hiện trên máy của bạn. Vị trí lưu directory này tại nơi bạn thực hiện lệnh.
 +
 +Bên trong thư mục **nhom55** sẽ có:
 +* 1 file **README.md**
 +Có thể coi là file giới thiệu, chúng ta có thể sửa bằng bất kỳ trình soạn thảo nào. 
 +* 1 dir **.git** (bị ẩn) chứa cấu hình Git.
 +Chúng ta có thể thêm các file khác vào thư mục **nhom55** này để đưa lên Github.
 +
 +
 +#### Add, Commit, Push - Đưa file lên Github  
 +#####Lưu ý là những thao tác tiếp theo phải thực hiện trong thư mục **nhom55**
 +Giả sử, bạn tạo một file **** Đónggóp.cmd trong thư mục **nhom55**.
 +Để thực hiện `add` ta dùng lệnh:
 +
 +    $ git add Đónggóp.cmd
 +
 +Nếu có nhiều file và bạn muốn `add` hết tất cả các file đó:
 +
 +    $ git add *
 +
 +Để `commit` ta dùng lệnh:
 +
 +    $ git commit -m "Them file  Đónggóp.cmd"
 +   
 +Để `push` lên Github ta dùng lệnh:
 +
 +    $ git push
 +
 +Bạn sẽ được hỏi username và password khi bạn đăng nhập Github.
 +
 +Lưu ý là password khi mình nhập không hiện lên, bạn cứ gõ bình thường thôi.
 +
 +*Nếu dùng SSH key thì sẽ không phải nhập phần này nữa*
 +
 +
 +
 +
 +
 +######DONE
 +Bạn load lại trang ** Đónggóp.cmd** trên Github, file **.md** mà xuất hiện thì bạn đã thành công.
 +<img src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t35.0-12/20107997_787862281384743_88448498_o.png?oh=92a80a8427d77ee11c7742de5e57c36d&oe=596C61EA">
 +
 +
 +######Nếu bạn đang có một thư mục trong máy (giả sử tên là playground), bạn muốn đẩy nó lên một repo mới
 +
 +Trên github, bạn tạo một repo tên là playground và không chọn tạo file README.md
 +
 +Dùng terminal: 
 + 
 +    $ cd playground
 +
 +    $ git init
 +
 +Câu lệnh sẽ tạo một file .git trong playground (ấn Ctrl+H sẽ thấy). Thư mục này chứa tất cả tập tin cần thiết để thiết lập repo
 +
 +Tiếp theo, bạn tạo file README.md, rồi thực hiện add và commit như mọi khi
 +
 +Sau đó, bạn phải remote để đồng nhất repo local với repo trên github. Câu lệnh như sau: 
 +
 +    $ git remote add origin git-URL
 +
 +Và cuối cùng thì 
 +
 +    $ git push origin master 
 +
 +#### Pull - Lấy file về máy
 +Giả sử, trong cái **nhom55** có sự thay đổi như thêm file hay file nào đó được sửa nhưng ở máy của bạn chưa cập nhật điều này
 +Bạn cần `pull` về máy:
 +
 +    $ git pull
