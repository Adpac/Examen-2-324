<html>
<head>
    <title>Formulario dinámico</title>
</head>
<body>
    <?php
    # La lista de nombres; por defecto vacía
    $nombres = [];
    $carnets=[];
    $numregs=[];
    $agregardocs=[];
    # Si hay nombres enviados por el formulario; entonces
    # la lista es el formulario.
    # Cada que lo envíen, se agrega un elemento a la lista
    if (isset($_POST["nombres"])) {
        if(count($_POST["nombres"])<=3){
            $nombres = $_POST["nombres"];
            $carnets=$_POST["carnets"];
            $numregs=$_POST["numregs"];
            $agregardocs=$_POST["agregardocs"];
        }

    }
    # Detectar cuál botón fue presionado
    # Más info: https://parzibyte.me/blog/2019/07/23/php-formulario-dos-botones/
    # En caso de que haya sido el de guardar, no agregamos más campos
    if (isset($_POST["guardar"])) {
        # Quieren guardar; no quieren agregar campos
        echo "OK se guarda lo siguiente:<br>";
        print_r($nombres);
        print_r($carnets);
        print_r($numregs);
        exit;
    }
    if(isset($_POST["eliminar"])){


            $n=count($nombres)-1;
            if($n>1){
                        unset($nombres[$n]);
                        unset($carnets[$n]);
                        unset($numregs[$n]);
                        unset($agregardocs[$n]);
            }

    }
    ?>
    <form method="post" action="inputsdim.php">
        <table>
            <thead>
                <td>Nombre</td>
                <td>Carnet</td>
                <td>Num. reg. univ.</td>
                <td>Agregardoc</td>
            </thead>
            <tbody>

            <tr>
            <!--Fuera de la lista tenemos siempre este campo, es el primero-->

            </tr>
            <!--Comienza el ciclo que dibuja los campos dinámicos-->
            <?php for ($i=0; $i<count($nombres); $i++ ) { ?>
                <tr>
                    <td>
                        <input value="<?php echo $nombres[$i] ?>" type="text" name="nombres[]">
                    </td>
                    <td>
                          <input value="<?php echo $carnets[$i] ?>" type="text" name="carnets[]">
                    </td>
                    <td>
                        <input value="<?php echo $numregs[$i] ?>" type="text" name="numregs[]">
                    </td>
                    <td>
                        <input value="<?php echo $agregardocs[$i] ?>" type="file" name="Agregardocs[]">
                    </td>
                </tr>
                
        
            <?php } ?>
            </tbody>
            <!--Termina el ciclo que dibuja los campos dinámicos-->
            <input autocomplete="off" autofocus value="" type="text" name="nombres[]">
        </table>
        <button name="agregar" type="submit">Agregar campo</button>
        <button name="eliminar" type="submit">eliminar ultima fila</button>
        <button name="guardar" type="submit">Guardar lista</button>
    </form>
</body>
</html>