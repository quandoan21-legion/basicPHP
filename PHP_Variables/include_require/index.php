
    <!DOCTYPE HTML>
    <html>

    <!-- //include là câu lệnh truyền dữ liệu từ 1 file được gọi vào file có câu lệnh include gọi đến file đó. File được gọi không nhất thiết phải tôn tại.  -->
    <!-- // khi complide mà file được gọi không tồn tại thì chỉ hệ thống chỉ xuất hiện ra 1 dòng warning và tiếptục chạy tiếp code  -->


    <!-- // require là câu lệnh truyền dữ liệu từ 1 file được gọi vào file có câu lệnh require gọi đến file đó. File được gọi phải tônf tại.  -->
    <!-- // khi complide mà file require không tồn tại thì hệ thống sẽ báo lỗi và dừng  -->

    <!-- // tương tự như include thì include_once có tác dụng tương tự nhưng nếu file đã được include vào trước thì filde đó sẽ không include lại -->


    <!-- // tương tự như require thì require_once có tác dụng tương tự nhưng nếu file đã được require vào trước thì filde đó sẽ không require lại -->

    <!-- // file index cần phải có 2 file header và file body thì mới có thẻ chạy được -->
        <?php require 'header.php';?>
    <!-- // file footer không nhất thiết phải có -->
        <?php include 'body.php';?>

    </html> 