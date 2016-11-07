$(document).ready(function () {
    
    $('#create').click(function(){
        $('#show_all').empty();
        $('#edit_news').empty();
        $('#add').append('\n\
                <div class="col-sm-12">\n\
                    <h2>Добавление новости</h2>\n\
                        <form method="post" action="" id="news_add" enctype="multipart/form-data">\n\
                            <div class="form-group">\n\
                                <label for="title">Название:</label>\n\
                                <input type="title" class="form-control" id="title" name="title">\n\
                            </div>\n\
                            <div class="form-group">\n\
                                <label for="text">Текст:</label>\n\
                                <textarea class="form-control" rows="5" id="text" name="text"></textarea>\n\
                            </div>\n\
                            <div class="form-group">\n\
                                <label for="image">Изображение:</label>\n\
                                <input type="file" class="form-control" id="image" name="image">\n\
                            </div>\n\
                            <button type="submit" class="btn btn-default">Добавить</button> \n\
                       </form>\n\
                </div>');
    });
        
    $('#news_add').click(function(e) {
        //отменяем стандартное действие при отправке формы
        e.preventDefault();
        //берем из формы метод передачи данных
        var m_method = $(this).attr('method');
        //получаем адрес скрипта на сервере, куда нужно отправить форму
        var m_action = $(this).attr('action');
        //получаем данные, введенные пользователем в формате input1=value1&input2=value2...,
        //то есть в стандартном формате передачи данных формы
        var m_data = $(this).serialize();
        $.ajax({
            type: m_method,
            url: m_action,
            data: m_data,
            beforeSend: function(){
                $('#result').html('<img src="http://zornet.ru/Ajaxoskrip/Fyrkes/Zret/31/Loader-76.gif"/>');
            },
            success: function (response) {
                $('#add').empty();
                $('#result').append('\n\
            <table id="res" class="table table-striped table-hover">\n\
                <caption>Результат регистрации</caption>\n\
                    <tr>\n\
                        <th>Логин</th>\n\
                        <th>E-Mail</th>\n\
                        <th>Пароль</th>\n\
                    </tr>\n\
            </table>'
                        );
               //$.each(response, function (i, result) {
                    $('#res').append('\n\
                <tr>\n\
                    <td>'+response.login+'</td>\n\
                     <td>'+response.email+'</td>\n\
                    <td>'+response.pass+'</td>\n\
                  </tr>\n\
                     ');
              //  });

            }
//        });
//    });
});