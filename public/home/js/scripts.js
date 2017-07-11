
$("#upLoadFile").on('click',function(){

		alter('111');
	});

$('#btna').on('click', function(){

            // 书写 ajax
            $.ajax('./1.php', {
                type: "POST",
                async: false,
                data: {"id":1, "name":"admin"},
                success: function(data)
                {
                    $("#time").fadeOut(200);
                    // console.log(data);
                    
                    // 声明空字符串。
                    var str = '';

                    // 遍历
                    $.each(data, function(i, n){
                        // console.log(n);
                        str += i + ':' + n + '<br/>';
                    });

                    // 写入 did
                    $('#did').html(str);
                },
                beforeSend: function(){
                    // $("#did").html('加载中....');
                    
                    $("#time").show();

                },
                error: function()
                {
                    console.log('数据异常。');
                },
                dataType: 'json',
                timeout:2000
            });

        });

