<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
        <title>News</title>
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1>Список всех новостей</h1>
            <p><button type="button" class="btn btn-success" name="create" id="create">Добавить новость</button></p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Название</th>
                                <th>Текст</th>
                                <th>Изображение</th>
                                <th>Действие</th>
                            </tr>
                            <tr>
                                <td>Тестовая запись</td>
                                <td>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</td>
                                <td><img src="http://mirtv.ru/files/broadcast/69/second.jpg" alt="image"></td>
                                <td><button type="button" class="btn btn-warning" name="edit" id="edit">Редактировать</button><button type="button" class="btn btn-danger" name="delete" id="delete">Удалить</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-sm-12">
                    <h2>Добавление новости</h2>
                    <form>
                        <div class="form-group">
                            <label for="title">Название:</label>
                            <input type="title" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="text">Текст:</label>
                            <textarea class="form-control" rows="5" id="text" name="text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Изображение:</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <button type="submit" class="btn btn-default">Добавить</button>
                    </form>
                </div>
            </div>
            
            
            
             <div class="row">
                <div class="col-sm-12">
                    <h2>Редактировать новость</h2>
                    <form>
                        <div class="form-group">
                            <label for="title">Название:</label>
                            <input type="title" class="form-control" id="title" name="title" value="Тестовая запись"/>
                        </div>
                        <div class="form-group">
                            <label for="text">Текст:</label>
                            <textarea class="form-control" rows="5" id="text" name="text">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Загрузить новое изображение:</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <button type="submit" class="btn btn-default">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
