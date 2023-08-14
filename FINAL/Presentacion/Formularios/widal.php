<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
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
    </style>
</head>
<body>
    <form id="widalForm">
        <h1>WIDAL (Antígenos Febriles)</h1>

        <div class="form-group">
            <label for="STO">Salmonella Typhi O (Somático):</label>
            <select id="STO" name="STO">
                <option value="no-reactive">No reactivo</option>
                <option value="reactive-20">Reactivo 1:20</option>
                <option value="reactive-40">Reactivo 1:40</option>
            </select>
        </div>

        <div class="form-group">
            <label for="STH">Salmonella Typhi H (Flagelar):</label>
            <select id="STH" name="STH">
                <option value="no-reactive">No reactivo</option>
                <option value="reactive-20">Reactivo 1:20</option>
                <option value="reactive-40">Reactivo 1:40</option>
            </select>
        </div>

        <div class="form-group">
            <label for="SpA">Salmonella paratyphi A (Somático):</label>
            <select id="SpA" name="SpA">
                <option value="no-reactive">No reactivo</option>
                <option value="reactive-20">Reactivo 1:20</option>
                <option value="reactive-40">Reactivo 1:40</option>
            </select>
        </div>

        <div class="form-group">
            <label for="SpB">Salmonella paratyphi B (Flagelar):</label>
            <select id="SpB" name="SpB">
                <option value="no-reactive">No reactivo</option>
                <option value="reactive-20">Reactivo 1:20</option>
                <option value="reactive-40">Reactivo 1:40</option>
            </select>
        </div>

        <input type="submit" value="Enviar">

                <!-- boton de regresar -->
                <div class="container mt-4 d-flex justify-content-center">
                    <a href="../Dashboard.php" class="btn btn-volver">Volver al menú principal</a>
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
    <?php require "../../Presentacion/Partials/Segunda.php" ?>