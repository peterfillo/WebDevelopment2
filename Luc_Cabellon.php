<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #heads{
            width: auto; 
            height: auto; 
            background-color: white; 
            margin: 10px 10px 10px 10px;
            border-style: solid; 
            border-width: 2px; 
            padding: 10px 10px;
        }
        div{
            background-color: lavender;
            margin: 75px 55px 75px 55px;;
            border-style: solid; 
            border-width: 2px; 
            padding: 10px 10px;
        }
        body{
            background-color: grey;
        }
        h1{
            font-size: 40px;
            color: black;
        }
        h2{
            font-size: 30px;
            color: black;
        }
        .like ul{
            padding: 0;
            margin: 0;
            
        }
        .like li:nth-child(odd) {
            background-color: lightgreen;
        }
        .like li:nth-child(even) {
            background-color: green;
        }
        .like li{
            font-size: 20px;
            padding: 20px 40px 20px 40px;
        }
        .tlist ul{
            padding: 0px;
            margin: 0px;
            
        }
       .tlist li:nth-child(odd) {
            background-color: lightsalmon;
        }
        .tlist li:nth-child(even) {
            background-color: orange;
        }
        .tlist li{
            font-size: 20px;
            padding: 20px 40px 20px 40px;
        }
    </style>

</head>
<body>

    <?php
    echo "<p style='color: #ff8566; font-size: 20px'>Hello World. My full name is Luc T. Cabellon a 3rd year BSIS student of the University of San Carlos.</p>";
    echo "<p style='color: #ff8566; font-size: 20px'>This is my sample Webpage.</p>"
    ?>

    <div id="heads">
    <h1>And     You may call me Luc</h1>
    </div>
    
    <div>
    <h2>My Hobbies</h2>
    <ul class="like">
        <li>Listening to music</li>
        <li>Eating food</li>
        <li>Playing games</li>
        <li>Watching Movies</li>
        <li>Reading Books</li>
    </ul>
    </div>

    <div>
    <h2>Every day to do List</h2>
    <form>
        <input type="text" id="add_task" placeholder="Enter a task...">
        <button type="button" onclick="addListItem()">Add</button>
    </form>
    <ul class="tlist">
        <li>Prepare Lunch</li>
        <li>Study previous lessons</li>
        <li>Water the Plants</li>
        <li>Wash dishes</li>
    </ul>
    </div>
    
    <script>

    
    function addListItem() {
            var li = document.createElement("li");
            var inputValue = document.getElementById("addtask").value;
            var t = document.createTextNode(inputValue);
            li.appendChild(t);
            if (inputValue === '') {
                alert("You must write something!");
            } else {
                document.getElementById("todolist").appendChild(li);
            }
            document.getElementById("addtask").value = "";
    }

</script>



</body>
</html>