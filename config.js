
    
    $(document).ready(function () {

        $("#load-more").on('click', function (event) {
            event.preventDefault();

            var params = {};
            params.current = $(".album-list").children('.col-md-4').length;

            params.limit = 3;

            console.log(params);

            $.ajax({
                url:"http://localhost/appAjax/ajax_sql/ajax.php",
                data: params,
                type:"POST",
                dataType:"json",
                // mặc định là bất đồng bộ
                async: true,
                // cache mặc định là true lưu cache vào trình duyệt
                cache : false,
                beforeSend:function () {
                    alert("Trước khi gửi request bằng ajax");
                },
                success: function (data) {
                    alert("ajax trả về thành công");
                    console.log(data);
                    $(".album-list").append(data.html);
                },
                error: function (xhr) {
                    alert("Lỗi ajax");
                },
                complete: function (xhr, status) {
                    alert("ajax hoàn tất");
                }
            });

        });
    });
