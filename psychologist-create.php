<?php

include 'Psychologistdb.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<section class="add-psychologist" id="add-psychologist">
    <div class="heading">
        <h1>Add New Psychologist</h1>
        <p>Fill in the details below to add a new psychologist.</p>
    </div>
    <form method="post" enctype="multipart/form-data">

        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="type">Type:</label>
        <input type="text" name="type" required>

        <label for="image">Image:</label>
        <!-- <input type="file" name="image" accept="image/" required> -->
        <input type="file" name="image" accept="image/*" required>


        <button type="submit">Add Psychologist</button>
    </form>
</section>

<style>
    /*ngjyrat primare qe kan me u perdor ne ndertimin e faqes 
#FAF1E4
#CEDEBD 
9EB384
435334
*/
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .add-psychologist {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .heading {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            background-color: #435334;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #859675;
        }
    </style>