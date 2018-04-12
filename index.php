<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML");
            
            $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
            $g[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");
            
            $vis[0] = new Visualizacao($g[0], $v[2]);  //Jubileu assiste HTML5
            $vis[1] = new Visualizacao($g[0], $v[1]);  //Jubileu assiste PHP
            
            $vis[0]->avaliar();
            $vis[1]->avaliarPorc(85);
            
            print_r($vis);
            
        ?>
        </pre>
    </body>
</html>
