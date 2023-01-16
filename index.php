<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Всевозможная форма</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container px-4 mt-4">
    <main>
        <div class="col-md-7 mt-20">
            <form class="row g-3 was-validated" method="post" action="/back.php" enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="name" class="form-label">Имя</label>
                    <input type="text" class="form-control is-valid" id="name" name="name" placeholder="Иван" required>
                    <div class="invalid-feedback">
                        Введите имя
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group has-validation">
                    <span class="input-group-text" id="emailForm">@</span>
                    <input type="email" class="form-control is-valid" id="email" name="email" aria-describedby="emailForm emailFeedback" required>
                    <div id="emailFeedback" class="invalid-feedback">
                        Пожалуйста, введите Email.
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="description" class="form-label">Описание</label>
                    <textarea class="form-control" id="description" rows="3" name="description" required placeholder="Обязательный пример текстового поля"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="city" class="form-label">Город</label>
                    <select class="form-select" id="city" name="city" aria-label="select example" required>
                    <option selected disabled value="">Выберите...</option>
                    <option value="Город 1">Город 1</option>
                    <option value="Город 2">Город 2</option>
                    <option value="Город 3">Город 3</option>
                    </select>
                </div>
                <div class="col-12">
                    <div class="form-check">
                    <input class="form-check-input" name="checkbox" type="checkbox" id="checkbox" aria-describedby="invalidCheck3Feedback" required>
                    <label class="form-check-label" for="checkbox">
                        Примите условия и соглашения
                    </label>
                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                        Вы должны принять перед отправкой.
                    </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio" name="radio" required>
                        <label class="form-check-label" for="radio">Нажмите и на это</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="files" class="form-label">Пример ввода файла</label>
                    <input class="form-control mb-3 is-valid" type="file" id="fileInfo" name="file" accept="image/png, image/jpeg" required>
                    <p style="font-size:12px">Поддерживаются форматы jpg/png. Файлы не более 512 кб</p>
                </div>
                <div class="col-12">
                    <input class="btn btn-secondary" type="reset" value="Очистить форму">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Отправить форму</button>
                </div>
            </form>
        </div>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>