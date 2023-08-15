<?php require "../Partials/Primera.php" ?>

<div class="pagetitle">
<h3>Tiempos de Coagulación</h3>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Formularios</li>
            <li class="breadcrumb-item active">Tiempos de Coagulación</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }

        form {
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            color: #343a40;
        }

        label {
            display: block;
            margin-top: 20px;
            color: #6c757d;
        }

        select,
        input {
            width: 100%;
            height: 40px;
            margin-top: 5px;
            padding: 0 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .flex-container {
            display: flex;
            align-items: center;
        }
    </style>

    <form id="coagulationTimeForm">
        

        <div class="form-group">
            <label for="TP">Tiempo de Protrombina (TP):</label>
            <input type="number" id="TP" name="TP" min="10.0" max="500.0" step="0.1">
            <span>(Valor de referencia: 10.0-16.0 Seg)</span>
        </div>

        <div class="form-group">
            <label for="TTP">Tiempo de Tromboplastina Parcial (TTP):</label>
            <input type="number" id="TTP" name="TTP" min="28.0" max="500.0" step="0.1">
            <span>(Valor de referencia: 28.0-40.0 Seg)</span>
        </div>

        <div class="form-group">
            <label for="INR">INR:</label>
            <input type="text" id="INR" name="INR">

            <div class="flex-container">
                <label for="noRefValue">No hay valor de referencia solo colocamos el resultado</label>
                <input type="checkbox" id="noRefValor" name="noRefValue">
            </div>
        </div>

        <input type="submit" value="Enviar">

                <!-- boton de regresar -->
                <div class="container mt-4 d-flex justify-content-center">
                <a href="../Formularios/Dashboard.php" class="btn btn-volver">Volver al menú principal</a>
                </div>
        
                <style>
                    .btn-volver,
                    .btn-examen {
                        display: inline-block;
                        padding: 10px 30px;
                        background-color: #00befd;
                        color: #fff;
                        text-decoration: none;
                        border-radius: 5px;
                        transition: background-color 0.3s;
                        margin-right: 10px;
                        /* Agregar espacio entre botones */
                        margin-top: 20px;
                        margin-bottom: 35px;
                        /* Agregar espacio entre los botones y el contenido siguiente */
                    }
        
                    .btn-volver:hover,
                    .btn-examen:hover {
                        background-color: #0056b3;
                    }
                </style>
    </form>
    <?php require "../Partials/Segunda.php" ?>