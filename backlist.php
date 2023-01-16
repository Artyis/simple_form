<?php require_once 'connectdb.php';
function debug($arg){
    echo '<pre>';
    var_dump($arg);
    echo '</pre>';
}
if (isset($_GET['page'])){
    $page = $_GET['page'];
    }
else{
    $page = 1;
}
 $notes=3;
 $paginate=($page * $notes) - $notes;
 $stmt=$mysqli->query("SELECT * FROM userforms LIMIT $paginate,$notes");
 while($row=$stmt->fetch_array(MYSQLI_ASSOC)){
 $result[]=$row;
 }
 //debug($result);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список ответов</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="conteiner">
        <div class="row row-cols-1">
            <div>
                <h1>Список ответов</h1>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <th scope="col">id</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Emai</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Город</th>
                        <th scope="col">Условия приняты</th>
                        <th scope="col">Файл</th>
                    </thead>
                    <?php
                    foreach ($result as $args){
                    ?>
                    <tbody>
                        <tr>
                            <td class="col-1"><?php echo $args['id']?></td>
                            <td class="col-1"><?php echo $args['name']?></td>
                            <td class="col-1"><?php echo $args['email']?></td>
                            <td class="col-1"><?php echo $args['description']?></td>
                            <td class="col-1"><?php echo $args['city']?></td>
                            <?php if ($args['checkbox']=='on'){?>
                                <td class="col-1">Да</td>
                            <?php }else{?>
                                <td class="col-1">Нет</td> 
                            <?php
                            }?>
                            <td class="col-1"><a href="/img/<?php echo $args['filepath']?>" download="/img/<?php echo $args['filepath']?>">Скачать файл</a></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
            </div>
                <nav aria-label="Пример навигации по страницам">
                    <?php 
                    $res=$mysqli->query("SELECT COUNT(1) FROM userforms");
                    $query=mysqli_fetch_array($res);
                    $total =$query['COUNT(1)'];
                    $str_pag = ceil($total / $notes);
                    ?>
                    <ul class="pagination justify-content-center">
                        <?php
                        if ($str_pag>0){ 
                            for($i=1;$i<=$str_pag; $i++){
                            ?> 
                            <li class="page-item <?php if($page==$i){echo 'active';}?>"><a class="page-link" href="/backlist.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
                            <?php
                            }
                        }
                        ?>
                    </ul>
                </nav>
        </div>
    </div>
</body>
</html>